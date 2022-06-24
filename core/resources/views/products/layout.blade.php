<!DOCTYPE html>

<html>

<head>

    <title>{{ Helper::GeneralSiteSettings("site_title_" . @Helper::currentLanguage()->code) }}</title>
    <link rel="icon" type="image/x-icon" href="{{ URL::asset('uploads/settings/'.Helper::GeneralSiteSettings("style_fav")) }}">


    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

</head>

<body>


    <a class="btn btn-success" href="{{ route('adminHome') }}" role="button">Back to CPanel</a>
<div class="container">

    @yield('content')

</div>



</body>

</html>
