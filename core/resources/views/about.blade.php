@extends('partials.master')

@section('css')
    <style>
        .intro-img {
            max-width: 190% !important;
            width: 190% !important;
            margin-{{ $lang=="ar" ? 'right' : 'left' }}: -70% !important;
        }

        #intro .intro-heading {
            margin-top: 140px;
            font-size: 58px;
            margin-bottom: 20px;
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

        #scrolldown {
            bottom: 50px;
        }

        #data {
            padding-top: 0;
        }

        .wraps {
            position: relative;
        }

        .mobilebg {
            position: absolute;
            left: 50%;
            margin-left: -500px;
            top: 0;
        }

        .hidden {
            display: none;
        }

        .hidden.active {
            display: inline-block;
        }

        .colm {
            position: relative;
        }

        .hov {
            font-size: 14px;
            position: absolute;
            background-color: #fff;
            z-index: 1;
            padding: 30px 20px;
            margin-top: 20px;
            display: none;
            width: 400px;
            left: -140px;
        }

        .partner:hover .hov {
            display: block;
        }

        #partners {
            margin-bottom: 120px;
        }

        .triangle {
            width: 41px;
            height: 25px;
            position: absolute;
            top: -25px;
            left: 50%;
            margin-left: -25px;
            display: block;
            background-image: url({{ asset('') }}/img/about/triangle.png);
        }

        .partner {
            display: inline-block;
            position: relative;
            width: auto;
            margin: 0 60px;
        }

        .partner img {
            height: 80px;
        }

        @media only screen and (max-width:1366px) {
            .hov {
                width: 320px;
                left: -100px;
            }

            .partner {
                margin: 0 30px;
            }
        }

        @media only screen and (max-width:1200px) {

        }

        @media only screen and (max-width:991px) {
            .center-mobile {
                text-align: center;
            }

            .center-mobile h1 {
                margin-top: 0 !important;
            }

            .hov {
                left: -100px;
            }
        }

        @media only screen and (max-width:767px) {
            .hov {
                position: relative;
                display: block;
                margin-bottom: 20px;
                margin-left: 0;
                left: 0;
                width: 100%;
            }

            .partner {
                margin: 0;
            }
        }

        @media only screen and (max-width:520px) {
            .hov {
            }
        }
    </style>
@endsection

@section('content')


