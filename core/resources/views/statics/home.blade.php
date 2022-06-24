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
                    <img src=" {{ asset('img/Tatmeen-heart.png') }}" class="intro-img toanimate" data-animation="puff-in-center">
                    <!--
                                            <div id="animation_container"class="intro-img toanimate" data-animation="puff-in-center" style="background-color:rgba(255, 255, 255, 0.00); width:800px; height:600px">
                                                <canvas id="canvas" width="800" height="600" style="position: absolute; display: block; background-color:rgba(255, 255, 255, 0.00);"></canvas>
                                                <div id="dom_overlay_container" style="pointer-events:none; overflow:hidden; width:800px; height:600px; position: absolute; left: 0px; top: 0px; display: block;">
                                                </div>
                                            </div>
                    -->
                </div>
                <div class="col-md-5  toanimate" data-animation="{{ $lang=="ar" ? 'slide-in-left' : 'slide-in-right' }}">
                    <h1 class="intro-heading resizeable-font">{{ $lang=="ar" ? 'مرحباً بك في تطمين' : 'Welcome to Tatmeen' }}</h1>
                    <p class="intro-description resizeable-font">{{ $lang=="ar" ? 'نقدّم لكم الحل الأول من نوعه في دولة الإمارات العربية المتحدة لتتبع وتعقب الأدوية ' : 'Introducing the UAE’s  first track and trace solution for pharmaceuticals.' }}</p>
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
                    <img src=" {{ asset('') }}/img/chart.png" class=" toanimate" data-animation="scale-in-center">
                    <div class=" toanimate" data-animation="slide-in-bottom">
                        <h2 class="value toanimate resizeable-font" data-animation="scale-in-center-1">1.25+</h2>
                        <h3 class="sub toanimate resizeable-font" data-animation="scale-in-center-2">{{ $lang=="ar" ? 'مليون' : 'million' }}</h3>
                        <p class="desc  resizeable-font">{{ $lang=="ar" ? 'حالة وفاة سجلت بسبب الأدوية المزيفة ومنتهية الصلاحية.' : 'deaths are caused by counterfeit or expired medication.' }}</p>
                        <span class="line"></span>
                    </div>
                </div>
                <div class="col-md-4 colm">
                    <img src="{{ asset('') }}/img/heart.png" class=" toanimate" data-animation="scale-in-center">
                    <div class=" toanimate" data-animation="slide-in-bottom">
                        <h2 class="value  toanimate resizeable-font" data-animation="scale-in-center-1">1+</h2>
                        <h3 class="sub toanimate resizeable-font" data-animation="scale-in-center-2">{{ $lang=="ar" ? 'مليار شخص ' : 'Billion People' }}</h3>
                        <p class="desc resizeable-font">{{ $lang=="ar" ? ' حول العالم يحظون بحياة أطول وصحية أكثر بفضل قطاع الأدوية.' : 'worldwide live longer, healthier lives because of the pharmaceutical industry.' }}</p>
                        <span class="line"></span>
                    </div>
                </div>
                <div class="col-md-4 colm">
                    <img src="{{ asset('') }}/img/medicine.png" class=" toanimate" data-animation="scale-in-center">
                    <div class="toanimate" data-animation="slide-in-bottom ">
                        <h2 class="value toanimate resizeable-font" data-animation="scale-in-center-1">1+</h2>
                        <h3 class="sub toanimate resizeable-font" data-animation="scale-in-center-2">{{ $lang=="ar" ? 'تريليون ' : 'Trillion dollars' }}</h3>
                        <p class="desc resizeable-font">{{ $lang=="ar" ? ' دولار أنفقوا على الأدوية عام 2018.' : 'was spent on medicine in 2018.' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="process" class="dot-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 colm  toanimate" data-animation="slide-in-left">
                    <h2 class="f40 text-uppercase font-gray font-black mb-4 resizeable-font">{{ $lang=="ar" ? 'تعد تطمين منصة متقدمة لتتبع وتعقب الأدوية والمنتجات الطبية' : 'Tatmeen will safeguard the entire supply chain' }}</h2>
                    @if($lang=="ar")
                        <p class="mt-3 resizeable-font">أنشأتها وزارة الصحة ووقاية المجتمع لضمان حماية الصحة العامة وتحقيق أعلى معايير الصحة والسلامة.</p>
                    @else
                        <p class="mt-3 resizeable-font">Tatmeen is a highly advanced <b>track and trace</b> platform for <b>pharmaceuticals and medical products.</b> </p>
                        <p class="mt-3 resizeable-font">Initiated by the Ministry of Health and Prevention to <b>ensure protection</b> of public health and <b>improve the security</b> of healthcare at all stages.</p>
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
                                <img src="{{ asset('') }}/img/slide-img-1.png" class="animate-flicker parallax"  data-value="-8">
                                <div class="hexagon parallax"></div>
                            </div>
                            <h3 class="title resizeable-font">{{ $lang=="ar" ? 'الشركات المصنعة' : 'Manufacturers' }}</h3>
                            <p class="details resizeable-font">{{ $lang=="ar" ? 'عليهم وضع رمز شريطي بمعايير GS1 على المنتجات المصنعة. وبعد استلام تراخيص الاستيراد من وزارة الصحة ووقاية المجتمع يتم شحن المنتجات. ' : 'Manufacturers will affix a GS1 barcode to the products they make. After receiving the import licenses from the Ministry of Health, the product is shipped.' }}  </p>
                            <div class="line up parallax"  data-value="-2"></div>
                        </div>
                        <div class="item swiper-slide">
                            <h3 class="title resizeable-font">{{ $lang=="ar" ? 'مقدمو الخدمات اللوجستية' : 'Logistics providers' }}</h3>
                            <p class="details resizeable-font">{{ $lang=="ar" ? 'بإمكانهم مسح الرمز الشريطي للأدوية لضمان تزويد العملاء بالمنتجات المناسبة في الوقت المناسب. ' : 'Logistics providers 	can scan the medications to ensure the timely supply of the correct products to the right customers.' }} </p>
                            <div class="line down parallax"  data-value="-2"></div>
                            <div class="img">
                                <img src="{{ asset('') }}/img/slide-img-2.png" class="animate-flicker parallax"  data-value="-4">
                                <div class="hexagon parallax"></div>
                            </div>
                        </div>
                        <div class="item swiper-slide">
                            <div class="img">
                                <img src="{{ asset('') }}/img/slide-img-3.png" class="animate-flicker parallax"  data-value="-8">
                                <div class="hexagon parallax"></div>
                            </div>
                            <h3 class="title resizeable-font">{{ $lang=="ar" ? 'مسؤولي الجمارك' : 'Customs officials' }}</h3>
                            <p class="details resizeable-font">{{ $lang=="ar" ? 'بإمكانهم التحقق من المنتجات والتحري عنها بمسح الرمز الشريطي عند دخولها إلى الدولة.' : 'Customs officials can verify the products & get detailed information with a simple scan when the supplies enter the country.' }} </p>
                            <div class="line up parallax"  data-value="-2"></div>
                        </div>
                        <div class="item swiper-slide">
                            <h3 class="title resizeable-font">{{ $lang=="ar" ? 'الموزعين وتجّار الجملة ' : 'Distributors & wholesalers' }} </h3>
                            <p class="details resizeable-font">{{ $lang=="ar" ? 'قادرين على التأكد من أنَّ مخزونهم آمن للتوزيع.' : 'Distributors & wholesalers that stock these products have the same capability to ensure that their inventory is safe for distribution.' }} </p>
                            <div class="img">
                                <img src="{{ asset('') }}/img/slide-img-4.png" class="animate-flicker parallax"  data-value="-4">
                                <div class="hexagon parallax"></div>
                            </div>
                            <div class="line down parallax"  data-value="-2"></div>
                        </div>
                        <div class="item swiper-slide">
                            <div class="img">
                                <img src="{{ asset('') }}/img/slide-img-5.png" class="animate-flicker parallax"  data-value="-8">
                                <div class="hexagon parallax"></div>
                            </div>
                            <h3 class="title resizeable-font">{{ $lang=="ar" ? 'مقدمي الخدمات الطبية ' : 'Clinical providers' }}</h3>
                            <p class="details resizeable-font">{{ $lang=="ar" ? 'بإمكانهم مسح الرمز الشريطي للمستلزمات للتحقق من سلامتها وتاريخ انتهاء صلاحيتها ومن أنها أصلية قبل صرفها للمرضى. ' : 'Clinical providers can scan the supplies to verify safety, expiry dates & authenticity before treating patients.' }}  </p>
                            <div class="line up parallax"  data-value="-2"></div>
                        </div>
                        <div class="item swiper-slide">
                            <h3 class="title resizeable-font">{{ $lang=="ar" ? 'المرضى' : 'Patients' }} </h3>
                            <p class="details resizeable-font">{{ $lang=="ar" ? 'قادرين على التحقق من سلامة وموثوقية الأدوية التي يشترونها. ' : 'Patients now have the power to check the safety & authenticity of the medicine they buy.' }} </p>
                            <div class="img">
                                <img src="{{ asset('') }}/img/slide-img-6.png"  class="animate-flicker parallax" data-value="-4">
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
                    <h1 class="f40 text-uppercase font-gray font-black mb-4 section-title toanimate resizeable-font" data-animation="{{ $lang=="ar" ? 'slide-in-right' : 'slide-in-left' }}">{{ $lang=="ar" ? 'ما الذي تتطلع منصة تطمين لتحقيقه' : 'WHAT TATMEEN HOPES TO ACHIEVE' }}</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 relative">
                    <div class="toggle-texts toanimate" data-animation="{{ $lang=="ar" ? 'slide-in-left' : 'slide-in-right' }}">
                        <div class="row">
                            <div class="col-md-12">
                                    <span class="floating {{ $lang=="ar" ? ' changewidth' : 'heartbeat' }}">
                                        @for($x=1;$x<8;$x++)
                                            <span>{{ $lang=="ar" ? 'الشفافية ' : 'Visibility' }}</span>
                                        @endfor
                                    </span>
                                <div class="icon improve"></div>
                                <h1 class="toggle">{{ $lang=="ar" ? 'الشفافية ' : 'Visibility' }}</h1>
                                <p class="copy resizeable-font"><span class="vcenter">{{ $lang=="ar" ? 'تعزيز شفافية سلسة توريد الأدوية وسلامتها وموثوقيتها، والحد من الأدوية المزيفة أو دون المستوى المطلوب.' : 'Improve visibility, security, safety and reliability of the pharmaceutical supply chain, reducing counterfeits and sub-standard medicines.' }}</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                    <span class="floating {{ $lang=="ar" ? ' changewidth' : 'heartbeat' }}">
                                        @for($x=1;$x<8;$x++)
                                            <span>{{ $lang=="ar" ? 'الحكومة' : 'Government' }}</span>
                                        @endfor
                                    </span>
                                <div class="icon visibility {{ $lang=="ar" ? ' changewidth' : 'heartbeat' }}"></div>
                                <h1 class="toggle" >{{ $lang=="ar" ? 'الحكومة' : 'Government' }}</h1>
                                <p class="copy resizeable-font"><span class="vcenter">{{ $lang=="ar" ? 'منح الجهات المعتمدة من قبل الحكومة إمكانية تتبع جميع المنتجات والتحركات والموافقات ومراحل التوريد.' : 'Give government-approved entities visibility of all products, movements, approvals and supply levels.' }}</span></p>
                            </div>
                        </div>
                        <div class="row active">
                            <div class="col-md-12">
                                    <span class="floating {{ $lang=="ar" ? ' changewidth' : 'heartbeat' }}">
                                        @for($x=1;$x<8;$x++)
                                            <span>{{ $lang=="ar" ? 'البيانات ' : 'Data' }}</span>
                                        @endfor
                                    </span>
                                <div class="icon data {{ $lang=="ar" ? ' changewidth' : 'heartbeat' }}"></div>
                                <h1 class="toggle">{{ $lang=="ar" ? 'البيانات ' : 'Data' }}</h1>
                                <p class="copy resizeable-font"><span class="vcenter">{{ $lang=="ar" ? 'توفير بيانات وتقارير آنية عن تحركات الأدوية وعن العقاقير غير المصرح بها أو منتهية الصلاحية. بالإضافة إلى القدرة على سحب الأدوية من السوق، وإدارة مستويات المخزون الدوائي ومقارنتها بالمستويات الاستراتيجية، والتخطيط للتوجهات المستقبلية.' : 'Provide real-time data and reports of pharmaceutical movements, non-authorised/expired drugs and to recall medicines, along with stock levels and forecasting trends.' }}</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                    <span class="floating {{ $lang=="ar" ? ' changewidth' : 'heartbeat' }}">
                                        @for($x=1;$x<8;$x++)
                                            <span>{{ $lang=="ar" ? 'الإمارات' : 'UAE' }}</span>
                                        @endfor
                                    </span>
                                <div class="icon uae {{ $lang=="ar" ? ' changewidth' : 'heartbeat' }}"></div>
                                <h1 class="toggle">{{ $lang=="ar" ? 'الإمارات' : 'UAE' }}</h1>
                                <p class="copy resizeable-font "><span class="vcenter">{{ $lang=="ar" ? 'ترسيخ مكانة دولة الإمارات العربية المتحدة كرائدة عالمياً في مجال تسلسل الأدوية وابتكار سلاسل التوريد.' : 'Position the UAE as a world leader in pharmaceutical serialisation and supply chain innovation.' }}</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                    <span class="floating {{ $lang=="ar" ? ' changewidth' : 'heartbeat' }}">
                                        @for($x=1;$x<8;$x++)
                                            <span>{{ $lang=="ar" ? 'العالمية' : 'GLOBAL' }}</span>
                                        @endfor
                                    </span>
                                <div class="icon global {{ $lang=="ar" ? 'changewidth' : 'heartbeat' }}"></div>
                                <h1 class="toggle">{{ $lang=="ar" ? 'العالمية' : 'GLOBAL' }}</h1>
                                <p class="copy resizeable-font"><span class="vcenter">{{ $lang=="ar" ? 'استيفاء معايير GS1 العالمية للتسلسل، وتوفير إمكانية العمل البيني مع الحكومات الأخرى.' : 'Meet GS1 global serialisation standards and provide interoperability with other governments.' }}</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
@endsection
