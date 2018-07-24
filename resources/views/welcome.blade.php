<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="/images/favicon.png">
    <link rel="icon" href="/images/favicon.png">

    <title>Fabric</title>

    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top sticky">
    <div class="container-fluid">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="/images/logo.png" />
            </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Company</a></li>
                <li><a href="#">Solutions</a></li>
                <li><a href="#">Resources</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Blog</a></li>
                <li class="social-icon">
                    <a href="#">
                        <img src="/images/twitter.png" />
                    </a>
                </li>
                <li class="social-icon">
                    <a href="#">
                        <img src="/images/facebook.png" />
                    </a>
                </li>
                <li class="social-icon">
                    <a href="#">
                        <img src="/images/linkedin.png" />
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<header>
    <div class="container">
        <h1 class="text-center animated fadeIn">
            Accelerate your growth. Drive <br/> conversions. Boost your bottom line.
        </h1>
        <h3 class="text-center animated fadeInDownBig m-top-50">
            Leveraging data-driven design, an intuitive interface, and smart <br/>reporting to take the guesswork out of accelerating your startup.
        </h3>
        <div class="text-center m-top-50">
            <button type="button" class="btn btn-warning-outline">
                <i class="fa fa-play"></i> WACTH VIDEO
            </button>
            &nbsp;&nbsp;
            <button type="button" class="btn btn-warning">
                REQUEST DEMO
            </button>
        </div>
    </div>

</header>
<div class="container">
    <div class="row">
        <div class="brand-item col-md-15 col-sm-3 col-xs-3">
            <img src="/images/logo-gray1.png" class="img-responsive"/>
        </div>
        <div class="brand-item col-md-15 col-sm-3 col-xs-3 border-left">
            <img src="/images/logo-gray2.png" class="img-responsive"/>
        </div>
        <div class="brand-item col-md-15 col-sm-3 col-xs-3 border-left">
            <img src="/images/logo-gray3.png" class="img-responsive"/>
        </div>
        <div class="brand-item col-md-15 col-sm-3 col-xs-3 border-left">
            <img src="/images/logo-gray4.png" class="img-responsive"/>
        </div>
        <div class="brand-item col-md-15 col-sm-3 col-xs-3 border-left">
            <img src="/images/logo-gray5.png" class="img-responsive"/>
        </div>
        <div class="brand-item col-md-15 col-sm-3 col-xs-3 border-left">
            <img src="/images/logo-gray6.png" class="img-responsive"/>
        </div>
        <div class="brand-item col-md-15 col-sm-3 col-xs-3 border-left">
            <img src="/images/logo-gray7.png" class="img-responsive"/>
        </div>
        <div class="brand-item col-md-15 col-sm-3 col-xs-3 border-left">
            <img src="/images/logo-gray8.png" class="img-responsive"/>
        </div>
    </div>

    <div class="row m-top-80 text-center">
        <h2 class="text-center">
            Learn how we can help your company turn financial <br/> projections into reality.
        </h2>
        <img src="/images/yellow-line.png" />
    </div>

    <div class="row m-top-50">
        <div class="col-md-4 dark-purple-resource item-resource">
            <h3 class="text-center">
                Watch Video
            </h3>
            <div class="row icon text-center">
                <img src="/images/video-icon.png" />
            </div>
            <div class="row text-center">
                <button type="button" class="btn btn-warning-outline">
                    WATCH
                </button>
            </div>
        </div>
        <div class="col-md-4 light-purple-resource item-resource">
            <h3 class="text-center">
                Download Whitepaper
            </h3>
            <div class="row icon text-center">
                <img src="/images/whitepaper-icon.png" />
            </div>
            <div class="row text-center">
                <button type="button" class="btn btn-warning-outline">
                    DOWNLOAD
                </button>
            </div>
        </div>
        <div class="col-md-4 dark-purple-resource item-resource">
            <h3 class="text-center">
                View Webinar
            </h3>
            <div class="row icon text-center">
                <img src="/images/webinar-icon.png" />
            </div>
            <div class="row text-center">
                <button type="button" class="btn btn-warning-outline">
                    VIEW
                </button>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="parallax-container m-top-100">
    <div class="parallax"><img src="/images/solutions-image.png" /></div>
