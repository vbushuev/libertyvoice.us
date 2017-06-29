<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/normalize.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i|Libre+Franklin:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <script src="{{ asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
</head>
<body>
    <header class="head-block">
        <div class="top-block">
            <div class="wrapper clearfix">
                <ul class="top-left">
                    <li><a href="https://t.me/LibertyVoice" class="top-link"><i class="fa fa-headphones" aria-hidden="true"></i>Get Support TELEGRAM</a></li>
                    <li><a href="tel:+447441906776" class="top-link"><i class="fa fa-phone" aria-hidden="true"></i> +447441906776</a></li>
                </ul>
                <ul class="top-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ route('login') }}" class="top-button"><i class="fa fa-user" aria-hidden="true"></i> Login</a></li>
                    @else
                        @if(Auth::user()->role == 'user')
                        <li>
                            {{ Auth::user()->balance}} {{ Auth::user()->currency}}
                            &nbsp;&nbsp;&nbsp;
                        </li>
                        @endif

                        <li class="dropdown">
                            <a href="/cabinet" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <i class="fa fa-user"></i>&nbsp;{{ Auth::user()->name }}
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>


                    @endif

                    <!-- li><ul class="top-social clearfix">
                        <li><a href="#" class="social twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="social facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="social google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    </ul></li -->
                </ul>
            </div>
        </div>
        <div class="bottom-block">
            <div class="wrapper clearfix">
                <div class="header-logo">
                    <a href="/">
                        <img src="img/Liberty%20voice%20logo_400.png" alt="sip">
                    </a>
                </div>
                <nav class="header-nav">
                    <ul>
                        <li><a href="/vn" class="nav-link">VIRTUAL NUMBERS</a></li>
                        <li><a href="/price-sip" class="nav-link">RATES FOR CALCS</a></li>
                        <li><a href="/server" class="nav-link">DEDICATED SERVER</a></li>
                        <li><a href="/vpn" class="nav-link">VPN</a></li>
                        <li><a href="/other" class="nav-link">OTHER SERVICES</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

        @yield('content')

        <footer class="foot-block">
            <div class="footer-top">
                <div class="wrapper">
                    <div class="box">
                        <p>
                            <a href="#">
                                <img src="img/logo-gray.png" alt="Liberty Voice">
                            </a>
                        </p>
                        <p>
                            At LibertyVoice we provide a services platform designed for companies who want to build a SIP trunking for trading company.
                        </p>
                    </div>
                    <div class="box">
                        <h5>SIP TRUNK PLATFORM</h5>
                        <ul>
                            <li><a href="/vn">VIRTUAL NUMBERS</a></li>
                            <li><a href="/price-sip">RATES FOR CALCS</a></li>
                            <li><a href="/server">DEDICATED SERVER</a></li>
                            <li><a href="/vpn">VPN</a></li>
                            <li><a href="/other">OTHER SERVICES</a></li>
                        </ul>
                    </div>
                    <div class="box">
                        <h5>DOWNLOAD APPLICAION</h5>
                        <ul class="recent-blog">
                            <li class="post"><a href="http://www.zoiper.com/download.php">Download ZoIPer</a></li>
                            <li class="post"><a href="http://www.counterpath.com/x-lite-download.html">Download X-Lite</a></li>
                            <li class="post"><a href="http://www.linphone.org/eng/download/">Download Linphone</a></li>
                        </ul>
                    </div>
                    <div class="box">
                        <h5>GET IN TOUCH</h5>
                        <ul>
                            <li>
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span class="bright">LibertyVoice, INC</span><br>
                                <span></span>
                            </li>
                            <li>
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span class="bright">London</span>
                                <a href="tel:+447441906776">+447441906776</a>
                            </li>
                            <li>
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span class="bright">Moscow</span>
                                <a href="tel:+447441906776">+447441906776</a>
                            </li>
                            <li>
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span class="bright">Tel Aviv</span>
                                <a href="tel:+447441906776">+447441906776</a>
                            </li>
                            <li>
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <a href="https://t.me/LibertyVoice"> Get Support Here Telegram </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="wrapper clearfix">
                    <div class="copyright"> 2017 LibertyVoice.us</div>
                    <!--ul class="privacy-policy clearfix">
                        <li><a href="#">Privacy Policy</a></li>
                        <li class="divider">|</li>
                        <li><a href="#">Acceptable Use Policy</a></li>
                        <li class="divider">|</li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul-->
                </div>
            </div>
        </footer>




<!-- Scripts -->
        <script src="{{ asset('js/vendor/jquery-1.11.2.min.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>


</body>
</html>
