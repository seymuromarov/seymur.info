<meta charset="utf-8" />
<link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png" />
<link rel="icon" type="image/png" href="img/favicon.png" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>Material Dashboard PRO by Omarov | Premium Bootstrap Admin Template</title>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
<meta name="viewport" content="width=device-width" />
<!-- Canonical SEO -->
<link rel="canonical" href="https://seymur.info" />
<!--  Social tags      -->
<meta name="keywords" content="material dashboard, bootstrap material admin, bootstrap material dashboard, material design admin, material design, seymur omarov, html dashboard, html css dashboard, web dashboard, freebie, free bootstrap dashboard, css3 dashboard, bootstrap admin, bootstrap dashboard, frontend, responsive bootstrap dashboard, premiu material design admin">
<meta name="description" content="Seymur Omarov Material Admin Panel">
<!-- Bootstrap core CSS     -->
<link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" />
<!--  Material Dashboard CSS    -->
<link href="{{ asset('css/material-dashboard.css')}}" rel="stylesheet" />
<!--  CSS for Demo Purpose, don't include it in your project     -->
<link href="{{ asset('css/demo.css')}}" rel="stylesheet" />
<link href="{{ asset('css/font-awesome.min.css')}}" rel="stylesheet" />
<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Scripts -->
<script>
    window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
</script>