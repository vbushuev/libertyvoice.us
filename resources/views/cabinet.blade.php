@extends('layouts.app')

@section('content')
<style>
    .pills-data{
        display: none;
        position: relative;
        transition: all .2s ease-in;
    }
    .pills{
        width: 80%;
        margin: 0 auto;
        margin-bottom: 2em;
    }
    .pills li{
        display: inline-block;
    }
    .pills li a{
        display: block;
        height:3em;
        line-height: 3em;
        padding: 0 1em;
        text-decoration: none;
        transition:all .2s ease-in;
    }
    .pills li a:hover{

        border-bottom: solid 1px black;
    }
    .pills .active a{
        border-bottom: solid 2px black;
    }
    .pills .active a:hover{
        text-decoration: none;
        border-bottom: solid 2px black;
    }
    /*.pills-data:target{
        display: block;
        pointer-events: auto;
    }*/
</style>
<section class="table cabinet">
    <div class="wrapper">
        <ul class="pills">
            <li class="active"><a href="#profile">Profile</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#payments">Payments</a></li>
        </ul>
        <div id="profile" class="pills-data">
            <h2>Profile</h2>
            <table class="invoice">
                <tbody>
                    <tr><th>Name</th><td>{{Auth::user()->name}}</td></tr>
                    <tr><th>Last Name</th><td>{{Auth::user()->lastname}}</td></tr>
                    <tr><th>Email</th><td>{{Auth::user()->email}}</td></tr>
                    <tr><th>Balance</th><td>{{ Auth::user()->balance}} {{ Auth::user()->currency}}</td></td></tr>
                </tbody>
            </table>
        </div>

        <div id="services" class="pills-data">
            <h2>Numbers</h2>
            <table class="invoice">
                <thead>
                    <tr><th>Type</th><th>Number</th><th>Amount per period</th><th>Period (days)</th><th>Avaliable</th><th></th></tr>
                </thead>
                <tbody>
                    @foreach($services as $number)
                        <tr>
                            <td>{{$number->type}}</td>
                            <td>{{$number->number}}</td>
                            <!-- <td>{{$number->created_at}}</td> -->
                            <td>{{$number->amount}} {{$number->currency}}</td>
                            <td>{{$number->period}}</td>
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
        </div>

        <div id="payments" class="pills-data">
            <h2>Payments</h2>
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

    </div>
</section>
<script>

</script>
@endsection