</div>

<div class="container-launch">
    <div class="container">
        <div class="row m-top-80 text-center">
            <div class="col-xs-12">
                <h2 class="text-center">
                    Solutions
                </h2>
                <img src="/images/yellow-line.png" />
            </div>
        </div>

        <div class="row">
            <div class="row m-top-50">
                <div class="col-md-4 transparent-resource item-resource">
                    <h3 class="text-left">
                        Launch
                    </h3>
                    <div class="row icon text-left">
                        <div class="col-xs-12">
                            <img src="/images/launch.png" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <p>How are your carriers performing? Are you delivering on your brand promise and service level expectations? How often are you assessing your operation? Take control of the levers that impact every aspect of your shipping operation.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 white-resource item-resource">
                    <h3 class="text-left">
                        Accelerate
                    </h3>
                    <div class="row icon text-left">
                        <div class="col-xs-12">
                            <img src="/images/accelerate.png" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <p>How are your carriers performing? Are you delivering on your brand promise and service level expectations? How often are you assessing your operation? Take control of the levers that impact every aspect of your shipping operation.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 transparent-resource item-resource">
                    <h3 class="text-left">
                        Scale
                    </h3>
                    <div class="row icon text-left">
                        <div class="col-xs-12">
                            <img src="/images/scale.png" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <p>How are your carriers performing? Are you delivering on your brand promise and service level expectations? How often are you assessing your operation? Take control of the levers that impact every aspect of your shipping operation.</p>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row m-top-80 text-center">
        <div class="col-xs-12">
            <h2 class="text-center">
                Testimonials
            </h2>
            <img src="/images/yellow-line.png" />
        </div>
    </div>
</div>


