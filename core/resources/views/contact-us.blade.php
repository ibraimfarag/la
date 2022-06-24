@extends('partials.master')

@section('css')
    <style>

        form input[type=text], form textarea {
            margin-bottom: 30px;
            border-radius: 10px !important;
            padding: 0 30px;
            font-weight: bold;
            color: #6d6e71 !important;
            border: 0 !important;
        }

        form input[type=text]::placeholder, form textarea::placeholder {
            color: #AFAFAF !important;
        }

        form input[type=text] {
            height: 60px;
            line-height: 60px;
        }

        form input[type=email], form textarea {
            margin-bottom: 30px;
            border-radius: 10px !important;
            padding: 0 30px;
            font-weight: bold;
            color: #6d6e71 !important;
            border: 0 !important;
        }

        form input[type=email]::placeholder, form textarea::placeholder {
            color: #AFAFAF !important;
        }

        form input[type=email] {
            height: 60px;
            line-height: 60px;
        }

        form input[type=submit] {
            height: 50px;
            line-height: 50px;
            background-color: #109641;
            border-radius: 10px;
            border: 0;
            padding: 0 40px;
            color: #fff;
            font-size: 14px;
            float: right;
        }

        textarea {
            height: 180px;
            resize: none;
            padding: 30px !important;
            font-weight: bold !important;
        }

        .icn-txt img, .icn-txt p {
            display: inline-block;
            float: left;
        }

        .icn-txt p {
            margin-left: 15px;
            line-height: 21px;
        }

        .contact-bar .icon {
            display: inline-block;
            float: left;
            font-size: 40px;
            margin-top: 5px;
        }

        @media only screen and (max-width:991px) {
            .center-mobile {
                text-align: center;
            }

            .center-mobile h1 {
                margin-top: 0 !important;
            }
        }

        @if($lang=='ar')
            .contact-bar .icon {
                float: right;
            }
        @endif

        #map {
            width: 100%;
            height: 650px;
        }
    </style>
    <style>
        .this {
            opacity: 0;
            position: absolute;
            top: 0;
            left: 0;
            height: 0;
            width: 0;
            z-index: -1;
        }
    </style>
@endsection

