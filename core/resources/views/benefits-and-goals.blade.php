@extends('partials.master')

<?php $ua = htmlentities($_SERVER['HTTP_USER_AGENT'], ENT_QUOTES, 'UTF-8'); ?>

@section('css')
    <style>
        .intro-img {
            max-width: 700px !important;
            width: 700px !important;
            margin-left: auto !important;
        }

        #intro .intro-heading {
            margin-top: 140px;
            font-size: 58px;
            margin-bottom: 20px;
            margin-top: 0;
        }

        #intro .intro-description {
            font-size: 18px;
            color: #6d6e71;
            line-height: 22px;
        }

        #intro .intro-sub {
            color: #6d6e71;
            font-weight: 900;
            font-size: 24px;
            line-height: 28px;
        }

        .intro-img {
            max-width: 750px;
        }

        .wrapper {
            position: relative;
            margin-top: 60px;
            min-height: 500px;
        }

        .copybox {
            position: absolute;
            width: 400px;
        }

        .copybox.left .image, .copybox.left .copy {
            float: right;
            text-align: left;
        }

        .copybox.right .image, .copybox.right .copy {
            float: left;
            text-align: left;
        }


        .copybox.left .copy {
            padding-right: 20px;
        }

        .copybox.right .copy {
            padding-left: 20px;
        }

        .copybox .image {
            width: 140px;
        }

        .copybox .image img {
            width: 100%;
        }

        .copybox .copy {
            width: 260px;
        }

        .copybox .copy h5, .copybox .copy p  {
            font-size: 18px;
            line-height: 20px;
        }

        .copybox .copy h5  {
            font-size: 22px;
            line-height: 24px;
        }

        .copybox .copy h5 {
            color: #b8942f;
            font-weight: 600;
        }

        .copybox.tl {
            top: 0;
            left: 0;
        }

        .copybox.tr {
            top: 0;
            right: 0;
        }

        .copybox.bl {
            bottom: 0;
            left: 0;
        }

        .copybox.br {
            bottom: 0;
            right: 0;
        }

        .copybox .line-tl {
            position: absolute;
            right: -210px;
            bottom: 0;
        }

        .copybox .line-tr {
            position: absolute;
            left: -210px;
            bottom: 0;
        }

        .copybox .line-bl {
            position: absolute;
            right: -210px;
            top: 0;
        }

        .copybox .line-br {
            position: absolute;
            left: -210px;
            top: 0;
        }

        .intro-img {
            z-index: 1;
            position: relative;
            margin-right: 0 !important;
        }

        #figures hr {
            background-color: #b8942f;
            height: 2px;
        }

        #figures .swiper-pagination {
            text-align: center;
        }

        .figwrap {
            background-color: #fff;
            padding: 40px 20px;
            margin-bottom: 30px;
            min-height: 350px;
        }

        .mobilebg {
            position: absolute;
            left: 50%;
            margin-left: -350px;
        }

        .questionslider, .benefitslider {
            overflow: hidden;
            position: relative;
        }

        .benefitslider {
            min-height: 490px;
        }

        .supplierslider {
            height: 490px;
        }

        .swiper-pagination {
            bottom: 0 !important;
            top: auto !important;
            text-align: left;
        }

        .questionslider, .benefitslider {
            padding-bottom: 20px;
        }

        .swiper-pagination-bullet {
            width: 100px;
            border-radius: 0;
            margin: 0 !important;
            background-color: #e1d590;
            opacity: 1;
            height: 5px;
        }

        .swiper-pagination-bullet-active {
            background-color: #16a647;
        }

        .scrollitems .details {
            text-align: center;
            max-width: 300px;
            border-top: 1px solid #b8942f;
            padding-top: 8px;
        }

        .benefitslider {
            height: 500px;
        }

        .questionslider {
            min-height: 300px;
        }

        .benefitslider .swiper-slide {
            padding-right: 20px;
            text-align: center;
        }

        .benefitslider .swiper-slide .figwrap {
            min-height: 520px;
        }

        .scrollitems .item:nth-of-type(1n) {
            margin-top: 60px;
        }

        .scrollitems .item .hexagon {
            right: 50%;
            margin-right: -135px;
            top: -40px;
        }

        .scrollitems .data {
            font-size: 80px;
            color: #b8942f;
            font-weight: bold;
            text-transform: uppercase;
            line-height: 80px;
            margin: 0;
        }

        .scrollitems .sub {
            font-size: 24px;
            color: #b8942f;
            font-weight: 600;
            text-transform: uppercase;
        }

        .scrollitems .line {
            top: 0;
        }

        .scrollitems .line.down{
            top: 10%;
        }


        @media  only screen and (max-width:1200px) {
            .copybox {
                width: 250px;
            }

            .figwrap p {
                font-size: 16px;
            }
        }

        @media  only screen and (max-width:991px) {
            .copybox {
                width: 170px;
            }

            .copybox .copy {
                width: 100%;
                padding: 0 !important;
            }

            #intro .intro-img {
                width: 650px !Important;
            }

            .figwrap {
                min-height: 300px;
            }
        }

        @media  only screen and (max-width:991px) {
            .copybox {
                position: relative;
                display: block;
                width: 100%;
                float: left;
                text-align: center;
            }

            #intro .intro-img {
                width: 100% !Important;
            }

            .copybox .image, .copybox .copy {
                float: none !important;
                display: inline-block;
                text-align: center !important;
            }

            .copybox {
                padding: 30px 0;
            }

            #question .left {
                text-align: center;
            }

            #question .left img {
                width: 300px;
                margin-bottom: 30px;
            }

            #question .right {
                text-align: center;
            }

        }

        @media  only screen and (max-width:767px) {

            .figwrap {
                min-height: 230px;
            }

            .wrapper {
                min-height: 100px;
            }

        }

        @media  only screen and (max-width:520px) {

            .scrollitems .item img {
                width: auto;
            }

            .scrollitems .item .hexagon {
                margin-right: -195px;
            }

            .scrollitems .details {
                padding-top: 8px !important;
            }
            .swiper-pagination-bullet {
                width: 40px;
            }
        }

    </style>

    @if(preg_match('~MSIE|Internet Explorer~i', $ua) || (strpos($ua, 'Trident/7.0') !== false && strpos($ua, 'rv:11.0') !== false))
        <style>
            #question {
            max-height: 500px;
            }

            #figures {
            max-height: 690px;
            }
        </style>
    @endif