<div class="testimonials m-top-80">
    <div class="testimonial-container">
        <div class="testimonial">
            <div class="">
                <div class="col-xs-12 m-top-30">
                    <img src="/images/avatar1.png" class="center-block" />
                </div>
            </div>
            <div class="m-top-20">
                <div class="col-xs-12 text-center text-gray">
                    “Their design & development expertise is what brought us to them. But we have been blown away by their efficiency & professionalism. They are a vital part of our team and a key component in our ongoing success”
                </div>
            </div>
            <div class="m-top-20">
                <div class="col-xs-12 strong-quote">
                    —Trifacta - Will Davis, <br/>
                    Product Marketing Director
                </div>
            </div>
        </div>
    </div>

    <div class="testimonial-container">
        <div class="testimonial">
            <div class="">
                <div class="col-xs-12 m-top-30">
                    <img src="/images/avatar1.png" class="center-block" />
                </div>
            </div>
            <div class="m-top-20">
                <div class="col-xs-12 text-center text-gray">
                    “Their design & development expertise is what brought us to them. But we have been blown away by their efficiency & professionalism. They are a vital part of our team and a key component in our ongoing success”
                </div>
            </div>
            <div class="m-top-20">
                <div class="col-xs-12 strong-quote">
                    —Trifacta - Will Davis, <br/>
                    Product Marketing Director
                </div>
            </div>
        </div>
    </div>

    <div class="testimonial-container">
        <div class="testimonial">
            <div class="">
                <div class="col-xs-12 m-top-30">
                    <img src="/images/avatar1.png" class="center-block" />
                </div>
            </div>
            <div class="m-top-20">
                <div class="col-xs-12 text-center text-gray">
                    “Their design & development expertise is what brought us to them. But we have been blown away by their efficiency & professionalism. They are a vital part of our team and a key component in our ongoing success”
                </div>
            </div>
            <div class="m-top-20">
                <div class="col-xs-12 strong-quote">
                    —Trifacta - Will Davis, <br/>
                    Product Marketing Director
                </div>
            </div>
        </div>
    </div>

    <div class="testimonial-container">
        <div class="testimonial">
            <div class="">
                <div class="col-xs-12 m-top-30">
                    <img src="/images/avatar1.png" class="center-block" />
                </div>
            </div>
            <div class="m-top-20">
                <div class="col-xs-12 text-center text-gray">
                    “Their design & development expertise is what brought us to them. But we have been blown away by their efficiency & professionalism. They are a vital part of our team and a key component in our ongoing success”
                </div>
            </div>
            <div class="m-top-20">
                <div class="col-xs-12 strong-quote">
                    —Trifacta - Will Davis, <br/>
                    Product Marketing Director
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container m-bottom-40">
    <div class="row">
        <div class="col-xs-6 text-right">
            <a href="javascript:;" class="prev-arrow">
                <svg width="30px" height="30px" viewBox="0 0 30 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <!-- Generator: Sketch 50.2 (55047) - http://www.bohemiancoding.com/sketch -->
                    <desc>Created with Sketch.</desc>
                    <defs></defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="left" transform="translate(15.000000, 15.000000) scale(-1, 1) translate(-15.000000, -15.000000) ">
                            <circle id="Oval-3" fill="#53B9C1" transform="translate(15.000000, 15.000000) rotate(90.000000) translate(-15.000000, -15.000000) " cx="15" cy="15" r="15"></circle>
                            <polygon id="chevron-up" fill="#FFFFFF" fill-rule="nonzero" transform="translate(15.594937, 14.698150) rotate(90.000000) translate(-15.594937, -14.698150) " points="9.78632911 19.3962999 15.5949367 13.590555 21.4035443 19.3962999 23.1898734 17.6071081 15.5949367 10 8 17.6071081"></polygon>
                        </g>
                    </g>
                </svg>
            </a>
        </div>
        <div class="col-xs-6 text-left">
            <a href="javascript:;" class="next-arrow">
                <svg width="30px" height="30px" viewBox="0 0 30 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <!-- Generator: Sketch 50.2 (55047) - http://www.bohemiancoding.com/sketch -->
                    <desc>Created with Sketch.</desc>
                    <defs></defs>
                    <g id="Example---Home-Examples" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Home-example,-v2" transform="translate(-773.000000, -3896.000000)">
                            <g id="testimonials" transform="translate(-362.000000, 3291.000000)">
                                <g id="slider" transform="translate(0.000000, 129.000000)">
                                    <g id="arrows" transform="translate(1085.000000, 476.000000)">
                                        <g id="right" transform="translate(50.000000, 0.000000)">
                                            <circle id="Oval-3" fill="#53B9C1" transform="translate(15.000000, 15.000000) rotate(90.000000) translate(-15.000000, -15.000000) " cx="15" cy="15" r="15"></circle>
                                            <polygon id="chevron-up" fill="#FFFFFF" fill-rule="nonzero" transform="translate(15.594937, 14.698150) rotate(90.000000) translate(-15.594937, -14.698150) " points="9.78632911 19.3962999 15.5949367 13.590555 21.4035443 19.3962999 23.1898734 17.6071081 15.5949367 10 8 17.6071081"></polygon>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
            </a>

        </div>
    </div>

</div>

<footer>
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                        <img src="/images/logo.png" />
                    </a>
                </div>


                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Company</a></li>
                    <li><a href="#">Solutions</a></li>
                    <li><a href="#">Resources</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Blog</a></li>
                    <li class="social-icon">
                        <a href="#">
                            <img src="/images/twitter.png" />
                        </a>
                    </li>
                    <li class="social-icon">
                        <a href="#">
                            <img src="/images/facebook.png" />
                        </a>
                    </li>
                    <li class="social-icon">
                        <a href="#">
                            <img src="/images/linkedin.png" />
                        </a>
                    </li>
                </ul>

                <div class="clearfix"></div>
            </div>
        </nav>

        <hr/>

        <div class="row">
            <div class="col-xs-6">
                We are an innovative web design and marketing<br/> company that specializes in web development,<br/> software development and digital marketing.
            </div>
            <div class="col-xs-6 text-right">
                &copy; FABRIC.COM
            </div>
        </div>
    </div>
</footer>

<script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
<script type="text/javascript" src="{{ mix('js/vendors.js') }}"></script>
<script type="text/javascript" src="{{ mix('js/testimonials.js') }}"></script>
</body>
</html>
