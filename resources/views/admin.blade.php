@extends('layouts.app')

@section('content')
<section class="table">
    <div class="wrapper">
        <table class="invoice">
            <thead>
                <tr><th colspan="8">Users</th></tr>
                <tr>
                    <th>Name</th>
                    <th>Lastname</th>
                    <th>Email</th>
                    <th>Country</th>
                    <th>Balance</th>
                    <th colspan="3"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->lastname}}</td>
                        <td><a href="mailto:{{$user->email}}">{{$user->email}}</a></td>
                        <td>{{$user->country}}</td>
                        <td>{{$user->balance}}</td>
                        <td><a href="#" onclick="data({{$user->id}});" class="button-long"><i class="fa fa-gear"></i>&nbsp;Edit</a></td>
                        <td><a href="#" onclick="numbers({{$user->id}});" class="button-long"><i class="fa fa-phone"></i>&nbsp;Numbers</a></td>
                        <td><a href="#" onclick="payments({{$user->id}});" class="button-long"><i class="fa fa-usd"></i>&nbsp;Payments</a></td>
                    </tr>
                    <tr style="height:0;">
                        <td colspan="8">
                            @include('modal.payments',["user"=>$user])
                            @include('modal.numbers',["user"=>$user])
                        </td>
                    </tr>

                @endforeach
                <!-- <tr>
                    <td>12%</td>
                    <td>21.12.2017</td>
                    <td>Stop data: <span>21.01.2018</span></td>
                    <td><a href="#" class="button-long">Extend</a></td>
                </tr>
                <tr>
                    <td>12%</td>
                    <td>21.12.2017</td>
                    <td>Stop data: <span>21.01.2018</span></td>
                    <td><a href="#" class="button-long">Extend</a></td>
                </tr> -->
            </tbody>
        </table>
    </div>
</section>
<script>
</script>
@endsection
