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

            <div class="col-md-12 mt-1 mb-2"><button type="button" id="addNewfiles" class="btn btn-success">Add</button></div>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">1</th>
                            <th scope="col">2</th>
                            <th scope="col">3</th>
                            <th scope="col">4</th>
                            <th scope="col">5</th>
                            <th scope="col">6</th>
                            <th scope="col">7</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($filess as $filess)
                        <tr>
                            <td>{{ $filess->id }}</td>
                            <td>{{ $filess->title_arabic }}</td>
                            <td>{{ $filess->title_english }}</td>
                            <td>{{ $filess->date_arabic }}</td>
                            <td>{{ $filess->date_english }}</td>
                            <td>
                                <a href="javascript:void(0)" class="btn btn-primary edit" data-id="{{ $filess->id }}">Edit</a>
                                <a href="javascript:void(0)" class="btn btn-primary delete" data-id="{{ $filess->id }}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- boostrap model -->
    <div class="modal fade" id="ajax-files-model" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="ajaxfilesModel"></h4>
                </div>
                <div class="modal-body">
                    <form action="javascript:void(0)" id="addEditfilesForm" name="addEditfilesForm" class="form-horizontal" method="POST">
                        <input type="hidden" name="id" id="id">
                        <div class="form-group">
                            <label for="name" class="col-sm-6 control-label">Name of Project</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="title_arabic" name="title_arabic" placeholder="Enter Project Name" value="" maxlength="50" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">location</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="title_english" name="title_english" placeholder="Enter location" value="" maxlength="50" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-6 control-label">Main contractor</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="date_arabic" name="date_arabic" placeholder="Enter contractor Name" value="" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">consultant</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="date_english" name="date_english" placeholder="Enter consultant" value="" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-6 control-label">Products applied</label>
                            <div class="col-sm-12">
                                <input type="file" class="form-control" id="file_en" name="file_en" placeholder="Enter Products applied" value="" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-6 control-label">Products applied</label>
                            <div class="col-sm-12">
                                <input type="file" class="form-control" id="file_ara" name="file_ara" placeholder="Enter Products applied" value="" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">where</label>



                        </div>
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary" id="btn-save" value="addNewfiles">Save changes
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
            $('#addNewfiles').click(function() {
                $('#addEditfilesForm').trigger("reset");
                $('#ajaxfilesModel').html("Add files");
                $('#ajax-files-model').modal('show');
            });

            $('body').on('click', '.edit', function() {
                var id = $(this).data('id');

                // ajax
                $.ajax({
                    type: "POST",
                    url: "{{ url('edit-files') }}",
                    data: {
                        id: id
                    },
                    dataType: 'json',
                    success: function(res) {
                        $('#ajaxfilesModel').html("Edit files");
                        $('#ajax-files-model').modal('show');
                        $('#id').val(res.id);
                        $('#title_arabic').val(res.title_arabic);
                        $('#title_english').val(res.title_english);
                        $('#date_arabic').val(res.date_arabic);
                        $('#date_english').val(res.date_english);
                        $('#file1').val(res.file1);
                        $('#file2').val(res.file2);
                    }
                });
            });
            $('body').on('click', '.delete', function() {
                if (confirm("Delete Record?") == true) {
                    var id = $(this).data('id');

                    // ajax
                    $.ajax({
                        type: "POST",
                        url: "{{ url('delete-files') }}",
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
                var title_arabic = $("#title_arabic").val();
                var title_english = $("#title_english").val();
                var date_arabic = $("#date_arabic").val();
                var date_english = $("#date_english").val();
                var file1 = $("#file1").val();
                var file2 = $("#file2").val();
                $("#btn-save").html('Please Wait...');
                $("#btn-save").attr("disabled", true);

                // ajax
                $.ajax({
                    type: "POST",
                    url: "{{ url('add-update-files') }}",
                    data: {
                        id: id,
                        title_arabic: title_arabic,
                        title_english: title_english,
                        date_arabic: date_arabic,
                        date_english: date_english,
                        file1: file1,
                        file2: file2,
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
