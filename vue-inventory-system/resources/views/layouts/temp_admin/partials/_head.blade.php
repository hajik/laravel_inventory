<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- Meta, title, CSS, favicons, etc. -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="{{ asset('temp_admin/images/favicon.ico') }}" type="image/ico" />

<title> {{ config('app.name') }} </title>

<!-- Bootstrap -->
<link href="{{ asset('temp_admin/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
<!-- Font Awesome -->
<link href="{{ asset('temp_admin/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
<!-- NProgress -->
<link href="{{ asset('temp_admin/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
<!-- iCheck -->
<link href="{{ asset('temp_admin/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">

<!-- Custom Theme Style -->
<link href="{{ asset('temp_admin/build/css/custom.min.css') }}" rel="stylesheet">
<style>
    svg {
        width:20px;
        height: 20px;
    }
    div > .flex .justify-between  {
        display: none;
    }

</style>
@stack('css')