@foreach($top_title_ar as $top_title_ar)
@foreach($top_title_en as $top_title_en)
@foreach($under_title_en as $under_title_en)
@foreach($under_title_ar as $under_title_ar)
@foreach($descrption_en as $descrption_en)
@foreach($descrption_ar as $descrption_ar)
@foreach($title_ar as $title_ar)
@foreach($title_en as $title_en)
@foreach($Partner_one_photo as $Partner_one_photo)
@foreach($Partner_one_descrption_ar as $Partner_one_descrption_ar)
@foreach($Partner_one_descrption_en  as $Partner_one_descrption_en )
@foreach($Partner_two_photo  as $Partner_two_photo )
@foreach($Partner_two_descrption_ar  as $Partner_two_descrption_ar )
@foreach($Partner_two_descrption_en  as $Partner_two_descrption_en )
@foreach($Partner_three_photo as $Partner_three_photo)
@foreach($Partner_three_descrption_ar  as $Partner_three_descrption_ar )
@foreach($Partner_three_descrption_en  as $Partner_three_descrption_en )
@foreach($Partner_four_photo   as $Partner_four_photo  )
@foreach($Partner_four_descrption_ar  as $Partner_four_descrption_ar )
@foreach($Partner_four_descrption_en  as $Partner_four_descrption_en )

    <section id="intro">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="wraps">
                        <img src="{{ asset('') }}/assets/img/about/{{ $lang=="ar" ? 'magnify2-ar.png' : 'magnify2.png' }}" class="intro-img parallax" data-value="-4"  data-animation="puff-in-center">
                        <img src="{{ asset('') }}/assets/img/about/magnify-bg.png" class="rotating mobilebg">
                    </div>
                    <!--
                                            <div id="animation_container"class="intro-img toanimate" data-animation="puff-in-center" style="background-color:rgba(255, 255, 255, 0.00); width:800px; height:600px">
                                                <canvas id="canvas" width="800" height="600" style="position: absolute; display: block; background-color:rgba(255, 255, 255, 0.00);"></canvas>
                                                <div id="dom_overlay_container" style="pointer-events:none; overflow:hidden; width:800px; height:600px; position: absolute; left: 0px; top: 0px; display: block;">
                                                </div>
                                            </div>
                    -->
                </div>
                <div class="col-lg-6 col-md-12 toanimate center-mobile" data-animation="{{ $lang=="ar" ? 'slide-in-left' : 'slide-in-right' }}">
                    <h1 class="intro-heading resizeable-font">{{ $lang=="ar" ?  $top_title_ar->field_value:  $top_title_en->field_value }}</h1>
                    <p class="intro-sub resizeable-font">{{ $lang=="ar" ? $under_title_ar->field_value : $under_title_en->field_value }}</p>

                    @if($lang=="ar")
                        <p class="intro-description resizeable-font">{{ $descrption_ar->field_value }}</p>
                    @else
                        <p class="intro-description resizeable-font"> {{ $descrption_en->field_value }} </p>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <section id="partners" class="graybg">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-12 text-left">
                    <h5 class="sub-heading">{{ $lang=="ar" ?  $title_ar->field_value :  $title_en->field_value }}</h5>
                </div>
            </div>
        </div>
        <div class="container text-center">
            <div class="partner">
                <img src="{{asset('uploads/topics/'.$Partner_one_photo->field_value) }}" class=" toanimate mobile-bt20" data-animation="scale-in-center">
                <div class="hov">
                    <span class="triangle"></span>

                    @if($lang=="ar")
                        <p>{{ $Partner_one_descrption_ar->field_value }}</p>
                    @else
                        <p> {{ $Partner_one_descrption_en->field_value }}</p>

                    @endif
                </div>
            </div>
            <div class="partner">
                <img src="{{asset('uploads/topics/'.$Partner_two_photo->field_value) }}" class=" toanimate mobile-bt20" data-animation="scale-in-center" style="margin-top: 18px;">
                <div class="hov">
                    <span class="triangle"></span>
                    @if($lang=="ar")
                        <p> {{ $Partner_two_descrption_ar->field_value }}</p>

                    @else
                    <p>{{ $Partner_two_descrption_en->field_value }}</p>
                    @endif
                </div>
            </div>
            <div class="partner">
                <img src="{{asset('uploads/topics/'.$Partner_three_photo->field_value) }}" class=" toanimate mobile-bt20" data-animation="scale-in-center">
                <div class="hov">
                    <span class="triangle"></span>
                    @if($lang=="ar")
                    <p> {{ $Partner_three_descrption_ar->field_value }}</p>
                    @else
                    <p> {{ $Partner_three_descrption_en->field_value }}</p>

                    @endif
                </div>
            </div>
            <div class="partner">
                <img src="{{asset('uploads/topics/'.$Partner_four_photo->field_value) }}" class=" toanimate mobile-bt20" data-animation="scale-in-center" style="margin-top: 20px;">
                <div class="hov">
                    <span class="triangle"></span>
                    @if($lang=="ar")
                    <p> {{ $Partner_three_descrption_ar->field_value }}</p>
                    @else
                    <p> {{ $Partner_three_descrption_en->field_value }}</p>

                    @endif
                </div>
            </div>
        </div>
    </section>

    <!--        <section id="process" class="relative">-->
    <!--            <div class="linegraph-bg"></div>-->
    <!--            <div class="container">-->
    <!--                <div class="row">-->
    <!--                    <div class="col-lg-6 colm  toanimate mobile-bt20" data-animation="slide-in-left">-->
    <!--                        <img src="assets/img/about/evoteq.png" class="mobile-w100">-->
    <!--                        <p class="mt-3 resizeable-font">EVOTEQ is a UAE based digital transformation catalyst that creates digitally empowered, smarter societies by providing innovative and transformative solutions and platforms to governments and large enterprises across the region. The company enables its customers to improve performance, increase efficiency, and make faster and better decisions, thereby helping them meaningfully and positively impact people’s lives. <br/><br/>-->
    <!--                            <span class="hidden slide-in-fwd-center">Working collaboratively with enterprises seeking digital transformation, EVOTEQ’s team of experts offers consultation and advice on comprehensive strategies as well as high-tech design, advanced solutions ranging from business applications and data analytics to smart technology, AI, and blockchain.<br/><br/></span>-->
    <!--                        <a href="#" class="readmore navshow">Read more</a></p>-->
    <!--                    </div>-->
    <!--                    <div class="col-lg-6 colm  toanimate mobile-bt20" data-animation="{{ $lang=="ar" ? 'slide-in-left' : 'slide-in-right' }}">-->
    <!--                        <img src="assets/img/about/gs1.png" class="mobile-w100">-->
    <!--                        <p class="mt-3 resizeable-font">GS1® is a not-for-profit organisation that works with the industry, for the industry, providing global standards and technology-neutral services and solutions to help solve the business challenges of today and tomorrow.<br/><br/>-->
    <!--                            <span class="hidden slide-in-fwd-center">GS1 develops and maintains the most widely used global standards for efficient business communication. It is best known for the barcode, named by the BBC as one of “the 50 things that made the world economy.” -->
    <!--                            <br/><br/>-->
    <!--                            GS1 standards and services improve the efficiency, safety, and visibility of supply chains across physical and digital channels in 25 sectors. With offices in 115 countries, 2 million companies, and 6 billion transactions every day, GS1 standards create a common language that supports systems and processes across the globe. -->
    <!--                            <br/><br/></span>-->
    <!--                        <a href="#" class="readmore navshow">Read more</a></p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </section>-->
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

    <script>
        $('.navshow').on('click',function(e){
            e.preventDefault();
            $(this).closest('div').find('.hidden').toggleClass('active');

            if($(this).hasClass('active')) {
                $(this).text('Read more');
                $(this).removeClass('active');
            }
            else {
                $(this).text('Read less');
                $(this).addClass('active');
            }

        });
    </script>

@endsection
