@extends('products.layout')



@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Edit file</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>

            </div>

        </div>

    </div>



    @if ($errors->any())

        <div class="alert alert-danger">

            <strong>Whoops!</strong> There were some problems with your input.<br><br>

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif



    <form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data">

        @csrf

        @method('PUT')



        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Arabic News title :</strong>

                    <input type="text" name="title_arabic" value="{{ $product->title_arabic }}" class="form-control" placeholder="Arabic News title">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>English News title :</strong>

                    <input type="text" name="title_english" value="{{ $product->title_english }}" class="form-control" placeholder="English News title here" id="">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Arabic date:</strong>

                    <input type="text" name="date_arabic" value="{{ $product->date_arabic }}" class="form-control" placeholder="Arabic date"id="">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>English Date:</strong>

                    <input type="text" name="date_english" value="{{ $product->date_english }}" class="form-control" placeholder="English Date" id="">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Page:</strong>
                    <div class="form-group">

                        <strong>Choose the page :</strong>


                        <label for="updates">&nbspupdates</label>
                        <input type="radio" id="updates"
                        name="section" value="updates">


                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        <label for="documents">&nbspdocuments</label>
                       <input type="radio" id="documents"
                       name="section" value="documents">
                       &nbsp;
                       &nbsp;
                       &nbsp;
                       &nbsp;
                       <label for="onbording">&nbsponbording</label>
                      <input type="radio" id="onbording"
                      name="section" value="onbording">

                    </div>

                </div>

            </div>



            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Arabic File:</strong>

                    <input type="file" name="file_ar" class="form-control" placeholder="image" id="">
                    @if($product->file_ar==null)



                    @else

                    <p>current file: <a  href="{{ URL('/assets/pdfs/ar/'.$product->file_ar ) }}">{{ $product->file_ar }} </a></p>
                    @endif





                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>English File:</strong>

                    <input type="file" name="file_en" class="form-control" placeholder="image" id="">
                    @if($product->file_en==null)



                   @else

                   <p>current file: <a  href="{{ URL('/assets/pdfs/en/'.$product->file_en ) }}">{{ $product->file_en }} </a></p>
                   @endif


                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

              <button type="submit" class="btn btn-primary">Submit</button>

            </div>

        </div>





    </form>

@endsection
