@extends('layouts.app')

@section('content')
<section class="table">
    <div class="wrapper">
        <table class="">
            <thead>
                <tr><th colspan="4">Dedicated Server RDP</th></tr>
                <tr><th>OS VERSION</th><th>RAM</th><th>HDD</th><th>ORDER</th></tr>
            </thead>
            <tbody>
            <tr><td>Windows 7 ru</td> <td>2048</td> <td>100 GB</td> <td>$150</td></tr>
            <tr><td>Windows 7 en</td> <td>2048</td> <td>100 GB</td> <td>$160</td></tr>
            <tr><td>Windows 2008 (ru)</td> <td>2048</td> <td>100 GB</td> <td>$170</td></tr>
            <tr><td>Windows 7 ru</td> <td>3072</td> <td>200 GB</td> <td>$240</td></tr>
            <tr><td>Windows 7 en</td> <td>3072</td> <td>200 GB</td> <td>$250</td></tr>
            <tr><td>Windows 2008 (ru)</td> <td>3072</td> <td>200 GB</td> <td>$260</td></tr>
            <tr><td>Windows 7 ru (VIP)</td> <td>4096</td> <td>500 GB</td> <td>$280</td></tr>
            <tr><td>Windows 7 en (VIP)</td> <td>4096</td> <td>500 GB</td> <td>$290</td></tr>
            <tr><td>Windows 2008</td> <td>4096</td> <td>500 GB</td> <td>$300</td></tr>
            </tbody>
        </table>
        <div class="banner-buttons">
            <div class="button2"><a href="/login">Get Started <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
        </div>

    </div>
</section>

@endsection
