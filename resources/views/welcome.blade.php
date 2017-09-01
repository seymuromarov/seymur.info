<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description"
          content="Seymur Omarov 's Portfolio. Freelancer web ( PHP - Laravel-CI,Javascript-ES6-Jquery-NodeJS),C#,C++,Android Developer">
    <meta name="keywords" content="Seymur Omarov,omarov,seymur,programmer,cv,developer,laravel,portfolio">
    <meta name="web_author" content="Seymur Omarov">
    <meta name="Robots" content="index, follow">
    <meta name="yandex-verification" content="53f4f2683c352916"/>
    <title>Seymur Omarov - Portfolio</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet prefetch" href="https://fonts.googleapis.com/css?family=Raleway:400,300,200,500,600,700">
    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet prefetch" href="css/bootstrap.min.css">
    <link rel="stylesheet prefetch" href="css/animate.min.css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/materialcards.css" type="text/css">
    {{--<link href="css/twentytwenty.css" rel="stylesheet" type="text/css"/>--}}
    <link href="css/palette.css" rel="stylesheet" type="text/css"/>
    <script
            src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
            crossorigin="anonymous"></script>
    <script src="js/jquery-migrate-3.0.0.min.js"></script>
    <script src="js/typed.min.js"></script>
    <script src="js/particles.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {

            Typed.new("#typed", {
                stringsElement: document.getElementById('typed-strings'),
                typeSpeed: 30,
                backDelay: 500,
                loop: false,
                contentType: 'html', // or text
                // defaults to null for infinite loop
                loopCount: null,
                callback: function () {
//                    foo();
                },
                resetCallback: function () {
                    newTyped();
                }
            });

            var resetElement = document.querySelector('.reset');
            if (resetElement) {
                resetElement.addEventListener('click', function () {
                    document.getElementById('typed')._typed.reset();
                });
            }

        });

        function newTyped() { /* A new typed object */
        }

    </script>


    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-92801779-1', 'auto');
        ga('send', 'pageview');

    </script>
</head>

<body onload="">

<script>

    function loading() {
        setTimeout(showPage, 5000);
    }

</script>

<nav class="navbar navbar-default navbar-fixed-top blue-nav-color" id="navbar" style="display: none;">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#buttons-collapse"
                    aria-proexpanded="false">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand nav-link" href="#header">Seymur Omarov</a>
        </div>
        <div class="collapse navbar-collapse" id="buttons-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a class="nav-link" href="#about">About</a></li>
                <li><a class="nav-link" href="#projects">Projects</a></li>
                <li><a class="nav-link" href="#packages">Packages</a></li>
                {{--<li><a class="nav-link" href="#howicode">How I Code</a></li>--}}
                <li><a class="nav-link" href="#footer">Contacts</a></li>
            </ul>
        </div>
    </div>
</nav>
<header id="header">
    <div id="particles"></div>
    <div class="vert-text">
        <h3 class="type-it">I'm Seymur. I design & build</h3>
        <h3 id="type-it" class="type-it"></h3>
        <div class="type-wrap" style="max-height: 100px;">
            <div id="typed-strings">
                <h3>Responsive websites.</h3>
                <h3>Web applications.</h3>
                <h3>Mobile applications.</h3>
            </div>
        </div>
        <span class="type-it" id="typed" style="white-space:pre;"></span>
    <!--{{--<h3>Web,Mobile,Software Developer</h3>--}} -->
        <a href="#about" class="scroll-down nav-link"></a>
    </div>
