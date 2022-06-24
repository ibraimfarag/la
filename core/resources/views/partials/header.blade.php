<!doctype html   {{ $lang=='ar' ? 'lang=ar dir=rtl' : '' }}>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""  {{ $lang=='ar' ? 'lang=ar dir=rtl' : '' }}> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""  {{ $lang=='ar' ? 'lang=ar dir=rtl' : '' }}> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""  {{ $lang=='ar' ? 'lang=ar dir=rtl' : '' }}> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""  {{ $lang=='ar' ? 'lang=ar dir=rtl' : '' }}> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Tatmeen | Official Website</title>
        <meta name="description" content="Tatmeen is a highly advanced track and trace platform for pharmaceuticals and medical products. Initiated by the Ministry of Health and Prevention to ensure protection of public health and improve the security of healthcare at all stages.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="{{ asset('') }}/apple-touch-icon.png">

        <meta itemprop="image" content="{{ URL::to('uploads/settings/'.Helper::GeneralSiteSettings("style_logo_" . @Helper::currentLanguage()->code)) }}">

        <!-- Twitter Card data -->
        <meta name="twitter:site" content="@publisher_handle">
        <meta name="twitter:title" content="Tatmeen | Official Website">
        <meta name="twitter:description" content="Tatmeen is a highly advanced track and trace platform for pharmaceuticals and medical products. Initiated by the Ministry of Health and Prevention to ensure protection of public health and improve the security of healthcare at all stages.">
        <meta name="twitter:creator" content="@author_handle">
        <!-- Twitter summary card with large image must be at least 280x150px -->
        <meta name="twitter:image:src" content="{{ URL::to('uploads/settings/'.Helper::GeneralSiteSettings("style_logo_" . @Helper::currentLanguage()->code)) }}">

        <!-- Open Graph data -->
        <meta property="og:title" content="Tatmeen | Official Website" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="{{ url('/') }}" />
        <meta property="og:image" content="{{ URL::to('uploads/settings/'.Helper::GeneralSiteSettings("style_logo_" . @Helper::currentLanguage()->code)) }}" />
        <meta property="og:description" content="Tatmeen is a highly advanced track and trace platform for pharmaceuticals and medical products. Initiated by the Ministry of Health and Prevention to ensure protection of public health and improve the security of healthcare at all stages." />
        <meta property="og:site_name" content="Tatmeen | Official Website" />
        <meta property="article:published_time" content="2021-09-27T05:59:00+01:00" />
        <meta property="article:modified_time" content="2021-09-27T19:08:47+01:00" />
        <meta property="article:section" content="Homepage" />
        <meta property="article:tag" content="Tatmeen | Official Website" />
        <link rel="icon" href="{{ URL::asset('uploads/settings/'.Helper::GeneralSiteSettings("style_fav")) }}" type="image/png">
        @if($lang=='ar')
            <link rel="stylesheet" href="{{ asset('') }}/assets/css/bootstrap-ar.min.css">
        @else
            <link rel="stylesheet" href="{{ asset('') }}/assets/css/bootstrap.min.css">
        @endif
        <style>
        </style>
        <link rel="stylesheet" media="screen" href="https://fontlibrary.org//face/droid-arabic-kufi" type="text/css"/>

        <link rel="stylesheet" href="{{ asset('') }}/assets/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="{{ asset('') }}/assets/fonts/Theme.FontAwesome.css">
        <link rel="stylesheet" href="{{ asset('') }}/assets/fonts/roboto/stylesheet.css">
        <link rel="stylesheet" href="{{ asset('') }}/assets/fonts/cairo/stylesheet.css">
        <!-- Link Swiper's CSS -->
        <link rel="stylesheet" href="{{ asset('') }}/assets/css/swiper-bundle.min.css">
        <link rel="stylesheet" href="{{ asset('') }}/assets/css/main.css?v={{ rand(1,99999) }}">


        @yield('css')

        @if($lang=='ar')
            <link rel="stylesheet" href="{{ asset('') }}/assets/css/main-ar.css?v={{ rand(1,99999) }}">
        @endif

        <script src="{{ asset('') }}/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

    </head>
    <body class="" id="maincontent">
<!--
<div id="readspeaker_button1" class="rs_skip rsbtn rs_preserve">
    <a rel="nofollow" class="rsbtn_play" accesskey="L" title="Listen to this page using ReadSpeaker"href="//app-as.readspeaker.com/cgi-bin/rsent?customerid=7426&amp;lang=en_uk&amp;readid=maincontent&amp;url=http://188.166.44.182/EVO/Tatmeen/V3/">
    <span class="rsbtn_left rsimg rspart"><span class="rsbtn_text"><span>Listen</span></span></span>
    <span class="rsbtn_right rsimg rsplay rspart"></span>
    </a>
