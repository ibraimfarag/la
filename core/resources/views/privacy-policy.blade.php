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
                    <h5 class="sub-heading">{{ $lang=="ar" ? 'سياسة الخصوصية' : 'Privacy Policy' }}</h5>

                    @if($lang=='en')
                        <p>Your privacy is important to the Ministry of Health &amp; Prevention and maintaining your trust is paramount. This Statement discloses the information practices used by MOHAP, including what type of information is gathered and tracked, how the information is used and may be shared.</p>
                        <p>This privacy statement applies to the MOHAP portal, affiliated websites, microsites, marketing initiatives, services that collect data, as well as their offline services. From time to time, we may supplement this Statement with additional information.</p>
                        <br/>
                        <h5>Cookies &amp; Similar Technologies</h5>
                        <p>The MOHAP site(s) use "cookies," small text files on your smart phone, tablet, or computer hard drive that can be read by a web server. Such cookies are personally non-identifiable and store your preferences and settings; help with sign-in; analyze site operations. You have a variety of tools to control cookies and similar technologies, including Browser controls to block and delete cookies or you can opt out.</p>

                        <br/><h5>Information We Collect</h5>
                        <p>MOHAP collects many kinds of information in order to operate effectively and provide you better services and user experience. We collect information when you register, sign in, and use our sites and services. We collect this information in a variety of ways, including from web forms, call center, cookies to name a few.</p>

                        <br/><h5>How We Use Your Personal Information</h5>
                        <p>MOHAP uses the information we collect to operate, improve, and personalize the products and services we offer. Examples include, informing you about relevant news, promotions, events, customer service surveys, market research or in connection with certain transactions or query.</p>

                        <br/><h5>Communication Preferences</h5>
                        <p>You can stop the delivery of future promotional e-mail from MOHAP by following the instructions in the e-mail you receive. Depending on the respective service, you may also have the option of proactively making choices about the receipt of promotional e-mail, telephone calls, and postal mail for particular MOHAP sites or services.</p>

                        <br/><h5>Personal Information</h5>
                        <p>We collect and may combine your personal information from other sources to help us improve its overall accuracy and completeness. If you request something from MOHAP, we will use or share the information you provide with others, for instance, MOHAP's partners, other government departments involved in fulfilment.</p>

                        <br/><h5>Personalization</h5>
                        <p>We may use information we collect to provide a personalized experience on our Web sites, such as personalizing content, user preferences, languages, which you may be interested and making navigation easier.</p>

                        <br/><h5>Providing Support</h5>
                        <p>We may use your personal information to support for services you have obtained or wish to obtain from us. We may also provide "Live Chat" sessions or while providing technical support, we may sometimes have incidental access to data that. We will use personal information you provide via these sessions in accordance with this Privacy Statement.</p>

                        <br/><h5>Recruitment</h5>
                        <p>In connection with a job application or inquiry, whether advertised on an MOHAP Web site or otherwise, you may provide us with information about yourself, such as a resume. We may use this information throughout MOHAP in order to address your inquiry.</p>

                        <br/><h5>Social Media</h5>
                        <p>MOHAP also provides social media services such as Twitter, Facebook, forums, wikis, blogs and to name a few. A separate social media usage policy is available for this on the MOHAP website. These services, apps may also include supplemental privacy statements, content, policies, and Terms of Use outside the control of MOHAP.</p>
                        <p>Any other content you post, such as pictures, information, opinions, or any other type of personal information that you make available to other participants on these social platforms or applications, is not subject to this Privacy Statement. The content you post on any such social media sites may be made broadly available to others inside and outside MOHAP.</p>

                        <br/><h5>Emails</h5>
                        <p>Any information transmitted through an email from the MOHAP domain is the property of MOHAP and intended only for the person or entity to which it is addressed and may contain confidential and/or privileged material. If you received an email from us in error, please contact the sender immediately and delete the material.</p>

                        <br/><h5>Protect the Rights and Property of MOHAP</h5>
                        <p>We may also use or share your information to protect the rights or property of MOHAP, our partners, suppliers, or others when we have reasonable grounds to believe that such rights or property have been or could be affected. We reserve the right to disclose your personal information as required by law and when disclosure is necessary to protect our rights, or the rights of others, or to comply with a judicial proceeding, court order, or legal process served on our Web sites.</p>

                        <br/><h5>Information Security &amp; Accuracy</h5>
                        <p>MOHAP implements reasonable physical, administrative and technical safeguards to help us protect your personal information from unauthorized access, use and disclosure, but can make no guarantee or take any liability.</p>

                        <br/><h5>Retention</h5>
                        <p>We will retain your registration information for as long as your account is active or as needed to provide you services or as necessary.</p>

                        <br/><h5>Online Advertising</h5>
                        <p>MOHAP does not deliver third party online advertisements on our Web sites but we are accessible via search engines. Please familiarize yourself with those Web site operators' or network advertisers' privacy policies. MOHAP does not provide any information relating to your usage of MOHAP Web sites to Web site operators or network advertisers.</p>

                        <br/><h5>Links to Non- MOHAP Web Sites and Third Party Applications</h5>
                        <p>To allow you to interact with other Web sites on which you may have accounts (such as social media sites), we may provide links or embed third-party apps that allow you to login, post content. We may also provide you with general links to non- MOHAP Web sites via social media, newsletters etc. Your use of these links and apps is subject to the third parties' privacy policies, and you should become familiar with the third party sites' privacy policies before using them. MOHAP is not responsible for the privacy practices or the content of those other Web sites.</p>

                        <br/><h5>How user data is collected and utilized from Mobile Apps ?</h5>
                        <p>Data is collected based on the user&rsquo;s voluntary input to seek any additional support from the health authorities. Data is not shared with any 3rd party.</p>

                        <br/><h5>How Mobile Apps utilize location data for quarantine management ?</h5>
                        <p>Location data helps the UAE government to combat the spread of the coronavirus by ensuring that the users do not leave their location, and infect healthy citizens.</p>

                        <br/><h5>Privacy Questions</h5>
                        <p>If you have questions or complaints regarding our privacy policy or practices, please contact MOHAP at the address listed below or via the contact form:</p>

                        <br/><h5>Attention:</h5>
                        <ul>
                            <li>Communications Department</li>
                            <li>Ministry of Health &amp; Prevention</li>
                            <li>P. O. Box: 1853</li>
                            <li>Muhaisnah 2, Near Etisalat academy , Sheikh Mohammed Bin Zayed Road ,Dubai, UAE</li>
                            <li>Tel: +971 4 2301000</li>
                            <li>Fax: +971 4 2301800</li>
                            <li>E-mail:&nbsp;<a href="mailto:csdubai@mohap.gov.ae">csdubai@mohap.gov.ae</a></li>
                        </ul>
                        <p>Last updated in 2020. The terms stated in this document and content on the site are subject to change without prior notice to the user </p>
                    @else
                        <p>تولي وزارة الصحة و وقاية المجتمع اهتماماً خاصاً بالحفاظ على خصوصيتكم وتعزيز ثقتكم. وتشتمل وثيقة سياسة الخصوصية على الممارسات المتبعة لدى الوزارة فيما يتعلق بالمعلومات، بما في ذلك طبيعة المعلومات التي يتم جمعها وتعقبها، وكيفية استخدام وإمكانية مشاركة المعلومات.</p>
                        <p>وتنطبق بنود وثيقة سياسة الخصوصية على البوابة الإلكترونية لوزارة الصحة و وقاية المجتمع ، والمواقع الإلكترونية الشريكة، والمواقع المصغرة، والمبادرات التسويقية، والخدمات القائمة على جمع البيانات وغيرها. وتجدر الإشارة إلى إمكانية تحديث الوثيقة بين الحين والآخر عبر إضافة معلومات جديدة.</p>

                        <br/><h5>ملفات "كوكيز" (Cookies) والتقنيات المشابهة</h5>
                        <p>يستخدم الموقع الإلكتروني لوزارة الصحة و وقاية المجتمع الملفات النصية القصيرة المعروفة بـ "كوكيز" خلال تصفحكم له عبر الهواتف الذكية أو الأجهزة اللوحية أو الكمبيوتر الشخصي والتي يمكن قراءتها باستخدام خادم الشبكة. ويعمل هذا النمط من الملفات، الذي يقوم بجمع بيانات غير محددة الهوية وغير شخصية، على تخزين التفضيلات والإعدادات الخاصة بكم ومساعدتكم في عملية تسجيل الدخول وتحليل العمليات الجارية على الموقع الإلكتروني.</p>
                        <p>ويوجد العديد من الأدوات المتاحة للتحكم بملفات "كوكيز" والتقنيات المشابهة، مثل "متصفح الإنترنت" (Browser)، الذي يتحكم بمنع أو حذف ملفات "كوكيز".</p>

                        <br/><h5>المعلومات التي نجمعها</h5>
                        <p>تقوم وزارة الصحة و وقاية المجتمع بجمع العديد من أنماط البيانات والمعلومات في سبيل ضمان العمل بكفاءة وفعالية تامة وتزويدكم بأفضل الخدمات المتطورة وتقديم تجربة مستخدم ترقى إلى مستوى التوقعات. ويتم جمع المعلومات بمجرد إتمامكم عملية التسجيل أو تسجيل الدخول أو استخدام أي من الخدمات أو المواقع والبوابات الإلكترونية التابعة للوزارة. ويجري جمع البيانات باستخدام طرق عدة، تشمل نماذج الويب ومركز الاتصال وملفات "كوكيز" وغيرها الكثير.</p>

                        <br/><h5>تجميع المعلومات</h5>
                        <p>تحترم وزارة الصحة ووقاية المجتمع خصوصيتكم وتلتزم بحماية المعلومات الشخصية التي تقدمونها لنا. وعليه، فإنه يرجى ملاحظة أنه عند تسجيلكم للحصول على خدمات معينة، فإننا سنطلب منكم تقديم معلومات شخصية والتي قد يتم تجميعها مع معلومات يتم الحصول عليها من خدمات أو شركات أخرى. كما أننا نقوم باستخدام الوسائل التكنولوجية لمتابعة تفاعلكم معنا وتزويدكم بتجربة استخدام مخصصة.</p>

                        <br/><h5>كيف نستخدم بياناتكم الشخصية؟</h5>
                        <p>تستخدم وزارة الصحة ووقاية المجتمع المعلومات التي تجمعها في تشغيل وتحسين وتخصيص وتطوير المنتجات والخدمات المقدمة لكم. ويتم استخدام معلوماتكم، على سبيل المثال، لإعلامكم بآخر الأخبار والعروض الترويجية والفعاليات ونتائج أحدث استطلاعات الرأي وأبحاث السوق، أو للتواصل معكم فيما يختص بمعاملة معينة أو استفسار ما.</p>

                        <br/><h5>تفضيلات الاتصال</h5>
                        <p>يمكنكم مستقبلاً إيقاف ميزة استلام الرسائل الإلكترونية الترويجية من وزارة الصحة ووقاية المجتمع من خلال اتباع التعليمات الواردة في الرسالة المستلمة من قبلكم عبر البريد الإلكتروني. وتبعاً لطبيعة الخدمات، يمكنكم مسبقاً اختيار الوسيلة المثلى للتواصل واستلام الرسائل الترويجية عبر البريد الإلكتروني أو المكالمات الهاتفية أو الرسائل البريدية التقليدية فيما يتعلق بموقع أو مواقع محددة أو خدمات معينة مقدمة من وزارة الصحة ووقاية المجتمع.</p>

                        <br/><h5>المعلومات الشخصية</h5>
                        <p>نقوم بجمع وربما دمج البيانات والمعلومات الشخصية الخاصة بكم من مصادر أخرى في إطار جهودنا الرامية إلى تحسين مستويات الدقة والموثوقية والكفاءة في تقديم الخدمات. وتحرص الوزارة على الحفاظ على سرية معلوماتكم الشخصية وعدم إتاحتها أو الكشف عنها دون موافقة مسبقة من قبلكم، على أن يتم تزويدها حصراً للموظفين المعنيين بتقديم الخدمات لكم وإتمام معاملاتكم عبر الموقع الإلكتروني. وفي حال دعت الحاجة إلى مشاركة المعلومات مع أطراف ثالثة، ستقوم الوزارة بذلك عقب الحصول على موافقة مسبقة منكم.</p>

                        <br/><h5>التخصيص</h5>
                        <p>قد نقوم باستخدام المعلومات التي نجمعها في سبيل توفير تجربة متخصصة ومتكاملة على الموقع أو المواقع الإلكترونية التابعة لوزارة الصحة و وقاية المجتمع، مثل تخصيص المحتوى، وتفضيلات المستخدم، واللغات وكل ما يصب في إطار اهتمامكم بما يجعل تصفح الموقع أكثر سهولة وكفاءة.</p>

                        <br/><h5>تقديم الدعم</h5>
                        <p>قد نقوم باستخدام بياناتكم الشخصية لأغراض تطوير الخدمات التي حصلتم أو ترغبون بالحصول عليها. كما قد نصل بشكل عرضي إلى البيانات الخاصة بكم أثناء تقديم خدمات الدعم الفني أو خلال جلسات "الدردشة المباشرة". وسيتم استخدام بياناتكم الشخصية التي تزودونا بها خلال هذه الجلسات وفقاً لسياسة الخصوصية.</p>

                        <br/><h5>التوظيف</h5>
                        <p>فيما يتعلّق بتقديم طلب وظيفة أو الإستفسار عن وظيفة، سواء كان معلناً عنها عبر الموقع الإلكتروني الرسمي للوزارة أو عبر أي قناة أخرى، قد يتعيّن عليكم تزويدنا بمعلومات أو بيانات خاصة بكم، مثل إرسال سيرة ذاتية. ويجوز لنا إستخدام هذه البيانات في الوزارة للتمكّن من معالجة طلبكم.</p>

                        <br/><h5>الإعلام الاجتماعي</h5>
                        <p>تقدّم وزارة الصحة و وقاية المجتمع خدمات الإعلام الاجتماعي عبر مختلف القنوات التي تشمل على سبيل المثال لا الحصر "تويتر" و"فيسبوك" والملتقيات والمنتديات الإلكترونية ومواقع الويكي وغيرها. ويمكنكم الإطلاع على سياسة الخصوصية الخاصة بخدمات الإعلام الاجتماعي في قسم آخر على الموقع الإلكتروني الرسمي للوزارة. وتجدر الإشارة إلى أن هذه الخدمات والتطبيقات تشمل أيضاً سياسات خصوصية ومحتوى وشروط استخدام أخرى ليس للوزارة أي سيطرة عليها.</p>
                        <p>لا تنطبق سياسة الخصوصية هذه على المحتوى الذي تقومون بنشره ومشاركته مع الآخرين عبر منصات وتطبيقات الإعلام الاجتماعي، كالصور والمعلومات والآراء أو أي بيانات شخصية أخرى؛ حيث أن المحتوى الذي يتم نشره عبر هذه المنصات يمكن الوصول إليه من قبل الآخرين على نطاق واسع سواء من داخل وزارة الصحة و وقاية المجتمع أو خارجها.</p>

                        <br/><h5>البريد الإلكتروني</h5>
                        <p>جميع المعلومات التي يتم إرسالها من قبل وزارة الصحة و وقاية المجتمع عبر البريد الإلكتروني هي معلومات تابعة حصرياً للوزارة، والهدف إيصالها إلى الشخص أو الجهة المرسل لها البريد الإلكتروني فقط. ويمكن أن تحتوي هذه المعلومات على مواد سرية و/أو حصرية. في حال تم إرسال البريد الإلكتروني لكم عن طريق الخطأ، يرجى التواصل على الفور مع الجهة المرسلة وحذف البريد الإلكتروني.</p>

                        <br/><h5>حماية حقوق وممتلكات الوزارة</h5>
                        <p>قد نقوم بإستخدام أو مشاركة بياناتكم الشخصية لأغراض حماية حقوق أو ممتلكات وزارة الصحة و وقاية المجتمع أو الشركاء أو الموردين أو غيرهم من الجهات ذات الصلة بالوزارة، وذلك في حال كان لدينا سبب وجيه للإعتقاد بأن هذه الحقوق أو الممتلكات قد تعرّضت أو يمكن أن تتعرّض للإنتهاك. ونحن نحتفظ بالحق في الكشف عن بياناتكم الشخصية بموجب القانون أو عند الحاجة الضرورية للكشف عن البيانات لغرض حماية حقوقنا أو حقوق الآخرين أو عند الحاجة للإمتثال للإجراءات القضائية أو أمر محكمة أو عملية قانونية تتم عبر مواقعنا الإلكترونية.</p>

                        <br/><h5>دقة وأمن المعلومات</h5>
                        <p>تتبنّى وزارة الصحة ووقاية المجتمع إجراءات مادية وإدارية وفنية صارمة لضمان تقديم المساعدة اللازمة لحماية خصوصية وسرية المعلومات الشخصية الخاصة بكم والحفاظ عليها بعيداً من أي شكل من أشكال الكشف أو الاختراق أو الاستخدام غير المصرح به. ولكن، لا تقدم الوزارة أي ضمانات قطعية وبذلك لا تتحمل أي مسؤولية فيما يتعلق بحدوث انتهاكات لخصوصية البيانات الشخصية المقدمة من طرفكم.</p>

                        <br/><h5>الاستبقاء</h5>
                        <p>تتبنى وزارة الصحة ووقاية المجتمع سياسة قائمة على الاستبقاء والحفاظ على معلومات التسجيل المقدمة من طرفكم طالما أنّ الحساب الخاص بكم مفعلاً أو طالما دعت الحاجة إلى ذلك، بما يضمن تزويدكم بالخدمات بالشكل الذي يرقى إلى مستوى تطلعاتكم.</p>

                        <br/><h5>التسويق الرقمي</h5>
                        <p>لا يتضمن الموقع الإلكتروني لوزارة الصحة و وقاية المجتمع أية إعلانات تسويقية رقمية لأطراف خارجية، ولكن يمكن الوصول إليها من خلال محركات البحث. لذا ينبغي عليكم الإطلاع على سياسات الخصوصية المتبعة لدى مشغلي وكالات التسويق الرقمي أو المواقع الإلكترونية المضيفة قبل الضغط على الإعلانات التسويقية الرقمية. ولا تتحمل الوزارة أية مسؤولية فيما يتعلق بمحتوى الإعلانات التسويقية عبر الإنترنت أو طريقة تعاطيكم معها، كما تلتزم بعدم الكشف عن أية معلومات شخصية مستخدمة من قبلكم في هذا الموقع الإلكتروني لأيّ من مشغلي المواقع الإلكترونية الأخرى أو وكالات التسويق الرقمي.</p>

                        <br/><h5>الروابط مع مواقع إلكترونية أخرى وتطبيقات أطراف ثالثة</h5>
                        <p>يتسم الموقع الإلكتروني لوزارة الصحة ووقاية المجتمع بالتفاعلية، لذا يضم روابط تتيح الوصول إلى مواقع أخرى، مثل شبكات التواصل الاجتماعي، فضلاً عن تطبيقات إلكترونية لأطراف ثالثة تسمح بتسجيل الدخول أو نشر محتوى ما. وقد يتضمن الموقع أيضاً روابط عامة لمواقع إلكترونية أخرى لأطراف خارجية غير مرتبطة بوزارة الصحة و وقاية المجتمع ، وذلك عبر قنوات التواصل الاجتماعي أو النشرات الإخبارية الإلكترونية وغيرها، في سبيل تيسير وتسهيل تجربة المستخدم. ويخضع استخدام مثل هذه الروابط والتطبيقات إلى أحكام سياسة الخصوصية المتبعة لدى الأطراف الثالثة، لذا لا تتحمل الوزارة أي مسؤولية حول طريقة الاستخدام أو سرية المعلومات أو طبيعة المحتوى الوارد ضمن هذه المواقع والتطبيقات الإلكترونية، ويتوجب عليكم الإطلاع على بنود وأحكام سياسة الخصوصية المعتمدة لدى المواقع الأخرى مباشرةً قبل البدء باستخدامها.</p>

                        <br/><h5>الاستفسار حول الخصوصية</h5>
                        <p>في حال كانت لديكم أية شكاوى أو أسئلة واستفسارات حول ممارسات أو سياسة الخصوصية، الرجاء التواصل مع وزارة الصحة ووقاية المجتمع عبر قنوات الاتصال الواردة أدناه أو من خلال ملء نموذج الاتصال لعناية:</p>

                        <br/><h5>إدارة الاتصال الحكومي</h5>
                        <p>وزارة الصحة ووقاية المجتمع</p>
                        <ul>
                            <li>صندوق بريد: 1853</li>
                            <li>محيصنة 2، قرب أكاديمية "إتصالات" - شارع الشيخ محمد بن زايد - دبي- الإمارات العربية المتحدة</li>
                            <li>هاتف: +971 4 2301000</li>
                            <li>فاكس: +971 4 2301800</li>
                            <li>بريد إلكتروني:&nbsp;<a href="mailto:csdubai@mohap.gov.ae">csdubai@mohap.gov.ae</a></li>
                        </ul>
                        <p>التحديث الأخير تم عام 2017. إنّ المحتوى المذكور في هذا الموقع الإلكتروني إلى جانب البنود والأحكام الواردة في هذه الوثيقة خاضعة بمجملها للتعديل والتغيير دون إشعار المستخدمين مسبقاً. </p>
                    @endif
                </div>
            </div>
        </div>
    </section>

@endsection

@section('js')
@endsection