</header>
<a href="https://github.com/seymuromarov" class="github-corner" aria-label="View source on Github"
   target="_blank">
    <svg width="80" height="80" viewBox="0 0 250 250"
         style="fill:#f44336; color:#ECEFF1; position: absolute; top: 0; border: 0; right: 0;"
         aria-hidden="true">
        <path d="M0,0 L115,115 L130,115 L142,142 L250,250 L250,0 Z"></path>
        <path d="M128.3,109.0 C113.8,99.7 119.0,89.6 119.0,89.6 C122.0,82.7 120.5,78.6 120.5,78.6 C119.2,72.0 123.4,76.3 123.4,76.3 C127.3,80.9 125.5,87.3 125.5,87.3 C122.9,97.6 130.6,101.9 134.4,103.2"
              fill="currentColor" style="transform-origin: 130px 106px;" class="octo-arm"></path>
        <path d="M115.0,115.0 C114.9,115.1 118.7,116.5 119.8,115.4 L133.7,101.6 C136.9,99.2 139.9,98.4 142.2,98.6 C133.8,88.0 127.5,74.4 143.8,58.0 C148.5,53.4 154.0,51.2 159.7,51.0 C160.3,49.4 163.2,43.6 171.4,40.1 C171.4,40.1 176.1,42.5 178.8,56.2 C183.1,58.6 187.2,61.8 190.9,65.4 C194.5,69.0 197.7,73.2 200.1,77.6 C213.8,80.2 216.3,84.9 216.3,84.9 C212.7,93.1 206.9,96.0 205.4,96.6 C205.1,102.4 203.0,107.8 198.3,112.5 C181.9,128.9 168.3,122.5 157.7,114.1 C157.9,116.9 156.7,120.9 152.7,124.9 L141.0,136.5 C139.8,137.7 141.6,141.9 141.8,141.8 Z"
              fill="currentColor" class="octo-body"></path>
    </svg>
</a>
<section id="about" class="default-primary-color">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center">
                <h2 class="major">About Me</h2>
            </div>
        </div>
        <div class="row">
            <div itemscope itemtype="http://schema.org/CreativeWork" class="col-md-4  text-center">
                <div class="service-item os-animation animated fadeInUp" data-os-animation="fadeInUp"
                     data-os-animation-delay="0s" style="animation-delay: 0s;">
                    <i class="service-icon fa fa-user"></i>
                    <h4>
                        Who I am
                    </h4>
                    <p itemprop="author" itemscope itemtype="http://schema.org/Person">My full name is <span
                                itemprop="name"> Seymur Omarov</span> and I am a web and software developer.
                        I started when I was very young to develop apps in Pascal, expanding my knowledge to all the
                        other web system and achieving eventually more elaborated structures.</p>
                </div>
            </div>
            <div class="col-md-4  text-center">
                <div class="service-item os-animation animated fadeInUp" data-os-animation="fadeInUp"
                     data-os-animation-delay="0s" style="animation-delay: 0s;">
                    <i class="service-icon fa fa-code"></i>
                    <h4>About Coding</h4>
                    <p>I mostly develop in Laravel PHP based framework,native PHP with ajax, Javascript. I've worked on
                        many different
                        technologies too and lately I approached to the wonderful world of Android </p>
                </div>
            </div>
            <div class="col-md-4  text-center">
                <div class="service-item os-animation animated fadeInUp" data-os-animation="fadeInUp"
                     data-os-animation-delay="0s" style="animation-delay: 0s;">
                    <i class="service-icon fa fa-rocket"></i>
                    <h4>What I Study</h4>
                    <p>I current frequent Computer Science's faculty at the University of Baku State University</p>
                </div>
            </div>
            <!-- <div class="col-md-2  text-center">
                 <div class="service-item os-animation animated fadeInUp" data-os-animation="fadeInUp"
                      data-os-animation-delay="0s" style="animation-delay: 0s;">
                     <i class="service-icon fa fa-bug"></i>
                     <h4>Security</h4>
                     <p>I love any kind of computer security starting from writing code and optimizing it to
                         penetration
                         test security :D</p>
                 </div>
             </div> -->
        </div>
    </div>
