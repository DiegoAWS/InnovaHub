<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>
<!-- App -->
<link href="{{mix('css/app.css')}}" rel="stylesheet">
<!-- Vendor -->
<link href="{{mix('css/vendor.css')}}" rel="stylesheet">

<!-- CUSTOM STYLES -->
<link href="{{mix('css/custom.css')}}" rel="stylesheet">

<!--Add Theme Color File To Change Template Color Scheme / Color Scheme Files are Located in root/css/color-themes/ folder-->
<!--<link href="css/color-themes/blue-theme.css" rel="stylesheet">-->

<!--Favicon-->
<link rel="shortcut icon" href="{{ mix('images/favicon.png') }}" type="image/x-icon">
<link rel="icon" href="{{mix('images/favicon.png')}}" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">


@yield('styles')
