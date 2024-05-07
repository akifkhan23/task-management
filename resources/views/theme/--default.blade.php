<!DOCTYPE html>
<html lang="en">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <head>
    @include('theme.includes.compatibility')

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css"  href="{{ asset('theme/assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('theme/assets/vendors/css/charts/apexcharts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('theme/assets/vendors/css/extensions/toastr.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('theme/assets/vendors/css/editors/quill/katex.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('theme/assets/vendors/css/editors/quill/monokai-sublime.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('theme/assets/vendors/css/editors/quill/quill.snow.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('theme/assets/vendors/css/forms/select/select2.min.css') }}">

    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('theme/assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('theme/assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('theme/assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('theme/assets/css/components.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('theme/assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('theme/assets/css/themes/bordered-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('theme/assets/css/themes/semi-dark-layout.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('theme/assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('theme/assets/css/pages/dashboard-ecommerce.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('theme/assets/css/plugins/charts/chart-apex.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('theme/assets/css/plugins/extensions/ext-component-toastr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('theme/assets/css/pages/page-auth.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('theme/assets/css/pages/app-email.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('theme/assets/css/plugins/forms/form-quill-editor.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('theme/assets/css/style.css') }}">
    <!-- END: Custom CSS-->
</head>




<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="" onload="startTime()>
        @include('theme.includes.header')
        @include('theme.includes.header2')
        @include('theme.includes.right_sidebar')
        @include('theme.includes.sidebar')




    @yield('content')

 @include('theme.includes.footer')
 @include('theme.includes.scripts')


</body>

</html>
