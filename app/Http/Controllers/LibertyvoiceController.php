<?php

namespace App\Http\Controllers;

use Log;
use App\User;
use App\Userdata;
use App\Payment;
use App\Number;
use Illuminate\Http\Request;

class LibertyvoiceController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function cabinet(Request $rq){
        $udata = Userdata::where("user_id",$rq->user()->id)->get();
        $upayments = Payment::where("user_id",$rq->user()->id)->get();
        $unumbers = Number::where("user_id",$rq->user()->id)->get();
        return view('cabinet',["userdata"=>$udata,"payments"=>$upayments,"numbers"=>$unumbers]);
    }
    public function admin(Request $rq){
        $this->authorize('admin');
        $users = User::where("role","user")->get();
        $res = [];
        foreach ($users->toArray() as $user) {
            $user["payments"]=Payment::where("user_id",$user["id"])->get();
            $user["numbers"]=Number::where("user_id",$user["id"])->get();
            $user["data"]=Userdata::where("user_id",$user["id"])->get();
            $res[]=$user;
        }
        return view('admin',["users"=>json_decode(json_encode($res))]);
    }
    public function addpayment(Request $rq){
        $user = User::find($rq->input("user_id",0));
        $data = $rq->all();
        $data["message"] = $data["type"];
        $user->balance += (($data["type"]=="credit")?1:-1)*floatval($data["amount"]);
        $user->save();
        Payment::create($data);
        return redirect()->route('admin');
    }
    public function addnumber(Request $rq){
        $user = User::find($rq->input("user_id",0));
        $data = $rq->all();
        $data["until"] = date("Y-m-d");
        Number::create($data);
        return redirect()->route('admin');
    }
    public function removenumber($id){
        Number::find($id)->delete();
        return redirect()->route('admin');
    }
    public function extendnumber($id,Request $rq){
        $number = Number::find($id);
        $user = $rq->user();
        if($user->id == $number->user_id && $user->currency == $number->currency && $user->balance>=$number->amount){
            $user->balance -= $number->amount;
            Payment::create([
                "message"=>"Monthly payment for ".$number->number,
                "type" => "debit",
                "amount" => $number->amount,
                "currency" => $number->currency,
                "user_id" => $user->id
            ]);
            $date = date_create($number->until);
            date_add($date, date_interval_create_from_date_string('30 days'));
            $number->until = $date;
            $number->save();
            $user->save();
        }
        return redirect()->route('cabinet');
    }
}
