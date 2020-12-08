@extends('layouts.master')

@section('content')


    <div class="inner-banner text-center" style="background-image: url({{ mix('images/background/banner-12.jpg') }});">
        <div class="auto-container">
            <div class="box">
                <h3>Project Single</h3>
            </div><!-- /.box -->
            <div class="breadcumb-wrapper">
                <div class="clearfix">
                    <div class="pull-left">
                        <ul class="list-inline link-list">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Projects</a></li>
                            <li>Project Single</li>
                        </ul>
                    </div>
                    <div class="pull-right">
                        <a href="#" class="get-qoute"><i class="fa fa-share-alt"></i>share</a>
                    </div><!-- /.pull-right -->
                </div><!-- /.container -->
            </div>
        </div><!-- /.container -->
    </div>


    <div class="case-single">
        <div class="auto-container">
            <div class="inner-box">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <div class="image">
                            <img src="{{mix('images/background/laptop.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="image">
                            <img src="{{ mix('images/gallery/proj-detail-01.jpg') }}" alt="">
                        </div>
                        <div class="image">
                            <img src="{{mix('images/gallery/proj-detail-02.png')}}" alt="">
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="info-column col-lg-5 col-md-12 col-sm-12 col-xs-12">
                        <div class="inner-box">
                            <ul>
                                <li class="clearfix">
                                    <span>{{ __('Partner') }}</span>
                                    John Doe
                                </li>
                                <li class="clearfix">
                                    <span>{{ __('Category') }}</span>
                                    Finance &amp; Legal
                                </li>
                                <li class="clearfix">
                                    <span>Date</span>
                                    {{now()->toFormattedDateString()}}
                                </li>
                                <li class="clearfix">
                                    <span>Tags</span>
                                    Financial Services
                                </li>
                                <li class="clearfix">
                                    <span>{{ __('Collaboration') }}</span>
                                   <span class="badge badge-light">
                                       {{ __('Only Members') }}
                                   </span>
                                </li>
                                <li class="clearfix">
                                    <span>{{ __('Consideration') }}</span>
                                    <span class="badge badge-light">
                                       {{ __('Only Members') }}
                                   </span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!--Content Column-->
                    <div class="content-column col-lg-7 col-md-12 col-sm-12 col-xs-12">
                        <div class="inner-column">
                            <h2>International Seminar</h2>
                            <div class="title">Financial Services</div>
                            <div class="text">

                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Fermentum iaculis eu non diam phasellus
                                vestibulum lorem sed. Lorem ipsum dolor sit amet. Cras ornare arcu dui vivamus arcu
                                felis bibendum ut tristique. Et magnis dis parturient montes nascetur ridiculus mus
                                mauris. Convallis a cras semper auctor neque vitae tempus...
                            </div>
                            <div class="text"></div>
                            <div class="post-share-options clearfix">
                                <div class="pull-left tags">
                                    <a href="{{ config('app.business_url') . '/project/1' }}" class="theme-btn btn-style-one">{{ __('Apply') }}</a>
                                </div>
                                <ul class="pull-right social-icon-three clearfix">
                                    <li class="share">
                                        <span class="fa fa-share-alt"></span>
                                            &nbsp; Share :
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/sharer/sharer.php?u={{urlencode(URL::current())}}&display=popup"
                                           target="_blank">
                                            <span class="fa fa-facebook-f"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(URL::current()) }}" target="_blank">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://telegram.me/share/url?url={{ urlencode(URL::current()) }}" target="_blank">
                                            <span class="fa fa-send"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(URL::current()) }}" target="_blank">
                                            <span class="fa fa-linkedin"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="project-pagination">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="button prev pull-left">
                            <a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="icon-holder text-center">
                            <a href="#">
                                <i class="fa fa-th" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="button next pull-right">
                            <a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection


