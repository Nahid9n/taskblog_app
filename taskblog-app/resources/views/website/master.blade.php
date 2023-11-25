<!DOCTYPE html>
<html lang="en">

<head>
    @include('website.includes.meta')
    @include('website.includes.style')
</head>

<body>

<!-- start page-wrapper -->
<div class="page-wrapper">

   @include('website.includes.header')

    @yield('body')

    @include('website.includes.footer')
</div>
<!-- end of page-wrapper -->
    @include('website.includes.script')
</body>
</html>
