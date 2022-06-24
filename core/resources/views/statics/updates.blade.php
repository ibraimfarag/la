@extends('partials.master')

@section('css')
    <style>
        .accordion-body {
            text-align: left;
        }
    </style>

@endsection

@section('content')

    <section id="partners" class="graybg">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-12 text-center">
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <h5 class="sub-heading  text-center"> {{ $lang=="ar" ? 'قريباً ' : 'COMING SOON' }}</h5>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
@endsection
