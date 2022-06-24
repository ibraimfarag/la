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
                <h5 class="sub-heading">{{ $lang=="ar" ? 'إخلاء المسؤولية' : 'Disclaimer' }}</h5>

                @if($lang=='en')
                    <p>The Ministry of Health &amp; Prevention operates this portal to provide information and services and implement the initiatives that are included in the Ministry's strategy.</p>
                    <ul>
                        <li>The text, graphics, images, services, and other material ("Content") are for informational purposes only and. provided on an "as is" basis. The Content is not intended to be a substitute for professional medical advice, diagnosis, or treatment. Always seek the advice of your physician or other qualified health provider with any questions you may have regarding a medical condition.</li>
                        <li>The Ministry of Health &amp; Prevention is not responsible or liable under any circumstances to any damages that are direct or indirect, incidental or consequential, special or exceptional that arise from the usage or inability to use the website or its services.</li>
                        <li>The Ministry of Health &amp; Prevention is not responsible for the content of any third-party sites, apps, services, external linked content nor their inappropriate function nor the problems that may arise from their usage. The user is solely responsible for his/her actions while using any of the websites that he/she visited through the links of this website.</li>
                        <li>If you think you may have a medical emergency, call your doctor immediately or visit the nearest MOHAP clinic. MOHAP does not recommend or endorse any specific tests, physicians, products, opinions, or other information that may be mentioned on the Site, or on linked websites, apps and services. Reliance on any information provided by MOHAP should be done, only after an in-depth, in person consultation from a qualified health care professional.</li>
                    </ul>
                    <p>Thank you for your cooperation. We hope you find our website &amp; services helpful and convenient to use. Questions or comments regarding this website, including any reports of non-functioning links, should be submitted using our Contact Us Form.</p>
                @else
                    <p>تقوم وزارة الصحة و وقاية المجتمع بتشغيل هذه البوابة الإلكترونية من أجل توفير المعلومات والخدمات وتنفيذ المبادرات التي تضمنتها استراتيجية الوزارة. وعليه، تعتبر وزارة الصحة و وقاية المجتمع أن:</p>
                    <ul>
                        <li>النصوص والصور والرسومات والخدمات وغيرها من المواد (المحتوى) هي لأغراض إعلامية فقط، وتتوفر على أساس "كما هي". ولا يقصد من المحتوى أن يكون بديلاً عن المشورة الطبية أو التشخيص أو العلاج. وللحصول على المشورة الطبية، يرجى الرجوع إلى الطبيب المختص أو أي مزود معتمد للخدمات الصحية في حال كان لديكم أية أسئلة بخصوص حالة طبية ما.</li>
                        <li>وزارة الصحة و وقاية المجتمع غير مسؤولة تحت أي ظرف من الظروف عن أي أضرار مباشرة أو غير مباشرة أو عرضية أو تبعية أو خاصة أو استثنائية تنشأ عن استخدام أو عدم القدرة على استخدام الموقع أو خدماته.</li>
                        <li>وزارة الصحة و وقاية المجتمع لا تتحمل مسؤولية محتوى وتطبيقات وخدمات المواقع الأخرى التي تم إدراج روابطها على هذا الموقع، وهي ليست مسؤولة عن الاستخدام غير الملائم لها أو عن ما قد ينشأ عن استخدامها من مشكلات. والمستخدم هو الوحيد المسؤول عن تصرفاته أثناء استخدام أية من المواقع التي قام بزيارتها من خلال الروابط في هذا الموقع.</li>
                        <li>في حال مروركم بحالة طوارئ طبية، بادروا بالاتصال الطبيب فوراً أو قوموا بزيارة أقرب عيادة لوزارة الصحة. ووزارة الصحة و وقاية المجتمع لا تنصح أو تصادق على أية اختبارات محددة او أطباء أو منتجات أو آراء وغيرها من المعلومات التي يمكن أن ترد في هذا الموقع، أو مواقع وخدمات وتطبيقات تم إدراج روابطها في هذا الموقع. ولا ينبغي الاعتماد على أية معلومة تقدمها وزارة الصحة و وقاية المجتمع إلا بعد استشارة معمقة وشخصية من مختص الرعاية الصحية المؤهل.</li>
                    </ul>
                    <p>شكراً لحسن تعاونكم. نأمل أن يكون موقعنا الإلكتروني وخدماتنا مفيدة وسهلة الاستخدام. ونرجوا منكم تقديم الأسئلة والتعليقات حول الموقع الإلكتروني، بما في ذلك أية تقارير عن روابط لا تعمل، باستخدام نموذج "الاتصال بنا". </p>
                @endif
            </div>
        </div>
    </div>
</section>

@endsection

@section('js')
@endsection