@section('content')
    <section id="contact-bar" class="whitebgfull contact-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left">
                    <h5 class="sub-heading">{{ $lang=="ar" ? 'ابقى على تواصل معنا' : 'GET IN TOUCH' }}  </h5>
                </div>
                {{--<div class="col-lg-3 col-md-4  colm icn-txt mb-3">--}}
                    {{--<a href="#" class="icon icon-contact-us" title="Contact us"></a>--}}
                    {{--<p class=" text-left" style="margin-top:9px;">80011111</p>--}}
                {{--</div>--}}
                <div class="col-lg-6 col-md-6 colm icn-txt">
                    <a href="#" class="icon icon-email" title="Contact us"></a>
                    <p style="margin-top:12px;margin-bottom:0;">contact@tatmeen.ae</p><br/>
                    {{--<p style="margin-top:0;">techsupport@tatmeen.ae</p>--}}
                </div>
            </div>
        </div>
    </section>

    <section id="process" class="relative graybgfull">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 colm  toanimate mobile-bt20" data-animation="{{ $lang=="ar" ? 'slide-in-right' : 'slide-in-left' }}">
                    <div id="map"></div>
                </div>
                <div class="col-lg-6 colm  toanimate mobile-bt20" data-animation="{{ $lang=="ar" ? 'slide-in-left' : 'slide-in-right' }}">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <h2 class="grey-heading">{{ $lang=="ar" ? 'للمزيد من المعلومات' : 'For more information' }} </h2>
                            <p>{{ $lang=="ar" ? 'املأ النموذج التالي وسيتواصل معك أحد موظفينا في الحال ' : 'Fill in the form and one of our representatives will be in touch right away.' }}</p>


                            @if($lang=="ar")

                            <form action="{{url('ar/tcon')}}" method="post" id="form">
                                <input name="source" type="hidden" value="contact-page">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <input name="user_id" type="text" id="firstname" class="this" autocomplete="off" tabindex="-1">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        @if(Session::has('status'))
                                            <div class="alert alert-success">{{ Session::get('status') }}</div>
                                        @endif
                                        @if(Session::has('error'))
                                            <div class="alert alert-danger">{{ Session::get('error') }}</div>
                                        @endif
                                        @csrf

                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="text" name="from_name" placeholder="{{ $lang=="ar" ? 'الاسم الأول والاسم الأخير:' : 'Full Name:' }}" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="email" name="from_email" placeholder="{{ $lang=="ar" ? 'البريد الإلكتروني:' : 'Email:' }}" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="title" placeholder="{{ $lang=="ar" ? 'الشركة:' : 'Company:' }}" class="form-control" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="from_phone" placeholder="{{ $lang=="ar" ? 'رقم الهاتف:' : 'Phone Number:' }}" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <textarea name="details" placeholder="{{ $lang=="ar" ? 'الرسالة:' : 'Message:' }}" class="form-control" required></textarea>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="submit" value="{{ $lang=='ar' ? 'إرسال' : 'Submit' }}">
                                    </div>
                                </div>
                            </form>
                            @else

                            <form action="{{url('tcon')}}" method="post" id="form">
                                <input name="source" type="hidden" value="contact-page">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <input name="user_id" type="text" id="firstname" class="this" autocomplete="off" tabindex="-1">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        @if(Session::has('status'))
                                            <div class="alert alert-success">{{ Session::get('status') }}</div>
                                        @endif
                                        @if(Session::has('error'))
                                            <div class="alert alert-danger">{{ Session::get('error') }}</div>
                                        @endif
                                        @csrf

                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="text" name="from_name" placeholder="{{ $lang=="ar" ? 'الاسم الأول والاسم الأخير:' : 'Full Name:' }}" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="email" name="from_email" placeholder="{{ $lang=="ar" ? 'البريد الإلكتروني:' : 'Email:' }}" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="title" placeholder="{{ $lang=="ar" ? 'الشركة:' : 'Company:' }}" class="form-control" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="from_phone" placeholder="{{ $lang=="ar" ? 'رقم الهاتف:' : 'Phone Number:' }}" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <textarea name="details" placeholder="{{ $lang=="ar" ? 'الرسالة:' : 'Message:' }}" class="form-control" required></textarea>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="submit" value="{{ $lang=='ar' ? 'إرسال' : 'Submit' }}">
                                    </div>
                                </div>
                            </form>
                            @endif



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--<section class="relative padded">--}}
        {{--<div class="container contact-bar">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-6 text-left colm icn-txt">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-md-12 text-center colm icn-txt">--}}
                            {{--<img src="{{ asset('') }}/img/MOHAPUAELogoEn.png" width="300" class=" toanimate mobile-bt20" data-animation="scale-in-center">--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-md-12 text-center colm icn-txt mt-2">--}}
                            {{--<a href="#" class="icon icon-email" title="Contact us"></a>--}}
                            {{--<a href="mailto:info@mohap.gov.ae"><p style="margin-top:14px;margin-bottom:0;">info@mohap.gov.ae</p></a><br/>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-md-12 text-center colm icn-txt mt-2">--}}
                            {{--<a href="#" class="icon icon-email" title="Contact us"></a>--}}
                            {{--<p style="margin-top:14px;margin-bottom:0;">contact@dha.ae</p><br/>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-6 text-left colm icn-txt">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-md-12 text-center colm icn-txt">--}}
                            {{--<img src="{{ asset('') }}/img/about/gs1-logo.png" height="72" class="toanimate mobile-bt20" data-animation="scale-in-center">--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-md-12 text-center colm icn-txt">--}}
                            {{--<a href="#" class="icon icon-contact-us" title="Contact us"></a>--}}
                            {{--<a href="tel:+971 2 449 3333"><p class=" text-left" style="margin-top:14px;">+971 4 557 0988</p></a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-md-12 text-center colm icn-txt">--}}
                            {{--<a href="#" class="icon icon-email" title="Contact us"></a>--}}
                            {{--<a href="mailto:tatmeen@gs1ae.org"><p style="margin-top:14px;margin-bottom:0;">tatmeen@gs1ae.org</p></a><br/>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
@endsection

@section('js')

    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&amp;render=explicit" type="text/javascript"></script>

    <script>
        var onloadCallback = function() {
            grecaptcha.render('g-recaptcha', {
                'sitekey' : '6Lfjjx4dAAAAACDOTZEIuTG6ONeMfN8djzb-fnmH'
            });
        };

        $('#form').on('submit',function(event){
            if($('#g-recaptcha-response').val()==""){
                event.preventDefault();
                alert('Please verify Captcha');
            }
        });
     </script>

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyChdoqnSnfKQL3byDY_Ju6MvoUD0Xds3Tk"></script>
    <script type="text/javascript">
        // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', initMap);

        function initMap() {

            var latlng = new google.maps.LatLng(25.2563607,55.4088274);

            var map = new google.maps.Map(document.getElementById('map'), {
                center: latlng,
                zoom: 14,
                styles: [
                    {
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#ebe3cd"
                            }
                        ]
                    },
                    {
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#523735"
                            }
                        ]
                    },
                    {
                        "elementType": "labels.text.stroke",
                        "stylers": [
                            {
                                "color": "#f5f1e6"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#c9b2a6"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative.land_parcel",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#dcd2be"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative.land_parcel",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#ae9e90"
                            }
                        ]
                    },
                    {
                        "featureType": "landscape.natural",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#e0d594"
                            },
                            {
                                "weight": 1
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#dfd2ae"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#93817c"
                            }
                        ]
                    },
                    {
                        "featureType": "poi.attraction",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "poi.business",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#a5b076"
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#447530"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#e0d594"
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#af8846"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway.controlled_access",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#e98d58"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway.controlled_access",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#db8555"
                            }
                        ]
                    },
                    {
                        "featureType": "transit.line",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#dfd2ae"
                            }
                        ]
                    },
                    {
                        "featureType": "transit.line",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#8f7d77"
                            }
                        ]
                    },
                    {
                        "featureType": "transit.line",
                        "elementType": "labels.text.stroke",
                        "stylers": [
                            {
                                "color": "#ebe3cd"
                            }
                        ]
                    },
                    {
                        "featureType": "transit.station",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#dfd2ae"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#b9d3c2"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#92998d"
                            }
                        ]
                    }
                ]
            });

            // Let's also add a marker while we're at it
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(25.2563607,55.4088274),
                map: map,
                title: 'Ministry of Health',
                icon: "{{ asset('img/contact/marker.png') }}",
                url: "https://www.google.ae/maps/place/25%C2%B011'20.3%22N+55%C2%B017'49.5%22E/@25.1889792,55.2965268,19z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d25.188978!4d55.297074?hl=en"
            });

            google.maps.event.addListener(marker, 'click', function() {
                window.open(marker.url, '_blank');
            })
        }
    </script>
@endsection

