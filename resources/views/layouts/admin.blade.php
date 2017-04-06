<!DOCTYPE html>
<html class="perfect-scrollbar-on" lang="{{ config('app.locale') }}">
<head>
    @include('partials.adminHtmlHead')
    @yield('layout-css')
</head>
<body>
<div class="wrapper">
    @include('partials.adminSideBar')
    <div class="main-panel">
        @include('partials.adminHeader')
        @yield('content')
        @include('partials.adminFooter')
    </div>
</div>
@include('partials.adminSettings')
<!-- Scripts -->
@include('partials.adminHtmlFooter')
@yield('layout-script')
</body>
</html>
