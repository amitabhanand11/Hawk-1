<!doctype html>
<!--[if lt IE 7]><html lang="en" class="no-js ie6"><![endif]-->
<!--[if IE 7]><html lang="en" class="no-js ie7"><![endif]-->
<!--[if IE 8]><html lang="en" class="no-js ie8"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
    <!--<![endif]-->

    <head>
        <?php
        $logo = '/image/logo.png';
        $favicon = '/image/favicon.ico';
        if (Config::get("database.connections.mysql.database") != "") {
            $theme = Theme::all();
            foreach ($theme as $themes) {
                $logo = '/uploads/' . $themes->logo;
                $favicon = '/uploads/' . $themes->favicon;
            }
            if ($logo == '/uploads/') {
                $logo = '/image/logo.png';
            }
            if ($favicon == '/uploads/') {
                $favicon = '/image/favicon.ico';
            }
        }
        ?>
        <meta charset="UTF-8">
        <title><?= Config::get('app.website_title') ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <!--<link rel="shortcut icon" href="favicon.ico">-->
        <link rel="icon" type="image/ico" href="<?php echo asset_url() . $favicon; ?>">

        <link rel="stylesheet" href="<?php echo asset_url(); ?>/website/css/bootstrap.min.css">

        <link rel="stylesheet" href="<?php echo asset_url(); ?>/website/css/font-awesome.min.css">

        <link rel="stylesheet" href="<?php echo asset_url(); ?>/website/css/animate.css">

        <link rel="stylesheet" href="<?php echo asset_url(); ?>/website/css/owl.carousel.css">
        <link rel="stylesheet" href="<?php echo asset_url(); ?>/website/css/owl.theme.css">
        <link rel="stylesheet" href="<?php echo asset_url(); ?>/website/css/styles.css">
        <script src="<?php echo asset_url(); ?>/website/js/modernizr.custom.32033.js"></script>

    <!--[if IE]><script type="text/javascript" src="js/excanvas.compiled.js"></script><![endif]-->

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <div class="pre-loader">
            <div class="load-con">
                <!--<img src="<?php echo asset_url() ?><?php echo $logo; ?>" class="animated fadeInDown" alt="" width="200">-->
                <div class="spinner">
                    <div class="bounce1"></div>
                    <div class="bounce2"></div>
                    <div class="bounce3"></div>
                </div>
            </div>
        </div>

        <!-- Fixed navbar -->
        <div class="navbar navbar-static-top" id="nav" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">{{ tran('toggle') }}</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="<?php echo asset_url(); ?><?php echo $logo; ?>" alt="">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav social hidden-xs hidden-sm">
                        <li><a href="<?= Config::get('app.developer_company_twitter_link') ?>" target="_blank"><i class="fa fa-twitter fa-lg fa-fw"></i></a></li>
                        <li><a href="<?= Config::get('app.developer_company_fb_link') ?>" target="_blank"><i class="fa fa-facebook fa-lg fa-fw"></i></a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#slider">{{tran('home')}}</a></li>
                        <li><a href="#features">{{tran('features')}}</a></li>
                        <li><a href="#download">{{tran('demo')}}</a></li>
                        <li><a href="#signup">{{tran('signin')}}</a></li>
                        <li><a href="#contact">{{tran('contact')}}</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!--/.container -->
        </div>
        <!--/.navbar -->

        <!-- Wrap all page content here -->
        <div id="wrap">
            <!--<div style="font-family: inherit;width: 100%; background-color: rgba(255,255,255,0.6);position: fixed; z-index: 10000; top: 100px;text-align: center;padding: 10px 0px;">
                <h1 style="margin: 0px;color: #000;"><span>THIS IS A PROPERTY OF <a href="http://appjasmine.com/" style="color:#000" target="_blank">APPJASMINE.COM</a> & <a href="http://www.elluminati.in/" style="color:#000" target="_blank">ELLUMINATI</a></span></h1>
                <h4 style="color: #000;">For Inquires, Customisation, Support & Installation, Please contact the below sites,</h4>
                <p><strong><a href="http://appjasmine.com/" style="color:#000" target="_blank"> APPJasmine.com</a> <span style="color:#000">&</span> <a href="http://www.elluminati.in/" style="color:#000" target="_blank">Elluminati</a></strong></p>
            </div>-->
            <header class="masthead">
                <div class="slider-container" id="slider">
                    <div class="container">
                        <div class="row mh-container">
                            <h1><span><?= Config::get('app.website_title') ?></span></h1>
                            <h3>{{ tran('pick') }} <?= Config::get('app.website_title') ?></h3>
                            <div class="col-md-2 col-sm-4 col-xs-6" style="margin:0 auto;float:none;">
                                <div class="btn-group btn-group-justified btn-lg small">
                                    <div class="btn-group text-right">
                                        <a href="<?= Config::get('app.ios_client_app_url') ?>" onclick="window.open('<?= Config::get('app.ios_client_app_url') ?>');
    window.open('<?= Config::get('app.ios_provider_app_url') ?>');
    return false;" target="_blank" class="btn btn-default scrollpoint sp-effect6"> <?php /* echo Config::get('app.ios_client_app_url') */ ?>
                                            <span class="apple"></span>
                                        </a>
                                    </div>
                                    <div class="btn-group text-left">
                                        <a href="<?= Config::get('app.android_client_app_url') ?>" onclick="window.open('<?= Config::get('app.android_client_app_url') ?>');
                                                window.open('<?= Config::get('app.android_provider_app_url') ?>');
                                                return false;" target="_blank" class="btn btn-default scrollpoint sp-effect6">
                                            <span class="play"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--<h1 style="margin: 0px;color: #ff0000;"><span>THIS IS A PROPERTY OF <a href="http://appjasmine.com/" style="color:#ff0000" target="_blank">APPJASMINE.COM</a> & <a href="http://www.elluminati.in/" style="color:#ff0000" target="_blank">ELLUMINATI</a></span></h1>-->
                            <div class="col-md-10 col-md-push-1 mh-slider col-xs-12">
                                <div class="row">
                                    <div class="col-md-3 col-xs-12 bt">
                                        <a href="#download" class="btn btn-default side">{{ tran('view_demo') }}</a>
                                    </div>
                                    <div class="col-md-6 hidden-sm hidden-xs">
                                        <div id="carousel-slider" class="carousel slide" data-ride="carousel">

                                            <!-- Wrapper for slides -->
                                            <div class="carousel-inner">
                                                <div class="item active">
                                                    <img src="<?php echo asset_url(); ?>/website/img/slide1.png" alt="..." class="img-responsive">
                                                </div>                                            
                                                <div class="item">
                                                    <img src="<?php echo asset_url(); ?>/website/img/slide2.png" alt="..." class="img-responsive">
                                                </div>
                                            </div>

                                            <!-- Controls -->
                                            <a class="left carousel-control" href="#carousel-slider" role="button" data-slide="prev">
                                                <span class="slider-left"></span>
                                            </a>
                                            <a class="right carousel-control" href="#carousel-slider" role="button" data-slide="next">
                                                <span class="slider-right"></span>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="col-md-3 col-xs-12 bt">
                                        <a href="#features" class="btn btn-empty side">{{ tran('learn') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Fixed navbar -->
                <div class="navbar navbar-static-top" id="nav" role="navigation">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">{{ tran('toggle') }}</span>
                                <i class="fa fa-align-justify"></i>
                            </button>
                            <a class="navbar-brand" href="#">
                                <img src="<?php echo asset_url(); ?><?php echo $logo; ?>" alt="">
                            </a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav social hidden-xs hidden-sm">
                                <li><a href="<?= Config::get('app.developer_company_twitter_link') ?>" target="_blank"><i class="fa fa-twitter fa-lg fa-fw"></i></a></li>
                                <li><a href="<?= Config::get('app.developer_company_fb_link') ?>" target="_blank"><i class="fa fa-facebook fa-lg fa-fw"></i></a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="active"><a href="#slider">{{tran('home')}}</a></li>
                                <li><a href="#features">{{tran('features')}}</a></li>
                                <li><a href="#download">{{tran('demo')}}</a></li>
                                <li><a href="#signup">{{tran('signin')}}</a></li>
                                <li><a href="#contact">{{tran('contact')}}</a></li>
                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                    <!--/.container -->
                </div>
                <!--/.navbar -->

            </header>

            <section id="signup">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-push-2 clearfix">
                            <div class="section-heading scrollpoint sp-effect3">
                                <h3><?= Config::get('app.website_title') ?><span> {{ tran('signin') }} </span></h3>
                                <span class="divider"></span>
                            </div>
                        </div>

                    </div>
                    <div class="row text-center">
                        <a href="<?php echo web_url(); ?>/user/signin" class="btn btn-sign-up">{{ tran('USER') }}</a>
                        <a href="<?php echo web_url(); ?>/provider/signin" class="btn btn-sign-up">{{ tran('PROVIDER') }}</a>

                        <div class="section-heading scrollpoint sp-effect3">
                            {{ tran('select_lang') }} :
                            {{ Form::open(array('url' => 'locale/change')) }}
                            <input name="_token" type="hidden" value="V9RnKW2JfPSXb7pgWFvxtKyaKMmNTH0tYmFLfrPW">
                            <select class="select-style" style="color: #25282a;" id="locale_changer" name="locale" onchange=" this.form.submit();">
                                <option value="en" <?php if (Session::get("locale") == "en") { ?> selected="" <?php } ?>>English</option>
                                <option value="es" <?php if (Session::get("locale") == "es") { ?> selected="" <?php } ?>>Spanish</option>
                            </select>
                            {{ Session::put('lang',Input::get('locale'))}}
                            {{ Form::close() }}

                        </div>

                    </div>

                </div>

            </section>

            <section id="features">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-push-2 clearfix">
                            <div class="section-heading scrollpoint sp-effect3">
                                <h3><?= Config::get('app.website_title') ?><span> {{ tran('features') }}</span></h3>
                                <span class="divider"></span>
                                <p> {{ tran('explore') }} <?= Config::get('app.website_title') ?> {{ tran('features') }}.</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <div class="row">
                                            <div class="col-md-3 col-sm-6">
                                                <div class="feature scrollpoint sp-effect2">
                                                    <div class="icon">
                                                        <i class="fa fa-sign-in fa-4x"></i>
                                                    </div>
                                                    <h4>{{ tran('social') }}</h4>
                                                    <p>{{ tran('social_msg') }}</p>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="feature scrollpoint sp-effect2">
                                                    <div class="icon">
                                                        <i class="fa fa-cab fa-4x"></i>
                                                    </div>
                                                    <h4>{{ tran('show_nearby') }}</h4>
                                                    <p>{{ tran('show_nearby_msg') }}</p>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="feature scrollpoint sp-effect1">
                                                    <div class="icon">
                                                        <i class="fa fa-history fa-4x"></i>
                                                    </div>
                                                    <h4>{{ tran('eta') }}</h4>
                                                    <p>{{ tran('eta_msg') }}</p>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="feature scrollpoint sp-effect2">
                                                    <div class="icon">
                                                        <i class="fa fa-dollar fa-4x"></i>
                                                    </div>
                                                    <h4>{{ tran('fare_calc') }}</h4>
                                                    <p>{{ tran('fare_calc_msg') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-md-3 col-sm-6">
                                                <div class="feature scrollpoint sp-effect2">
                                                    <div class="icon">
                                                        <i class="fa fa-flag fa-4x"></i>
                                                    </div>
                                                    <h4>{{ tran('lang_tran') }}</h4>
                                                    <p>{{ tran('lang_tran_msg') }}</p>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="feature scrollpoint sp-effect1">
                                                    <div class="icon">
                                                        <i class="fa fa-tags fa-4x"></i>
                                                    </div>
                                                    <h4>{{ tran('promo') }}</h4>
                                                    <p>{{ tran('promo_msg') }}</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <section id="download">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-push-1">
                            <h1><span>{{ tran('view_demo') }} {{ tran('now') }}</span></h1>
                            <h4>{{ tran('demo_lets') }} <?= Config::get('app.website_title') ?> app.<br>
                                {{ tran('wanna_look') }}</h4>
                        </div>
                        <div class="btn-group btn-group-justified btn-lg">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="row">
                                        <div class="btn-group scrollpoint sp-effect4">
                                            <a href="<?= Config::get('app.ios_client_app_url') ?>" onclick="window.open('<?= Config::get('app.ios_provider_app_url') ?>');" target="_blank" class="btn btn-default">
                                                <span class="appstore"></span>
                                            </a>
                                        </div>  
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="row">
                                        <div class="btn-group scrollpoint sp-effect4">
                                            <a href="<?= Config::get('app.android_client_app_url') ?>" onclick="window.open('<?= Config::get('app.android_provider_app_url') ?>');" target="_blank" class="btn btn-default">
                                                <span class="playstore"></span>
                                            </a>
                                        </div>  
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="settings">
                <div class="container">
                    <div class="col-md-7">
                        <img src="<?php echo asset_url(); ?>/website/img/weather.png" alt="" class="scrollpoint sp-effect3">
                        <h2 class="scrollpoint sp-effect3"><?= Config::get('app.website_title') ?> <span>App</span></h2>
                        <p class="first">{{ tran('start_your') }}</p>

                        <p>
                            <a href="#download" class="btn btn-default scrollpoint sp-effect1">{{ tran('view_demo') }}</a>
                            <a href="#features" class="btn btn-empty scrollpoint sp-effect2">{{ tran('learn') }}</a>
                        </p>
                    </div>
                    <div class="col-md-5 scrollpoint sp-effect5">
                        <img src="<?php echo asset_url(); ?>/website/img/iphone1.png" class="img-responsive hidden-xs iphone-settings" alt="">
                    </div>
                </div>
            </section>

            <!--<section id="screenshots">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 hidden-xs">
                            <span class="owl-prev"><i class="fa fa-chevron-left fa-2x"></i></span>
                        </div>
                        <div class="col-md-8">
                            <div class="section-heading scrollpoint sp-effect3">
                                <h3><?= Config::get('app.website_title') ?> App<span> screen shots</span></h3>
                                <span class="divider"></span>

                            </div>
                        </div>
                        <div class="col-md-2 hidden-xs">
                            <span class="owl-next"><i class="fa fa-chevron-right fa-2x"></i></span>
                        </div>                 
                    </div>
                </div>
                <div id="owl-screenshots" class="owl-carousel">
                    <div><img src="<?php echo asset_url(); ?>/website/img/screen1.jpg" alt=""></div>
                    <div><img src="<?php echo asset_url(); ?>/website/img/screen2.jpg" alt=""></div>
                    <div><img src="<?php echo asset_url(); ?>/website/img/screen3.jpg" alt=""></div>
                    <div><img src="<?php echo asset_url(); ?>/website/img/screen4.jpg" alt=""></div>
                    <div><img src="<?php echo asset_url(); ?>/website/img/screen5.jpg" alt=""></div>
                    <div><img src="<?php echo asset_url(); ?>/website/img/screen6.jpg" alt=""></div>
                    <div><img src="<?php echo asset_url(); ?>/website/img/screen7.jpg" alt=""></div>

                </div>
            </section>-->

            <footer id="contact">
                <div class="container">                                     
                    <div class="row"> 
                        <div class="col-md-8 col-md-push-2 clearfix">
                            <div class="section-heading scrollpoint sp-effect3">
                                <h3><span>{{ tran('get_in_touch') }}</span></h3>
                                <span class="divider"></span>
                                <p>{{ tran('you_have')}} <a style="color:#fff;" href="mailto:<?= Config::get('app.developer_company_email') ?>" ><?= Config::get('app.developer_company_email') ?>.</a> {{ tran('shoot_mail') }}</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="social">
                                <ul>
                                    <li><a href="<?= Config::get('app.developer_company_twitter_link') ?>" target="_blank"><i class="fa fa-twitter fa-lg"></i></a></li>
                                    <li><a href="<?= Config::get('app.developer_company_fb_link') ?>" target="_blank"><i class="fa fa-facebook fa-lg"></i></a></li>
                                </ul>
                            </div>
                            <p class="rights">
                                <?php echo date("Y");?> <span><?= Config::get('app.website_title') ?></span> {{ tran('dev_by') }} <a href="<?= Config::get('app.developer_company_web_link') ?>" target="_blank"><span><?= Config::get('app.developer_company_name') ?></span></a> | <a href="{{route('termsncondition')}}"><span>{{ tran('terms_and_condition') }}</span></a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="<?php echo asset_url(); ?>/website/js/bootstrap.min.js"></script>
        <script src="<?php echo asset_url(); ?>/website/js/owl.carousel.min.js"></script>
        <script src="<?php echo asset_url(); ?>/website/js/waypoints.min.js"></script>

   <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script>

     jQuery REVOLUTION Slider  -->
        <script type="text/javascript" src="<?php echo asset_url(); ?>/website/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
        <script type="text/javascript" src="<?php echo asset_url(); ?>/website/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

        <script src="<?php echo asset_url(); ?>/website/js/script.js"></script>
        <script>
                                                $(document).ready(function () {
                                                    appMaster.preLoader();
                                                });
        </script>

        
    </body>

</html>