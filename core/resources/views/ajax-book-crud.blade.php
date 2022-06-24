<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ Helper::GeneralSiteSettings("site_title_" . @Helper::currentLanguage()->code) }}</title>
    <link rel="icon" type="image/x-icon" href="{{ URL::asset('uploads/settings/'.Helper::GeneralSiteSettings("style_fav")) }}">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

    <a class="btn btn-success" href="{{ route('adminHome') }}" role="button">Back to CPanel</a>
    <div class="container mt-2">
        <div class="row">
            <div class="col-md-12 card-header text-center font-weight-bold">
                <h1>Armetal projects</h1>
            </div>

            <div class="col-md-12 mt-1 mb-2"><button type="button" id="addNewBook" class="btn btn-success">Add</button></div>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name of Project</th>
                            <th scope="col">location</th>
                            <th scope="col">Main contractor</th>
                            <th scope="col">consultant</th>
                            <th scope="col">Products applied</th>
                            <th scope="col">where</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $book)
                        <tr>
                            <td>{{ $book->id }}</td>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->code }}</td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->author2 }}</td>
                            <td>{{ $book->author3 }}</td>
                            <td>{{ $book->author4 }}</td>
                            <td>
                                <a href="javascript:void(0)" class="btn btn-primary edit" data-id="{{ $book->id }}">Edit</a>
                                <a href="javascript:void(0)" class="btn btn-primary delete" data-id="{{ $book->id }}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $books->links() !!}
            </div>
        </div>
    </div>
    <!-- boostrap model -->
    <div class="modal fade" id="ajax-book-model" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="ajaxBookModel"></h4>
                </div>
                <div class="modal-body">
                    <form action="javascript:void(0)" id="addEditBookForm" name="addEditBookForm" class="form-horizontal" method="POST">
                        <input type="hidden" name="id" id="id">
                        <div class="form-group">
                            <label for="name" class="col-sm-6 control-label">Name of Project</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="title" name="title" placeholder="Enter Project Name" value="" maxlength="50" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">location</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="code" name="code" placeholder="Enter location" value="" maxlength="50" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-6 control-label">Main contractor</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="author" name="author" placeholder="Enter contractor Name" value="" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">consultant</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="author2" name="author2" placeholder="Enter consultant" value="" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-6 control-label">Products applied</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="author3" name="author3" placeholder="Enter Products applied" value="" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">where</label>


                            <div class="col-sm-12">

                                <select id="author4">
                                    <option value="Kingdom of Saudi Arabia">Kingdom of Saudi Arabia</option>
                                    <option value="Outside the kingdom">Outside the kingdom</option>

                                  </select>


                            </div>
                        </div>
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary" id="btn-save" value="addNewBook">Save changes
                </button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>
    <!-- end bootstrap model -->
    <script type="text/javascript">
        $(document).ready(function($) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#addNewBook').click(function() {
                $('#addEditBookForm').trigger("reset");
                $('#ajaxBookModel').html("Add Book");
                $('#ajax-book-model').modal('show');
            });

            $('body').on('click', '.edit', function() {
                var id = $(this).data('id');

                // ajax
                $.ajax({
                    type: "POST",
                    url: "{{ url('/edit-book') }}",
                    data: {
                        id: id
                    },
                    dataType: 'json',
                    success: function(res) {
                        $('#ajaxBookModel').html("Edit Book");
                        $('#ajax-book-model').modal('show');
                        $('#id').val(res.id);
                        $('#title').val(res.title);
                        $('#code').val(res.code);
                        $('#author').val(res.author);
                        $('#author2').val(res.author2);
                        $('#author3').val(res.author3);
                        $('#author4').val(res.author4);
                    }
                });
            });
            $('body').on('click', '.delete', function() {
                if (confirm("Delete Record?") == true) {
                    var id = $(this).data('id');

                    // ajax
                    $.ajax({
                        type: "POST",
                        url: "{{ url('/delete-book') }}",
                        data: {
                            id: id
                        },
                        dataType: 'json',
                        success: function(res) {
                            window.location.reload();
                        }
                    });
                }
            });
            $('body').on('click', '#btn-save', function(event) {
                var id = $("#id").val();
                var title = $("#title").val();
                var code = $("#code").val();
                var author = $("#author").val();
                var author2 = $("#author2").val();
                var author3 = $("#author3").val();
                var author4 = $("#author4").val();
                $("#btn-save").html('Please Wait...');
                $("#btn-save").attr("disabled", true);

                // ajax
                $.ajax({
                    type: "POST",
                    url: "{{ url('/add-update-book') }}",
                    data: {
                        id: id,
                        title: title,
                        code: code,
                        author: author,
                        author2: author2,
                        author3: author3,
                        author4: author4,
                    },
                    dataType: 'json',
                    success: function(res) {
                        window.location.reload();
                        $("#btn-save").html('Submit');
                        $("#btn-save").attr("disabled", false);
                    }
                });
            });
        });
    </script>
</body>

</html>
