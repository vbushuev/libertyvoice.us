@extends('layouts.app')

@section('content')
<section class="banner">
    <div class="wrapper">
        <div class="banner-text">
            <h1>Cloud telephony for business<span>Easy Connection VoPI</span></h1>
            <div class="banner-buttons">
                <div class="button"><a href="/login">Get started <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
                <!--div class="button2"><a href="index.html#features">Learn more</a></div-->
            </div>
        </div>
    </div>
</section>

<section class="features" id="features">
    <div class="wrapper">
        <h2>LibertyVoice Service Features</h2>
        <ul class="features-list">
            <li>
                <div class="item-image"><img src="img/204-link.png" alt=""></div>
                <h3>Tier-1 Redundant Network</h3>
                <p>LibertyVoice utilizes only Tier-1 upstream providers to route our SIP traffic.  We do this to ensure that you get the highest
                    quality voice experience and a redundant network for outstanding reliability and performance. </p>
            </li>
            <li>
                <div class="item-image"><img src="img/148-equalizer2.png" alt=""></div>
                <h3>Powerful Self-Service Controls</h3>
                <p>LibertyVoice puts you in control by providing an easy to use interface that lets you manage all aspects of your SIP account
                    including, adding or changing your service and reviewing or exporting real-time call data records. </p>
            </li>
            <li>
                <div class="item-image"><img src="img/189-tree.png" alt=""></div>
                <h3>Bring Your Own Bandwidth </h3>
                <p>Unlike other SIP providers that require you to get bandwidth from them, we offer you the flexibility to choose the
                    bandwidth supply you prefer.  Cable, DSL, T-1 or Metro Ethernet, the choice is yours.</p>
            </li>
            <li>
                <div class="item-image"><img src="img/017-headphones.png" alt=""></div>
                <h3>Telemarketing Support</h3>
                <p>If your company uses automated dialing for telemarketing, unlike most other SIP service providers, LibertyVoice.us can
                    connect you with upstream carriers who welcome this type of traffic and help you avoid dialer surcharges.</p>
            </li>
            <li>
                <div class="item-image"><img src="img/064-credit-card.png" alt=""></div>
                <h3>Simple protected SIP</h3>
                <p>Services are protected. Own server, securely protected.</p>
            </li>
            <li>
                <div class="item-image"><img src="img/181-shield.png" alt=""></div>
                <h3>Toll Fraud Protection</h3>
                <p>With VoIP, international toll fraud can be a significant problem.  We protect our VoIP SIP trunks from fraudulent
                    activity by using automated systems that help detect fraud and protect your account even if your on-premises
                    systems are compromised.</p>
            </li>
        </ul>
        <div class="button2"><a href="/price-sip">View All SIP Price</a></div>
    </div>
</section>

<section class="services">
    <div class="wrapper">
        <div class="service-list">
            <div class="service">
                <div class="service-image">
                    <img src="img/platform-2-min.png" alt="Simple Platform">
                </div>
                <h3 class="service-title">Simple Platform</h3>
                <p class="service-description">Our easy-to-use control panel takes the hassle out of getting up and running becoming an expert.</p>
            </div>
            <div class="service">
                <div class="service-image">
                    <img src="img/Friendly-1-min.png" alt="Friendly Terms">
                </div>
                <h3 class="service-title">Friendly Terms</h3>
                <p class="service-description">We don’t require any contracts.There’s no hardware to buy and we handle taxes, billing and support. You focus on growing your business.</p>
            </div>
            <div class="service">
                <div class="service-image">
                    <img src="img/Recuring-1-min.png" alt="Recurring Revenue">
                </div>
                <h3 class="service-title">Loyal Price Policy</h3>
                <p class="service-description">More spending - more discounts!</p>
            </div>
        </div>
    </div>
</section>

<section class="about-us">
    <div class="about-us-image clearfix">
        <div class="img">
            <img src="img/laptop-min.png" alt="laptop">
        </div>
    </div>
    <div class="content">
        <p class="text">LibertyVoice.us was founded by telecommunications experts. We’ve called on this experience to bring you a platform that will propel you toward rapid success.</p>
        <p class="text">
With LibertyVoice.us you don’t have to worry about the major upfront expense of purchasing your own softswitch or the monthly costs associated with hiring service and technical professionals. LibertyVoice.us provides all of this for you.</p>
        <div class="button2"><a href="/login">Get Started <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
    </div>
</section>
@endsection
