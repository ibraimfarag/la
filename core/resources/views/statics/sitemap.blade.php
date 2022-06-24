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
                    <h5 class="sub-heading">{{ $lang=="ar" ? 'خريطة الموقع' : 'Sitemap' }}</h5>
                    <ul class="">
                        <li><a href="{{ $lang=="ar" ? url($lang.'/') : url('/') }}" class="resizeable-font">{{ $lang == 'ar' ? 'الصفحة الرئيسية' : 'Home' }}</a></li>
                        <li><a href="{{ $lang=="ar" ? url($lang.'/about') : url('/about') }}" class="resizeable-font">{{ $lang == 'ar' ? 'نبذة عنا' : 'About' }}</a></li>
                        <li><a href="{{ $lang=="ar" ? url($lang.'/benefits-and-goals') : url('/benefits-and-goals') }}" class="resizeable-font">{{ $lang == 'ar' ? 'المزايا والأهداف' : 'Benefits & Goals' }}</a></li>
                        <li><a href="{{ $lang=="ar" ? url($lang.'/faqs') : url('/faqs') }}" class="resizeable-font">{{ $lang == 'ar' ? 'الأسئلة الشائعة' : 'FAQs' }}</a></li>
                        <li><a href="{{ $lang=="ar" ? url($lang.'/updates') : url('/updates') }}" class="resizeable-font">{{ $lang == 'ar' ? 'المستجدات' : 'Updates' }}</a></li>
                        <li><a href="{{ $lang=="ar" ? url($lang.'/contact-us') : url('/contact-us') }}" class="resizeable-font">{{ $lang == 'ar' ? 'اتصل بنا' : 'Contact Us' }}</a></li>
                        <li><a href="{{ $lang=="ar" ? url($lang.'/faqs#form') : url('/faqs#form') }}" class=" resizeable-font">{{ $lang=="ar" ? 'الملاحظات و الشكاوي' : 'FeedBack' }}</a> </li>
                        <li><a href="{{ $lang=="ar" ? url('ar/sitemap') : url('sitemap') }}">{{ $lang=="ar" ? 'خريطة الموقع' : 'Sitemap' }}</a> </li>
                        <li><a href="{{ $lang=="ar" ? url('ar/terms-and-conditions') : url('terms-and-conditions') }}" class=" resizeable-font">{{ $lang=="ar" ? 'الأحكام والشروط' : 'Terms and conditions' }}</a> </li>
                        <li><a href="{{ $lang=="ar" ? url('ar/privacy-policy') : url('privacy-policy') }}" class=" resizeable-font">{{ $lang=="ar" ? 'سياسة الخصوصية' : 'Privacy policy' }}</a> </li>
                        <li><a href="{{ $lang=="ar" ? url('ar/disclaimer') : url('disclaimer') }}" class=" resizeable-font">{{ $lang=="ar" ? 'إخلاء المسؤولية' : 'Disclaimer' }}</a> </li>
                        <li><a href="{{ $lang=="ar" ? url('ar/accessibility-policy') : url('accessibility-policy') }}" class=" resizeable-font">{{ $lang=="ar" ? 'سياسة الوصول' : 'Accessibility Policy' }}</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('js')
@endsection