@endsection

@section('content')
@foreach($top_title_ar as $top_title_ar)
@foreach($top_title_en as $top_title_en)
@foreach($top_desc_ar as $top_desc_ar)
@foreach($top_desc_en as $top_desc_en)
@foreach($middle_photo_ar as $middle_photo_ar)
@foreach($middle_photo_en as $middle_photo_en)
@foreach($item_one_photo as $item_one_photo)
@foreach($item_one_title_ar as $item_one_title_ar)
@foreach($item_one_title_en as $item_one_title_en)
@foreach($item_one_desc_ar as $item_one_desc_ar)
@foreach($item_one_desc_en as $item_one_desc_en)
@foreach($item_two_photo as $item_two_photo)
@foreach($item_two_title_ar as $item_two_title_ar)
@foreach($item_two_title_en as $item_two_title_en)
@foreach($item_two_desc_ar as $item_two_desc_ar)
@foreach($item_two_desc_en as $item_two_desc_en)
@foreach($item_three_photo as $item_three_photo)
@foreach($item_three_title_ar as $item_three_title_ar)
@foreach($item_three_title_en as $item_three_title_en)
@foreach($item_three_desc_ar as $item_three_desc_ar)
@foreach($item_three_desc_en as $item_three_desc_en)
@foreach($item_four_photo as $item_four_photo)
@foreach($item_four_title_ar as $item_four_title_ar)
@foreach($item_four_title_en as $item_four_title_en)
@foreach($item_four_desc_ar as $item_four_desc_ar)
@foreach($item_four_desc_en as $item_four_desc_en)
@foreach($que_one_ar as $que_one_ar)
@foreach($ans_one_ar as $ans_one_ar)
@foreach($que_one_en as $que_one_en)
@foreach($ans_one_en as $ans_one_en)
@foreach($que_two_ar as $que_two_ar)
@foreach($ans_two_ar as $ans_two_ar)
@foreach($que_two_en as $que_two_en)
@foreach($ans_two_en as $ans_two_en)
@foreach($BENEFITS_title_ar as $BENEFITS_title_ar)
@foreach($BENEFITS_title_en as $BENEFITS_title_en)
@foreach($BENEFITS_item_one_photo as $BENEFITS_item_one_photo)
@foreach($BENEFITS_item_one_desc_en as $BENEFITS_item_one_desc_en)
@foreach($BENEFITS_item_one_desc_ar as $BENEFITS_item_one_desc_ar)
@foreach($BENEFITS_item_two_photo as $BENEFITS_item_two_photo)
@foreach($BENEFITS_item_two_desc_en as $BENEFITS_item_two_desc_en)
@foreach($BENEFITS_item_two_desc_ar as $BENEFITS_item_two_desc_ar)
@foreach($BENEFITS_item_three_photo as $BENEFITS_item_three_photo)
@foreach($BENEFITS_item_three_desc_en as $BENEFITS_item_three_desc_en)
@foreach($BENEFITS_item_three_desc_ar as $BENEFITS_item_three_desc_ar)
@foreach($BENEFITS_item_four_photo as $BENEFITS_item_four_photo)
@foreach($BENEFITS_item_four_desc_en as $BENEFITS_item_four_desc_en)
@foreach($BENEFITS_item_four_desc_ar as $BENEFITS_item_four_desc_ar)
@foreach($BENEFITS_item_five_photo as $BENEFITS_item_five_photo)
@foreach($BENEFITS_item_five_desc_en as $BENEFITS_item_five_desc_en)
@foreach($BENEFITS_item_five_desc_ar as $BENEFITS_item_five_desc_ar)
@foreach($facts_title_en as $facts_title_en)
@foreach($facts_title_ar as $facts_title_ar)
@foreach($facts_item_one_photo as $facts_item_one_photo)
@foreach($facts_item_one_num as $facts_item_one_num)
@foreach($facts_item_one_desc_en as $facts_item_one_desc_en)
@foreach($facts_item_one_desc_ar as $facts_item_one_desc_ar)
@foreach($facts_item_two_photo as $facts_item_two_photo)
@foreach($facts_item_two_num as $facts_item_two_num)
@foreach($facts_item_two_desc_en as $facts_item_two_desc_en)
@foreach($facts_item_two_desc_ar as $facts_item_two_desc_ar)
@foreach($facts_item_three_photo as $facts_item_three_photo)
@foreach($facts_item_three_num as $facts_item_three_num)
@foreach($facts_item_three_desc_en as $facts_item_three_desc_en)
@foreach($facts_item_three_desc_ar as $facts_item_three_desc_ar)
@foreach($facts_item_four_photo as $facts_item_four_photo)
@foreach($facts_item_four_num as $facts_item_four_num)
@foreach($facts_item_four_unit_ar as $facts_item_four_unit_ar)
@foreach($facts_item_four_unit_en as $facts_item_four_unit_en)
@foreach($facts_item_four_desc_en as $facts_item_four_desc_en)
@foreach($facts_item_four_desc_ar as $facts_item_four_desc_ar)

    <section id="intro" class=" graybg">
        <div class="container relative">
            <div class="row">
                <div class="col-lg-12 col-md-12 text-center">
                    <h1 class="intro-heading resizeable-font">{{ $lang=="ar" ? $top_title_ar->field_value : $top_title_en->field_value }}</h1>
                    <p class="intro-sub resizeable-font uppercase">{{ $lang=="ar" ? $top_desc_ar->field_value : $top_desc_en->field_value }}</p>

                    <div class="wrapper">
                        <img src="{{ $lang == 'ar' ? URL('/uploads/topics/'.$middle_photo_ar->field_value) : URL('/uploads/topics/'.$middle_photo_en->field_value) }}" class="intro-img parallax" data-value="-8" data-animation="puff-in-center">
                        <img src="{{ asset('') }}/assets/img/benefits/mobile-bg.png" class="mobilebg toanimate rotating">

                        <div class="copybox tl left">
                            <div class="image">
                                <img src="{{URL('uploads/topics/'.$item_one_photo->field_value) }}">
                            </div>
                            <div class="copy">
                                <h5>{{ $lang=="ar" ? $item_one_title_ar->field_value : $item_one_title_en->field_value }}</h5>
                                <p>{{ $lang=="ar" ? $item_one_desc_ar->field_value : $item_one_desc_en->field_value }}</p>
                            </div>
                            <div class="line-tl"><img src="{{ asset('') }}/assets/img/benefits/line-tl.png"></div>
                        </div>

                        <div class="copybox tr right">
                            <div class="image">
                                <img src="{{URL('uploads/topics/'.$item_two_photo->field_value) }}">
                            </div>
                            <div class="copy" style="{{ $lang=="ar" ? 'text-align: right' : '' }}">
                                <h5>{{ $lang=="ar" ? $item_two_title_ar->field_value : $item_two_title_en->field_value }} </h5>
                                <p>{{ $lang=="ar" ? $item_two_desc_ar->field_value : $item_two_desc_en->field_value }}</p>
                            </div>
                            <div class="line-tr"><img src="{{ asset('') }}/assets/img/benefits/line-tr.png"></div>
                        </div>


                        <div class="copybox bl left">
                            <div class="image">
                                <img src="{{URL('uploads/topics/'.$item_three_photo->field_value) }}">
                            </div>
                            <div class="copy">
                                <h5>{{ $lang=="ar" ? $item_three_title_ar->field_value : $item_three_title_en->field_value  }} </h5>
                                <p>{{ $lang=="ar" ? $item_three_desc_ar->field_value : $item_three_desc_en->field_value  }}</p>
                            </div>
                            <div class="line-bl"><img src="{{ asset('') }}/assets/img/benefits/line-bl.png"></div>
                        </div>

                        <div class="copybox br right">
                            <div class="image">
                                <img src="{{URL('uploads/topics/'.$item_four_photo->field_value) }}">
                            </div>
                            <div class="copy" style="{{ $lang=="ar" ? 'text-align: right' : '' }}">
                                <h5>{{ $lang=="ar" ? $item_four_title_ar->field_value : $item_four_title_en->field_value  }}</h5>
                                <p>{{ $lang=="ar" ? $item_four_desc_ar->field_value : $item_four_desc_en->field_value  }}</p>
                            </div>
                            <div class="line-br"><img src="{{ asset('') }}/assets/img/benefits/line-br.png"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="question" class="dot-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 left">
                    <img src="{{ asset('') }}/assets/img/benefits/question.png" width="90%;">
                </div>
                <div class="col-lg-8 text-left right">
                    <div class="questionslider">
                        <div class="swiper-wrapper">
                            <div class="item swiper-slide">
                                <h5 class="yellow-heading mb-4">{{ $lang=="ar" ? $que_one_ar->field_value : $que_one_en->field_value   }}</h5>
                                @if($lang=="ar")
                                <p> {{ $ans_one_ar->field_value}}</p>
                                @else
                                <p>{{  $ans_one_en->field_value  }} </p>
                                @endif
                            </div>
                            <div class="item swiper-slide">
                                <h5 class="yellow-heading mb-4">{{ $lang=="ar" ?  $que_two_ar->field_value : $que_two_en->field_value }}</h5>
                                @if($lang=="ar")
                                <p> {{ $ans_two_ar->field_value}}</p>
                                @else
                                <p>{{  $ans_two_en->field_value  }} </p>
                                @endif
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="figures" class="relative graybgtop">
        <div class="dot-bg-floating"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 colm toanimate" data-animation="{{ $lang=="ar" ? 'slide-in-right' : 'slide-in-left' }}">
                    <h3 class="grey-heading mb-4">{{ $lang=="ar" ? $BENEFITS_title_ar->field_value : $BENEFITS_title_en->field_value  }}</h3>
                </div>
                <div class="col-lg-12 colm toanimate" data-animation="{{ $lang=="ar" ? 'slide-in-left' : 'slide-in-right' }}">

                    <div class="benefitslider">
                        <div class="swiper-wrapper">
                            <div class="item swiper-slide">
                                <div class="figwrap">
                                    <img src="{{URL('uploads/topics/'.$BENEFITS_item_one_photo->field_value) }}">
                                    <hr/>

                                    @if($lang=="ar")
                                        <p>{{ $BENEFITS_item_one_desc_ar->field_value }}</p>
                                    @else
                                        <p>{{ $BENEFITS_item_one_desc_en->field_value }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="item swiper-slide">
                                <div class="figwrap">
                                    <img src="{{URL('uploads/topics/'.$BENEFITS_item_two_photo->field_value) }}">
                                    <hr/>
                                    @if($lang=="ar")
                                        <p>{{ $BENEFITS_item_two_desc_ar->field_value }}</p>
                                    @else
                                        <p>{{ $BENEFITS_item_two_desc_en->field_value }} </p>
                                    @endif
                                </div>
                            </div>
                            <div class="item swiper-slide">
                                <div class="figwrap">
                                    <img src="{{URL('uploads/topics/'.$BENEFITS_item_three_photo->field_value) }}">
                                    <hr/>
                                    @if($lang=="ar")
                                        <p>{{ $BENEFITS_item_three_desc_ar->field_value }}</p>
                                    @else
                                        <p>{{ $BENEFITS_item_three_desc_en->field_value }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="item swiper-slide">
                                <div class="figwrap">
                                    <img src="{{URL('uploads/topics/'.$BENEFITS_item_four_photo->field_value) }}">
                                    <hr/>
                                    @if($lang=="ar")
                                        <p>{{ $BENEFITS_item_four_desc_ar->field_value }}</p>
                                    @else
                                        <p>{{$BENEFITS_item_four_desc_en->field_value }} </p>
                                    @endif
                                </div>
                            </div>
                            <div class="item swiper-slide">
                                <div class="figwrap">
                                    <img src="{{URL('uploads/topics/'.$BENEFITS_item_five_photo->field_value) }}">
                                    <hr/>
                                    @if($lang=="ar")
                                        <p>{{ $BENEFITS_item_five_desc_ar->field_value }}</p>
                                    @else
                                        <p>{{ $BENEFITS_item_five_desc_en->field_value }}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="process" class="dot-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-8 colm  toanimate" data-animation="slide-in-left">
                    <h2 class="f40 text-uppercase font-gray font-black mb-4 resizeable-font">{{ $lang=="ar" ? $facts_title_ar->field_value : $facts_title_en->field_value }}</h2>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="swiper-container supplierslider animateData scrollitems text-center toanimate" data-animation="slide-in-bottom">
                    <div class="swiper-pagination"></div>
                    <div class="swipe-icon wobble-hor-bottom"></div>
                    <div class="swiper-wrapper">
                        <div class="item swiper-slide">
                            <div class="img">
                                <img src="{{URL('uploads/topics/'.$facts_item_one_photo->field_value) }}" class="animate-flicker parallax"  data-value="-1">
                                @if(preg_match('~MSIE|Internet Explorer~i', $ua) || (strpos($ua, 'Trident/7.0') !== false && strpos($ua, 'rv:11.0') !== false))
                                    <p class="data"><span class="value" data-value="85"></span>85.2%</p>
                                @else
                                    <p class="data"><span class="value" data-value="85"></span>.2%</p>
                                @endif
                                <p class="sub">&nbsp;</p>
                                <div class="hexagon parallax"  data-value="2"></div>
                            </div>
                            <p class="details resizeable-font">{{ $lang=="ar" ? 'ما يقارب 85.2٪ من جميع عمليات سحب المنتجات الطبية هي عمليات سحب للأدوية، في حين أن 14.8٪ منها عبارة عن عمليات سحب للأجهزة الطبية.' : 'Almost 85.2% of all pharmaceutical recalls are drug-related, while 14.8% are medical device recalls.' }} </p>
                            <div class="line up parallax"  data-value="-2"></div>
                        </div>
                        <div class="item swiper-slide">
                            <div class="img">
                                <img src="{{URL('uploads/topics/'.$facts_item_two_photo->field_value) }}" class="animate-flicker parallax"  data-value="-1">
                                @if(preg_match('~MSIE|Internet Explorer~i', $ua) || (strpos($ua, 'Trident/7.0') !== false && strpos($ua, 'rv:11.0') !== false))
                                    <p class="data"><span class="value" data-value="50"></span>50%</p>
                                @else
                                    <p class="data"><span class="value" data-value="50"></span>%</p>
                                @endif

                                <p class="sub">&nbsp;</p>
                                <div class="hexagon parallax"  data-value="-8"></div>
                            </div>
                            <p class="details resizeable-font">{{ $lang=="ar" ? 'تقدر منظمة الصحة العالمية أنه في المستقبل ستكون أكثر من 50٪ من الأدوية المتوفرة على الإنترنت مزيفة.' : 'Over time, WHO estimates that more than 50% of online drugs will be counterfeit.' }} </p>
                            <div class="line down parallax"  data-value="-2"></div>
                        </div>
                        <div class="item swiper-slide">
                            <div class="img">
                                <img src="{{URL('uploads/topics/'.$facts_item_three_photo->field_value) }}" class="animate-flicker parallax"  data-value="-1">
                                @if(preg_match('~MSIE|Internet Explorer~i', $ua) || (strpos($ua, 'Trident/7.0') !== false && strpos($ua, 'rv:11.0') !== false))
                                    <p class="data"><span class="value" data-value="21"></span>21%</p>
                                @else
                                    <p class="data"><span class="value" data-value="21"></span>%</p>
                                @endif
                                <p class="sub">&nbsp;</p>
                                <div class="hexagon parallax"  data-value="-4"></div>
                            </div>
                            <p class="details resizeable-font">{{ $lang=="ar" ? 'تفيد التقارير بأن 21٪ من الصيدليات في دول العالم المتقدم تعاني من نقص في الأدوية يومياً.' : 'In first world countries, it is reported that 21% of pharmacies experience a shortage of medicines every day.' }}</p>
                            <div class="line up parallax"  data-value="2"></div>
                        </div>
                        <div class="item swiper-slide">
                            <div class="img">
                                <img src="{{URL('uploads/topics/'.$facts_item_four_photo->field_value) }}" class="animate-flicker parallax"  data-value="-1">
                                @if(preg_match('~MSIE|Internet Explorer~i', $ua) || (strpos($ua, 'Trident/7.0') !== false && strpos($ua, 'rv:11.0') !== false))
                                    <p class="data"><span class="value" data-value="200"></span>200</p>
                                @else
                                    <p class="data">$<span class="value" data-value="200"></span></p>
                                @endif
                                <p class="sub">{{ $lang=="ar" ? 'مليار' : 'Billion' }}</p>
                                <div class="hexagon parallax"  data-value="-2"></div>
                            </div>
                            <p class="details resizeable-font">{{ $lang=="ar" ? 'حددت منظمة الجمارك العالمية قيمة الأدوية المزيفة بمبلغٍ سنويٍ قدره 200 مليار دولار أمريكي على مستوى العالم.' : 'The World Customs Organization (WCO) has placed the value of counterfeit medicines at USD 200 billion a year, globally.' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endforeach
@endsection

@section('js')
    <?php
    if (preg_match('~MSIE|Internet Explorer~i', $ua) || (strpos($ua, 'Trident/7.0') !== false && strpos($ua, 'rv:11.0') !== false)) {
    ?>
    <script src="{{ asset('assets/js/benefitsie.js') }}"></script>
    <?php
    } else {
    ?>
        <script src="{{ asset('assets/js/benefits.js') }}"></script>
    <?php
    }
    ?>
@endsection
