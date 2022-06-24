@extends('partials.master')

@section('css')
    <style>
        .accordion-body {
            text-align: left;
        }

        .timeline .left {
            width: 20%;
            float: left;
        }

        .timeline .left img {
            height: 500px;
        }

        .timeline .right {
            width: 80%;
            float: left;
        }

        .timeline .overflow {
            width: 1419px;
        }

        .timeline .right img {
            float: left;
            height: 500px;
        }

        .timeline {
            overflow: hidden;
        }


        @supports(display: grid) {

            .grid-container {
                display: grid;
                grid-template-columns: 1fr 1fr 1fr;
                grid-template-rows: auto 1fr auto;

            grid-template-areas:
            "header header header"
            "title title footer"
            "main main main";
            @media screen and (max-width: 500px) {
                grid-template-columns: 1fr;
                grid-template-rows: 0.3fr 1fr auto 1fr;
                grid-template-areas:
            "header"
            "title"
            "main"
            "footer";
            }
        }

        .grid-item {
            color: #fff;
            font-size: 1em;
            font-weight: 700;
        }

        .items {
            position: relative;
            width: 100%;
            overflow-x: scroll;
            overflow-y: hidden;
            white-space: nowrap;
            transition: all 0.2s;
            will-change: transform;
            user-select: none;
            cursor: pointer;
        }

        .items.active {
            background: rgba(255,255,255,0.3);
            cursor: grabbing;
            cursor: -webkit-grabbing;
            transform: scale(1);
        }

        .item {
            display: inline-block;
            background: skyblue;
        }

        #timeline {
            list-style: none;
            display: inline-block;
            padding: 0;
            width: 100%;
            max-width: 1360px;
            margin-top: 100px;
        }

        #timeline li {
            list-style: none;
            display: inline-block;
            float: left;
            position: relative;
            height: 220px;
        }

        #timeline .phase, #status li {
            width: 15%;
            text-align: right;
        }

        #timeline .tip, #status .tip {
            width: 20%;
        }

        #timeline .tip.end {
            text-align: right;
        }

        #timeline h3 {
            font-size: 16px;
            font-weight: normal;
            transition: font-size 300ms, font-weight 300ms;
            width: auto;
            display: inline-block;
        }

        #timeline p {
            font-size: 14px;
            text-transform: uppercase;
            margin-bottom: 0;
        }

        #timeline .date {
            font-size: 14px;
        }

        #timeline .number {
            font-size: 60px;
            font-weight: bold;
            display: inline-block;
            width: 100%;
            line-height: 60px;
            margin-bottom: 10px;
            margin-top: 20px;
        }

        #timeline .number:before {
            content: '';
            display: block;
            position: absolute;
            width: 37px;
            height: 50px;
            background-size: 100% auto;
            right: 43px;
            top: -20px;
            background-repeat: no-repeat;
        }

        #timeline .phase {
            cursor: pointer;
            padding-left: 20px;
            padding-right: 30px;
        }

        #timeline .phase:nth-of-type(2), #timeline .phase:nth-of-type(2) {
            margin-top: -113px;
        }

        #timeline .phase:nth-of-type(4) {
            margin-top: -50px;
        }

        #timeline .hex {
            display: block;
            width: 95px;
            height: 140px;
            background-image: url({{ asset('img/updates/timeline/hex.png') }});
            background-size: 100% auto;
            background-repeat: no-repeat;
            position: absolute;
            top: 0;
            right: 10px;
        }

        #timeline .on-active {
            opacity: 0;
            transition: opacity 300ms;
        }

        #timeline .phase.active .number, #timeline .phase.current .number {
            color: #45944B;
            transition: color 300ms;
        }

        #timeline .phase .line {
            height: 1px;
            background-color: #b8942f;
            width: 102px;
            position: absolute;
            display: block;
        }

        #timeline .line.l1 {
            right: -90px;
            top: 122px;
            transform: rotate(42deg);
        }

        #timeline .line.l2 {
            right: -90px;
            top: 19px;
            transform: rotate(-32deg);
        }

        #timeline .line.l3 {
            right: -90px;
            top: 72px;
            transform: rotate(42deg);
        }

        #timeline .phase.active h3, #timeline .phase.current h3 {
            font-size: 20px;
            font-weight: bold;
            border-bottom: 1px solid #b8942f;
            padding-bottom: 10px;
            color: #45944B;
        }


        #timeline .phase.active .number, #timeline .phase.current .number {
            font-size: 60px;
            transition: font-size 300ms;
        }

        #timeline .phase.active .on-active, #timeline .phase.current .on-active {
            opacity: 1;
        }

        #timeline .tip.start span {
            display: inline-block;
            width: 100%;
            box-sizing: border-box;
            text-align: left;
            position: relative;
            padding-bottom: 20px;
        }

        #timeline .tip.start span:before {
            content: '';
            display: block;
            position: absolute;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            background-color: #b8942f;
            bottom: -2px;
            left: 6px;
        }

        #timeline .tip.start span:after {
            content: '';
            display: block;
            position: absolute;
            width: 90%;
            height: 1px;
            background-color: #b8942f;
            top: 35px;
            right: 0;
        }

        #timeline .tip.end span {
            display: inline-block;
            width: 100%;
            box-sizing: border-box;
            text-align: right;
            position: relative;
            padding-bottom: 20px;
            margin-right: -40px;
        }

        #timeline .tip.end span:before {
            content: '';
            display: block;
            position: absolute;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            background-color: #b8942f;
            bottom: -2px;
            right: 6px;
        }

        #timeline .tip.end span:after {
            content: '';
            display: block;
            position: absolute;
            width: 90%;
            height: 1px;
            background-color: #b8942f;
            top: 35px;
            left: 0;
        }

        #timeline .phase:nth-child(2) .number:before {
            background-image: url({{asset('img/updates/timeline/phase-1.png')}});
        }

        #timeline .phase.active:nth-child(2) .number:before {
            background-image: url({{asset('img/updates/timeline/phase-1-active.png')}});
        }

        #timeline .phase:nth-child(3) .number:before {
            background-image: url({{asset('img/updates/timeline/phase-2.png')}});
        }

        #timeline .phase.active:nth-child(3) .number:before {
            background-image: url({{asset('img/updates/timeline/phase-2-active.png')}});
        }

        #timeline .phase:nth-child(4) .number:before {
            background-image: url({{asset('img/updates/timeline/phase-3.png')}});
        }

        #timeline .phase.active:nth-child(4) .number:before, #timeline .phase.current:nth-child(4) .number:before {
            background-image: url({{asset('img/updates/timeline/phase-3-active.png')}});
        }

        #timeline .phase:nth-child(5) .number:before {
            background-image: url({{asset('img/updates/timeline/phase-4.png')}});
        }

        #timeline .phase.active:nth-child(5) .number:before, #timeline .phase.current:nth-child(5) .number:before {
            background-image: url({{asset('img/updates/timeline/phase-4-active.png')}});
        }

        #arrowIcon {
            width: 40px;
            height: 40px;
            background-size: 100% auto;
            background-image: url({{asset('img/updates/timeline/arrow-icon.png')}});
            top: -9px;
            opacity: .8;
            display: block;
            position: absolute;
            left: 80%;
            margin-left: 0;
            margin-top: 0;
        }

        #timeline .current .number:before {
            margin-top: -30px;
        }


        #status ul {
            padding: 0;
            margin: 0;
            width: 100%;
            height: 5px;
            border-radius: 5px;
            display: inline-block;
            border: 1px solid #b8942f;
        }

        #status ul li {
            float: left;
            list-style: none;
            display: inline-block;
            height: 5px;
            position: relative;
        }

        #status ul li.phase:before {
            content: '';
            display: inline-block;
            position: absolute;
            width: 60px;
            height: 60px;
            background-image: url('img/updates/timeline/finished.png');
            background-position: center;
            background-repeat: no-repeat;
            left: 50%;
            margin-left: -45px;
            top: -60px;
        }

        #status ul li.phase:after {
            content: '';
            display: inline-block;
            position: absolute;
            width: 1px;
            height: 10px;
            left: 42%;
            top: -10px;
            background-color: #b8942f;
        }

        #status ul li.phase.current:before {
            background-image: url('img/updates/timeline/current.png');
            margin-top: -10px;
        }

        #status ul li.phase.pending:before {
            background-image: url('img/updates/timeline/pending.png');
        }

        #status ul li.phase.current {
        }

        #status ul li.active {
            background-color: #b8942f;
        }

        #status .tip {
           width: 25%;
        }

        #status .phase {
           width: 14%;
        }

        #status .end {
            width: 19%;
        }

        #status .tip.start {
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
        }

        #status .tip.end {
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
        }

        #status .tip.start span {
            display: inline-block;
            position: absolute;
            left: -20px;
            top: -30px;
            color: #45944B;
        }

        #status .tip.end span {
            display: inline-block;
            position: absolute;
            right: -20px;
            top: -30px;
            color: #45944B;
        }

        @media only screen and (max-width: 1360px) {

            #status .tip {
                width: 10%;
            }

            #status .phase {
                width: 20%;
            }

            #timeline .phase {
                width: 20%;
                text-align: right;
            }

            #timeline .tip {
                width: 10%;
            }

            #timeline .phase .line {
                width: 132px;
                right: -120px;
            }

            #timeline .phase:nth-of-type(2) {
                margin-left: -59px;
            }
        }
        @media only screen and (max-width: 1200px) {


            #timeline .phase .line {
                width: 90px;
                right: -110px;
            }

            #timeline .phase {
                width: 20%;
                text-align: right;
                padding-right: 0;
            }

            #timeline p {
                font-size: 12px;
                text-transform: uppercase;
                margin-bottom: 0;
            }

            #timeline .tip {
                width: 10%;
            }
            #timeline .number:before {
                right: 13px;
                top: -26px;
            }

            #timeline .hex {
                right: -25px;
            }
        }


        @media only screen and (max-width: 991px) {

            #timeline .phase {
                width: 25%;
                text-align: right;
                padding-right: 0;
            }

            #timeline .tip {
                display: none;
            }

            #status .tip {
                width: 2%;
            }

            #status .phase {
                width: 24%;
            }

            #timeline .phase:nth-of-type(2),#timeline .phase:nth-of-type(4) {
                /*margin-left: -45px;*/
            }
        }

        @media only screen and (max-width: 767px) {

            #timeline .phase.current:before {
                content: '';
                display: inline-block;
                position: absolute;
                width: 60px;
                height: 60px;
                background-image: url({{ asset('img/updates/timeline/current.png') }});
                background-position: center;
                background-repeat: no-repeat;
                left: 50%;
                margin-left: -35px;
                bottom: -60px;
            }

            #timeline .current .hex {
                background-image: url({{ asset('img/updates/timeline/hex-active.png') }});
            }

            #timeline .current h3, #timeline .current .number {
                color: #45944B;
            }

            #timeline .current .on-active {
                opacity: 1;
            }

            #status {
                display: none;
            }

            #timeline .phase .line {
                display: none;
            }

            #timeline {
                margin-top: 0;
            }

            .timeline .left {
                width: 30%;
            }
            .timeline .left img {
                width: 100%;
                height: auto;
            }
            .timeline .right {
                width: 70%;
            }

            #timeline .phase {
                width: 50%;
                padding-left: 0;
                text-align: center;
                margin-bottom: 30px;
                margin-top: 0 !important;
            }

            #timeline .phase:nth-of-type(2n) {
                width: 50%;
                padding-left: 0;
                text-align: center;
                margin-bottom: 30px;
            }

            #timeline .number:before {
                 right: 47%;
                 top: -26px;
             }

            #timeline .hex {
                right: 50% !important;
                transform: translateX(50%);
            }

            #timeline .phase:nth-of-type(2) {
                margin-left: 0;
            }

        }


        @media only screen and (max-width: 620px) {

            #timeline .phase:nth-of-type(2), #timeline .phase:nth-of-type(4) {
                margin-left: 0;
            }

            #arrowIcon {
                display: none;
            }

            .mobile-center {
                text-align: center;
            }

            #timeline .phase {
                width: 100% !important;
                padding-left: 0;
                text-align: center;
                margin-bottom: 30px;
                margin-top: 0 !important;
            }

            #timeline .number:before {
                 top: -26px;
             }

            #timeline .hex {
                  right: 30%;
            }

            #timeline .on-active {
                opacity: 1 !important;
            }

            #timeline .phase {
                text-align: right;
                margin-bottom: 0 !important;
            }

            #timeline .phase .hex {
                right: 35px !important;
            }

            #timeline .number:before {
                 right: 13px;
            }

            #timeline .phase:nth-of-type(2n) {
                text-align: left;
            }

            #timeline .phase:nth-of-type(2n) .number:before {
                left: 5px;
            }

            #timeline .phase:nth-of-type(2n) .hex {
                left: -75px;
            }

            #timeline {
            padding: 0 60px;
            }

            #timeline .phase.current:before {
                left: 80px;
                margin-left: 0;
                bottom: auto;
                top: 0;
            }
        }

    </style>