</section>
<section class="container" id="projects">
    <div class="row" style="margin-right: 0px;margin-left: 0px;">
        <div class="col-md-4 col-md-offset-4 text-center">
            <h2 class="major primary-text-color">Projects</h2>
        </div>
    </div>
    <div style="margin: 0;padding: 0;" class="row">
        @for ($i = 0; $i < count($data); $i++)
            <div class="col-md-4 col-xs-12 col-sm-6">
                <article class="material-card Blue">
                    <h2>
                        <a style="color: #fff;" href="{{$data[$i]->url}}"><span>{{$data[$i]->name}}</span></a>
                        <strong>
                            <i class="fa fa-fw fa-star"></i>
                            {{$data[$i]->header}}
                        </strong>
                    </h2>
                    <div class="mc-content">
                        <div class="img-container">
                            <img alt="{{$data[$i]->name}}" class="img-responsive"
                                 src="{{$data[$i]->image}}">
                        </div>
                        <div style="font-family: Arial,Tahoma" class="mc-description">
                            {{$data[$i]->content}}
                        </div>
                    </div>
                    <a class="mc-btn-action">
                        <i class="fa fa-bars"></i>
                    </a>
                    <div class="mc-footer">
                        <!-- <h4>
                             Social
                         </h4> -->
                        <a class="fa fa-fw fa-facebook"></a>
                        <a class="fa fa-fw fa-twitter"></a>
                        <a class="fa fa-fw fa-linkedin"></a>
                        <a class="fa fa-fw fa-google-plus"></a>
                    </div>
                </article>
            </div>
        @endfor
    </div>
    {{--<div style="text-align: center">{{ $data->links() }}</div>--}}

</section>

<section class="container" id="packages">
    <div class="row" style="margin-right: 0px;margin-left: 0px;">
        <div class="col-md-4 col-md-offset-4 text-center">
            <h2 class="major primary-text-color">Packages</h2>
        </div>
    </div>
    <div style="margin: 0;padding: 0;" class="row">

        <div class="col-md-4 col-xs-12 col-sm-6">
            <div class="cardPackage">
                <div class="card-top">
                    <a href="https://github.com/seymuromarov/randomcrap-laravel">
                        <div class="overlay">
                            <h1>OPEN</h1>
                        </div>
                    </a>
                    <img class="card-img" alt="package"
                         src="https://airnativeextensions.com/images/extensions/icons/ane-package-icon.png"/>
                </div>
                <div class="triangle">
                    <div class="circle-button" id="circleDrop" onclick="packageOpen(1)"><img class="close" id="close1"
                                                                                             alt="+"
                                                                                             src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/324479/close.svg"/>
                    </div>
                </div>
                <div class="card-middle" id="card-middle1">
                    <h5 class="more">Laravel api for generating random strings,floats,integers,arrays and etc. Just
                        generate what you need with Randomcrap.</h5>
                </div>
                <div class="card-bottom text-center">
                    <h2 class="card-title">RandomCrap</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xs-12 col-sm-6">
            <div class="cardPackage">
                <div class="card-top">
                    <a href="https://github.com/seymuromarov/api-clockworksms">
                        <div class="overlay">
                            <h1>OPEN</h1>
                        </div>
                    </a>
                    <img class="card-img" alt="package"
                         src="https://airnativeextensions.com/images/extensions/icons/ane-package-icon.png"/>
                </div>
                <div class="triangle">
                    <div class="circle-button" id="circleDrop" onclick="packageOpen(2)"><img class="close" id="close2"
                                                                                             alt="+"
                                                                                             src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/324479/close.svg"/>
                    </div>
                </div>
                <div class="card-middle" id="card-middle2">
                    <h5 class="more">Laravel api for sending messages and checking balance with ClockWorkSms.</h5>
                </div>
                <div class="card-bottom text-center">
                    <h2 class="card-title">Clock Work Sms</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xs-12 col-sm-6">
            <div class="cardPackage">
                <div class="card-top">
                    <a href="https://github.com/seymuromarov/cbar-currency">
                        <div class="overlay">
                            <h1>OPEN</h1>
                        </div>
                    </a>
                    <img class="card-img" alt="package"
                         src="https://airnativeextensions.com/images/extensions/icons/ane-package-icon.png"/>
                </div>
                <div class="triangle">
                    <div class="circle-button" id="circleDrop" onclick="packageOpen(3)"><img class="close" id="close3"
                                                                                             alt="+"
                                                                                             src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/324479/close.svg"/>
                    </div>
                </div>
                <div class="card-middle" id="card-middle3">
                    <h5 class="more">Laravel api for getting Currency rates of Central Bank of Azerbaijan You can get
                        all currency information or search by Currency Code and get One.</h5>
                </div>
                <div class="card-bottom text-center">
                    <h2 class="card-title">CBAR Currency</h2>
                </div>
            </div>
        </div>
    </div>
