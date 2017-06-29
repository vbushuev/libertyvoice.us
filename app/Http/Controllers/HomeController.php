<?php

namespace App\Http\Controllers;

use Log;
use App\User;
use App\Userdata;
use App\Payment;
use App\Number;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }
    public function __call($fn,$args){
        if(!method_exists($this, $fn)) {
            return view($fn);
        }
        return call_user_func_array(array($this, $fn),$args);

    }
    
}
