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

    <section id="intro">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="wraps">
                        <img src="{{ asset('') }}/img/about/{{ $lang=="ar" ? 'magnify2-ar.png' : 'magnify2.png' }}" class="intro-img parallax" data-value="-4"  data-animation="puff-in-center">
                        <img src="{{ asset('') }}/img/about/magnify-bg.png" class="rotating mobilebg">
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
                    <h1 class="intro-heading resizeable-font">{{ $lang=="ar" ? 'نبذة عن تطمين' : 'About tatmeen' }}</h1>
                    <p class="intro-sub resizeable-font">{{ $lang=="ar" ? 'تطمين: الحل الإماراتي الأول لتتبع وتعقب الأدوية.' : 'UAE’S FIRST TRACK & TRACE SOLUTION FOR PHARMACEUTICALS.' }}</p>

                    @if($lang=="ar")
                        <p class="intro-description resizeable-font">يبعث اسم تطمين على الطمأنينة والسلام وهذا بالضبط ما نسعى لتحقيقه من خلال هذا البرنامج الوطني. تسعى وزارة الصحة ووقاية المجتمع بالتعاون مع إيفوتك لإنشاء منصة لتتبع الأدوية باستخدام التسلسل بما يتوافق مع معايير GS1.</p>
                        <p class="intro-description resizeable-font">ستساعد هذه المنصة على تتبع المنتجات المزيفة وتسهيل سحب الأدوية منتهية الصلاحية من الأسواق وستسهم في تعقب الأدوية من الإنتاج إلى استخدام المرضى.</p>
                    @else
                        <p class="intro-description resizeable-font">
                            Tatmeen means assurance in Arabic, which is exactly what we aim for with this nation-wide programme. The Ministry of Health and Prevention, in partnership with EVOTEQ, is establishing the platform to enable traceability of pharmaceuticals using serialisation that goes in line with the GS1 standard. </p>
                        <p class="intro-description resizeable-font">This will help track counterfeits, enable recalls/expired drugs, and enhance visibility across the pharmaceutical chain from manufacturer to end user. </p>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <section id="partners" class="graybg">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-12 text-left">
                    <h5 class="sub-heading">{{ $lang=="ar" ? 'الشركاء' : 'Partners' }}</h5>
                </div>
            </div>
        </div>
        <div class="container text-center">
            <div class="partner">
                <img src="{{ asset('') }}/img/about/dha.png" class=" toanimate mobile-bt20" data-animation="scale-in-center">
                <div class="hov">
                    <span class="triangle"></span>

                    @if($lang=="ar")
                        <p>تشرف هيئة الصحة بدبي على القطاع الصحي في دبي وتعزز مشاركة القطاع الخاص. وتتمثل أهداف الهيئة في تنظيم الخدمات الطبية في دبي وتعزيز التنافسية والشفافية في القطاع الصحي وتحسين الخدمات والمنتجات الطبية بالاستناد على أفضل الممارسات الدولية، كما تسعى أيضاً إلى تحقيق أهداف القطاع وفق الخطط الاستراتيجية المعتمدة.</p>
                        <p>بالإضافة إلى مراقبة القطاع الصحي في الإمارة، تركز هيئة الصحة بدبي على تقديم الخدمات من خلال مرافق الرعاية الصحية التابعة لهيئة الصحة بدبي بما في ذلك مستشفيات لطيفة ودبي وراشد وحتا، ومراكز الرعاية الصحية الأولية البالغ عددها 12، ومن خلال 17 مركزاً للياقة الطبية، والمراكز الستة التخصصية.</p>
                    @else
                        <p>The Dubai Health Authority (DHA) oversees the complete health sector in Dubai and enhances private sector engagement. Its objectives include regulating medical services in Dubai, enhancing competitiveness and transparency, improving medical services and products based on international best practices and achieving the sector’s objectives according to approved strategic plans.
                        </p>
                        <p>
                            In addition to monitoring the health sector for the Emirate of Dubai, the DHA also focuses on providing services through DHA healthcare facilities including Latifa, Dubai, Rashid and Hatta Hospitals, its 12 primary healthcare centres, 17 medical fitness centres and its 6 specialty centres.
                        </p>
                    @endif
                </div>
            </div>
            <div class="partner">
                <img src="{{ asset('') }}/img/about/doh.png" class=" toanimate mobile-bt20" data-animation="scale-in-center" style="margin-top: 18px;">
                <div class="hov">
                    <span class="triangle"></span>
                    @if($lang=="ar")
                        <p>دائرة الصحة في أبوظبي هي الهيئة التنظيمية لقطاع الرعاية الصحية في الإمارة، وتسعى لضمان جودة الرعاية الصحية في المجتمع من خلال مراقبة الحالة الصحية للسكان وتحديد استراتيجية النظام الصحي وتحليل أداء هذا النظام وتأثيره.
