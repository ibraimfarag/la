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

@endsection

@section('content')

    <section id="partners" class="graybg inner-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left">
                    <h5 class="sub-heading">{{ $lang=="ar" ? 'سياسة الوصول' : 'Accessibility Policy' }}</h5>

                    @if($lang=='en')
                    <p>Every visitor to our site matters. Ministry of Health and Prevention UAE recognises that many different forms of disability affect access to the web or mobile. As part of our efforts to reach people with limited mobility and accessibility, we have designed the MOHAP&nbsp;portal with enhanced features for a better user experience.</p>
                    <p>Ensuring everyone has easy access to the information &amp; services when they need it is MOHAP's&nbsp;primary focus.</p>

                    <br/>
                    <h4>Approach:</h4>
                    <p>Our approach to accessibility is to make services easy to use and understand for all customers. This includes anyone who needs to or prefers to customise their computing devices so that they can access the MOHAP&nbsp;website effectively. Our approach is to provide simple uncluttered web pages with clear, easy to follow content or systems to work with.</p>
                    <p>We recognise that it is not just disabled people who are affected by accessibility. Our strategy, plans and vision also include people:</p>
                    <ul>
                        <li>surfing the web using mobile devices</li>
                        <li>who block pop-ups and do not use JavaScript</li>
                        <li>using systems with slow bandwidth connections</li>
                        <li>using old browsers or old computers</li>
                        <li>who are not confident using computers and require easy to use systems</li>
                    </ul>

                    <br/>
                    <h4>Core user tasks:</h4>
                    <p>All users visiting the MOHAP&nbsp;site should be able to:</p>
                    <p>Transact easily with MOHAP&nbsp;using our online services</p>
                    <p>Easily find the information they require</p>
                    <p>Find out how they can contact MOHAP&nbsp;and provide feedback</p>
                    <p>Customise MOHAP&nbsp;pages to meet their own needs and requirements</p>
                    <p>Find how to obtain information or access to services in alternative formats</p>
                    <p>Complete all of the above tasks using screen readers and other commonly used forms of assistive technology.</p>
                    <p>We strive to maintain good levels of accessibility on our websites through the following techniques:</p>
                    <p>Below are some of the features on our portal to benefit people with different abilities:</p>
                    <ul>
                        <li>Building the site using standards-compliant HTML4 and CSS3</li>
                        <li>Ensuring that all content is structured in a logical manner using informative headings and labels</li>
                        <li>Providing consistent navigation &amp; search functionality</li>
                        <li>Ensuring all of our content managers are fully trained in producing accessible content (for example, providing appropriate alternative texts and descriptive links;, and not having any instructions that rely on visual elements)</li>
                        <li>Responsive design to offer a consistent user experience on laptops, tablets, smartphones, desktops</li>
                    </ul>
                    <p>Besides the above, we also offer additional accessibility features, such as:</p>
                    <br/>

                    <h4>Website Structure</h4>
                    <p>MOHAP UAE exclusively follows the Web Content Accessibility Guidelines 1.0 laid down by World Wide Web Consortium (W3C) . This ensures the website structure, readability, navigation, look and feel are accessible for users with disabilities.</p>
                    <br/>

                    <h4>Zoom Screen</h4>
                    <p>People with poor visual ability to read text and view images, can use the Zoom option from their browser to enlarge the page. You can change the page size by clicking on the View menu. Then, click on Zoom and adjust the page size according to your needs.</p>
                    <br/>

                    <h4>Change text size</h4>
                    <p>Anyone having difficulty reading the text on our portal, can increase or decrease the text-size by clicking on the 'A+' or 'A-' icons on the top right corner of the webpage.</p>
                    <p>Alternately, you can also adjust the text-size setting of your browser in the following way:</p>
                    <ul>
                        <li>
                            <h5>Microsoft Internet Explorer (IE):</h5>
                            <p>Change the text size setting in your browser by clicking on the View menu. Then, click on Text Size and select the size you require.</p>
                        </li>
                        <li>
                            <h5>Firefox:</h5>
                            <p>Change the size of the text in your browser by clicking on the View menu. Then, select Increase or Decrease to change the text size. Alternatively you can press 'Ctrl' and '+' keys on the numeric keypad to increase the text size, or 'Ctrl' and '-' (minus) keys to decrease the text size. Pressing 'Ctrl' and '0' returns you to the default size.</p>
                        </li>
                        <li>
                            <h5>Google Chrome:</h5>
                            <p>Change the text size in your browser by clicking on the main menu. Then, click on Zoom and adjust the text-size. Alternatively you can press 'Ctrl' and '+' keys on the numeric keypad to increase the text size, or 'Ctrl' and '-' (minus) to decrease the text size. Pressing 'Ctrl' and '0' returns you to the default size.</p>
                        </li>
                        <li>
                            <h5>Opera :</h5>
                            <p>Change the size of both text and graphics using the '+' and '-' (minus) keys on the numeric keypad. Each press will increase or decrease the size by 10 percent.</p>
                        </li>
                        <li>
                            <h5>Apple Safari:</h5>
                            <p>To change text size in the safari, click on the View menu. Then click on Make Text Bigger or Make Text Smaller to change the font size as you like. You can also use the keyboard shortcuts: Increase or decrease the text size with 'Apple' and '+' and 'Apple' and '-' (minus) keys.</p>
                        </li>
                    </ul>
                    <br/>

                    <h4>Alternate text for image</h4>
                    <p>Image on the MOHAP&nbsp;portal is tagged with appropriate description. To read image description, you need to position the mouse over the image.</p>
                    <br/>

                    <h4>Change colors</h4>
                        <p>If you find it difficult to read a certain text in the given background color combinations, you can easily change colors in your web browser.</p>
                        <ul>
                            <li>
                                <h5>Internet Explorer:</h5>
                                <p>Click on the 'Tools' menu or press 'Alt' + 'T ' keys on the numeric keypad. Then click on 'Internet Options' or press 'O'. Then, click on 'Accessibility' or press 'Alt' + 'E'. When the Accessibility options are displayed, check the 'Ignore colors specified on web page' checkbox with the mouse or by pressing 'Alt' + 'C'. Save your changes by clicking on 'OK' button or by pressing 'Enter'. You will be taken back to the 'Internet Options' window. The website will now be using the same color scheme as on your computer.</p>
                            </li>
                            <li>
                                <h5>Firefox:</h5>
                                <p>If you are using Firefox, you can change text and background colors in the following way. Click on the 'Tools' menu or press 'Alt' + 'T' keys on the numeric keypad. Then click on 'Options' or press 'O' to display the 'Options' window. Click on the 'Fonts and Colors' button or press 'F' to display the 'Fonts and Colors ' window. To set Firefox to use your Windows color scheme, click on the 'Use system colors' checkbox or 'Tab' to the checkbox and press the 'Spacebar' to select it.</p>
                            </li>
                        </ul>
                    <p>We seek the views of disabled users on the quality of our website through feedback, consultation and research with disabled customer groups in the development of new services &amp; content.</p>
                    <p>If you have any questions regarding the accessibility of the MOHAP&nbsp;website, or if you experience any difficulty, please contact us </p>

                    @else
                        <p>كجزء من جهودنا للتواصل مع أكبر شريحة من المجتمع بغض النظر عن الخلفية التقنية للمتعامل، و لتسهيل امكانية الوصول والحركة إلى موقع وزارة الصحة ووقاية المجتمع في دولة الإمارات العربية المتحدة، صممنا البوابة الإلكترونية لوزارة الصحة&nbsp;ووقاية المجتمع، والتي تحتوي على العديد من المميزات التي تساعد المستخدمين على الوصول إلى المعلومات أو الخدمة بشكل سلس وسريع.</p>
                        <p>ضمان سهولة الوصول إلى المعلومات والخدمات عند الحاجة إليها للجميع هو ما تركز عليه وزارة الصحة ووقاية المجتمع بشكل رئيس.</p>

                        <br/>
                        <h4>النهج:</h4>
                        <p>نهجنا في إمكانية الوصول هو جعل الخدمات سهلة الاستخدام والفهم بالنسبة لجميع المتعاملين. ويشمل ذلك كل من يحتاج أو يفضل تخصيص أجهزة الكمبيوتر الخاصة به حتى يتمكن من الوصول إلى موقع وزارة الصحة ووقاية المجتمع بشكل فعّال. نهجنا هو توفير صفحات ويب بسيطة مرتبة بشكل واضح، ومحتوى سهل المتابعة وأنظمة يسهل التعامل معها.</p>
                        <p>ونحن ندرك أن إمكانية الوصول لا تتعلق فقط بأصحاب الاحتياجات الخاصة، بل تشمل استراتيجيتنا وخططنا ورؤيتنا الأشخاص الذين:</p>
                        <ul>
                            <li>يتصفحون الإنترنت باستخدام الأجهزة النقالة.</li>
                            <li>الذين يحظرون النوافذ المنبثقة ولا يستخدمون جافا سكريبت</li>
                            <li>يستخدمون أنظمة اتصالات بطيئة.</li>
                            <li>يستخدمون المتصفحات القديمة أو الحواسيب القديمة.</li>
                            <li>قليلوا الخبرة في استخدام أجهزة الكمبيوتر ويريدون أنظمة سهلة الاستخدام.</li>
                        </ul>
                        <br/>

                        <h4>مهام المستخدم الأساسية:</h4>
                        <p>على جميع المستخدمين الذين يزورون موقع وزارة الصحة ووقاية المجتمع أن يكونوا قادرين على:</p>
                        <p>التعامل بسهولة مع موقع وزارة الصحة ووقاية المجتمع واستخدام خدماتنا على الإنترنت</p>
                        <p>العثور على المعلومات التي يحتاجون إليها بسهولة</p>
                        <p>معرفة كيف يمكنهم الاتصال بوزارة الصحة&nbsp;ووقاية المجتمع والتعليق على خدماتها</p>
                        <p>تخصيص صفحات وزارة الصحة ووقاية المجتمع لتلبية احتياجاتهم ومتطلباتهم.</p>
                        <p>معرفة كيفية الحصول على المعلومات أو الوصول إلى الخدمات بهيئات بديلة.</p>
                        <p>استكمال جميع المهام أعلاه باستخدام قارئات الشاشة وغيرها من أشكال التكنولوجيا المساعدة.</p>
                        <p>ونحن نسعى جاهدين للحفاظ على مستويات جيدة من الوصول على موقعنا من خلال الأساليب التالية:</p>
                        <p>وفيما يلي بعض الميزايا على بوابتنا التي تساعد الأشخاص ذوي القدرات المختلفة:</p>
                        <ul>
                            <li>الموقع مبني باستخدام معايير قياسية متوافقة مع HTML4 و CSS3</li>
                            <li>نضمن أن كل المحتويات مبنية بطريقة منطقية باستخدام عناوين وتسميات للمعلومات</li>
                            <li>توفير وظائف تنقل وبحث مناسبة</li>
                            <li>التأكد من أن جميع مديري المحتوى مدربين تدريبا كاملاً لإنتاج محتوى قابل للوصول (على سبيل المثال، توفير النصوص البديلة المناسبة ووصلات وصفية؛ وعدم وجود أي تعليمات تعتمد على العناصر البصرية)</li>
                            <li>تصميم الموقع بشكل ذكي يقدم تجربة مستخدم متسقة على أجهزة الكمبيوتر المحمولة، واللوحية، والهواتف الذكية، وأجهزة الكمبيوتر المكتبية</li>
                        </ul>
                        <p>وإضافة إلى ذلك فإن المميزات التي يمكن استخدامها لسهولة التصفح، هي ما يلي:</p>

                        <br/>
                                <h4>هيكلية الموقع</h4>
                                <p>تحرص وزارة الصحة ووقاية المجتمع على تسهيل عملية الوصول للمعلومات و الخدمات، و الحفاظ على بنية البوابة والشكل والمظهر باتباع التوصيات و المبادئ التوجيهية التي أصدرها اتحاد الشبكة العالمية (&rlm;W3C&rlm;).</p>

                        <br/>
                                <h4>تكبير الشاشة</h4>
                                <p>تكبير الشاشة إذا وجدت أي صعوبة في الرؤية وقراءة النص وعرض الصور، يمكنك استخدام خيار التكبير لتكبير الصفحة. يمكنك تغيير حجم الصفحة من خلال اختيار قائمة "عرض" (View)، ومن ثم اختيار تكبير ثم ضبط حجم الصفحة حسب حاجتك.</p>

                        <br/>
                                <h4>تغير حجم النص</h4>
                                <p>تغيير حجم النص إذا كانت لديك صعوبة في قراءة بعض النصوص على بوابة وزارة الصحة ووقاية المجتمع، يمكنك تكبير أو تصغير حجم الخط عن طريق الضغط على أيقونة 'A +' أو 'A-' في الزاوية اليمنى من أعلى الصفحة.</p>
                                <p>كما يمكنك أيضاً ضبط إعداد حجم النص من المتصفح بالطريقة التالية:</p>
                                <ul>
                                    <li>
                                        <h5>إنترنت إكسبلورر:</h5>
                                        <p>عن طريق اختيار "عرض" (View) من القائمة، ثم تحديد الحجم المناسب</p>
                                    </li>
                                    <li>
                                        <h5>فايرفوكس:</h5>
                                        <p>عن طريق اختيار "عرض" (View) من القائمة، ثم تحديد تكبير أو تصغير حجم الخط. ويمكنك أيضاً الضغط على 'Ctrl' و '+' لتكبير حجم النص، 'Ctrl' و '-' لتصغير حجم النص. 'Ctrl' و '0' يعيدك إلى الحجم الافتراضي</p>
                                    </li>
                                    <li>
                                        <h5>كروم:</h5>
                                        <p>عن طريق اختيار القائمة الرئيسية، ثم اختيار التكبير، ثم ضبط حجم النص. ويمكنك أيضاً الضغط على 'Ctrl' و '+' لتكبير حجم النص، 'Ctrl' و '-' لتصغير حجم النص. 'Ctrl' و '0' يعيدك إلى الحجم الافتراضي.</p>
                                    </li>
                                    <li>
                                        <h5>أوبرا:</h5>
                                        <p>تغيير حجم النص والرسومات معاً باستخدام '+' و '-' على لوحة المفاتيح الرقمية. سيتغير حجم الصفحة بنسبة 10% في كل مرة</p>
                                    </li>
                                    <li>
                                        <h5>سفاري:</h5>
                                        <p>انقر على 'View' من القائمة. ثم انقر على 'Make Text Bigger' أو 'Make Text Smaller' لتغيير حجم الخط. يمكنك أيضا استخدام اختصارات لوحة المفاتيح : لتغيير حجم النص يمكنك أيضاً الضغط على 'Apple' و '+' لتكبير حجم الخط أو 'Apple' و '-' لتصغير حجم الخط</p>
                                    </li>
                                </ul>

                        <br/>
                                <h4>النص البديل للصورة</h4>
                                <p>كل الصور على بوابة وزارة الصحة ووقاية المجتمع، تتضمن وصف كتابي مناسب لها، يمكنك وضع مؤشر الفأرة على الصورة لقراءة الوصف.</p>

                        <br/>
                                <h4>تغيير الألوان</h4>
                                <p>إذا وجدت صعوبة في قراءة النص مع بعض تركيبات ألوان الخلفية، يمكنك تغيير ألوان الخلفية في المتصفح الخاص بك بسهولة.</p>
                                <ul>
                                    <li>
                                        <h5>إنترنت إكسبلورر:</h5>
                                        <p>اختر قائمة "أدوات"Tools) ) باستخدام الفأرة أو بواسطة الضغط على مفتاحي ' Alt'+'T '. ثم اختر "خيارات إنترنت (Internet Options)' باستخدام الفأرة أو بواسطة الضغط على مفتاح'O'. واختر زر "الوصول" (Accessibility) باستخدام الفأرة أو عن طريق الضغط على 'Alt'+'E'. عندما يتم عرض نافذة "الوصول"، اختر المربع بجانب " تجاهل الألوان المحددة على صفحات ويب" (Ignore colours specified on web page) باستخدام الفأرة أو عن طريق الضغط على ' Alt'+'C'. اضغط على زر "موافق" باستخدام الفأرة أو عن طريق الضغط على مفتاح &lsquo; Enter '، والذي سيعيدك إلى نافذة خيارات إنترنت (Internet Options) . سيستخدم الموقع الآن باستخدام نظام الألوان ذاته كما على الكمبيوتر الخاص بك.</p>
                                    </li>
                                    <li>
                                        <h5>فايرفوكس:</h5>
                                        <p>إذا كنت تستخدم فايرفوكس يمكنك تغيير الألوان الخلفية والنص على النحو التالي: انقر على قائمة Tools أو انقر'Alt'+'T' ثم انقر علىOptions أو انقرO لعرض نافذة Options. انقر على Fonts and Colors أو اضغط على زر F لعرض نافذة Fonts and Colors ثم تعيين Firefox لاستخدم المخطط التابع للكمبيوتر الخاص بك وانقر على مربع Use system colors أو انقر Tab واضغط على مفتاح المسافة للوصول إلى المربع.</p>
                                    </li>
                                </ul>
                    @endif
                </div>
            </div>
        </div>
    </section>

@endsection

@section('js')
@endsection