</div>
-->
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <header id="header">
            <div class="container">
                <div class="row top">
                    <div class="te">
                        <img src="{{ $lang == "ar" ? asset('/assets/img/MOHAPUAELogoAr.png') : asset('/assets/img/MOHAPUAELogoEn.png') }}" id="mohapLogo">

                            <img src="{{ $lang == "ar" ? asset('/assets/img/4Stars.png') : asset('/assets/img/4Stars.png') }}" id="fourstars">










                            <img src="{{ URL::to('uploads/settings/'.Helper::GeneralSiteSettings("style_logo_" . @Helper::currentLanguage()->code)) }}"id="tatmeenLogo">


                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" id="mid-nav">
                        {{-- <div class="home-search-wrapper">
                            <input type="text" placeholder="Search...">
                            <div id="wt10_wt161" class="icon-search1 SeachInputIcon"></div>
                        </div> --}}

                        <div class="iconbts">
                            <a href="#" class="icon icon-contact-us" title="Contact us"></a>
                            <a href="#" class="icon icon-help" title="Help"></a>
                            <a href="#" class="icon icon-Font-Size" title="Font size">
                                <span class="hover-wrap" id="font-change">
                                    <span class="icon icon-Font-Size" onclick="resizeFontDefault();"></span>
                                    <span class="icon icon-Font-Size" onclick="resizeFontMedium();"></span>
                                    <span class="icon icon-Font-Size" onclick="resizeFontLarge();"></span>
                                </span>
                            </a>
                            <a href="#" class="icon icon-palette1" title="Color theme">
                                <span class="hover-wrap" id="color-change">
                                    <span class="color" onclick="colorGreen();"></span>
                                    <span class="color" onclick="colorDefault();"></span>
                                    <span class="color" onclick="colorRed();"></span>
                                </span>
                            </a>
                            <a href="#" class="Contrast icon icon-Contrast" title="Color Blind" onclick="colorInvert()"></a>
                            {{--<a href="#" class="icon icon-Volume-up"></a>--}}
                            <a class="LangAr cairo" href="{{ $lang=="ar" ? url('/') : url('/ar') }}">{{ $lang=="ar" ? 'ENGLISH' : 'العربية' }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid" id="main-nav">
                <div class="container">
                    <div class="row">
                        <div class="container relative">
                            <ul id="mainnav">
                                <li><a href="{{ $lang=="ar" ? url($lang.'/') : url('/') }}" class="resizeable-font">{{ $lang == 'ar' ? 'الصفحة الرئيسية' : 'Home' }}</a></li>
                                <li><a href="{{ $lang=="ar" ? url($lang.'/about') : url('/about') }}" class="resizeable-font">{{ $lang == 'ar' ? 'نبذة عنا' : 'About' }}</a></li>
                                <li><a href="{{ $lang=="ar" ? url($lang.'/benefits-and-goals') : url('/benefits-and-goals') }}" class="resizeable-font">{{ $lang == 'ar' ? 'المزايا والأهداف' : 'Benefits & Goals' }}</a></li>
                                <li><a href="{{ $lang=="ar" ? url($lang.'/faqs') : url('/faqs') }}" class="resizeable-font">{{ $lang == 'ar' ? 'الأسئلة الشائعة' : 'FAQs' }}</a></li>
                                <li><a href="{{ $lang=="ar" ? url($lang.'/updates') : url('/updates') }}" class="resizeable-font">{{ $lang == 'ar' ? 'المستجدات' : 'Updates' }}</a></li>
                                <li><a href="{{ $lang=="ar" ? url($lang.'/documents') : url('/documents') }}" class="resizeable-font">{{ $lang == 'ar' ? 'المستندات' : 'Documents' }}</a></li>
                                <li><a href="{{ $lang=="ar" ? url($lang.'/onboarding') : url('/onboarding') }}" class="resizeable-font">{{ $lang == 'ar' ? 'برنامج التوجيه والإرشاد' : 'Onboarding' }}</a></li>
                                <li><a href="{{ $lang=="ar" ? url($lang.'/contact-us') : url('/contact-us') }}" class="resizeable-font">{{ $lang == 'ar' ? 'اتصل بنا' : 'Contact Us' }}</a></li>
                            </ul>
                            <a href="#" id="menuIcon" onclick="toggleMenu(this)">
                                <div></div>
                                <div></div>
                                <div></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
{{--
        <div id="socialbar" class="{{ $lang=="ar" ? 'slide-in-left' : 'slide-in-right' }}">
            <a href="{{Helper::GeneralSiteSettings('social_link1')}}" target="_blank">
                <span class="fa fa-fw fa-facebook"></span>
            </a>
            <a href="{{Helper::GeneralSiteSettings('social_link2')}}" target="_blank">
                <span class="fa fa-fw fa-twitter"></span>
            </a>
            <a href="{{Helper::GeneralSiteSettings('social_link5')}}" target="_blank">
                <span class="fa fa-fw fa-youtube"></span>
            </a>
            <a href="{{Helper::GeneralSiteSettings('social_link6')}}" target="_blank">
                <span class="fa fa-fw fa-instagram"></span>
            </a>
            <a href="{{Helper::GeneralSiteSettings('social_link4')}}" target="_blank">
                <span class="fa fa-fw fa-linkedin"></span>
            </a>
        </div>  --}}
        <div id="sidebg"></div>
        <div id="oval"></div>