</p>
                        <p>كما تعنى الدائرة أيضاً في صياغة الإطار التنظيمي للنظام الصحي وتفقد اللوائح التنظيمية والعمل بالمعايير وتشجيع جميع مقدمي خدمات الرعاية الصحية في الإمارة على اتباع أفضل الممارسات العالمية تحقيقاً لأهداف الأداء المنصوصة.
                        </p>
                    @else
                        <p>Department of Health, Abu Dhabi (DoH) is the regulative body of the Healthcare Sector in the Emirate of Abu Dhabi and ensures healthcare excellence for the community by monitoring the health status of the population, defining the strategy for the health system, and analysing the performance of the system.
                        </p>
                        <p>In addition DoH shapes the regulatory framework for the health system, inspects against regulations, enforces standards, and encourages adoption of world – class best practices and performance targets by all healthcare service providers in the Emirate.
                        </p>
                    @endif
                </div>
            </div>
            <div class="partner">
                <img src="{{ asset('') }}/img/about/evoteq-logo.png" class=" toanimate mobile-bt20" data-animation="scale-in-center">
                <div class="hov">
                    <span class="triangle"></span>
                    @if($lang=="ar")
                        <p>تعد إيفوتك شركة تطور حلول رقمية ذكية في دولة الإمارات العربية المتحدة وتدعم الابتكارات التكنولوجية للشركات والجهات الحكومية لبناء مجتمعٍ متقدم في المجال التقني.</p>
                        <p>تساعد إيفوتك عملائها على تطوير أدائهم وزيادة كفاءتهم وتحثهم على اتخاذ قرارات أسرع وأفضل مما يهدف إلى بناء حياةٍ أفضل.</p>
                        <p>بالعمل مع المؤسسات الساعية للتحول الرقمي، يقدم فريق الخبراء من إيفوتك أفضل النصائح والاستشارات فما يتعلق بالاستراتيجيات الشاملة، بالإضافة إلى تصميم حلول تقنية عالية الجودة مثل تطبيقات الشركات وتحليلات البيانات والتكنولوجيا الذكية والذكاء الاصطناعي وسلسلة الكتل (blockchain).
                        </p>
                    @else
                        <p>EVOTEQ is a UAE based digital transformation catalyst that creates digitally empowered, smarter societies by providing innovative and transformative solutions and platforms to governments and large enterprises across the region. The company enables its customers to improve performance, increase efficiency, and make faster and better decisions, thereby helping them meaningfully and positively impact people’s lives.
                        </p>
                        <p>
                            Working collaboratively with enterprises seeking digital transformation, EVOTEQ’s team of experts offer consulting and advisory on comprehensive strategies as well as design high-tech, advanced solutions ranging from business applications and data analytics to smart technology, AI, and blockchain.
                        </p>
                    @endif
                </div>
            </div>
            <div class="partner">
                <img src="{{ asset('') }}/img/about/gs1-logo.png" class=" toanimate mobile-bt20" data-animation="scale-in-center" style="margin-top: 20px;">
                <div class="hov">
                    <span class="triangle"></span>
                    @if($lang=="ar")
                        <p>GS1 هي منظمة غير ربحية تخدم مجال الصناعة بتقديمها معايير عالمية وخدمات وحلول للمساعدة في التغلب على التحديات التجارية في الحاضر والمستقبل.</p>
                        <p>تقوم GS1 بتطوير المعايير العالمية للاتصالات التجارية والحفاظ عليها. واشتهرت بطرحها للرمز الشريطي الذي وصفته هيئة الإذاعة البريطانية بأنه واحد من أهم 50 شيئاً من الأشياء التي قام عليها الاقتصاد العالمي.</p>
                        <p>تم تصميم معايير GS1 لتحسين كفاءة سلاسل التوريد وسلامتها ووضوحها عبر القنوات المادية والرقمية في 25 قطاعاً. مع مكاتبها الموزعة في 115 دولة، وبـ 2 مليون شركة، وبقيامها بـ 6 مليارات معاملة يومياً تشكل معايير GS1 لغة أعمال مشتركة تدعم الأنظمة والعمليات التجارية في جميع أنحاء العالم.
                        </p>
                    @else
                        <p>GS1® is a not-for-profit organisation that works with industry, for industry, providing global standards and technology-neutral services and solutions to help solve the business challenges of today and tomorrow.
                        </p>
                        <p>
                            GS1 develops and maintains the most widely used global standards for efficient business communication. It is best known for the barcode, named by the BBC as one of “the 50 things that made the world economy.”
                        </p>
                        <p>
                            GS1 standards and services improve the efficiency, safety, and visibility of supply chains across physical and digital channels in 25 sectors. With offices in 115 countries, 2 million companies, and 6 billion transactions every day, GS1 standards create a common language that supports systems and processes across the globe.
                        </p>
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
    <!--                        <img src="img/about/evoteq.png" class="mobile-w100">-->
    <!--                        <p class="mt-3 resizeable-font">EVOTEQ is a UAE based digital transformation catalyst that creates digitally empowered, smarter societies by providing innovative and transformative solutions and platforms to governments and large enterprises across the region. The company enables its customers to improve performance, increase efficiency, and make faster and better decisions, thereby helping them meaningfully and positively impact people’s lives. <br/><br/>-->
    <!--                            <span class="hidden slide-in-fwd-center">Working collaboratively with enterprises seeking digital transformation, EVOTEQ’s team of experts offers consultation and advice on comprehensive strategies as well as high-tech design, advanced solutions ranging from business applications and data analytics to smart technology, AI, and blockchain.<br/><br/></span>-->
    <!--                        <a href="#" class="readmore navshow">Read more</a></p>-->
    <!--                    </div>-->
    <!--                    <div class="col-lg-6 colm  toanimate mobile-bt20" data-animation="{{ $lang=="ar" ? 'slide-in-left' : 'slide-in-right' }}">-->
    <!--                        <img src="img/about/gs1.png" class="mobile-w100">-->
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
