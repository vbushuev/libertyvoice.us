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
                        <td><a href="#" onclick="useredit({{$user->id}});" class="button-long"><i class="fa fa-gear"></i>&nbsp;Edit</a></td>
                        <td><a href="#" onclick="services({{$user->id}});" class="button-long"><i class="fa fa-phone"></i>&nbsp;Services</a></td>
                        <td><a href="#" onclick="payments({{$user->id}});" class="button-long"><i class="fa fa-usd"></i>&nbsp;Payments</a></td>
                    </tr>
                    <tr>
                        <td>
                            Comments:
                        </td>
                        <td colspan="7">
                            {{$user->comments}}
                        </td>
                    </tr>
                    <tr>
                        <td colspan="8"  style="height:0;">
                            @include('modal.payments',["user"=>$user])
                            @include('modal.services',["user"=>$user])
                            @include('modal.user',["user"=>$user])
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
