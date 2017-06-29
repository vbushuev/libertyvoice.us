@extends('layouts.app')

@section('content')
<section class="table cabinet">
    <div class="wrapper">
        <h2>Profile</h2>
        <table class="invoice">
            <tbody>
                <tr><th>Name</th><td>{{Auth::user()->name}}</td></tr>
                <tr><th>Last Name</th><td>{{Auth::user()->lastname}}</td></tr>
                <tr><th>Email</th><td>{{Auth::user()->email}}</td></tr>
                <tr><th>Balance</th><td>{{ Auth::user()->balance}} {{ Auth::user()->currency}}</td></td></tr>
            </tbody>
        </table>
        <h2>Numbers</h2>
        <table class="invoice">
            <thead>
                <tr><th>Number</th><th>Registered</th><th>Amount per month</th><th>Avaliable</th><th></th></tr>
            </thead>
            <tbody>
                @foreach($numbers as $number)
                    <tr>
                        <td>{{$number->number}}</td>
                        <td>{{$number->created_at}}</td>
                        <td>{{$number->amount}} {{$number->currency}}</td>
                        <td>{{$number->until}}</td>
                        <td>
                            @if(Auth::user()->balance >= $number->amount && $number->currency == Auth::user()->currency)
                                <a href="#" onclick="event.preventDefault();document.getElementById('number-form-extend-{{$number->id}}').submit();" class="button-long">Extend</a>
                                <form id="number-form-extend-{{$number->id}}" action="/cabinet/payment/extend/{{$number->id}}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            @else
                                <a href="#" class="disabled button-long">Extend</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <table class="invoice">
            <thead>
                <tr><th colspan="4">Payments</th></tr>
                <tr><th>Date</th><th>Amount</th><th>Debit/Credit</th><th colspan="1">Description</th></tr>
            </thead>
            <tbody>
                @foreach($payments as $payment)
                    <tr>
                        <td>{{$payment->created_at}}</td>
                        <td>{{$payment->amount}} {{$payment->currency}}</td>
                        <td>{{$payment->type}}</td>
                        <td>{{$payment->message}}</td>
                        <!-- <td><a href="#" class="button-long"><i class="fa fa-eye"></i>&nbsp;View</a></td> -->
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection
