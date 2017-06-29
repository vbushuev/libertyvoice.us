@extends('layouts.app')

@section('content')
<section class="table">
    <div class="wrapper">
        <table class="invoice">
            <thead>
                <tr><th colspan="4">Invoice</th></tr>
                <tr><th>Price</th>   <th>Data</th>  <th colspan="2"></th></tr>
            </thead>
            <tbody>
                <tr><td>12%</td>   <td>21.12.2017</td>
                    <td>Stop data: <span>21.01.2018</span></td>   <td><a href="#" class="button-long">Extend</a></td></tr>
                <tr><td>12%</td>   <td>21.12.2017</td>
                    <td>Stop data: <span>21.01.2018</span></td>   <td><a href="#" class="button-long">Extend</a></td></tr>
            </tbody>
        </table>
    </div>
</section>
@endsection