@endsection

@section('content')
    <section id="partners" class="graybg inner-content">




        <div class="container toanimate" data-animation="slide-in-right">
            <div class="row">
                <div class="col-md-12 text-left">
                    <br/>
                    <br/>
                    <h5 class="sub-heading">{{ $lang=="ar" ? 'برنامج التوجيه والإرشاد ' : 'Onboarding' }}</h5>

                    <ul class="mb-5">
                        @foreach($onbording as $onbording)


{{--                        <li><p class="resizeable-font">{{ $lang == 'ar' ? 'January 6, 2022 - Technical Guide for Manufacturers (MAH)' : 'January 6, 2022 - Technical Guide for Manufacturers (MAH)' }}--}}
{{--                                ---}}
{{--                                <a target="_blank" href="{{ asset('pdfs/Technical Guide - MAH v1.0 - English.pdf') }}" class="resizeable-font"><i class="fa fa-fw fa-download"></i> (English)</a>--}}
{{--                            </p></li>--}}
                        <li><p class="resizeable-font">{{ $lang == 'ar' ? $onbording->date_arabic.$onbording->title_arabic: $onbording->date_english.$onbording->title_english }}
                           

                            @if($onbording->file_en==null)


                            @else
                            -
                            <a target="_blank" href="{{ asset('assets/pdfs/en/'.$onbording->file_en) }}" class="resizeable-font"><i class="fa fa-fw fa-download"></i> (English)</a>
                            @endif


                            @if($onbording->file_ar==null)


                            @else
                            |
                            <a target="_blank" href="{{  asset('assets/pdfs/ar/'.$onbording->file_ar) }}" class="resizeable-font"><i class="fa fa-fw fa-download"></i> (Arabic)</a>
                            @endif
 @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script>
        // const slider = document.querySelector('.items');
        // let isDown = false;
        // let startX;
        // let scrollLeft;
        //
        // slider.addEventListener('mousedown', (e) => {
        //     isDown = true;
        //     slider.classList.add('active');
        //     startX = e.pageX - slider.offsetLeft;
        //     scrollLeft = slider.scrollLeft;
        // });
        // slider.addEventListener('mouseleave', () => {
        //     isDown = false;
        //     slider.classList.remove('active');
        // });
        // slider.addEventListener('mouseup', () => {
        //     isDown = false;
        //     slider.classList.remove('active');
        // });
        // slider.addEventListener('mousemove', (e) => {
        //     if(!isDown) return;
        //     e.preventDefault();
        //     const x = e.pageX - slider.offsetLeft;
        //     const walk = (x - startX) * 3; //scroll-fast
        //     slider.scrollLeft = scrollLeft - walk;
        //     console.log(walk);
        // });

        $('#timeline .phase').on('click',function () {
            $('#timeline .phase').removeClass('active');
            $(this).addClass('active');
        })

        $('#timeline .phase').on('mouseover',function () {
            $('#timeline .phase').removeClass('active');
            $(this).addClass('active');
        })
    </script>
@endsection
