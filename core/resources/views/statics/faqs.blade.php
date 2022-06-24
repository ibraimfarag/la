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

    <section id="partners" class="graybg">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-12 text-left">
                    <h5 class="sub-heading">{{ $lang=="ar" ? 'الأسئلة الشائعة' : 'FREQUENTLY ASKED QUESTIONS' }}</h5>

                    <?php
                        $faqs = [
                            [
                                'title' => 'What is Tatmeen?',
                                'title_ar' => 'ما هي منصة تطمين؟',
                                'content' => '
Tatmeen is a Ministry of Health and Prevention digital platform that enables the tracking and tracing of all pharmaceutical products in the United Arab Emirates.
                                ',
                                'content_ar' => '
تطمين هي منصة رقمية تابعة لوزارة الصحة ووقاية المجتمع تتيح تتبع جميع المنتجات الصيدلانية في دولة الإمارات العربية المتحدة وتتبعها.
                                ',
                            ],
                            [
                                'title' => 'When does Tatmeen become operational?',
                                'title_ar' => 'متى سيتم إطلاق منصة تطمين؟',
                                'content' => '
Tatmeen will be operational 18 months after the issuing of the Decree by the Ministry of Health for the serialisation of all pharmaceuticals in the UAE.
                                ',
                                'content_ar' => '
ستبدأ منصة تطمين في العمل بعد 18 شهراً من تاريخ إصدار مرسوم وزارة الصحة ووقاية المجتمع الخاص بتسلسل جميع الأدوية في دولة الإمارات العربية المتحدة.
                                ',
                            ],
                            [
                                'title' => 'What is serialisation?',
                                'title_ar' => 'ما هو التسلسل؟',
                                'content' => '
Serialisation is the application of a <a href="https://www.gs1ae.org/" target="_blank">GS1</a> approved 2D Matrix barcode and human readable information onto all drug secondary packing.
                                ',
                                'content_ar' => '
التسلسل هو تطبيق رمز شريطي ثنائي الأبعاد موضوع من قبل <a href="https://www.gs1ae.org/" target="_blank">GS1</a> وتزويد جميع العبوات الثانوية للأدوية بمعلومات مقروءة.
                                ',
                            ],
                            [
                                'title' => 'What if my drug has not been registered with the Ministry of Health?',
                                'title_ar' => 'ماذا لو لم يتم تسجيل دوائي في وزارة الصحة ووقاية المجتمع؟',
                                'content' => '
The application of 2D Matrix barcodes applies to both registered and non-registered drugs and is mandatory for all drugs imported or produced in the UAE.
                                ',
                                'content_ar' => '
يطبق الرمز شريطي ثنائي الأبعاد على كل من الأدوية المسجلة وغير المسجلة وهو إلزامي لجميع الأدوية المستوردة أو المنتجة في دولة الإمارات العربية المتحدة.
                                ',
                            ],
                            [
                                'title' => 'Do I have to register my production site, clinical site, pharmacy on the system?',
                                'title_ar' => 'هل عليَّ تسجيل موقعي الإنتاجي وموقعي العلاجي والصيدلية على النظام؟',
                                'content' => '
Yes, all sites that are licensed to dispense drugs will be required to be registered with a Global Location Number. For more information, press on this <a href="https://www.gs1.org/1/glnrules/en/" target="_blank">link</a>.
                                ',
                                'content_ar' => '
نعم، يجب أن تكون جميع المواقع المرخصة لتوزيع الأدوية مسجلة برقم موقع عالمي. للمزيد من المعلومات، اضغط على التالي <a href="https://www.gs1.org/1/glnrules/en/" target="_blank">رابط</a>.
                                ',
                            ],
                            [
                                'title' => 'Will the Tatmeen system require special software technology?',
                                'title_ar' => 'هل ستطلب منصة تطمين تقنية برمجية خاصة؟ ',
                                'content' => '
No, Tatmeen will work with all partners in the supply chain to give you access to the platform in the easiest manner for your circumstances.
                                ',
                                'content_ar' => '
لا، ستعمل تطمين مع جميع الشركاء في سلسلة التوريد لضمان وصولك إلى المنصة بأسهل وأفضل طريقة.
                                ',
                            ],
                            [
                                'title' => 'Will training be provided for the implementation of Tatmeen for my company?',
                                'title_ar' => 'هل سيتم توفير تدريب عملي على استخدام منصة تطمين؟ ',
                                'content' => '
Yes, Tatmeen will provide support and training to ensure you are able to access and work with the Tatmeen platform.
                                ',
                                'content_ar' => '
نعم، ستُوفر خدمات الدعم والتدريب لضمان سهولة وصولك للمنصة واستخدامها.
                                ',
                            ],
                            [
                                'title' => 'We see that we have to upload our products on to Brandsync, could you tell me how I can do this?',
                                'title_ar' => 'يتعين عليَّ تسجيل منتجاتنا على BrandSync، كيف يمكنني فعل ذلك؟',
                                'content' => '
GS1 provide support for the Brandsync platform, in conjunction with Tatmeen. Press on the link to access <a href="https://brand-sync.com/" target="_blank">BrandSync</a> support.
                                ',
                                'content_ar' => '
تدعم GS1 منصة BrandSync بالتعاون مع تطمين. اضغط على الرابط للوصول إلى دعم <a href="https://brand-sync.com/" target="_blank">BrandSync</a>.
                                ',
                            ],
                            [
                                'title' => 'Can I use information loaded onto other government sites for Tatmeen (European Medicines Verification Organisation, Saudi Arabia, etc)?',
                                'title_ar' => 'هل يمكنني استخدام معلومات سابقة محملة على منصات حكومية أخرى على تطمين؟ (المنظمة الأوروبية للتحقق من الأدوية، المملكة العربية السعودية، إلخ)',
                                'content' => '
No, the United Arab Emirates requires you to follow the decrees and regulations issued by the Ministry of Health and Prevention in relation to drugs serialisation and the Tatmeen platform.
                                ',
                                'content_ar' => '
لا، تطلب منك دولة الإمارات العربية المتحدة اتباع المراسم واللوائح الصادرة عن وزارة الصحة ووقاية المجتمع فيما يتعلق بتسلسل الأدوية ومنصة تطمين.
                                ',
                            ],
                            [
                                'title' => 'Will more information be issued to help the industry onboard the Tatmeen platform?',
                                'title_ar' => 'هل ستتاح المزيد من المعلومات لمساعدتنا على استخدام منصة تطمين؟',
                                'content' => '
Yes, the Tatmeen website will carry all updates related to the introduction of the Tatmeen platform and the Ministry of Health and Prevention will issue any decrees or regulations for the UAE related to Tatmeen. Please access the site regularly for any updates.
                                ',
                                'content_ar' => '
نعم، سيتيح موقع "تطمين" الإلكتروني كافة المستجدات المتعلقة بإطلاق منصة "تطمين"، وستصرح وزارة الصحة ووقاية المجتمع بأي قرارات أو لوائح صادرة عن دولة الإمارات العربية المتحدة فيما يخص تطمين.  يُرجى زيارة الموقع بانتظام للاطلاع على أي مستجدات.
                                ',
                            ],
                            [
                                'title' => 'Do I have to still register my company and our drug portfolio for the UAE to the Ministry of Health and Prevention?',
                                'title_ar' => 'هل لا يزال عليَّ تسجيل شركتي ومحفظة الأدوية الخاصة بي في دولة الإمارات العربية المتحدة لدى وزارة الصحة ووقاية المجتمع؟ ',
                                'content' => '
Yes, all protocols for the registration of scientific offices, medical stores, registration of drugs will remain as they are today.
                                ',
                                'content_ar' => '
نعم، ستبقى كافة بروتوكولات تسجيل المكاتب العلمية والمخازن الطبية وتسجيل الأدوية كما هو معمول بها اليوم.
                                ',
                            ],
                            [
                                'title' => 'Will I still have to report to the other government entities for issuing of controlled drugs and opioids?',
                                'title_ar' => 'هل لا يزال عليَّ إبلاغ الجهات الحكومية الأخرى عن إنتاج الأدوية الخاضعة للرقابة والمواد الأفيونية؟',
                                'content' => '
Yes, there will be no changes to any reporting of information to those government entities you currently have to mandatorily report too.
                                ',
                                'content_ar' => '
نعم، لن تطرق أي تغييرات على أي إجراء للإبلاغ عن المعلومات إلى تلك الجهات الحكومية التي يتعين عليك إبلاغها.
                                ',
                            ],
                            [
                                'title' => 'When was the legislation issued by the Ministry of Health and Prevention?',
                                'title_ar' => 'متى أصدرت وزارة الصحة ووقاية المجتمع هذا القرار؟',
                                'content' => '
The legislative decree was issued on June 14th, 2021.
                                ',
                                'content_ar' => '
صدر هذا القرار في 14 يونيو، 2021.
                                ',
                            ],
                            [
                                'title' => 'What are the time periods to comply with the legislation?',
                                'title_ar' => 'ما هي الفترة الزمنية المحددة للالتزام بالقرار؟',
                                'content' => '
There is a 6-month period to install the 2D matrix barcode and human readable format, as well as comply with serialization, the deadline for this is December 13, 2021.
<br/>
After this, there is an 18-month period for serialization reporting and onboarding onto the Tatmeen platform. The deadline for this is December 13, 2022.
                                ',
                                'content_ar' => '
هناك فترة 6 أشهر لوضع الرمز الشريطي ثنائي الأبعاد وتحميل المعلومات المقروة بالإضافة إلى الالتزام بالتسلسل، والموعد النهائي لتطبيق كل ما سبق هو 13 ديسمبر 2021.    <br/>بعد ذلك، هناك فترة 18 شهراً لإدخال تقارير التسلسل وتحميل المعلومات على منصة تطمين والموعد النهائي لذلك هو 13 ديسمبر، 2021.
                                ',
                            ],
                            [
                                'title' => 'Where can I find the Serialization Legislation?',
                                'title_ar' => 'أين يمكنني إيجاد قرار تتبع المنتجات الدوائية؟',
                                'content' => '
You can view the Serialization Legislation <a href="https://www.mohap.gov.ae/FlipBooks/PublicHealthPolicies/PHP-LAW-AR-121/mobile/index.html#p=1" target="_blank">here</a>.
                                ',
                                'content_ar' => '
يمكنك إيجاد قرار تتبع المنتجات الدوائية <a href="https://www.mohap.gov.ae/FlipBooks/PublicHealthPolicies/PHP-LAW-AR-121/mobile/index.html#p=1" target="_blank">هنا</a>.
                                ',
                            ],
                        ]
                    ?>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        @for($x=0;$x<count($faqs);$x++)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#t{{$x}}" aria-expanded="false" aria-controls="t1">
                                        @if($lang=="ar")
                                            {{ $faqs[$x]['title_ar'] }}
                                        @else
                                            {{ $faqs[$x]['title']  }}
                                        @endif
                                    </button>
                                </h2>
                                <div id="t{{$x}}" class="accordion-collapse collapse" aria-labelledby="t{{$x}}" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        @if($lang=="ar")
                                            {!! $faqs[$x]['content_ar'] !!}
                                        @else
                                            {!!  $faqs[$x]['content']  !!}
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endfor
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

                    <form action="{{url('contact')}}" method="post">
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
                                <input type="text" name="name" placeholder="{{ $lang=="ar" ? 'الاسم الأول والاسم الأخير:' : 'Full Name:' }}" class="form-control" required>
                            </div>
                        </div>
                        <div class="row">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="phone" placeholder="{{ $lang=="ar" ? 'رقم الهاتف:' : 'Phone Number:' }}" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="email" placeholder="{{ $lang=="ar" ? 'البريد الإلكتروني:' : 'Email:' }}" class="form-control" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <textarea name="message" placeholder="{{ $lang=="ar" ? 'الرسالة:' : 'Message:' }}" class="form-control" required></textarea>
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

    <section id="" class="whitebgfull">
        <div class="container relative">
            <div class="row">
                <div class="col-md-12 text-left">
                    <h2 class="grey-heading">{{ $lang=="ar" ? 'أدلة المستخدم' : 'User manuals  ' }}</h2>
                    <p class="mb-5">{{ $lang=="ar" ? 'حمِّل أدلة المستخدم التالية' : 'DOWNLOAD OUR USER MANUALS BELOW' }}</p>

                    <div class="row">
                        <div class="col-md-4">
                            <a href="{{ $lang=="ar" ? asset('/pdfs/MOHAP SERIALIZATION GUIDE V1.0 AR FINAL1.pdf') : asset('/pdfs/MOHAP SERIALIZATION GUIDE V1.0 EN FINAL1.pdf') }}" target="_blank"><button class="greenbt">{{ $lang=="ar" ? 'دليل المستخدم لتطبيق التسلسل' : 'Serialisation Implementation User Guide' }}</button></a>
                        </div>
                        {{--<div class="col-md-1"></div>--}}
                        {{--<div class="col-md-4">--}}
                            {{--<button class="greenbt">{{ $lang=="ar" ? 'الدليل التقني للمستخدم' : 'Technical Manual' }}</button>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
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

