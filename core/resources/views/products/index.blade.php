@extends('products.layout')



@section('content')

    <div class="row">
        <div class="col-md-12 card-header text-center font-weight-bold">
            <h1>Tatmeen -تطمين</h1>
            <h3>add files</h3>
        </div>

        <div class="col-lg-12 margin-tb">


            <br>
            <br>
            <br>
            <br>



            <div class="pull-left">

                <a class="btn btn-success" href="{{ route('products.create') }}">+ Add new </a>

            </div>

        </div>

    </div>



    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif



    <table class="table table-bordered">

        <tr>

            <th>No</th>
            <th>Arabic file</th>

            <th>English file</th>

            <th>Arabic title</th>

            <th>Arabic Date</th>

            <th>English title</th>

            <th>English Date </th>


            <th>Page</th>


            <th width="280px">Action</th>

        </tr>

        @foreach ($products as $product)

        <tr>

            <td>{{ ++$i }}</td>


            <td>

                @if($product->file_ar==null)

                 <img src="{{ URL('/assets/image/inactive.png') }}" width="60px">

                @else

                <a  href="{{ URL('/assets/pdfs/ar/'.$product->file_ar ) }}"> <img src="{{ URL('/assets/image/active.png') }}" width="60px"></a>
                @endif


            </td>

            <td>
                @if($product->file_en==null)

                <img src="{{ URL('/assets/image/inactive.png') }}" width="60px">

               @else

               <a  href="{{ URL('/assets/pdfs/en/'.$product->file_en ) }}"> <img src="{{ URL('/assets/image/active.png') }}" width="60px"></a>
               @endif





            </td>




            <td>{{ $product->title_arabic }}</td>

            <td>{{ $product->date_arabic }}</td>

            <td>{{ $product->title_english }}</td>

            <td>{{ $product->date_english }}</td>

            <td>{{ $product->section }}</td>


            <td>

                <form action="{{ route('products.destroy',$product->id) }}" method="POST">



                    {{--  <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>  --}}



                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>



                    @csrf

                    @method('DELETE')



                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>



    {!! $products->links() !!}



@endsection
