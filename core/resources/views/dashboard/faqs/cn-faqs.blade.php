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
                <h1>Tatmeen -تطمين</h1>
                <h3>Faqs Question</h3>
            </div>

            <div class="col-md-12 mt-1 mb-2"><button type="button" id="addNewfaq" class="btn btn-success">Add</button></div>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Question Ar</th>
                            <th scope="col">Answer Ar</th>
                            <th scope="col">Question En</th>
                            <th scope="col">Answer En</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($faqs as $faq)
                        <tr>
                            <td>{{ $faq->id }}</td>
                            <td>{{ $faq->question_ar }}</td>
                            <td>{{ $faq->answer_ar }}</td>
                            <td>{{ $faq->question_en }}</td>
                            <td>{{ $faq->answer_en }}</td>
                            <td>
                                <a href="javascript:void(0)" class="btn btn-primary edit" data-id="{{ $faq->id }}">Edit</a>
                                <a href="javascript:void(0)" class="btn btn-primary delete" data-id="{{ $faq->id }}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $faqs->links() !!}
            </div>
        </div>
    </div>
    <!-- boostrap model -->
    <div class="modal fade" id="ajax-faq-model" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="ajaxfaqModel"></h4>
                </div>
                <div class="modal-body">
                    <form action="javascript:void(0)" id="addEditfaqForm" name="addEditfaqForm" class="form-horizontal" method="POST">
                        <input type="hidden" name="id" id="id">
                        <div class="form-group">
                            <label for="name" class="col-sm-6 control-label">Question Ar</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="question_ar" name="question_ar" placeholder="Enter Question Ar" value=""  >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-6 control-label">Answer Ar</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="answer_ar" name="answer_ar" placeholder="Enter Answer Ar" value=""  >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-6 control-label">Question En</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="question_en" name="question_en" placeholder="Enter Question En" value="" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-6 control-label">Answer En</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="answer_en" name="answer_en" placeholder="Enter Answer En" value="" >
                            </div>
                        </div>


                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary" id="btn-save" value="addNewfaq">Save changes
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
            $('#addNewfaq').click(function() {
                $('#addEditfaqForm').trigger("reset");
                $('#ajaxfaqModel').html("Add Faqs");
                $('#ajax-faq-model').modal('show');
            });

            $('body').on('click', '.edit', function() {
                var id = $(this).data('id');

                // ajax
                $.ajax({
                    type: "POST",
                    url: "{{ url('admin/faqs/edit-faq') }}",
                    data: {
                        id: id
                    },
                    dataType: 'json',
                    success: function(res) {
                        $('#ajaxfaqModel').html("Edit faq");
                        $('#ajax-faq-model').modal('show');
                        $('#id').val(res.id);
                        $('#question_ar').val(res.question_ar);
                        $('#answer_ar').val(res.answer_ar);
                        $('#question_en').val(res.question_en);
                        $('#answer_en').val(res.answer_en);

                    }
                });
            });
            $('body').on('click', '.delete', function() {
                if (confirm("Delete Record?") == true) {
                    var id = $(this).data('id');

                    // ajax
                    $.ajax({
                        type: "POST",
                        url: "{{ url('admin/faqs/delete-faq') }}",
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
                var question_ar = $("#question_ar").val();
                var answer_ar = $("#answer_ar").val();
                var question_en = $("#question_en").val();
                var answer_en = $("#answer_en").val();

                $("#btn-save").html('Please Wait...');
                $("#btn-save").attr("disabled", true);

                // ajax
                $.ajax({
                    type: "POST",
                    url: "{{ url('admin/faqs/add-update-faq') }}",
                    data: {
                        id: id,
                        question_ar: question_ar,
                        answer_ar: answer_ar,
                        question_en: question_en,
                        answer_en: answer_en,

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
