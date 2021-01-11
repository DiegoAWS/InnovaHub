
<!--Main Slider-->
@php($slides = collect(
[
['img1'=> 'images/main-slider/img-2-a.jpg',
'text1' => 'Welcome to ',
'text2' => 'ENLACES',
'text3'=>''],

['img1'=> 'images/main-slider/img-2-b.jpg',
'text1' => 'Welcome to ',
'text2' => 'ENLACES',
'text3'=>'']
]
))

<x-slider :slides="$slides">

</x-slider>
<!--End Main Slider-->