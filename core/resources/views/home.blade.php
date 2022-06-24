@extends('partials.master')

@section('css')
    <style>
        .toggle-texts .copy {
            max-height: 100px;
        }

        .supplierslider {
            height: 630px;
        }

        @media only screen and (max-width: 991px) {
            .toggle-texts .copy {
                max-height: 300px;
            }
        }

        @media only screen and (max-width: 767px) {
            .toggle-texts .copy {
                max-height: 400px;
            }
        }

        @media only screen and (max-width: 520px) {
            .toggle-texts .copy {
                max-height: 620px;
            }
        }
    </style>
@endsection

@section('content')





    <section id="intro">
        <div class="container">
            <div class="row">
                <div class="col-md-7">

@foreach($top_title_en as  $top_title_en)
@foreach($top_title_ar as  $top_title_ar)
@foreach($main as  $main)
@foreach($ar_desc as  $ar_desc)
@foreach($en_desc as  $en_desc)
@foreach($sectiononphoto as  $sectiononphoto)
@foreach($sectiononnum as  $sectiononnum)
@foreach($sectiononuniten as  $sectiononuniten)
@foreach($sectiononunitar as  $sectiononunitar)
@foreach($sectionondescar as  $sectionondescar)
@foreach($sectionondescen as  $sectionondescen)
@foreach($section_to_photo as  $section_to_photo)
@foreach($section_to_num as   $section_to_num)
@foreach($section_to_uniten as   $section_to_uniten)
@foreach($section_to_unitar as   $section_to_unitar)
@foreach($section_to_descar as   $section_to_descar)
@foreach($section_to_descen as   $section_to_descen)
@foreach($section_th_photo as   $section_th_photo)
@foreach($section_th_num as   $section_th_num)
@foreach($section_th_uniten as $section_th_uniten)
@foreach($section_th_unitar as $section_th_unitar)
@foreach($section_th_descar as $section_th_descar)
@foreach($section_th_descen as $section_th_descen)
@foreach($middeltitlear as  $middeltitlear)
@foreach($middeltitleen as  $middeltitleen)
@foreach($middeldescen as  $middeldescen)
@foreach($middeldescar as  $middeldescar)
@foreach($timeonephoto as  $timeonephoto)
@foreach($timeonetitlear as  $timeonetitlear)
@foreach($timeonetitleen as  $timeonetitleen)
@foreach($timeonedescar as  $timeonedescar)
@foreach($timeonedescen as  $timeonedescen)
@foreach($timetwophoto as  $timetwophoto)
@foreach($timetwotitlear as  $timetwotitlear)
@foreach($timetwotitleen as  $timetwotitleen)
@foreach($timetwodescar as  $timetwodescar)
@foreach($timetwodescen as  $timetwodescen)
@foreach($timethreephoto as  $timethreephoto)
@foreach($timethreetitlear as  $timethreetitlear)
@foreach($timethreetitleen as  $timethreetitleen)
@foreach($timethreedescar as  $timethreedescar)
@foreach($timethreedescen as  $timethreedescen)
@foreach($timefourphoto as  $timefourphoto)
@foreach($timefourtitlear as  $timefourtitlear)
@foreach($timefourtitleen as  $timefourtitleen)
@foreach($timefourdescar as  $timefourdescar)
@foreach($timefourdescen as  $timefourdescen)
@foreach($timefivephoto as  $timefivephoto)
@foreach($timefivetitlear as  $timefivetitlear)
@foreach($timefivetitleen as  $timefivetitleen)
@foreach($timefivedescar as  $timefivedescar)
@foreach($timefivedescen as  $timefivedescen)
@foreach($timesixphoto as  $timesixphoto)
@foreach($timesixtitleen as  $timesixtitleen)
@foreach($timesixtitlear as  $timesixtitlear)
@foreach($timesixdescar as  $timesixdescar)
@foreach($timesixdescen as  $timesixdescen)
@foreach($forwardtitlear as  $forwardtitlear)
@foreach($forwardtitleen as  $forwardtitleen)
@foreach($forwardonephoto as  $forwardonephoto)
@foreach($forwardonetitlear as  $forwardonetitlear)
@foreach($forwardonetitleen as  $forwardonetitleen)
@foreach($forwardonedescar as  $forwardonedescar)
@foreach($forwardonedescen as  $forwardonedescen)
@foreach($forwardtwophoto as  $forwardtwophoto)
@foreach($forwardtwotitlear as  $forwardtwotitlear)
@foreach($forwardtwotitleen as  $forwardtwotitleen)
@foreach($forwardtwodescar as  $forwardtwodescar)
@foreach($forwardtwodescen as  $forwardtwodescen)
@foreach($forwardthreephoto as  $forwardthreephoto)
@foreach($forwardthreetitlear as  $forwardthreetitlear)
@foreach($forwardthreetitleen as  $forwardthreetitleen)
@foreach($forwardthreedescar as  $forwardthreedescar)
@foreach($forwardthreedescen as  $forwardthreedescen)
@foreach($forwardfourphoto as  $forwardfourphoto)
@foreach($forwardfourtitlear as  $forwardfourtitlear)
@foreach($forwardfourtitleen as  $forwardfourtitleen)
@foreach($forwardfourdescar as  $forwardfourdescar)
@foreach($forwardfourdescen as  $forwardfourdescen)
@foreach($forwardfivephoto as  $forwardfivephoto)
@foreach($forwardfivetitlear as  $forwardfivetitlear)
@foreach($forwardfivetitleen as  $forwardfivetitleen)
@foreach($forwardfivedescar as  $forwardfivedescar)
@foreach($forwardfivedescen as  $forwardfivedescen)




                    <img src=" {{('uploads/topics/'.$main->field_value) }}" class="intro-img toanimate" data-animation="puff-in-center">


                    <!--
                                            <div id="animation_container"class="intro-img toanimate" data-animation="puff-in-center" style="background-color:rgba(255, 255, 255, 0.00); width:800px; height:600px">
                                                <canvas id="canvas" width="800" height="600" style="position: absolute; display: block; background-color:rgba(255, 255, 255, 0.00);"></canvas>
                                                <div id="dom_overlay_container" style="pointer-events:none; overflow:hidden; width:800px; height:600px; position: absolute; left: 0px; top: 0px; display: block;">
                                                </div>
                                            </div>
                    -->
                </div>
                <div class="col-md-5  toanimate" data-animation="{{ $lang=="ar" ? 'slide-in-left' : 'slide-in-right' }}">







                    <h1 class="intro-heading resizeable-font">{{ $lang=="ar" ? $top_title_ar->field_value : $top_title_en->field_value }}</h1>

                    <p class="intro-description resizeable-font">{{ $lang=="ar" ?   $ar_desc->field_value : $en_desc ->field_value }}</p>

                </div>
            </div>
        </div>
        <span id="scrolldown" class="bounce-top"></span>
    </section>

    <section id="data" class="graybg">

        <div class="linegraph-bg"></div>
        <div class="container text-center data-icon">
            <div class="row">
                <div class="col-md-4 colm">

                    <img src="{{('uploads/topics/'.$sectiononphoto->field_value) }}" class=" toanimate" data-animation="scale-in-center">


                    <div class=" toanimate" data-animation="slide-in-bottom">
                        <h2 class="value toanimate resizeable-font" data-animation="scale-in-center-1" >{{ $sectiononnum->field_value}} </h2>
                        <h3 class="sub toanimate resizeable-font" data-animation="scale-in-center-2">{{ $lang=="ar" ? $sectiononunitar->field_value : $sectiononuniten->field_value }}</h3>
                        <p class="desc  resizeable-font">{{ $lang=="ar" ? $sectionondescar->field_value : $sectionondescen->field_value }}</p>
                        <span class="line"></span>
                    </div>
                </div>
                <div class="col-md-4 colm">
                    <img src="{{('uploads/topics/'.$section_to_photo->field_value) }}" class=" toanimate" data-animation="scale-in-center">

                    <div class=" toanimate" data-animation="slide-in-bottom">
                        <h2 class="value  toanimate resizeable-font" data-animation="scale-in-center-1"> {{ $section_to_num->field_value }}</h2>
                        <h3 class="sub toanimate resizeable-font" data-animation="scale-in-center-2">{{ $lang=="ar" ? $section_to_unitar->field_value : $section_to_uniten->field_value }}</h3>
                        <p class="desc resizeable-font">{{ $lang=="ar" ? $section_to_descar->field_value : $section_to_descen->field_value }}</p>
                        <span class="line"></span>
                    </div>
                </div>
                <div class="col-md-4 colm">
                    <img src="{{('uploads/topics/'.$section_th_photo->field_value) }}" class=" toanimate" data-animation="scale-in-center">
                    <div class="toanimate" data-animation="slide-in-bottom ">
                        <h2 class="value toanimate resizeable-font" data-animation="scale-in-center-1">{{ $section_th_num->field_value }}</h2>
                        <h3 class="sub toanimate resizeable-font" data-animation="scale-in-center-2">{{ $lang=="ar" ? $section_th_unitar->field_value  : $section_th_uniten->field_value  }}</h3>
                        <p class="desc resizeable-font">{{ $lang=="ar" ? $section_th_descar->field_value : $section_th_descen->field_value }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="process" class="dot-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 colm  toanimate" data-animation="slide-in-left">
                    <h2 class="f40 text-uppercase font-gray font-black mb-4 resizeable-font">{{ $lang=="ar" ? $middeltitlear->field_value : $middeltitleen->field_value }}</h2>
                    @if($lang=="ar")
                        <p class="mt-3 resizeable-font">{{ $middeldescar->field_value }}</p>
                    @else
                        <p class="mt-3 resizeable-font"> {{ $middeldescen->field_value }}</p>
                    @endif
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="swiper-container supplierslider scrollitems text-center   toanimate" data-animation="slide-in-bottom">
                    <div class="swiper-pagination"></div>
                    <div class="swipe-icon wobble-hor-bottom"></div>
                    <div class="swiper-wrapper">
                        <div class="item swiper-slide">
                            <div class="img">
                                <img src="{{('uploads/topics/'.$timeonephoto->field_value) }}" class="animate-flicker parallax"  data-value="-8">
                                <div class="hexagon parallax"></div>
                            </div>
                            <h3 class="title resizeable-font">{{ $lang=="ar" ?  $timeonetitlear->field_value : $timeonetitleen->field_value }}</h3>
                            <p class="details resizeable-font">{{ $lang=="ar" ? $timeonedescar->field_value: $timeonedescen->field_value }}  </p>
                            <div class="line up parallax"  data-value="-2"></div>
                        </div>
                        <div class="item swiper-slide">
                            <h3 class="title resizeable-font">{{ $lang=="ar" ? $timetwotitlear->field_value : $timetwotitleen->field_value }}</h3>
                            <p class="details resizeable-font">{{ $lang=="ar" ? $timetwodescar->field_value: $timetwodescen->field_value }} </p>
                            <div class="line down parallax"  data-value="-2"></div>
                            <div class="img">
                                <img src="{{('uploads/topics/'.$timetwophoto->field_value) }}" class="animate-flicker parallax"  data-value="-4">
                                <div class="hexagon parallax"></div>
                            </div>
                        </div>
                        <div class="item swiper-slide">
                            <div class="img">
                                <img src="{{('uploads/topics/'.$timethreephoto->field_value) }}" class="animate-flicker parallax"  data-value="-8">
                                <div class="hexagon parallax"></div>
                            </div>
                            <h3 class="title resizeable-font">{{ $lang=="ar" ? $timethreetitlear->field_value : $timethreetitleen->field_value }}</h3>
                            <p class="details resizeable-font">{{ $lang=="ar" ? $timethreedescar->field_value : $timethreedescen->field_value }} </p>
                            <div class="line up parallax"  data-value="-2"></div>
                        </div>
                        <div class="item swiper-slide">
                            <h3 class="title resizeable-font">{{ $lang=="ar" ? $timefourtitlear->field_value : $timefourtitleen->field_value }} </h3>
                            <p class="details resizeable-font">{{ $lang=="ar" ? $timefourdescar->field_value : $timefourdescen->field_value }} </p>
                            <div class="img">
                                <img src="{{('uploads/topics/'.$timefourphoto->field_value) }}" class="animate-flicker parallax"  data-value="-4">
                                <div class="hexagon parallax"></div>
                            </div>
                            <div class="line down parallax"  data-value="-2"></div>
                        </div>
                        <div class="item swiper-slide">
                            <div class="img">
                                <img src="{{('uploads/topics/'.$timefivephoto->field_value) }}" class="animate-flicker parallax"  data-value="-8">
                                <div class="hexagon parallax"></div>
                            </div>
                            <h3 class="title resizeable-font">{{ $lang=="ar" ?  $timefivetitlear->field_value : $timefivetitleen->field_value }}</h3>
                            <p class="details resizeable-font">{{ $lang=="ar" ?  $timefivedescar->field_value : $timefivedescen->field_value }}  </p>
                            <div class="line up parallax"  data-value="-2"></div>
                        </div>
                        <div class="item swiper-slide">
                            <h3 class="title resizeable-font">{{ $lang=="ar" ?   $timesixtitlear->field_value  : $timesixtitleen->field_value }} </h3>
                            <p class="details resizeable-font">{{ $lang=="ar" ?  $timesixdescar->field_value : $timesixdescen->field_value }} </p>
                            <div class="img">
                                <img src="{{('uploads/topics/'.$timesixphoto->field_value) }}"  class="animate-flicker parallax" data-value="-4">
                                <div class="hexagon parallax"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="goals" class="dot-bg">
        <div class="gray-gradient-bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="f40 text-uppercase font-gray font-black mb-4 section-title toanimate resizeable-font" data-animation="{{ $lang=="ar" ? 'slide-in-right' : 'slide-in-left' }}">{{ $lang=="ar" ?  $forwardtitlear->field_value :  $forwardtitleen->field_value }}</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 relative">
                    <div class="toggle-texts toanimate" data-animation="{{ $lang=="ar" ? 'slide-in-left' : 'slide-in-right' }}">
                        <div class="row">
                            <div class="col-md-12">
                                    <span class="floating {{ $lang=="ar" ? ' changewidth' : 'heartbeat' }}">
                                        @for($x=1;$x<8;$x++)
                                            <span>{{ $lang=="ar" ? $forwardonetitlear->field_value :  $forwardonetitleen->field_value }}</span>
                                        @endfor
                                    </span>
                                <div class="icon improve" > <img src="{{('uploads/topics/'.$forwardonephoto->field_value) }}"style="width:60%;margin:13px"></div>
                                <h1 class="toggle">{{ $lang=="ar" ? $forwardonetitlear->field_value :  $forwardonetitleen->field_value }}</h1>
                                <p class="copy resizeable-font"><span class="vcenter">{{ $lang=="ar" ? $forwardonedescar->field_value :  $forwardonedescen->field_value }}</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                    <span class="floating {{ $lang=="ar" ? ' changewidth' : 'heartbeat' }}">
                                        @for($x=1;$x<8;$x++)
                                            <span>{{ $lang=="ar" ? $forwardtwotitlear->field_value :  $forwardtwotitleen->field_value }}</span>
                                        @endfor
                                    </span>
                                <div class="icon visibility {{ $lang=="ar" ? ' changewidth' : 'heartbeat' }}"><img src="{{('uploads/topics/'.$forwardtwophoto->field_value) }}"style="width:60%;margin:13px"></div>
                                <h1 class="toggle" >{{ $lang=="ar" ? $forwardtwotitlear->field_value :  $forwardtwotitleen->field_value }}</h1>
                                <p class="copy resizeable-font"><span class="vcenter">{{ $lang=="ar" ? $forwardtwodescar->field_value :  $forwardtwodescen->field_value }}</span></p>
                            </div>
                        </div>
                        <div class="row active">
                            <div class="col-md-12">
                                    <span class="floating {{ $lang=="ar" ? ' changewidth' : 'heartbeat' }}">
                                        @for($x=1;$x<8;$x++)
                                            <span>{{ $lang=="ar" ? $forwardthreetitlear->field_value :  $forwardthreetitleen->field_value }}</span>
                                        @endfor
                                    </span>
                                <div class="icon data {{ $lang=="ar" ? ' changewidth' : 'heartbeat' }}"><img src="{{('uploads/topics/'.$forwardthreephoto->field_value) }}"style="width:60%;margin:13px"></div>
                                <h1 class="toggle">{{ $lang=="ar" ? $forwardthreetitlear->field_value :  $forwardthreetitleen->field_value }}</h1>
                                <p class="copy resizeable-font"><span class="vcenter">{{ $lang=="ar" ? $forwardthreedescar->field_value :  $forwardthreedescen->field_value }}</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                    <span class="floating {{ $lang=="ar" ? ' changewidth' : 'heartbeat' }}">
                                        @for($x=1;$x<8;$x++)
                                            <span>{{ $lang=="ar" ? $forwardfourtitlear->field_value :  $forwardfourtitleen->field_value }}</span>
                                        @endfor
                                    </span>
                                <div class="icon uae {{ $lang=="ar" ? ' changewidth' : 'heartbeat' }}"><img src="{{('uploads/topics/'.$forwardfourphoto->field_value) }}"style="width:60%;margin:13px"></div>
                                <h1 class="toggle">{{ $lang=="ar" ? $forwardfourtitlear->field_value :  $forwardfourtitleen->field_value }}</h1>
                                <p class="copy resizeable-font "><span class="vcenter">{{ $lang=="ar" ?  $forwardfourdescar->field_value :  $forwardfourdescen->field_value  }}</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                    <span class="floating {{ $lang=="ar" ? ' changewidth' : 'heartbeat' }}">
                                        @for($x=1;$x<8;$x++)
                                            <span>{{ $lang=="ar" ?  $forwardfivetitlear->field_value :  $forwardfivetitleen->field_value }}</span>
                                        @endfor
                                    </span>
                                <div class="icon global {{ $lang=="ar" ? 'changewidth' : 'heartbeat' }}"><img src="{{('uploads/topics/'.$forwardfivephoto->field_value) }}"style="width:60%;margin:13px"></div>
                                <h1 class="toggle">{{ $lang=="ar" ?  $forwardfivetitlear->field_value :  $forwardfivetitleen->field_value }}</h1>
                                <p class="copy resizeable-font"><span class="vcenter">{{ $lang=="ar" ?  $forwardfivedescar->field_value :  $forwardfivedescen->field_value }}</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>






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
    </section>
@endsection

@section('js')
@endsection
