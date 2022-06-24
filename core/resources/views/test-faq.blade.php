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

    @inject('contentService', 'App\Services\ContentProvider')
    <?php $pagecontent = $contentService->getPageContent('faqs',$lang);?>
    <?php $faqs = $contentService->getFaqs($lang);?>
    <?php $queryBoxes = $contentService->getQueryBoxes($lang);?>

    <section id="partners" class="graybg">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-12 text-left">
                    <h5 class="sub-heading">{{ $lang=="ar" ? 'الأسئلة الشائعة' : 'FREQUENTLY ASKED QUESTIONS' }}</h5>

                    <div class="accordion accordion-flush" id="accordionFlushExample">

                        @foreach($faqs as $faq)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#t{{$loop->index}}" aria-expanded="false" aria-controls="t1">
                                        {{ $faq['question'] }}
                                    </button>
                                </h2>
                                <div id="t{{$loop->index}}" class="accordion-collapse collapse" aria-labelledby="t{{$loop->index}}" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        {!! $faq['answer'] !!}
                                    </div>
                                </div>
                            </div>
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

                        @foreach($queryBoxes as $queryBox)
                        <div class="col-lg-4 col-md-12 text-center colm icn-txt ">
                            <div class="pl-2 pr-2">
                                <h2 class="light-heading mt-3 mb-2 text-center">{!!  $queryBox['title']  !!}  </h2>
                                {{--<a href="#" class="icon icon-email" title="Contact us"></a>--}}
                                <p>{!!  $queryBox['content']  !!}</p>
                                <a href="mailto:{!!  $queryBox['link']  !!}" class="mobileonly"><button class="greenbt" style="float: none">{!!  $queryBox['link']  !!}</button></a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="row deskonly">
                        {{--<div class="col-lg-3 col-md-12 text-center colm icn-txt mb-5">--}}
                            {{--<div class="pl-2 pr-2">--}}
                                {{--<a href="mailto:info@mohap.gov.ae"><button class="greenbt" style="float: none;">info@mohap.gov.ae</button></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        @foreach($queryBoxes as $queryBox)
                            <div class="col-lg-4 col-md-12 text-center colm icn-txt mb-5">
                                <div class="pl-2 pr-2">
                                    <a href="mailto:{!!  $queryBox['link']  !!}"><button class="greenbt" style="float: none">{!!  $queryBox['link']  !!}</button></a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row" id="form">
                <div class="col-md-12 text-left pt-5">
                    <hr/>
                    <h2 class="grey-heading mt-5">{{ $lang=="ar" ? 'للمزيد من المعلومات' : 'For more information' }}  </h2>
                    <p>{{ $lang=="ar" ? 'املأ النموذج التالي وسيتواصل معك أحد موظفينا في الحال ' : 'Fill in the form and one of our representatives will be in touch right away.' }}</p>

                    <form action="{{ url('recaptcha') }}" method="post" id="form">
                        <input name="source" type="hidden" value="faqs-page">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <input name="user_id" type="text" id="firstname" class="this" autocomplete="off" tabindex="-1">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                @if(Session::has('message'))
                                    <div class="alert alert-success">{{ Session::get('message') }}</div>
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
                                <div id="g-recaptcha" data-sitekey="6Lfjjx4dAAAAACDOTZEIuTG6ONeMfN8djzb-fnmH"></div>
                                <br/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <input type="submit" value="{{ $lang=='ar' ? 'إرسال' : 'Submit' }}">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    {{--<section id="" class="whitebgfull">--}}
        {{--<div class="container relative">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-12 text-left">--}}
                    {{--<h2 class="grey-heading">{{ $lang=="ar" ? 'أدلة المستخدم' : 'User manuals  ' }}</h2>--}}
                    {{--<p class="mb-5">{{ $lang=="ar" ? 'حمِّل أدلة المستخدم التالية' : 'DOWNLOAD OUR USER MANUALS BELOW' }}</p>--}}

                    {{--<div class="row">--}}
                        {{--<div class="col-md-4">--}}
                            {{--<a href="{{ $lang=="ar" ? asset('/pdfs/MOHAP SERIALIZATION GUIDE V1.0 AR FINAL1.pdf') : asset('/pdfs/MOHAP SERIALIZATION GUIDE V1.0 EN FINAL1.pdf') }}" target="_blank"><button class="greenbt">{{ $lang=="ar" ? 'دليل المستخدم لتطبيق التسلسل' : 'Serialisation Implementation User Guide' }}</button></a>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-1"></div>--}}
                        {{--<div class="col-md-4">--}}
                            {{--<button class="greenbt">{{ $lang=="ar" ? 'الدليل التقني للمستخدم' : 'Technical Manual' }}</button>--}}
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

