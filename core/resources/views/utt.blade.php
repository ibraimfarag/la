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

        #partners {
            min-height: 500px;
        }
    </style>

@endsection

@section('content')

    <section id="partners" class="graybg inner-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left">
                    <h5 class="sub-heading">{{ $lang=="ar" ? 'Materials' : 'Materials' }}</h5>
                    <ul class="">
                        <li><p class="resizeable-font">
                                {{ $lang == 'ar' ? 'Tatmeen Users Training Dispensing' : 'Tatmeen Users Training Dispensing' }} -
                                <a target="_blank" href="{{ asset('pdfs/Tatmeen Users Training Dispensing.pptx') }}" class="resizeable-font"><i class="fa fa-fw fa-download"></i> Download</a>
                            </p></li>
                        <li><p class="resizeable-font">
                                {{ $lang == 'ar' ? 'Tatmeen Users Training Hierarchy Change' : 'Tatmeen Users Training Hierarchy Change' }} -
                                <a target="_blank" href="{{ asset('pdfs/Tatmeen Users Training Hierarchy Change.pptx') }}" class="resizeable-font"><i class="fa fa-fw fa-download"></i> Download</a>
                            </p></li>
                        <li><p class="resizeable-font">
                                {{ $lang == 'ar' ? 'Tatmeen Users Training Master Data' : 'Tatmeen Users Training Master Data' }} -
                                <a target="_blank" href="{{ asset('pdfs/Tatmeen Users Training Master Data.pptx') }}" class="resizeable-font"><i class="fa fa-fw fa-download"></i> Download</a>
                            </p></li>
                        <li><p class="resizeable-font">
                                {{ $lang == 'ar' ? 'Tatmeen Users Training Message Logs' : 'Tatmeen Users Training Message Logs' }} -
                                <a target="_blank" href="{{ asset('pdfs/Tatmeen Users Training Message Logs.pptx') }}" class="resizeable-font"><i class="fa fa-fw fa-download"></i> Download</a>
                            </p></li>
                        <li><p class="resizeable-font">
                                {{ $lang == 'ar' ? 'Tatmeen Users Training Product Clearance' : 'Tatmeen Users Training Product Clearance' }} -
                                <a target="_blank" href="{{ asset('pdfs/Tatmeen Users Training Product Clearance.pptx') }}" class="resizeable-font"><i class="fa fa-fw fa-download"></i> Download</a>
                            </p></li>
                        <li><p class="resizeable-font">
                                {{ $lang == 'ar' ? 'Tatmeen Users Training Product Status Update' : 'Tatmeen Users Training Product Status Update' }} -
                                <a target="_blank" href="{{ asset('pdfs/Tatmeen Users Training Product Status Update.pptx') }}" class="resizeable-font"><i class="fa fa-fw fa-download"></i> Download</a>
                            </p></li>
                        <li><p class="resizeable-font">
                                {{ $lang == 'ar' ? 'Tatmeen Users Training Product Transfer' : 'Tatmeen Users Training Product Transfer' }} -
                                <a target="_blank" href="{{ asset('pdfs/Tatmeen Users Training Product Transfer.pptx') }}" class="resizeable-font"><i class="fa fa-fw fa-download"></i> Download</a>
                            </p></li>
                        <li><p class="resizeable-font">
                                {{ $lang == 'ar' ? 'Tatmeen Users Training Product Verification' : 'Tatmeen Users Training Product Verification' }} -
                                <a target="_blank" href="{{ asset('pdfs/Tatmeen Users Training Product Verification.pptx') }}" class="resizeable-font"><i class="fa fa-fw fa-download"></i> Download</a>
                            </p></li>
                        <li><p class="resizeable-font">
                                {{ $lang == 'ar' ? 'Tatmeen Users Training User Management' : 'Tatmeen Users Training User Management' }} -
                                <a target="_blank" href="{{ asset('pdfs/Tatmeen Users Training User Management.pptx') }}" class="resizeable-font"><i class="fa fa-fw fa-download"></i> Download</a>
                            </p></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('js')
@endsection
