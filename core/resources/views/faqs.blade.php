@extends('partials.master')

@section('css')
    <style>
        .accordion-body {
            text-align: left;
        }

        .accordion-flush, .accordion-header, .accordion-item .accordion-button, .accordion-flush .accordion-item {
            background: none;
        }

        .accordion-button:not(.collapsed) {
            font-weight: bold;
            color: #109641;
        }

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

        .greenbt {
            height: 50px;
            line-height: 50px;
            background-color: #109641;
            border-radius: 10px;
            border: 0;
            padding: 0 30px;
            color: #fff;
            font-size: 14px;
            float: right;
            width: 100%;
        }

        .grey-heading {
            font-size: 30px;
        }

        .light-heading {
            font-size: 17px;
            text-transform: uppercase;
            font-weight: bold;
        }

        .lisst p {
            font-size: 12px;
            display: inline-block;
        }

        .lisst h2 {
        }

        .mobileonly {
            display: none;
            margin-bottom: 30px;
        }

        @media only screen and (max-width: 991px) {
            .deskonly {
                display: none;
            }
            .mobileonly {
                display: block;
            }
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

                     <section id="partners" class="graybg">
                        <div class="container text-center">
                            <div class="row">
                                <div class="col-md-12 text-left">
                                    <h5 class="sub-heading">{{ $lang=="ar" ? 'الأسئلة الشائعة' : 'FREQUENTLY ASKED QUESTIONS' }}</h5>
                                                        <div class="accordion accordion-flush" id="accordionFlushExample">
                                   
                                    @foreach($f as $f)
                                    @if($lang=="ar")
                                            @if($f->question_ar==null)


                                            @else
                                                    

                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#t{{ $f->id }}" aria-expanded="false" aria-controls="t1">

                                                                            {{ $f->question_ar }}


                                                                    </button>
                                                                </h2>
                                                                <div id="t{{ $f->id }}" class="accordion-collapse collapse" aria-labelledby="t{{ $f->id }}" data-bs-parent="#accordionFlushExample">
                                                                    <div class="accordion-body">

                                                                         {!! $f->answer_ar !!}  



                                                                    </div>
                                                                </div>
                                                            </div>

                                                   

                                            @endif


                                    @else
                                        @if($f->question_en==null)


                                        @else

                                               

                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#t{{ $f->id }}" aria-expanded="false" aria-controls="t1">


                                                                        {{  $f->question_en  }}

                                                                </button>
                                                            </h2>
                                                            <div id="t{{ $f->id }}" class="accordion-collapse collapse" aria-labelledby="t{{ $f->id }}" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">


                                                                        {!!   $f->answer_en  !!}

                                                                </div>
                                                            </div>
                                                        </div>

                                              
                                        @endif



                                    @endif

                                    @endforeach
                                                  </div>
                                </div>
                            </div>
                        </div>
                    </section>

              
    <section id="" class="graybg">
        <div class=""></div>
        <div class="container relative">
            <div class="row">
                <div class="col-md-12 lisst">
                    <div class="row ">
                        <div class="col-md-12 text-center colm icn-txt mb-5">
                            <h3 class="grey-heading mt-5">{{ $lang=="ar" ? 'للاستفسار' : 'For your queries' }}  </h3>
                        </div>
                        {{--<div class="col-lg-3 col-md-12 text-center colm icn-txt ">--}}
                        {{--<div class="pl-2 pr-2">--}}
                        {{--<h2 class="light-heading mt-3 mb-2 text-center">{!! $lang=="ar" ? 'Legislation and <br/>Regulatory Affairs' : 'Legislation and <br/>Regulatory Affairs'  !!}  </h2>--}}
                        {{--<p>Queries related to Legislation and Regulatory Affairs will be directed to MoHAP and will be answered within 4 business days.</p>--}}
                        {{--<a href="mailto:info@mohap.gov.ae" class="mobileonly"><button class="greenbt" style="float: none;">info@mohap.gov.ae</button></a>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        <div class="col-lg-4 col-md-12 text-center colm icn-txt ">
                            <div class="pl-2 pr-2">
                                <h2 class="light-heading mt-3 mb-2 text-center">{!!  $lang=="ar" ? 'التسلسل أو BRANDSYNC' : 'Serialization <br/>or BrandSync'  !!}  </h2>
                                {{--<a href="#" class="icon icon-email" title="Contact us"></a>--}}
                                @if($lang=='ar')
                                    <p>توجه الاستفسارات المتعلقة بالتسلسل أو بـ BRANDSYNC إلى GS1، وسيرد الفريق على الاستفسار في غضون 4 أيام عمل. </p>
                                @else
                                    <p>Queries tied to Serialization or BrandSync will be sent to GS1 and will be answered within 4 business days</p>
                                @endif
                                <a href="mailto:tatmeen@gs1ae.org" class="mobileonly"><button class="greenbt" style="float: none">tatmeen@gs1ae.org</button></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 text-center colm icn-txt ">
                            <div class="pl-2 pr-2">
                                <h2 class="light-heading mt-3 mb-2 text-center">{!! $lang=="ar" ? 'الالتزام بالعملية، منصة تطمين، ومواعيد تنفيذ البرنامج' : 'BUSINESS PROCESSES, THE TATMEEN PLATFORM, OR program timelines'  !!}  </h2>

                                @if($lang=='ar')
                                    <p>توجه الاستفسارات المتعلقة بالالتزام بالعملية أو الاستفسارات العامة حول منصة تطمين أو المتعلقة بمواعيد البرنامج إلى فريق برنامج تطمين. </p>
                                @else
                                    <p>Queries related to Business processes, the Tatmeen Platform, or program timelines will be directed to the Tatmeen program team.</p>
                                @endif
                                <a href="mailto:contact@tatmeen.ae" class="mobileonly"><button class="greenbt" style="float: none;">contact@tatmeen.ae</button></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 text-center colm icn-txt">
                            <div class="pl-2 pr-2">
                                <h2 class="light-heading mt-3 mb-2 text-center">{!! $lang=="ar" ? 'موقع تطمين والواجهة البرمجية والتطبيق الذكي' : 'TATMEEN WEBSITE, APIS, AND MOBILE APPLICATION'  !!}  </h2>
                                {{--<a href="#" class="icon icon-email" title="Contact us"></a>--}}
                                @if($lang=='ar')
                                    <p>توجه الاستفسارات الفنية والتقنية المتعلقة بالبوابة الإلكترونية وبالواجهات البرمجية وبتطبيق تطمين الذكي إلى فريق الدعم الفني.</p>
                                @else
                                    <p>Queries of a technical nature regarding the Tatmeen website and portal, APIs, and Tatmeen mobile application will be directed to the Tatmeen technical support team.</p>
                                @endif
                                <a href="mailto:TechSupport@tatmeen.ae" class="mobileonly"><button class="greenbt" style="float: none;">techsupport@tatmeen.ae</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="row deskonly">
                        {{--<div class="col-lg-3 col-md-12 text-center colm icn-txt mb-5">--}}
                        {{--<div class="pl-2 pr-2">--}}
                        {{--<a href="mailto:info@mohap.gov.ae"><button class="greenbt" style="float: none;">info@mohap.gov.ae</button></a>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        <div class="col-lg-4 col-md-12 text-center colm icn-txt mb-5">
                            <div class="pl-2 pr-2">
                                <a href="mailto:tatmeen@gs1ae.org"><button class="greenbt" style="float: none">tatmeen@gs1ae.org</button></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 text-center colm icn-txt mb-5">
                            <div class="pl-2 pr-2">
                                <a href="mailto:contact@tatmeen.ae"><button class="greenbt" style="float: none;">contact@tatmeen.ae</button></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 text-center colm icn-txt mb-5">
                            <div class="pl-2 pr-2">
                                <a href="mailto:TechSupport@tatmeen.ae"><button class="greenbt" style="float: none;">techsupport@tatmeen.ae</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="form">
                <div class="col-md-12 text-left pt-5">
                    <hr/>
                    <h2 class="grey-heading mt-5">{{ $lang=="ar" ? 'للمزيد من المعلومات' : 'For more information' }}  </h2>
                    <p>{{ $lang=="ar" ? 'املأ النموذج التالي وسيتواصل معك أحد موظفينا في الحال ' : 'Fill in the form and one of our representatives will be in touch right away.' }}</p>


                    @if($lang=="ar")
                    <form action="{{url('ar/contactus')}}" method="post">
                        <input name="source" type="hidden" value="faqs-page">
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
                                <input type="hidden" name="title" placeholder="" value="this message come from faqs " class="form-control" required>
                            </div>
                        </div>
                        <div class="row">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="from_phone" placeholder="{{ $lang=="ar" ? 'رقم الهاتف:' : 'Phone Number:' }}" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="from_email" placeholder="{{ $lang=="ar" ? 'البريد الإلكتروني:' : 'Email:' }}" class="form-control" required>
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


                <form action="{{url('contactus')}}" method="post">
                    <input name="source" type="hidden" value="faqs-page">
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
                            <input type="hidden" name="title" placeholder="" value="this message come from faqs " class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" name="from_phone" placeholder="{{ $lang=="ar" ? 'رقم الهاتف:' : 'Phone Number:' }}" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <input type="email" name="from_email" placeholder="{{ $lang=="ar" ? 'البريد الإلكتروني:' : 'Email:' }}" class="form-control" required>
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
    </section>


@endsection

@section('js')

    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&amp;render=explicit" type="text/javascript"></script>

    <script>
        var onloadCallback = function() {
            grecaptcha.render('g-recaptcha', {
                'sitekey' : '6Lfjjx4dAAAAACDOTZEIuTG6ONeMfN8djzb-fnmH'
            });
        };

        // $('#form').on('submit',function(event){
        //     if($('#g-recaptcha-response').val()==""){
        //         event.preventDefault();
        //         alert('Please verify Captcha');
        //     }
        // });
    </script>

    <?php $ua = htmlentities($_SERVER['HTTP_USER_AGENT'], ENT_QUOTES, 'UTF-8'); ?>
    @if(preg_match('~MSIE|Internet Explorer~i', $ua) || (strpos($ua, 'Trident/7.0') !== false && strpos($ua, 'rv:11.0') !== false))
        <script>
            $('.accordion-item').on('click',function () {
                targ = $(this).find('.accordion-collapse');
                if(targ.hasClass('show'))
                    targ.removeClass(('show'));
                else {
                    $('.accordion-collapse').removeClass('show');
                    targ.addClass(('show'));
                }
            })
        </script>
    @endif
@endsection

