<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
 @include('layouts.header')
</head>

<body>
<div class="page-wrapper">
    <!-- Main Header-->
@include('menus.main')
<!--End Main Header -->

@yield('content')


<!--Main Footer-->
@include('layouts.footer')
<!--End Main Footer-->

</div>
<!--End pagewrapper-->

@include('layouts.stacks')

</body>
</html>

