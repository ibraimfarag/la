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
                    <h5 class="sub-heading">{{ $lang=="ar" ? 'الأحكام والشروط' : 'Terms and condition' }}</h5>

                    @if($lang=='en')
                        <br/><h5>This website and its content and services are published &amp; managed by the Ministry Of Health and Prevention (MOHAP), UAE. The following are terms of between you and MOHAP and applicable to all visitors and users. By accessing, browsing, or using this website, you agree bound by these terms &amp; comply with all applicable laws and regulations.</h5>
                        <p>The services that MOHAP provides to you are subject to the following Terms of use ("TOU"). MOHAP reserves the right to update the TOU at any time without notice to you. The most current version of the TOU can be reviewed by clicking on the "terms of use" hypertext link located at the footer of the website.</p>
                        <p>If you do not agree to these terms, please do not use this website any further.</p>
                        <br/><h5><strong>Rules and Regulations</strong><a href="https://www.mohap.gov.ae/en/Pages/TermsandConditions.aspx#collapseExample2"></a></h5>
                        <p>The Ministry Of Health and Prevention Portal reserves the right, at any time, to revise these terms of use and any other information contained in this website by updating this posting without notice. MOHAP may also make improvements to the site or services it provides at any time at its sole discretion. In the case of any violation of these rules and regulations, the Ministry Of Health and Prevention Portal reserves the right to seek all remedies available by law. These rules and regulations apply to all visits to the Ministry Of Health and Prevention Portal, both now and in the future.</p>
                        <br/><h5><strong>Limited License</strong></h5>
                        <p>MOHAP authorizes you to copy materials published by MOHAP solely for non-commercial, personal use only. You agree that any copy of these materials which you make shall retain all copyright and other proprietary notices in the same form and manner as on the original. Except as specified above, nothing contained here in shall be construed as conferring by implication, or otherwise any license or copyright of Ministry Of Health and Prevention Portal or any third party. All contents on this site are protected by copyright, except as specifically permitted herein, no portion of this web site may be reproduced in any form, or by any means, without prior written permission from MOHAP. Visitors or users are not permitted to modify, distribute, publish or create derivative works for any public or commercial purposes.</p>
                        <br/><h5><strong>Information Collection</strong></h5>
                        <p>MOHAP respects your privacy and is committed to protecting the personal information you share with us. However, please note when you register for certain services, we will ask you to provide personal information, which may be combined with information from other services or departments. We use technologies, such as cookies to keep track of your interaction to offer a personalized experience.</p>
                        <br/><h5><strong>General</strong></h5>
                        <p>This web site contains proprietary notices and copyright information, the terms of which must be observed and followed. MOHAP grants you non-exclusive, non-transferable, limited permission. This permission is conditioned on your not modifying the content displayed on this site, your keeping intact all copyright, and other proprietary notices set forth in this site.</p>
                        <p>Your failure to comply with the terms, conditions, and notices on this site will result in automatic termination of any rights granted to you, without prior notice. Except for the limited permission in the preceding paragraph, MOHAP does not grant you any express or implied rights or licenses. You may not mirror any of the content from this site on another web site or in any other media.</p>
                        <br/><h5><strong>Disclaimers</strong></h5>
                        <p>Information on this web site is not promised or guaranteed to be correct, current, complete andr subject to change without prior notice. This this site may contain technical inaccuracies or typographical errors. MOHAP expressly disclaims responsibility for updating this site to keep information current or to ensure the accuracy or completeness of any posted information and provides no assurances that any reported problems will be resolved.</p>
                        <br/><h5><strong>Confidential Information</strong></h5>
                        <p>MOHAP does not want to receive confidential or proprietary information from you through our web site. Any information or material sent to MOHAP will be deemed as non-confidential. By doing so, you grant MOHAP unrestricted, irrevocable license to copy, reproduce, publish, upload, post, modify, and otherwise freely use, those materials or information. You also agree that MOHAPAP is free to use any ideas, concepts, know-how that you send.</p>
                        <br/><h5><strong>Availability</strong></h5>
                        <p>MOHAPAP may occasionally publish on the internet, social media, apps, newsletters, press releases, external communication may contain references to MOHAPAP programs &amp; services that are not available at that point in time. Such references do not imply that MOHAP intends to announce or make available such programs, or services.</p>
                        <br/><h5><strong>Third party content</strong></h5>
                        <p>This web site may provide links or references to non-MOHAP web sites, other government departments, partners, media, vendors and resources of third parties. MOHAP makes no representations, warranties, or other commitments whatsoever about any non-MOHAP web sites or third-party resources that may be referenced, accessible from, or linked to any MOHAP site. A link to a non-MOHAP web site does not mean that MOHAP endorses the content or use of such web site or its owner. In addition, MOHAP is not a party to or responsible for any transactions you may enter into with third parties, even if you learn of such parties (or use a link to such parties) from an MOHAP site.</p>
                        <p>Accordingly, you acknowledge and agree that MOHAP is not responsible for the availability of such external sites or resources, and is not responsible or liable for any content, services, products, or other materials on or available from those sites or resources.</p>
                        <p>When you access a non-MOHAP web site, even one that may contain the MOHAP-logo, it is independent from MOHAP. It is your sole responsibility to take precautions to protect your information as you deem appropriate.</p>
                        <br/><h5><strong>Linking to this site</strong></h5>
                        <p>All links to this web site must be approved in writing by MOHAP, except that MOHAP consents to links in which the link and the pages that are activated by the link do not: (a) create frames around any page on this web site or use other techniques that alter in any way the visual presentation of any content within this site; (b) misrepresent your relationship with MOHAP; (c) imply that MOHAP approves or endorses you, your web site, service or product offerings; and (d) present false or misleading impressions about MOHAP or otherwise damage the goodwill associated with MOHAP. You agree that MOHAP may at any time, terminate permission to link to this web site. In such event, you agree to immediately remove all links to this web site.</p>
                        <br/><h5><strong>Translations</strong></h5>
                        <p>Certain text in this web site may be made available in multiple languages. These translations are provided as a convenience to you. MOHAP makes no representations for its accuracy, completeness.</p>
                        <br/><h5><strong>Disclaimer of Warranty</strong></h5>
                        <p>Use of this site is at your sole risk. All materials, information, and services are provided "as is," with no warranties or guarantees whatsoever. MOHAP expressly disclaims to the fullest extent permitted by law all express, implied, statutory, and other warranties, guarantees, or representations, including, without limitation, the warranties, fitness for a particular purpose, and non-infringement of proprietary and intellectual property rights. Without limitation, MOHAP makes no warranty or guarantee that this web site will be uninterrupted, timely, secure, or error-free.</p>
                        <p>You understand and agree that if you download or otherwise obtain materials, information, software, or services, you do so at your own discretion and risk and that you will be solely responsible for any damages that may result, including loss of data or damage to your computer system.</p>
                        <br/><h5><strong>Limitation of Liability</strong></h5>
                        <p>In no event will MOHAP be liable to any party for any direct, indirect, incidental, special, exemplary or consequential damages of any type whatsoever related to or arising from use of this web site, or of any site or resource linked to, referenced, or accessed through this web site, or for the use or downloading of, or access to, any materials, information, services, including, without limitation, any business interruption, loss of data, even if MOHAP is expressly advised of the possibility of such damages. This exclusion and waiver of liability applies to all causes of action, whether based on contract, warranty, tort. In the event of any conflict, such additional or different terms, conditions, and notices will prevail over these terms of use. Please see the applicable agreement or notice.</p>
                        <br/><h5><strong>Description of services</strong></h5>
                        <p>MOHAP provides you with access to a variety of resources, including, download areas, and product information (collectively "services"). The services, including any updates, enhancements, new features, and/or the addition of any new web properties, are subject to the TOU.</p>
                        <br/><h5><strong>Personal and non-commercial use limitation</strong></h5>
                        <p>Unless otherwise specified, the services are for your personal and non-commercial use. You may not modify, copy, distribute, transmit, display, perform, reproduce, publish, license, create derivative works from, transfer, or sell any information, software, products or services obtained from the services.</p>
                        <br/><h5><strong>Usage Permissions</strong></h5>
                        <p>You can use documents (such as datasheets, forms) provided that (a.) the MOHAP copyright notice appears in all copies (b) use of such documents from the services is for informational, non-commercial or personal use only and will not be copied or posted in any media, and (c) no major modifications are made.</p>
                        <p>Documents specified above do not include the design or layout of the MOHAP web site or any other MOHAP owned, operated, or controlled site. Elements of MOHAP web site (logo, text, images, documents etc) are protected by law and may not be copied or imitated in whole or in part, unless expressly permitted by MOHAP.</p>
                        <p>MOHAP and/or its respective suppliers make no representations about the suitability of the information contained in the documents and related graphics published as part of the services for any purpose. All such documents and related graphics are provided "as is" without warranty of any kind.</p>
                        <p>The content published could include technical inaccuracies or typographical errors. Changes are periodically added to the information herein. MOHAP and/or its respective suppliers may make improvements and/or changes in the product(s) and/or the program(s) described herein at any time.</p>
                        <br/><h5><strong>Member account, password, and security</strong></h5>
                        <p>If any of the services requires you to open an account, you must complete the registration process by providing us with accurate information. You are responsible for maintaining the confidentiality of your account and all activities that occur under your account. MOHAP will not be liable for any loss that you may incur as a result of someone else using your password or account, either with or without your knowledge. You could be held liable for losses incurred by MOHAP or another party due to someone else using your account or password.</p>
                        <br/><h5><strong>Unlawful or prohibited use</strong></h5>
                        <p>You will not use the services for unlawful purposes or prohibited by these terms, conditions, and notices that could damage, disable, overburden any MOHAP server, or the network(s) connected to any MOHAP server, or interfere with any other party's use of any services. You will not gain unauthorized access to any services, other accounts, networks connected to any MOHAP server, through hacking, password mining or any other means.</p>
                        <br/><h5><strong>Use of services</strong></h5>
                        <p>The services may contain social media services, forums, e-mail, commenting tools, photo albums, designed to enable users to communicate with each other. By way of example, and not as a limitation, you will not:</p>
                        <ul>
                            <li>Use the communication services for surveys, contests, chain letters, data mining, spamming or phishing</li>
                            <li>Defame, abuse, harass, stalk, threaten or violate the legal rights of others</li>
                            <li>Publish, distribute inappropriate, anti-government, defamatory, unlawful information</li>
                            <li>Upload images, software, copyrighted material, viruses, trojan horses, worms, corrupted files</li>
                            <li>Restrict or inhibit any other user from using the communication services</li>
                            <li>Violate any code of conduct or guidelines applicable for any particular communication service</li>
                            <li>Create a false identity for the purpose of misleading others</li>
                        </ul>
                        <p>MOHAP has no obligation to monitor the communication services. However, MOHAP reserves the right to review, edit, refuse, remove materials posted and terminate your access, without notice at its sole discretion.</p>
                        <p>MOHAP reserves the right to disclose any information as MOHAP deems necessary to satisfy any applicable law, regulation, legal process or governmental request.</p>
                        <p>MOHAP does not control or endorse the content, messages or information found in any communication services. MOHAP specifically disclaims any liability and any actions resulting from your participation in any communication services. Managers and hosts are not authorized MOHAP spokespersons, and their views do not necessarily reflect those of MOHAP.</p>
                        <br/><h5><strong>Materials provided or posted to MOHAP website</strong></h5>
                        <p>MOHAP does not claim ownership of the materials you provide (including feedback and suggestions) post, upload, or input. By posting, uploading, you are granting MOHAP permission to use your submission, without limitation, the license rights to: copy, distribute, publicly display, edit, translate your submission; to publish your name. No compensation will be paid with for the use of your submission. In addition to the warranty and representation set forth above, by posting a submission, you warrant and represent that you are the copyright owner.</p>
                        <br/><h5><strong>Links to third party sites</strong></h5>
                        <p>The links on MOHAP's web site may let you leave MOHAP's site. The linked sites, apps, services are not under the control of MOHAP and MOHAP is not responsible for the contents. MOHAP is providing these links to you only as a convenience and does not imply endorsement or affiliation.</p>
                        <br/><h5><strong>Notices</strong></h5>
                        <p>Any notifications, questions related to MOHAP's online properties, spam/privacy issues, website related technical queries should be sent to the below address only with your contact details and detailed query.</p>
                        <br/><h5><strong>Attention: Communications Department</strong></h5>
                        <p>Ministry Of Health and Prevention</p>
                        <ul>
                            <li>P. O. Box: 1853</li>
                            <li>Muhaisnah 2, Near Etisalat academy, Sheikh MOHAPammed Bin Zayed Road , Dubai, UAE</li>
                            <li>Tel: +971 4 2301000</li>
                            <li>Fax: +971 4 2301800<br /></li>
                        </ul>
                    @else
                        <br/><h5>يتم نشر وإدارة هذا الموقع ومحتواه وخدماته من قبل وزارة الصحة ووقاية المجتمع في دولة الإمارات. وفيما يأتي أدناه شروط استخدام الموقع والتي تنطبق على جميع زوار ومستخدمي الموقع. وإن قيامكم بدخول أو تصفح أو استخدام هذا الموقع، يعني موافقتكم وقبولكم لهذه الشروط والامتثال لجميع القوانين واللوائح المعمول بها.</h5>
                        <p>وتخضع الخدمات التي تقدمها لكم وزارة الصحة ووقاية المجتمع إلى شروط الاستخدام الآتي ذكرها. كما تحتفظ وزارة الصحة ووقاية المجتمع بحق تحديث شروط الاستخدام في أي وقت ودون إشعار مسبق. ويمكن الاطلاع على أحدث نسخة لشروط الاستخدام من خلال النقر على "شروط الاستخدام" (terms of use) في أسفل الموقع الإلكتروني.</p>
                        <p>وفي حال عدم موافقتكم على هذه الشروط، يرجى منكم عدم استخدام هذا الموقع.</p>
                        <br/><h5><strong>القواعد واللوائح</strong></h5>
                        <p>تحتفظ بوابة وزارة الصحة ووقاية المجتمع بحق تعديل شروط الاستخدام وأية معلومات أخرى واردة في هذا الموقع الإلكتروني في أي وقت من خلال تحديث هذه البيانات دون إشعار مسبق. كما يمكن للوزارة أن تقوم أيضاً بإدخال تحسينات على الموقع أو الخدمات التي يقدمها في أي وقت وفقاً لتقديراتها. وفي حال وجود أية مخالفة لهذه القواعد واللوائح، فإن الوزارة تحتفظ بحق المطالبة بكافة التعويضات المنصوص عليها في القانون. وتسري هذه القواعد واللوائح على كافة زوار ومستخدمي موقع الوزارة الإلكتروني في الوقت الحالي وفي المستقبل.</p>
                        <br/><h5><strong>ترخيص محدود</strong></h5>
                        <p>تسمح لكم وزارة الصحة ووقاية المجتمع بنسخ المواد المنشورة على موقعها الإلكتروني فقط لأغراض شخصية وغير تجارية. وعليه، فإنكم توافقون على أن تحتفظ أي نسخة من هذه المعلومات بكافة حقوق الطبع ومعلومات الملكية الأخرى بنفس الشكل والطريقة التي تعامل بها النسخة الأصلية من هذه المعلومات. وفيما عدا ما ورد أعلاه، فإنه لا يجوز تأويل أي شيء ورد هنا على أنه تخويل ضمني أو ترخيص أو حق تأليف ونشر للبوابة الإلكترونية للوزارة أو أي جهة أخرى. كما أن جميع محتويات هذا الموقع الإلكتروني محمية بموجب حقوق الملكية. وفيما عدا ما يسمح به بوجه خاص في هذه الوثيقة، فإنه لا يجوز إعادة إنتاج أي جزء من المعلومات الواردة في هذا الموقع بأي صورة أو بأي وسيلة دون الحصول على إذن كتابي مسبق من وزارة الصحة ووقاية المجتمع. كما أنه لا يسمح للزوار أو المستخدمين بتعديل أو توزيع أو نشر أو بث أو تصميم أعمال مشتقة من أي مواد موجودة على هذا الموقع لأي أغراض عامة أو تجارية.</p>
                        <br/><h5><strong>تجميع المعلومات</strong></h5>
                        <p>تحترم وزارة الصحة ووقاية المجتمع خصوصيتكم وتلتزم بحماية المعلومات الشخصية التي تقدمونها لنا. وعليه، فإنه يرجى ملاحظة أنه عند تسجيلكم للحصول على خدمات معينة، فإننا سنطلب منكم تقديم معلومات شخصية والتي قد يتم تجميعها مع معلومات يتم الحصول عليها من خدمات أو شركات أخرى. كما أننا نقوم باستخدام الوسائل التكنولوجية لمتابعة تفاعلكم معنا وتزويدكم بتجربة استخدام مخصصة.</p>
                        <br/><h5><strong>عام</strong></h5>
                        <p>يحتوي هذا الموقع على معلومات الملكية ومعلومات حقوق التأليف والنشر، بالإضافة إلى الشروط التي يجب مراعاتها واتباعها. وتمنحكم وزارة الصحة ووقاية المجتمع إذناً محدوداً غير حصري وغير قابل للتحويل لمستخدم آخر، حيث إن هذا الإذن مرتبط بعدم التعديل على المحتويات المعروضة في هذا الموقع، مع الحفاظ على كافة حقوق النشر والطبع وغيرها من معلومات الملكية الأخرى المنصوص عليها في هذا الموقع.</p>
                        <p>وفي حال عدم امتثالكم لهذه الشروط واللوائح والملاحظات الواردة في هذا الموقع، فإنه سيتم إلغاء الحقوق الممنوحة لكم تلقائياً ودون أي إشعار مسبق. وفيما عدا الإذن المحدود الوارد في الفقرة السابقة، فإن الوزارة لا تمنحكم أي إذن أو حقوق صريحة أو ضمنية أو تراخيص. كما لا يمكنكم نقل أي محتوى من هذا الموقع إلى موقع إلكتروني آخر أو أية وسيلة إعلامية أخرى.</p>
                        <br/><h5><strong>إخلاء المسؤولية</strong></h5>
                        <p>لا تضمن وزارة الصحة ووقاية المجتمع أن تكون المعلومات الواردة في هذا الموقع صحيحة أو حديثة أو كاملة، وهي خاضعة للتغيير دون إشعار مسبق. وقد يحتوي هذا الموقع الإلكتروني على أخطاء فنية أو مطبعية، كما لا تتحمل الوزارة أية مسؤولية تجاه ترقية هذا الموقع بهدف تحديث المعلومات فيه أو لضمان دقة أو كمال أية معلومات منشورة عليه، فضلاً عن تقديم أية ضمانات بمعالجة أية مشاكل تم الإبلاغ عنها.</p>
                        <br/><h5><strong>المعلومات السرية</strong></h5>
                        <p>لا ترغب وزارة الصحة ووقاية المجتمع في تلقي أية معلومات سرية أو خاصة منكم عبر موقعها الإلكتروني. وأية معلومات أو مواد يتم إرسالها إلى الوزارة سيتم التعامل معها على أنها معلومات غير سرية. ومن خلال القيام بذلك، فإنكم تمنحون الوزارة ترخيصاً غير مقيد ولا رجعة فيه لنسخ وإعادة إنتاج ونشر وتحميل وتوزيع وتعديل واستخدام هذه المواد أو المعلومات بحرية. كما أنكم توافقون على أن الوزارة لها كامل الصلاحية في استخدام الأفكار والمفاهيم والمعلومات التي ترسلونها.</p>
                        <br/><h5><strong>التوافر</strong></h5>
                        <p>قد تقوم الوزارة في بعض الأحيان وعبر شبكة الإنترنت أو من خلال مواقع التواصل الاجتماعي والتطبيقات والنشرات الإخبارية والأخبار الصحفية والاتصالات الخارجية، بنشر معلومات ربما تحتوي على إشارات إلى خدمات وبرامج الوزارة والتي لا تتوفر في حينها بالوقت المناسب. ولا تعني مثل هذه الإشارات أن الوزارة تنوي الإعلان عن أو تقديم مثل هذه البرامج أو الخدمات.</p>
                        <br/><h5><strong>المحتوى الخاص بالجهات الأخرى على الموقع</strong></h5>
                        <p>ربما يحتوي هذا الموقع على روابط أو إشارات إلى مواقع أخرى لا تعود للوزارة، أو تكون لدوائر حكومية أخرى أو شركاء أو وسائل إعلام أو شركات أو مصادر لأطراف ثالثة. ولا تقدم الوزارة أية ضمانات أو تعهدات أو التزامات حول أية مواقع إلكترونية غير تابعة لها أو مصادر خارجية يمكن الرجوع إليها والوصول منها أو ترتبط بموقع الوزارة. ولا يعني وجود رابط لموقع غير تابع لوزارة الصحة ووقاية المجتمع، أن الوزارة تؤيد محتوى أو استخدام هذا الموقع أو الجهة التابع لها. وبالإضافة إلى ذلك، فإن وزارة الصحة ووقاية المجتمع ليست طرفاً في أو مسؤولة عن أية تعاملات ربما تبرمونها مع أطراف أخرى، حتى لو كنتم تستفيدون من تلك الأطراف (أو تستخدمون رابطاً إلى مواقع تلك الأطراف) من موقع الوزارة.</p>
                        <p>وبناء عليه، فإنكم تقرون وتوافقون على عدم مسؤولية الوزارة عن توافر مثل هذه المواقع العائدة لجهات خارجية أو المواد الخارجية، كما أنها لا تتحمل مسؤولية أية محتوى أو خدمات أو منتجات أو مواد موجودة في هذه المواقع أو تتاح عبرها.</p>
                        <p>وعند دخولكم إلى موقع غير تابع للوزارة، بما فيها المواقع التي ربما تحتوي على شعار الوزارة، فإن ذلك يعد خطوة مستقلة عن الوزارة، حيث تقع على عاتقكم وحدكم مسؤولية اتخاذ الاحتياطات اللازمة لحماية المعلومات الخاصة بكم وكما ترونه مناسباً.</p>
                        <br/><h5><strong>الربط مع هذا الموقع</strong></h5>
                        <p>يجب أن تتم الموافقة على كافة الروابط الواردة في هذا الموقع خطياً من قبل وزارة الصحة ووقاية المجتمع، وفيما عدا ذلك، توافق وزارة الصحة على الروابط التي تم فيها تفعيل الرابط والصفحات عن طريق وصلة لا : (أ) تنشئ إطارات حول أية صفحة على هذا الموقع أو تستخدم تقنيات أخرى تغير بأي شكل من الأشكال العرض المرئي لأي محتوى ضمن الموقع؛ (ب) تحرف علاقتكم مع الوزارة ؛ (ج) تنطوي على أن وزارة الصحة توافق عليكم أو على موقعكم أو عروض منتجاتكم أو خدماتكم؛ (د) تقدم انطباعات زائفة أو مضللة حول وزارة الصحة ووقاية المجتمع أو تسيء إلى صورتها. ومع إقراركم بأن وزارة الصحة ووقاية المجتمع قد تنهي في أي وقت تراه مناسباً الإذن المعطى للإرتباط مع هذا الموقع، فإنكم توافقون في هذه الحالة على الإزالة الفورية لكافة الروابط في هذا الموقع.</p>
                        <br/><h5><strong>النصوص المترجمة</strong></h5>
                        <p>بعض النصوص الواردة في هذا الموقع ربما تكون متاحة بلغات متعددة، حيث يتم توفير هذه الترجمات من أجل التسهيل عليكم. ولا تقدم الوزارة أية ضمانات حول دقة أو اكتمال هذه النصوص المترجمة.</p>
                        <br/><h5><strong>الشروط والأحكام</strong></h5>
                        <p>إن استخدام هذا الموقع يقع على مسؤوليتكم وحدكم. ويتم إيراد كافة المواد والمعلومات والخدمات في هذا الموقع على مبدأ "كما هي"، دون أية ضمانات أو تعهدات من أي نوع. ولا تتحمل وزارة الصحة ووقاية المجتمع صراحةً وإلى أقصى حد يسمح به القانون، أية مسؤولية ضمنية أو صريحة أو قانونية أو غيرها من الضمانات أو التعهدات، بما في ذلك على سبيل المثال لا الحصر، الضمانات والملائمة لغرض معين وعدم التعدي على حقوق الملكية الفكرية. كما لا تقدم الوزارة أية ضمانات أو تعهدات باستمرارية هذا الموقع أو توافره في الوقت المناسب أو مستوى الأمان فيه أو خلوه من الأخطاء.</p>
                        <p>وعليه، فأنتم تدركون وتوافقون على أنه في حال قمتم بتحميل أو الحصول على مواد أو معلومات أو برامج أو خدمات، فإنكم تقومون بذلك بحسب ما ترونه مناسباً لكم وبأنكم وحدكم المسؤولون عن أية أضرار قد تنجم، بما في ذلك فقدان البيانات أو تلف نظام التشغيل الخاص بجهاز الكمبيوتر.</p>
                        <br/><h5><strong>إخلاء مسؤولية الضمان</strong></h5>
                        <p>يتم نشر وإدارة هذا الموقع ومحتواه وخدماته من قبل وزارة الصحة ووقاية المجتمع في دولة الإمارات. وفيما يأتي أدناه شروط استخدام الموقع والتي تنطبق على جميع زوار ومستخدمي الموقع. وإن قيامكم بدخول أو تصفح أو استخدام هذا الموقع ، يعني موافقتكم وقبولكم لهذه الشروط والامتثال لجميع القوانين واللوائح المعمول بها.</p>
                        <p>وتخضع الخدمات التي تقدمها لكم وزارة الصحة ووقاية المجتمع إلى شروط الاستخدام الآتي ذكرها. كما تحتفظ وزارة الصحة ووقاية المجتمع بحق تحديث شروط الاستخدام في أي وقت ودون إشعار مسبق. ويمكن الاطلاع على أحدث نسخة لشروط الاستخدام من خلال النقر على "شروط الاستخدام" (terms of use) في أسفل الموقع الإلكتروني.</p>
                        <p>وفي حال عدم موافقتكم على هذه الشروط، يرجى منكم عدم استخدام هذا الموقع.</p>
                        <br/><h5><strong>تحديد المسؤولية</strong></h5>
                        <p>لا تتحمل وزارة الصحة ووقاية المجتمع بأي حال من الأحوال المسؤولية تجاه أي طرف عن أية أضرار مباشرة أو غير مباشرة أو خاصة أو طارئة أو عقابية أو تبعية مهما كان نوعها ناتجة عن استخدام هذا الموقع، أو أي موقع أو مصدر مرتبط به أو أشير إليه أو تم الوصول إليه عن طريق هذا الموقع، أو من أجل استخدام أو تحميل أو الوصول إلى أية مواد ومعلومات وخدمات، بما في ذلك على سبيل المثال لا الحصر، أية انقطاع للعمل أو فقدان للبيانات، حتى لو نصحت وزارة الصحة ووقاية المجتمع صراحة بإمكانية حدوث مثل هذه الأضرار. وينطبق هذا الاعفاء من المسؤولية على كافة أسباب الدعاوى، سواء على أساس العقد أو الضمان أو الضرر. وفي حال وجود أي تعارض، فإن هذه الشروط والأحكام والملاحظات الإضافية سيكون لها الغلبة على شروط الاستخدام هذه. يرجى مراجعة الاتفاق القابل للتطبيق.</p>
                        <br/><h5><strong>وصف الخدمات</strong></h5>
                        <p>تتيح لكم وزارة الصحة ووقاية المجتمع إمكانية الوصول إلى مجموعة متنوعة من المصادر، بما في ذلك روابط التحميل والمعلومات عن المنتجات (ما يعرف بالخدمات). وتخضع هذه الخدمات، بما في ذلك أي تحديث أو تحسين أو مزايا جديدة و/أو إضافة أية خصائص جديدة على الموقع، لشروط الاستخدام.</p>
                        <br/><h5><strong>حدود الاستعمال الشخصي وغير التجاري</strong></h5>
                        <p>إن الخدمات المتوفرة في الموقع الإلكتروني هي للاستخدام الشخصي وغير التجاري. ولا يمكنكم تعديل أو نسخ أو توزيع أو نقل أو عرض أو أداء أو إعادة إنتاج أو نشر أو ترخيص أو إنشاء أعمال مشتقة أو نقل أو بيع أية معلومات أو برامج أو خدمات تم الحصول عليها من خلال وزارة الصحة ووقاية المجتمع.</p>
                        <br/><h5><strong>ضوابط الاستخدام</strong></h5>
                        <p>يمكنك استخدام الوثائق المتوفرة على الموقع (مثل أوراق البيانات والنماذج) شريطة أن:</p>
                        <ul>
                            <li>تظهر حقوق التأليف التابعة لوزارة الصحة ووقاية المجتمع في جميع النسخ</li>
                            <li>استخدام الوثائق في مجالات غير إعلامية، غير تجارية أو للإستخدام الشخصي فقط</li>
                            <li>لا يتم إجراء أي تعديلات رئيسية</li>
                        </ul>
                        <p>ولا تشمل الوثائق المحددة أعلاه تصميم موقع وزارة الصحة ووقاية المجتمع أو أي موقع مملوك أو مدار أو مسيطر عليه من قبل الوزارة. فعناصر موقع الوزارة (الشعار والنصوص والصور والوثائق وغيرها ) محفوظة من خلال القانون، ولا يجوز نسخها أو تقليدها كلياً أو جزئياً، إلا بإذن من وزارة الصحة ووقاية المجتمع.</p>
                        <p>ولا تقدم وزارة الصحة ووقاية المجتمع و/أو الموردون التابعون لها أية إقرارات حول ملاءمة المعلومات الواردة في المستندات والرسومات ذات الصلة المنشورة كجزء من الخدمات لأي غرض من الأغراض. ويتم تقديم جميع هذه الوثائق والرسومات ذات الصلة كما هي دون أي ضمان من أي نوع.</p>
                        <p>وقد يحتوي هذا الموقع الإلكتروني على أخطاء فنية أو مطبعية، كما يتم إضافة التغييرات بشكل دوري على المعلومات الواردة في الموقع. وقد تقوم الوزارة و/أو الموردين التابعين لها بإجراء تحسينات و/أو تغييرات في المنتجات و/أو البرامج الورادة في الموقع وفي أي وقت.</p>
                        <br/><h5><strong>حساب العضو، كلمة السر والأمن</strong></h5>
                        <p>إذا كانت أي من الخدمات المتوفرة تستلزم منك فتح حساب، فيجب إكمال عملية التسجيل عن طريق تزويدنا بمعلومات دقيقة. وأنتم مسؤولون عن الحفاظ على سرية حساباتكم وجميع الأنشطة التي تتم من خلالها، ولن تكون وزارة الصحة ووقاية المجتمع مسؤولة بأي حال من الأحوال عن أي خسائر قد تتكبدونها نتيجة لاستخدام شخص آخر كلمة السر أو الحساب الخاص بكم، مع أو بدون علمكم.</p>
                        <br/><h5><strong>الاستخدام غير القانوني أو المحظور</strong></h5>
                        <p>لا يجوز لكم استخدام الخدمات المتوفرة لأغراض غير مشروعة أو محظورة بموجب هذه البنود والشروط والأحكام، والتي يمكن أن تضر أو تعطل النظام الخادم في الوزارة أو الشبكات الأخرى المتصلة بأي نظام خادم في الوزارة، أو تتداخل مع أي استخدام لطرف آخر لأي خدمات. ولن يسمح لكم بوصول غير مصرح به لأية خدمات أو حسابات أخرى أو شبكات متصلة بأي نظام خادم للوزارة من خلال القرصنة أو سرقة كلمة المرور أو أية طرق أخرى.</p>
                        <br/><h5><strong>استخدام الخدمات</strong></h5>
                        <p>قد تحتوي الخدمات على خدمات وسائل الاعلام الاجتماعية، والمنتديات، والبريد الإلكتروني، ووسائل التعليق، وألبومات الصور، المصممة لتمكين المستخدمين من التواصل مع بعضهم البعض، وعلى سبيل المثال لا الحصر، فلا يجوز لكم:</p>
                        <ul>
                            <li>استخدام خدمات التواصل لعمليات الاستبيانات والمسابقات والخطابات واستخراج البيانات إرسال رسائل إلكترونية غير مرغوب فيها.</li>
                            <li>التشهير أو الإساءة أو المضايقات أو التهديد أو انتهاك الحقوق القانونية للآخرين</li>
                            <li>نشر وتوزيع المعلومات بصورة غير قانونية</li>
                            <li>رفع الصور والبرمجيات ومواد لها حقوق نشر، والفيروسات والملفات التالفة</li>
                            <li>تقييد أو منع أي مستخدم آخر من استخدام خدمات الاتصالات</li>
                            <li>انتهاك أية قواعد سلوك أو خرق قواعد الاستخدام لخدمات التواصل</li>
                            <li>إنشاء هوية مزورة لغرض تضليل الآخرين</li>
                        </ul>
                        <p>وإن وزارة الصحة ووقاية المجتمع غير ملزمة بمراقبة خدمات التواصل، ومع ذلك ، تحتفظ الوزارة بحقها في مراجعة أو تعديل أو رفض، أو إزالة المواد المنشورة دون سابق إنذار.</p>
                        <p>كما تحتفظ وزارة الصحة ووقاية المجتمع بحق الكشف عن أية معلومات لازمة لتلبية القوانين ولأغراض حكومية.</p>
                        <p>ولا تؤيد وزارة الصحة ووقاية المجتمع أو توافق على المعلومات الموجودة في أي الخدمات، وتنفي على وجه الخصوص أي مسؤولية، وأية إجراءات تنتج عن مشاركة المستخدمين في خدمات التواصل، كما أن آراء المدراء والمضيفين والمتحدثين باسم الوزارة، لا تعكس بالضرورة وجهة نظر الوزارة.</p>
                        <br/><h5><strong>المواد المقدمة أو المنشورة في موقع الوزارة</strong></h5>
                        <p>وزارة الصحة لا تدعي ملكية المواد التي تقدمونها (بما في ذلك الملاحظات والاقتراحات) أو تنشرونها أو ترفعونها أو تدرجونها في الموقع. وعند نشركم أو رفعكم لمحتوى معين، فإنكم تمنحون الإذن لوزارة الصحة ووقاية المجتمع باستخدام هذا المحتوى دون قيد، وكذلك حقوق الترخيص لنسخ وتوزيع وعرض وتحرير وترجمة المحتوى الخاص بك؛ ونشر اسمك. ولن يتم دفع أي تعويض لاستخدام المواد الخاصة بكم. وبالإضافة إلى الضمان والإقرار الوارد أعلاه، فإنكم تقرون وتتعهدون بأنكم أصحاب حقوق الملكية.</p>
                        <br/><h5><strong>الملاحظات</strong></h5>
                        <p>لا يجوز لكم استخدام الخدمات المتوفرة لأغراض غير مشروعة أو محظورة بموجب هذه البنود والشروط والأحكام، والتي يمكن أن تضر أو تعطل النظام الخادم في الوزارة أو الشبكات الأخرى المتصلة بأي نظام خادم في الوزارة، أو تتداخل مع أي استخدام لطرف آخر لأي خدمات. ولن يسمح لكم بوصول غير مصرح به لأية خدمات أو حسابات أخرى أو شبكات متصلة بأي نظام خادم للوزارة من خلال القرصنة أو سرقة كلمة المرور أو أية طرق أخرى.</p>
                        <br/><h5><strong>إدارة الاتصال الحكومي</strong></h5>
                        <p>وزارة الصحة و وقاية المجتمع</p>
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