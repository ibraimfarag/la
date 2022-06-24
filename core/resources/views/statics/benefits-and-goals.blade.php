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
        
        @if($lang=='ar')
            .copybox .copy {
                width: 210px;
            }
        @endif

        @media only screen and (max-width:1200px) {
            .copybox {
                width: 250px;
            }

            .figwrap p {
                font-size: 16px;
            }
        }

        @media only screen and (max-width:991px) {
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

        @media only screen and (max-width:991px) {
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

        @media only screen and (max-width:767px) {

            .figwrap {
                min-height: 230px;
            }

            .wrapper {
                min-height: 100px;
            }

        }

        @media only screen and (max-width:520px) {

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


    <section id="intro" class=" graybg">
        <div class="container relative">
            <div class="row">
                <div class="col-lg-12 col-md-12 text-center">
                    <h1 class="intro-heading resizeable-font">{{ $lang=="ar" ? 'تجربة متكاملة للمستخدم مع تطمين ' : 'A COMPREHENSIVE  USER EXPERIENCE WITH TATMEEN' }}</h1>
                    <p class="intro-sub resizeable-font uppercase">{{ $lang=="ar" ? 'طريقة العمل والتفاعل أثناء العملية – المستخدم ' : 'Business Process & Interactions in Practice – End Users' }}</p>

                    <div class="wrapper">
                        <img src="{{ $lang == 'ar' ? asset('/img/benefits/mobile-ar.png') : asset('/img/benefits/mobile.png') }}" class="intro-img parallax" data-value="-8" data-animation="puff-in-center">
                        <img src="{{ asset('') }}/img/benefits/mobile-bg.png" class="mobilebg toanimate rotating">

                        <div class="copybox tl left">
                            <div class="image">
                                <img src="{{ asset('') }}/img/benefits/patients.png?v=1">
                            </div>
                            <div class="copy">
                                <h5>{{ $lang=="ar" ? 'المرضى' : 'Patients' }}</h5>
                                <p>{{ $lang=="ar" ? 'التحقق من صلاحية المنتج والإبلاغ عن الأدوية المزيفة أو منتهية الصلاحية أو أدوية السوق الرمادية.' : 'Product validation and reporting of counterfeits, expired or grey market medicines.' }}</p>
                            </div>
                            <div class="line-tl"><img src="{{ asset('') }}/img/benefits/line-tl.png"></div>
                        </div>

                        <div class="copybox tr right">
                            <div class="image">
                                <img src="{{ asset('') }}/img/benefits/valid-inspection.png">
                            </div>
                            <div class="copy" style="{{ $lang=="ar" ? 'text-align: right' : '' }}">
                                <h5>{{ $lang=="ar" ? 'التفتيش الجمركي' : 'Custom Inspection' }} </h5>
                                <p>{{ $lang=="ar" ? 'التأكد من صلاحية الأدوية والأجهزة المعتمدة وتحريرها.' : 'Validate and confirm release of approved drugs and devices.' }}</p>
                            </div>
                            <div class="line-tr"><img src="{{ asset('') }}/img/benefits/line-tr.png"></div>
                        </div>


                        <div class="copybox bl left">
                            <div class="image">
                                <img src="{{ asset('') }}/img/benefits/inspectors.png">
                            </div>
                            <div class="copy">
                                <h5>{{ $lang=="ar" ? 'المفتشون' : 'Inspectors' }} </h5>
                                <p>{{ $lang=="ar" ? 'مسح الرموز الشريطية الخاصة بالعقاقير والأدوية باستخدام أجهزتهم النقالة للتحقق من سلسة التوريد في ذات الوقت.' : 'Scan a barcode of drugs or devices with their mobile device to capture and verify real time supply chain data.' }}</p>
                            </div>
                            <div class="line-bl"><img src="{{ asset('') }}/img/benefits/line-bl.png"></div>
                        </div>

                        <div class="copybox br right">
                            <div class="image">
                                <img src="{{ asset('') }}/img/benefits/hospitals.png">
                            </div>
                            <div class="copy" style="{{ $lang=="ar" ? 'text-align: right' : '' }}">
                                <h5>{{ $lang=="ar" ? 'المستشفيات\ الصيدليات' : 'Hospitals / Pharmacies' }}</h5>
                                <p>{{ $lang=="ar" ? 'التحقق من صلاحية المنتج حال وصوله وعند صرف الدواء.' : 'Product validation on arrival and upon dispensing medicine.' }}</p>
                            </div>
                            <div class="line-br"><img src="{{ asset('') }}/img/benefits/line-br.png"></div>
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
                    <img src="{{ asset('') }}/img/benefits/question.png" width="90%;">
                </div>
                <div class="col-lg-8 text-left right">
                    <div class="questionslider">
                        <div class="swiper-wrapper">
                            <div class="item swiper-slide">
                                <h5 class="yellow-heading mb-4">{{ $lang=="ar" ? 'كيف تجعلني منصة تطمين آمناً كفرد في المجتمع؟' : 'How does Tatmeen make me safe as a member of the community?' }}</h5>
                                @if($lang=="ar")
                                    <p>بلمسة بسيطة بات الأفراد قادرين على إنقاذ الأرواح. باستخدام منصتنا الرقمية، كل ما عليهم فعله هو مسح رمز الاستجابة السريع (QR)، الرمز الشريطي لمصفوفة البيانات GS1، للتحقق مما يؤمنه الموردين والتأكد مما يصفه الأطباء والتعرف على ما يبتلعه الأفراد.</p>
                                @else
                                    <p>With a simple touch, people can now save lives. Using our digital platform, all they must do is scan the dedicated GS1 data matrix barcode to check, control and learn about what they are supplying, prescribing, or swallowing.</p>
                                @endif
                            </div>
                            <div class="item swiper-slide">
                                <h5 class="yellow-heading mb-4">{{ $lang=="ar" ? 'ماذا تقدم منصة تطمين للصناعة والأطباء والمجتمع؟ ' : 'What does Tatmeen do for the industry, clinicians and the general public?' }}</h5>
                                @if($lang=="ar")
                                    <p>تتبع منصة “تطمين” الأدوية المصنعة داخل الإمارات العربية المتحدة وخارجها عبر سلاسل التوريد. وتمكن المتخصصين وأفراد المجتمع من تتبع الأدوية وتعقبها خطوة بخطوة بدءاً من الشركة المصنعة ووصولاً إلى استخدام المرضى.
                                    </p>
                                    <p>ستساهم منصة تطمين في زيادة وضوح سلاسل التوريد الطبية، مما يجعل الأفراد يشعرون بأنهم أكثر أمانًا وأكثر تطلعاً.
                                    </p>
                                @else
                                    <p>Tatmeen’s track and trace system closely monitors medicines manufactured in the UAE and internationally across the supply chain. From the manufacturer to the patients, we give people (professionals and members of the public) the power to authenticate medicines at every step. </p>
                                    <p>Tatmeen will contribute to a more visible medical supply chain, making people feel safer and more informed.</p>
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
                    <h3 class="grey-heading mb-4">{{ $lang=="ar" ? ' فوائد تطمين' : 'BENEFITS OF TATMEEN' }}</h3>
                </div>
                <div class="col-lg-12 colm toanimate" data-animation="{{ $lang=="ar" ? 'slide-in-left' : 'slide-in-right' }}">

                    <div class="benefitslider">
                        <div class="swiper-wrapper">
                            <div class="item swiper-slide">
                                <div class="figwrap">
                                    <img src="{{ asset('') }}/img/benefits/figure-1c.png">
                                    <hr/>

                                    @if($lang=="ar")
                                        <p>حماية العلامات التجارية الصيدلانية وأصحابها.</p>
                                    @else
                                        <p>Protect pharmaceutical brands and their owners.</p>
                                    @endif
                                </div>
                            </div>
                            <div class="item swiper-slide">
                                <div class="figwrap">
                                    <img src="{{ asset('') }}/img/benefits/figure-2c.png">
                                    <hr/>
                                    @if($lang=="ar")
                                        <p>الحد من الأدوية المزيفة وغير القانونية والتي دون المستوى، بالإضافة إلى، تعزيز القدرة على سحب الأدوية من الأسواق في أي لحظة، والحد من استيراد الأدوية غير المصرحة التي تدخل سلاسل التوريد.</p>
                                    @else
                                        <p>Minimise the number of counterfeit and illegal and substandard medication in circulation. Increase the ability to recall drugs from every location at a moment’s notice. Eliminate cross border imports of unauthorised medicine entering the supply chain.
                                        </p>
                                    @endif
                                </div>
                            </div>
                            <div class="item swiper-slide">
                                <div class="figwrap">
                                    <img src="{{ asset('') }}/img/benefits/figure-3c.png">
                                    <hr/>
                                    @if($lang=="ar")
                                        <p>السيطرة على الأدوية منتهية الصلاحية وإبعادها عن متناول المستهلكين منعاً للضرر.</p>
                                    @else
                                        <p>Completely control of near-expired pharmaceuticals and keep them away from consumers, preventing harm.</p>
                                    @endif
                                </div>
                            </div>
                            <div class="item swiper-slide">
                                <div class="figwrap">
                                    <img src="{{ asset('') }}/img/benefits/figure-4c.png">
                                    <hr/>
                                    @if($lang=="ar")
                                        <p>التأكد من وجود إمدادات كافية من الأدوية والمنتجات الصيدلانية التي يكثر الطلب عليها تجنباً لحدوث نقصاً فيها، بالإضافة إلى تعزيز القدرة على الاستجابة للطوارئ وإمكانية توصيل الأدوية بسرعة.</p>
                                    @else
                                        <p>Forecast demand and ensure that there is ample authorised supply of the medicines and pharmaceutical products that are in high demand, avoiding shortages; while enhancing the ability to react to emergency requirements and being able to move drugs from one location to another faster. </p>
                                    @endif
                                </div>
                            </div>
                            <div class="item swiper-slide">
                                <div class="figwrap">
                                    <img src="{{ asset('') }}/img/benefits/figure-5c.png">
                                    <hr/>
                                    @if($lang=="ar")
                                        <p>ضمان حماية الاستثمارات التي تقوم بها الشركات في مجال تطوير الأدوية وحماية ملكياتها الفكرية في دولة الإمارات العربية المتحدة، وبهذا يمكن للشركات تقديم أدوية جديدة بأمان ومساعدة المرضى بأفضل حلول الرعاية الصحية لحياةٍ أفضل.</p>
                                    @else
                                        <p>Ensure that the investments made by companies in the development of drugs and their intellectual property are protected within the UAE, setting the UAE as a place where a new generation of medicines can be introduced with safety by pharmaceutical companies and aiding patients with leading healthcare solutions for better health.</p>
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
                    <h2 class="f40 text-uppercase font-gray font-black mb-4 resizeable-font">{{ $lang=="ar" ? 'حقائق وإحصائيات' : 'Facts & Figures' }}</h2>
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
                                <img src="{{ asset('') }}/img/benefits/scroll-1.png" class="animate-flicker parallax"  data-value="-1">
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
                                <img src="{{ asset('') }}/img/benefits/scroll-2.png" class="animate-flicker parallax"  data-value="-1">
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
                                <img src="{{ asset('') }}/img/benefits/scroll-3.png" class="animate-flicker parallax"  data-value="-1">
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
                                <img src="{{ asset('') }}/img/benefits/scroll-4.png?v=1" class="animate-flicker parallax"  data-value="-1">
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
@endsection

@section('js')
    <?php
    if (preg_match('~MSIE|Internet Explorer~i', $ua) || (strpos($ua, 'Trident/7.0') !== false && strpos($ua, 'rv:11.0') !== false)) {
    ?>
    <script src="{{ asset('js/benefitsie.js') }}"></script>
    <?php
    } else {
    ?>
        <script src="{{ asset('js/benefits.js') }}"></script>
    <?php
    }
    ?>
@endsection
