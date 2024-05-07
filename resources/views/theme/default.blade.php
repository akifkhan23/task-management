<!DOCTYPE html>
<html lang="en">
   <head>
      @include('theme.includes.compatibility')
      <meta name="description" content="">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>{{ env('APP_NAME') }}</title>

      @include('theme.includes.style')
   </head>
   <body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="" onload="startTime()">

      @include('theme.includes.header') 
      @include('theme.includes.right_sidebar')
      @include('theme.includes.modals')


    @yield('content')
    <div style="display: none" class="loader-container" id="loader-container">
        <div  class="loader"></div>
    </div>

    {{-- @include('theme.includes.footer') --}}
    @include('theme.includes.scripts')
    @yield('script')
    @stack('scripts')
   </body>
</html>
