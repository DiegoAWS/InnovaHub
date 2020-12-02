@extends('layouts.master')

@section('content')
    <!--Main Slider-->
    @php($slides = collect([['img1'=> 'images/main-slider/img-2-a.jpg', 'img2' => 'images/main-slider/img-2-b.jpg',
'text1' => 'Welcome to', 'text2' => 'FinanceHUB', 'text3'=>'Our Consulting company offers a full range of consulting'],
['img1'=> 'images/main-slider/img-2-b.jpg', 'img2' => 'images/main-slider/img-2-b.jpg', 'text1' => 'Welcome to', 'text2' => 'FinanceHUB', 'text3'=>'Our Consulting'],
['img1'=> 'images/main-slider/img-2-c.jpg', 'img2' => 'images/main-slider/img-2-a.jpg',
'text1' => 'Welcome to', 'text2' => 'FinanceHUB', 'text3'=>'Our Consulting company offers a full range of consulting']]))

    <x-slider :slides="$slides">

    </x-slider>
    <!--End Main Slider-->
@endsection
