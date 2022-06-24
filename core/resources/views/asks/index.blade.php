@extends('asks.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left text-center">
                <h3>Laravel 8 CRUD Operation Tutorial for Beginners</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-success"href="{{ ('asks.create') }}"> Create Student</a>
        </div>
    </div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <span>{{ $message }}</span>
    </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Question Ar</th>
            <th>Answer Ar</th>
            <th>Question En</th>
            <th>Answer En</th>

            <th>Action</th>
        </tr>
        @foreach ($Asks as $Asks)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $Asks->question_ar }}</td>
            <td>{{ $Asks->answer_ar }}</td>
            <td>{{ $Asks->question_en }}</td>
            <td>{{ $Asks->answer_en }}</td>

            <td><form action="{{ route('Asks.destroy',$Asks->id) }}" method="POST">
            <a class="btn btn-info" href="{{ route('Asks.show',$Asks->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('Asks.edit',$Asks->id) }}">Edit</a>
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Do you really want to delete student!')" class="btn btn-danger">Delete</button>
            </form></td>
        </tr>
        @endforeach
    </table>
{!! $Asks->links() !!}
@endsection
