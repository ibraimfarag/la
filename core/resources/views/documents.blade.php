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
                    <h5 class="sub-heading">{{ $lang=="ar" ? 'المستندات' : 'Documents' }}</h5>
                    <ul class="">
                        @foreach($docments as $docments)
                        <li><p class="resizeable-font">{{ $lang == 'ar' ? $docments->date_arabic.$docments->title_arabic: $docments->date_english.$docments->title_english }}
                            @if($docments->file_en==null)


                            @else
                            -
                            <a target="_blank" href="{{ asset('assets/pdfs/en/'.$docments->file_en) }}" class="resizeable-font"><i class="fa fa-fw fa-download"></i> (English)</a>
                            @endif


                            @if($docments->file_ar==null)


                            @else
                            |
                            <a target="_blank" href="{{  asset('assets/pdfs/ar/'.$docments->file_ar) }}" class="resizeable-font"><i class="fa fa-fw fa-download"></i> (Arabic)</a>
                            @endif



                            </p></li>
                            @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('js')
@endsection
