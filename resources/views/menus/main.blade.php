
<!-- Preloader -->

<div class="preloader"></div>


@if(isset($transparency))
<header class="main-header header-style-two transparency">
@else
<header class="main-header header-style-two notTransparency">
@endif

<!--Header Top-->
@include('menus._top')
<!--End Header Top-->

    <!--Header-Upper-->
@include('menus._upper')
<!--End Header Upper-->

    <!--Sticky Header-->
@include('menus._sticky')
<!--End Sticky Header-->

</header>

