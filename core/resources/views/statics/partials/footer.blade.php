@inject('visitorService', 'App\Services\VisitorService')
<?php $visitors = $visitorService->countVisitor(); ?>

        <footer id="footer">
            <div class="container-fluid">
                <hr/>
                <br/>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center boxes">
                            <div class="row">
                                <div class="col-md-4 col-sm-6 text-center border-right colmn">
                                    <a href="http://government.ae/" target="_blank"><img src="{{ asset('') }}/img/uaelogo3.png" height="50"></a>
                                </div>
                                <div class="col-md-4 col-sm-6 text-center border-right colmn">
                                    <a href="https://ncrm.government.ae/" target="_blank"><img src="{{ asset('') }}/img/TawasulLogo.png" height="50"></a>
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
                                            <h3 class=" resizeable-font">{{ $visitors }}</h3>
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
                           <div>{{ $lang=="ar" ? 'تم تحديث الصفحة في 06 يناير 2021 00:00:00 صباحا' : 'Page latest updated on 06 January 2021 00:00:00 AM' }}</div><br/>
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
                       <div class="copy-right">{{ $lang=="ar" ? '© حقوق الطبع والنشر محفوظه 2021' : '© Copyright 2021 All rights reserved.' }}&nbsp;<br/>
                           <span class="minstry">{{ $lang=="ar" ? 'وزارة الصحة والوقاية بالإمارات العربية المتحدة' : 'Ministry of Health & Prevention. United Arab Emirates' }}</span></div>
                   </div>
            </div>
            </div>
        </footer>
    </body>
        <script src="{{ asset('') }}/js/vendor/jquery-1.11.2.min.js"></script>
<!--        <script src="https://cdn1.readspeaker.com/script/7426/ReadSpeaker.js?pids=embhl" type="text/javascript"></script>-->
        <script src="{{ asset('') }}/js/inview.js"></script>
        <script src="{{ asset('') }}/js/vendor/bootstrap.min.js"></script>

        <script>
            if(/MSIE \d|Trident.*rv:/.test(navigator.userAgent))
                document.write('<script src="{{ asset('') }}/js/swiper.jquery.min.js"><\/script>');
            else
                document.write('<script src="{{ asset('') }}/js/swiper.min.js"><\/script>');
        </script>

        <script src="{{ asset('') }}/js/main.js"></script>

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
                    link.href = '{{ asset('') }}/css/themes/color-invert.css';
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
                    link.href = '{{ asset('') }}/css/themes/green.css';
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
                    link.href = '{{ asset('') }}/css/themes/red.css';
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