</section>


{{--<section id="howicode">--}}
{{--<div class="container">--}}
{{--<div class="row">--}}
{{--<div class="col-md-4 col-md-offset-4 text-center">--}}
{{--<h2 class="major primary-text-color">How I Code</h2>--}}
{{--</div>--}}
{{--</div>--}}


{{--<div class="row" class="howicoderow">--}}
{{--<div class="col-md-10 col-xs-10 col-sm-10 col-lg-10  col-sm-offset-1 col-xs-offset-1 col-lg-offset-1 col-md-offset-1">--}}
{{--<div class="twentytwenty-container ">--}}
{{--<img alt="code" src="images/mycode_cr.png"/>--}}
{{--<img alt="design" src="images/work_cr.png"/>--}}
{{--</div>--}}
{{--</div>--}}
{{--<script src="js/jquery.event.move.js"></script>--}}
{{--<script src="js/jquery.twentytwenty.js"></script>--}}

{{--<script>--}}
{{--$(document).ready(function () {--}}
{{--$(".twentytwenty-container[data-orientation!='vertical']").twentytwenty({default_offset_pct: 0.7});--}}
{{--$(".twentytwenty-container[data-orientation='vertical']").twentytwenty({--}}
{{--default_offset_pct: 0.3,--}}
{{--orientation: 'vertical'--}}
{{--});--}}
{{--});--}}
{{--</script>--}}
{{--</div>--}}


{{--</div>--}}
{{--</section>--}}
{{--<div class="ribbon"></div>--}}
<section id="footer" class="default-primary-color">
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <h3>You can contact me on</h3>
                    <ul class="list-inline social">
                        <li class="os-animation animated shake" data-os-animation="shake"
                            data-os-animation-delay="0s"
                            style="animation-delay: 0s;"><a class="socialIcon"
                                                            href="https://github.com/seymuromarov"><i
                                        class="fa fa-github fa-2x"></i></a></li>
                        <li class="os-animation animated shake" data-os-animation="shake"
                            data-os-animation-delay="0s"
                            style="animation-delay: 0s;"><a class="socialIcon"
                                                            href="https://twitter.com/omarovseymur"><i
                                        class="fa fa-twitter fa-2x"></i></a></li>
                        <li class="os-animation animated shake" data-os-animation="shake"
                            data-os-animation-delay="0s"
                            style="animation-delay: 0s;"><a class="socialIcon"
                                                            href="https://www.instagram.com/seymuromarov/"><i
                                        class="fa fa-instagram fa-2x"></i></a></li>
                        <li class="os-animation animated shake" data-os-animation="shake"
                            data-os-animation-delay="0s"
                            style="animation-delay: 0s;"><a class="socialIcon"
                                                            href="https://facebook.com/seko.omaroff"><i
                                        class="fa fa-facebook fa-2x"></i></a></li>
                        <li class="os-animation animated shake" data-os-animation="shake"
                            data-os-animation-delay="0s"
                            style="animation-delay: 0s;"><a class="socialIcon"
                                                            href="https://www.linkedin.com/in/seymuromarov/"><i
                                        class="fa fa-linkedin fa-2x"></i></a></li>
                    </ul>
                    <p>Copyright © Seymur Omarov 2017</p>
                    <p class="hiddentags">seymur omarov , seymur,Seymur,Omarov,portfolio,omarov seymur,seymur
                        omarov,cv,resume,seymur omarov cv,seymur cv,seymur omarov developer</p>
                    <h1 class="hiddentags">
                        Seymur,Omarov,Seymur Omarov CV,cv,portfolio,Seymur Omarov Portfolio,Resume
                    </h1>
                </div>
            </div>
        </div>
    </footer>
</section>

{{--<script async src="js/bootstrap.min.js"></script>--}}
<script src="js/particles.js"></script>
<script async src="js/materialCards.js"></script>
<script async src="js/init.js"></script>
<script>
    function packageOpen(id) {
        $('#card-middle' + id).slideToggle();
        $('#close' + id).toggleClass('closeRotate');
    }
</script>
</body>
</html>
