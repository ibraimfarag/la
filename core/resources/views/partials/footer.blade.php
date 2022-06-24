@php
use App\Models\AnalyticsVisitor;
$count = AnalyticsVisitor::select('*')->count();
@endphp

        <footer id="footer">
            <div class="container-fluid">
                <hr/>
                <br/>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center boxes">
                            <div class="row">
                                <div class="col-md-4 col-sm-6 text-center border-right colmn">
                                    <a href="http://government.ae/" target="_blank"><img src="{{ asset('') }}/assets/img/uaelogo3.png" height="50"></a>
                                </div>
                                <div class="col-md-4 col-sm-6 text-center border-right colmn">
                                    <a href="https://ncrm.government.ae/" target="_blank"><img src="{{ asset('') }}/assets/img/TawasulLogo.png" height="50"></a>
                                </div>
                                {{--<div class="col-md-3 col-sm-6 border-right colmn">--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-md-4 col-sm-4 text-center">--}}
                                            {{--<div class="icon-Group-211 icon-hotline icon"></div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-8 col-sm-8 text-left">--}}
                                            {{--<p class=" resizeable-font">{{ $lang=="ar" ? 'الخط الساخن' : 'Hotline' }}</p>--}}
                                            {{--<h3 class=" resizeable-font">800 111 11</h3>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                <div class="col-md-4 col-sm-6 colmn">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 text-center">
                                            <div class="icon-group-1 icon-hotline icon"></div>
                                        </div>
                                        <div class="col-md-8 col-sm-8 text-left">
                                            <p class=" resizeable-font">{{ $lang=="ar" ? 'عدد الزوار' : 'Number of Visitors' }}</p>
                                            <h3 class=" resizeable-font" id="visitorcount">

                                                {{ $count }}
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid text-center">
               <ul class="">
                   <li><a href="{{ $lang=="ar" ? url('ar/faqs#form') : url('faqs#form') }}" class=" resizeable-font">{{ $lang=="ar" ? 'الملاحظات و الشكاوي' : 'FeedBack' }}</a> </li>
                   {{--<li><a href="https://shefaa.mohap.gov.ae/FE/FeedbackTrack.aspx?IsMobile=False" class=" resizeable-font">{{ $lang=="ar" ? 'متابعة الملاحظات و الشكاوي' : 'Track my FeedBack' }}</a> </li>--}}
                   {{--<li><a href="https://shefaa.mohap.gov.ae/FE/Surveys.aspx?SurveyId=0" class=" resizeable-font">{{ $lang=="ar" ? 'استبيان' : 'Surveys' }}</a> </li>--}}
                   <li><a href="{{ $lang=="ar" ? url('ar/sitemap') : url('sitemap') }}">{{ $lang=="ar" ? 'خريطة الموقع' : 'Sitemap' }}</a> </li>
                   <li><a href="{{ $lang=="ar" ? url('ar/terms-and-conditions') : url('terms-and-conditions') }}" class=" resizeable-font">{{ $lang=="ar" ? 'الأحكام والشروط' : 'Terms and conditions' }}</a> </li>
                   <li><a href="{{ $lang=="ar" ? url('ar/privacy-policy') : url('privacy-policy') }}" class=" resizeable-font">{{ $lang=="ar" ? 'سياسة الخصوصية' : 'Privacy policy' }}</a> </li>
                   <li><a href="{{ $lang=="ar" ? url('ar/disclaimer') : url('disclaimer') }}" class=" resizeable-font">{{ $lang=="ar" ? 'إخلاء المسؤولية' : 'Disclaimer' }}</a> </li>
                   <li><a href="{{ $lang=="ar" ? url('ar/accessibility-policy') : url('accessibility-policy') }}" class=" resizeable-font">{{ $lang=="ar" ? 'سياسة الوصول' : 'Accessibility Policy' }}</a> </li>
                   {{--<li><a href="https://shefaa.mohap.gov.ae/FE/ContentPage.aspx?Id=5" class=" resizeable-font">{{ $lang=="ar" ? 'مصطلحات' : 'Abbreviations' }}</a> </li>--}}
                   {{--<li><a href="https://shefaa.mohap.gov.ae/FE/ContentPage.aspx?Id=6" class=" resizeable-font">{{ $lang=="ar" ? 'ميثاق سعادة المتعاملين' : 'Customer Service Charter' }}</a> </li>--}}
                   <li><a href="{{ $lang=="ar" ? url('ar/contact-us') : url('contact-us') }}" class=" resizeable-font">{{ $lang=="ar" ? 'اتصل بنا' : 'Contact Us Info' }}</a> </li>
                   <li><a href="{{ $lang=="ar" ? url('ar/faqs') : url('faqs') }}" class=" resizeable-font">{{ $lang=="ar" ? 'الأسئلة الشائعة' : 'FAQs' }}</a> </li>
               </ul>
                <hr/>
            </div>
            <div class="container-fluid text-center">
               <div class="footer-content section">
                   <div>
                       <div class="footer-updated-text resizeable-font">
                           <br/>
                           <div>{{ $lang=="ar" ? 'تم تحديث الصفحة في 06 يناير 2021 00:00:00 صباحا' : 'Page latest updated on 10 November 2021 16:26:23 PM' }}</div><br/>
                           <div>{{ $lang=="ar" ? 'افضل عرض لهذا الموقع في دقة شاشة 1024 * 768' : 'This site best view on 1920 x 1080 screen resolution' }}</div><br/>
                           {{ $lang=="ar" ? 'المتصفحات المدعومة' : 'Supported browsers' }}
                            <div>
                                       <div class="footer-link safari"><a id="wt10_OutSystemsUIWeb_wt188_block_wtContent_wt106" href="https://www.apple.com/ae/safari/" target="_blank">&nbsp;</a></div>
                                       <div class="footer-link ie"><a id="wt10_OutSystemsUIWeb_wt188_block_wtContent_wt106" href="https://www.microsoft.com/en-us/download/internet-explorer.aspx" target="_blank">&nbsp;</a></div>
                                       <div class="footer-link chrome"><a id="wt10_OutSystemsUIWeb_wt188_block_wtContent_wt106" href="https://www.google.com/chrome/" target="_blank">&nbsp;</a></div>
                                       <div class="footer-link firefox"><a id="wt10_OutSystemsUIWeb_wt188_block_wtContent_wt106" href="https://www.mozilla.org/en-US/firefox/new/" target="_blank">&nbsp;</a></div>
                                   </div>
                           {{ $lang=="ar" ? 'الإضافات والمكونات الإضافية' : 'Addition & plug-ins' }}
                                   <div>
                                       <div class="Adobe footer-link"><a id="wt10_OutSystemsUIWeb_wt188_block_wtContent_wt106" href="http://get.adobe.com/reader" target="_blank">&nbsp;</a></div>
                                       <div class="html5 footer-link"><a id="wt10_OutSystemsUIWeb_wt188_block_wtContent_wt207" href="http://html5test.com/" target="_blank">&nbsp;</a></div>
                                       <div class="java footer-link"><a id="wt10_OutSystemsUIWeb_wt188_block_wtContent_wt140" href="http://www.java.com/en/download/index.jsp" target="_blank">&nbsp;</a></div>
                                       <div class="windows footer-link"><a id="wt10_OutSystemsUIWeb_wt188_block_wtContent_wt239" href="http://windows.microsoft.com/en-us/windows/windows-media-player" target="_blank">&nbsp;</a></div>
                                   </div>
                           {{ $lang=="ar" ? 'نستخدم التقنيات التالية' : 'We use the following technologies' }}
                            <div>
                                   <div class="uaepass "><a id="wt10_OutSystemsUIWeb_wt188_block_wtContent_wt109" tabindex="148" href="https://selfcare.uaepass.ae/" target="_blank">&nbsp;</a></div>
                                   <div id="wt10_OutSystemsUIWeb_wt188_block_wtContent_wtgame" class="game"><a id="wt10_OutSystemsUIWeb_wt188_block_wtContent_wt50" tabindex="149" href="https://www.mohap.gov.ae/en/Pages/Gamification.aspx" target="_blank">&nbsp;</a></div>
                                   <div class="blockchain"><a id="wt10_OutSystemsUIWeb_wt188_block_wtContent_wt155" tabindex="150" href="https://www.mohap.gov.ae/en/MediaCenter/News/Pages/2184.aspx" target="_blank">&nbsp;</a></div>
                               </div>
                       </div>
                       <!--Start Copyrights-->
                       <div class="copyright-wrap">
                           <div class="container">


                               <div class="row">
                                   <div class="col-lg-4">


                                       <ul class="social" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200"
                                           data-aos-offset="-20" style="margin-top:0;">
                                           <li class="li_li"><a href="{{Helper::GeneralSiteSettings('social_link1')}}" data-toggle="tooltip" title="Facebook"><img src="{{ asset('') }}/assets/img/icons/facebook.png" height="15"></a></li>
                                           <li class="li_li"><a href="{{Helper::GeneralSiteSettings('social_link2')}}" data-toggle="tooltip" title="Twitter"><img src="{{ asset('') }}/assets/img/icons/twitter.png" height="15"></a> </li>
                                           <li class="li_li"><a href="{{Helper::GeneralSiteSettings('social_link6')}}" data-toggle="tooltip" title="Instagram"><img src="{{ asset('') }}/assets/img/icons/insta.png" height="15"></a> </li>
                                           <li class="li_li"><a href="{{Helper::GeneralSiteSettings('social_link4')}}" data-toggle="tooltip" title="Linkedin"><img src="{{ asset('') }}/assets/img/icons/linkedin.png" height="15"></a> </li>
                                           <li class="li_li"><a href="{{Helper::GeneralSiteSettings('social_link5')}}" data-toggle="tooltip" title="Youtube"><img src="{{ asset('') }}/assets/img/icons/youtube.png" height="15"></a> </li>
                                           <li class="li_li"><a href="https://mohap.gov.ae/rss/rss.ashx?lang=2&ct=2&item=100" data-toggle="tooltip" title="Feeds"><img src="{{ asset('') }}/assets/img/icons/feeds.png" height="15"></a></li>

                                           <li class="li_li"><a href="https://get.adobe.com/reader" data-toggle="tooltip" title="Acrobat"><img src="{{ asset('') }}/assets/img/icons/acrobat.png" height="15"></a>
                                           </li>
                                       </ul>
                                   </div>
                                   <div class="col-lg-4">
                                    <p class="arabic-text" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400"
                                        data-aos-offset="-20">
                                        <a href="https://mohap.gov.ae/" title="وزارةالصحةووقايةالمجتمع.امارات">
                                            وزارةالصحةووقايةالمجتمع.امارات
                                        </a>
                                    </p>
                                </div>
                                <div class="col-lg-4">
                                    <p class="copyright" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="600"
                                        data-aos-offset="-20">{{ $lang=="ar" ?  'وزارة الصحة ووقاية المجتمع. جميع الحقوق محفوظة 2022' : '  2022 Ministry of Health and Prevention. All rights reserved.' }}

                                    </p>
                                </div>
                               </div>
                           </div>

                       </div>
                       <!--End Copyrights-->

                   </div>
            </div>
            </div>

        </footer>








    </body>
        <script src="{{ asset('') }}/assets/js/vendor/jquery-1.11.2.min.js"></script>
<!--        <script src="https://cdn1.readspeaker.com/script/7426/ReadSpeaker.js?pids=embhl" type="text/javascript"></script>-->
        <script src="{{ asset('') }}/assets/js/inview.js"></script>
        <script src="{{ asset('') }}/assets/js/vendor/bootstrap.min.js"></script>

        <script>
            var visitCount = localStorage.getItem("page_view");
            visitCount = Number(visitCount) + 1;

            // Update local storage value
            localStorage.setItem("page_view", visitCount);

            // $('#visitorcount').html(visitCount);

            if(/MSIE \d|Trident.*rv:/.test(navigator.userAgent))
                document.write('<script src="{{ asset('') }}/assets/js/swiper.jquery.min.js"><\/script>');
            else
                document.write('<script src="{{ asset('') }}/assets/js/swiper.min.js"><\/script>');
        </script>

        <script src="{{ asset('') }}/assets/js/main.js"></script>

        <script>

            document.addEventListener("mousemove", parallax);
            if (window.document.documentMode) {
            } else {
                function parallax(e){

                  document.querySelectorAll(".parallax").forEach(function(move){

                    var moving_value = move.getAttribute("data-value");
                    var x = (e.clientX * moving_value) / 250;
                    var y = (e.clientY * moving_value) / 250;

                    move.style.transform = "translateX(" + x + "px) translateY(" + y + "px)";
                  });
                }
            }

          inView.threshold(.4);
          inView('.toanimate').on('enter', function(target){
              $(target).addClass($(target).attr('data-animation')).css('opacity',1);


              <?php
                  $ua = htmlentities($_SERVER['HTTP_USER_AGENT'], ENT_QUOTES, 'UTF-8');
                  if (preg_match('~MSIE|Internet Explorer~i', $ua) || (strpos($ua, 'Trident/7.0') !== false && strpos($ua, 'rv:11.0') !== false)) {
                  ?>
                <?php
                } else {
                ?>
                if($(target).hasClass('animateData'))
                    animateData();
                <?php
                }
                ?>

          });

          var swiper = new Swiper(".supplierslider", {
            slidesPerView: 3,
            freeMode: true,
            pagination: {
              el: ".swiper-pagination",
              type: "progressbar",
            },
            breakpoints: {
                // when window width is >= 320px
                120: {
                  slidesPerView: 1,
                },
                // when window width is >= 991
                991: {
                  slidesPerView: 2,
                },
                // when window width is >= 640px
                1366: {
                  slidesPerView: 3,
                }
          }
          });

            $('.toggle-texts .toggle').on('click',function(){
                $('.toggle-texts .row').removeClass('active');
                $('.toggle-texts .row').eq($('.toggle-texts .toggle').index($(this))).addClass('active');
            });

            $('.toggle-texts .toggle').hover(function(){
                console.log('hover');
                targt = $(this).parent().find('p span');
                setTimeout(function(){
                    mtop = targt.height()/2;
                    targt.css('margin-top','-'+mtop+'px');
                },100);
            });

            $('.toggle-texts .toggle').hover(function(){
                $('.toggle-texts .row').removeClass('active');
                $('.toggle-texts .row').eq($('.toggle-texts .toggle').index($(this))).addClass('active');
            });

            function toggleMenu(x) {
              x.classList.toggle("active");
              $('#mainnav').toggleClass("active");
            }


            $(document).ready(function(){
                $(document).on('scroll',function(){
                    animatePoly();
                });
                animatePoly();

                $(window).on('resize',function(){
                    $('.resizeable-font').attr('style','');

                    waitForFinalEvent(function(){
                        refreshFont();
                    }, 300, "some unique string");
                });
            });

                var waitForFinalEvent = (function () {
                  var timers = {};
                  return function (callback, ms, uniqueId) {
                    if (!uniqueId) {
                      uniqueId = "Don't call this twice without a uniqueId";
                    }
                    if (timers[uniqueId]) {
                      clearTimeout (timers[uniqueId]);
                    }
                    timers[uniqueId] = setTimeout(callback, ms);
                  };
                })();

            function animatePoly(){
                scrollTop = $(document).scrollTop();
                height = $(window).outerHeight();
                scaler = (scrollTop) / height;
                scaler = scaler*50;

                $('#oval').css({
//                    'top' : scrollTop,
                    '-webkit-transform' : 'translate(0,-' + scaler + '%)',
                    '-moz-transform'    : 'translate(0,-' + scaler + '%)',
                    '-ms-transform'     : 'translate(0,-' + scaler + '%)',
                    '-o-transform'      : 'translate(0,-' + scaler + '%)',
                    'transform'         : 'translate(0,-' + scaler + '%)',
                });
            }

            var fontSize = 0;
            var resizeM = 3;
            var resizeL = 6


            function refreshFont(){
                $('.resizeable-font').each(function(){
                    if(fontSize==1)
                        $(this).css('font-size',parseInt($(this).css('font-size'))+resizeM);
                    else if(fontSize==2)
                        $(this).css('font-size',parseInt($(this).css('font-size'))+resizeL);
                });
            }

            function resizeFontDefault(){
                $('.resizeable-font').each(function(){
                    if(fontSize==1)
                        $(this).css('font-size',parseInt($(this).css('font-size'))-resizeM);
                    else if(fontSize==2)
                        $(this).css('font-size',parseInt($(this).css('font-size'))-resizeL);
                });
                fontSize=0;
            }

            function resizeFontMedium(){
                $('.resizeable-font').each(function(){
                    if(fontSize==0)
                        $(this).css('font-size',parseInt($(this).css('font-size'))+resizeM);
                    else if(fontSize==2)
                        $(this).css('font-size',parseInt($(this).css('font-size'))-resizeM);
                });
                fontSize=1;
            }

            function resizeFontLarge(){
                $('.resizeable-font').each(function(){
                    if(fontSize==0)
                        $(this).css('font-size',parseInt($(this).css('font-size'))+resizeL);
                    else if(fontSize==1)
                        $(this).css('font-size',parseInt($(this).css('font-size'))+resizeM);
                });
                fontSize=2;
            }

            function colorInvert() {
                $('body').toggleClass('colorInvert');
                $('#themeGreen').remove();
                $('#themeRed').remove();

                if($('body').hasClass('colorInvert')) {
                    var head = document.getElementsByTagName('HEAD')[0];
                    var link = document.createElement('link');
                    link.rel = 'stylesheet';
                    link.type = 'text/css';
                    link.href = '{{ asset('') }}/assets/css/themes/color-invert.css';
                    link.id = 'colorInvertCss';
                    head.appendChild(link);
               } else {
                   $('body').removeClass('colorInvert');
                   $('#colorInvertCss').remove();

               }
            }

            function colorGreen() {
                $('body').toggleClass('themeGreen');

                $('body').removeClass('colorInvert');
                $('#colorInvertCss').remove();

                $('body').removeClass('themeRed');
                $('#themeRed').remove();

                if($('body').hasClass('themeGreen')) {
                    var head = document.getElementsByTagName('HEAD')[0];
                    var link = document.createElement('link');
                    link.rel = 'stylesheet';
                    link.type = 'text/css';
                    link.href = '{{ asset('') }}/assets/css/themes/green.css';
                    link.id = 'themeGreen';
                    head.appendChild(link);
               } else {
                   $('body').removeClass('themeGreen');
                   $('#themeGreen').remove();
               }
            }

            function colorRed() {
                $('body').toggleClass('themeRed');

                $('body').removeClass('colorInvert');
                $('#colorInvertCss').remove();

                $('body').removeClass('themeGreen');
                $('#themeGreen').remove();

                if($('body').hasClass('themeRed')) {
                    var head = document.getElementsByTagName('HEAD')[0];
                    var link = document.createElement('link');
                    link.rel = 'stylesheet';
                    link.type = 'text/css';
                    link.href = '{{ asset('') }}/assets/css/themes/red.css';
                    link.id = 'themeRed';
                    head.appendChild(link);
               } else {
                   $('body').removeClass('themeRed');
                   $('#themeRed').remove();
               }
            }

            function colorDefault() {
                $('body').removeClass('colorInvert');
                $('#colorInvertCss').remove();

                $('body').removeClass('themeGreen');
                $('#themeGreen').remove();

                $('body').removeClass('themeRed');
                $('#themeRed').remove();
            }

            function vCenter() {
                $('.vcenter').each(function(){
                    mtop = $(this).height()/2;
                    $(this).css('margin-top','-'+mtop+'px');
                });
            }

            vCenter();
            $(window).load(function () {
                vCenter();
                setInterval(function () {
                    vCenter();
                },3000);
            })
        </script>

        @yield('js')
</html>
