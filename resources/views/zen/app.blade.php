<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <base href="">
    <title>ZenNMS</title>
    @include('zen.partials.meta')

    <link rel="author" href="https://github.com/ZenNMS">
    <link rel="license" href="https://raw.githubusercontent.com/ZenNMS/ZenNMS/master/LICENSE">
    <link rel="icon" sizes="64x64" href="{{ asset('favicon.png') }}">

    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link rel="stylesheet" href="{{ asset('vendors/fontawesome-pro/5.15.1/css/all.css') }}">
    <!--end::Fonts-->

    <!--begin::Page Vendors Styles(used by this page)-->

    <!--end::Page Vendors Styles-->

    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('tailwindcss-components.css') }}">
    <style>.fa-secondary{opacity:.3}</style>
    <!--end::Global Theme Styles-->

    <!--begin::Page Styles-->
    @yield('page-css')
    <!--end::Page Styles-->
  </head>
  <body class="flex flex-col h-screen bg-gray-100">
      @include('zen.partials.header')
      <div class="flex flex-row justify-between bg-gray-100 h-full">
        @include('zen.partials.aside')
        @include('zen.partials.left-menu')
        <main class="w-full flex flex-col">
          @include('zen.partials.page-header')
          <div class="h-full overflow-y-auto">
            @yield('content')
          </div>
          @include('zen.partials.footer')
        </main>
      </div>
  </body>
</html>
