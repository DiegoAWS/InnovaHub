<!DOCTYPE html>
<html>
<head>
@include('layouts.header')
</head>

<body>
<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Header-->
    <header class="main-header header-style-two">

        <!--Header Top-->
        <div class="header-top">
            <div class="auto-container">
                <div class="clearfix">
                    <!--Top Left-->
                    <div class="top-left">
                        <ul class="dropdown-option clearfix">
                            <li class="language dropdown"><a class="btn btn-default dropdown-toggle" id="dropdownMenu1"
                                                             data-toggle="dropdown" aria-haspopup="true"
                                                             aria-expanded="true" href="#">{{__('English')}} &nbsp;<span
                                        class="icon fa fa-angle-down"></span></a>
                                <ul class="dropdown-menu style-one" aria-labelledby="dropdownMenu1">
                                    <li><a href="#">{{__('Spanish')}}</a></li>
                                </ul>
                            </li>
                        </ul>

                        @auth
                            <ul class="dropdown-option clearfix">
                                <li class="dropdown">
                                    <a class="btn  dropdown-toggle"
                                       data-toggle="dropdown" aria-haspopup="true"
                                       aria-expanded="true" href="#" style="color: #848484">
                                        {{Auth::user()->name}}
                                        <span class="icon fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu style-one" aria-labelledby="dropdownMenu1">
                                        <li>
                                            <a href="{{ route('profile') }}">
                                                <span class="icon fa fa-user-plus"></span> {{__('Profile')}}
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                                <span class="icon fa fa-sign-out"></span> {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                  class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        @endauth

                    </div>
                    <!--Top Right-->
                    <div class="top-right">
                        <ul class="top-links clearfix">
                            <li><span class="icon theme_color icon-signs"></span>Finace Hub, NY 10012, USA</li>
                            <li><span class="icon theme_color icon-technology2"></span>Phone +44 567 890123</li>
                            <li><span class="icon theme_color icon-interface"></span>Mail@FinanceHub.com</li>
                            {{--                            <li class="language dropdown">--}}
                            {{--                                <a class="btn btn-default dropdown-toggle"--}}
                            {{--                                   data-toggle="dropdown" aria-haspopup="true"--}}
                            {{--                                   aria-expanded="true" href="#">{{ Auth::user()->name }}--}}
                            {{--                                    &nbsp;<span--}}
                            {{--                                        class="icon fa fa-angle-down"></span></a>--}}
                            {{--                                <ul class="dropdown-menu style-one" aria-labelledby="dropdownMenu1">--}}
                            {{--                                    <li><a href="#">{{ __('Profile') }}</a></li>--}}
                            {{--                                    <li><a class="dropdown-item" href="{{ route('logout') }}"--}}
                            {{--                                           onclick="event.preventDefault();--}}
                            {{--                                                     document.getElementById('logout-form').submit();">--}}
                            {{--                                            {{ __('Logout') }}--}}
                            {{--                                        </a>--}}

                            {{--                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"--}}
                            {{--                                              class="d-none">--}}
                            {{--                                            @csrf--}}
                            {{--                                        </form>--}}
                            {{--                                    </li>--}}
                            {{--                                </ul>--}}
                            {{--                            </li>--}}

                        </ul>

                    </div>

                </div>
            </div>
        </div>

        <!--Header-Upper-->
        <div class="header-upper">
            <div class="auto-container">
                <div class="clearfix">

                    <div class="logo-outer">
                        <div class="logo"><a href="index.html"><img src="images/logo.png" alt="" title="" style="width: 30%"></a></div>
                    </div>

                    <div class="upper-right clearfix">

                        <div class="nav-outer clearfix">
                            <!-- Main Menu -->
                            <nav class="main-menu">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->
                                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                                            data-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li class="dropdown"><a href="#">Services</a>
                                            <ul>
                                                <li><a href="services.html">All Services</a></li>
                                                <li><a href="services-single.html">Investment Planning</a></li>
                                                <li><a href="services-single.html">Insurance Policies</a></li>
                                                <li><a href="services-single.html">Wealth Management</a></li>
                                                <li><a href="services-single.html">Financial Service</a></li>
                                                <li><a href="services-single.html">Business Planning</a></li>
                                                <li><a href="services-single.html">Retirement Planning</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Pages</a>
                                            <ul>
                                                <li><a href="about.html">About Company</a></li>
                                                <li><a href="history.html">Company History</a></li>
                                                <li><a href="team.html">Meet Our Team</a></li>
                                                <li><a href="faq.html">Customers FAQ’s</a></li>
                                                <li><a href="testimonial.html">Testimonials</a></li>
                                                <li><a href="partner.html">Our Partners</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('projects') }}">{{__('Projects')}}</a>

                                        </li>
                                        <li class="dropdown"><a href="#">Features</a>
                                            <ul>
                                                <li><a href="blog-grid.html">News Default</a></li>
                                                <li><a href="blog-sidebar.html">News With Sidebar</a></li>
                                                <li><a href="blog-large-image.html">News Large Image</a></li>
                                                <li><a href="blog-single.html">News Single Post</a></li>
                                            </ul>
                                        </li>

                                        <li><a href="contact.html">Contact Us</a></li>

                                        @guest
                                            <li><a href="{{route('login')}}">{{__('Login')}}</a></li>
                                        @endguest

                                    </ul>

                                </div>
                            </nav>
                            <!-- Main Menu End-->

                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="index.html" class="img-responsive" title="Finace Hub"><img src="images/logo-small.png"
                                                                                        alt="Finace Hub"
                                                                                        title="Finace Hub"></a>
                </div>

                <!--Right Col-->
                <div class="right-col pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="current dropdown"><a href="#">Home</a>
                                    <ul>
                                        <li><a href="index.html">Home Page 01</a></li>
                                        <li><a href="index-2.html">Home Page 02</a></li>
                                        <li><a href="index-3.html">Home Page 03</a></li>
                                        <li><a href="index-4.html">Home Page 04</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Services</a>
                                    <ul>
                                        <li><a href="services.html">All Services</a></li>
                                        <li><a href="services-single.html">Investment Planning</a></li>
                                        <li><a href="services-single.html">Insurance Policies</a></li>
                                        <li><a href="services-single.html">Wealth Management</a></li>
                                        <li><a href="services-single.html">Financial Service</a></li>
                                        <li><a href="services-single.html">Business Planning</a></li>
                                        <li><a href="services-single.html">Retirement Planning</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Pages</a>
                                    <ul>
                                        <li><a href="about.html">About Company</a></li>
                                        <li><a href="history.html">Company History</a></li>
                                        <li><a href="team.html">Meet Our Team</a></li>
                                        <li><a href="faq.html">Customers FAQ’s</a></li>
                                        <li><a href="testimonial.html">Testimonials</a></li>
                                        <li><a href="partner.html">Our Partners</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('projects') }}">{{__('Projects')}}</a>
                                <li class="dropdown"><a href="#">Features</a>
                                    <ul>
                                        <li><a href="blog-grid.html">News Default</a></li>
                                        <li><a href="blog-sidebar.html">News With Sidebar</a></li>
                                        <li><a href="blog-large-image.html">News Large Image</a></li>
                                        <li><a href="blog-single.html">News Single Post</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">News</a>
                                    <ul>
                                        <li><a href="blog-grid.html">News Default</a></li>
                                        <li><a href="blog-sidebar.html">News With Sidebar</a></li>
                                        <li><a href="blog-large-image.html">News Large Image</a></li>
                                        <li><a href="blog-single.html">News Single Post</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>

            </div>
        </div>
        <!--End Sticky Header-->

    </header>
    <!--End Main Header -->

    <!--Main Slider-->
    <section class="main-slider">
        <div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_two_wrapper" data-source="gallery">
            <div class="rev_slider fullwidthabanner" id="rev_slider_two" data-version="5.4.1">
                <ul>

                    <li  data-description="Slide Description" data-easein="default"
                        data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade"
                        data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1688"
                        data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3=""
                        data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                        data-rotate="0" data-saveperformance="off" data-slotamount="default"
                        data-thumb="images/main-slider/img-2-a.jpg" data-title="Slide Title"
                        data-transition="parallaxvertical">
                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10"
                             data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina=""
                             src="images/main-slider/img-2-a.jpg">

                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-2"
                             id="slide-73-layer-1"
                             data-x="['center','center','center','center']" data-hoffset="['-600','-500','-390','-220']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"

                             data-type="image"
                             data-responsive_offset="on"

                             data-frames='[{"delay":400,"speed":750,"sfxcolor":"#34c3ed","sfx_effect":"blockfromright",
                             "frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,
                             "sfxcolor":"#ffffff","sfx_effect":"blocktoright","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 5;"><img src="images/main-slider/pattern.png" alt=""
                                                      data-ww="['845px','845px','800px','500px']"
                                                      data-hh="['670','670','670','670']" width="1200" height="670"
                                                      data-no-retina></div>


                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-2"
                             id="slide-1679-layer-7"
                             data-x="['left','left','left','left']" data-hoffset="['300','300','70','50']"
                             data-y="['top','top','top','top']" data-voffset="['143','110','120','50']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"

                             data-type="image"
                             data-responsive_offset="on"

                             data-frames='[{"from":"x:-200px;rZ:-45deg;opacity:0;","speed":2000,"to":"o:1;","delay":950,"ease":"Power4.easeOut"},
                             {"delay":"wait","speed":700,"to":"auto:auto;","ease":"Power2.easeInOut"}]'
                             data-textAlign="['left','left','left','left']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 6;border-width:0px;">
                            <div class="rs-looped rs-wave" data-speed="6" data-angle="0" data-radius="2px"
                                 data-origin="50% 50%"><img class="right-side" src="images/main-slider/border.png"
                                                            alt="" data-ww="['309px','309px','300px','300px']"
                                                            data-hh="['382px','380px','300px','300px']" width="309"
                                                            height="382" data-lazyload="images/main-slider/border.png"
                                                            data-no-retina></div>
                        </div>

                        <div class="tp-caption"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingtop="[0,0,0,0]"
                             data-responsive_offset="on"
                             data-type="text"
                             data-height="none"
                             data-width="['550','450','300','290']"
                             data-whitespace="normal"
                             data-hoffset="['350','350','100','80']"
                             data-voffset="['-90','-90','-90','-90']"
                             data-x="['left','left','left','left']"
                             data-y="['middle','middle','middle','middle']"
                             data-textalign="['top','top','top','top']"
                             data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                             style="z-index: 7; white-space: nowrap;text-transform:left;">
                            <h2 class="dark-text"><span>Welcome to</span><br>FinanceHUB</h2>
                        </div>

                        <div class="tp-caption"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingtop="[0,0,0,0]"
                             data-responsive_offset="on"
                             data-type="text"
                             data-height="none"
                             data-whitespace="normal"
                             data-width="['550','550','400','290']"
                             data-hoffset="['350','350','100','80']"
                             data-voffset="['20','0','-10','-15']"
                             data-x="['left','left','left','left']"
                             data-y="['middle','middle','middle','middle']"
                             data-textalign="['top','top','top','top']"
                             data-frames='[{"from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                             style="z-index: 7; white-space: nowrap;text-transform:left;">
                            <div class="text light">Our Consulting company offers a full range of consulting <br>services
                                in all the countries
                            </div>
                        </div>

                        <div class="tp-caption tp-resizeme"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingtop="[0,0,0,0]"
                             data-responsive_offset="on"
                             data-type="text"
                             data-height="none"
                             data-width="['550','500','400','290']"
                             data-whitespace="normal"
                             data-hoffset="['350','350','100','80']"
                             data-voffset="['110','110','100','80']"
                             data-x="['left','left','left','left']"
                             data-y="['middle','middle','middle','middle']"
                             data-textalign="['top','top','top','top']"
                             data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                             style="z-index: 7; white-space: nowrap;text-transform:left;">
                            <a href="about.html" class="theme-btn btn-style-four">More About us</a>
                        </div>

                    </li>

                    <li data-description="Slide Description" data-easein="default" data-easeout="default"
                        data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0"
                        data-hideslideonmobile="off" data-index="rs-1687" data-masterspeed="default" data-param1=""
                        data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                        data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off"
                        data-slotamount="default" data-thumb="images/main-slider/img-2-b.jpg" data-title="Slide Title"
                        data-transition="parallaxvertical">
                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10"
                             data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina=""
                             src="images/main-slider/img-2-b.jpg">

                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-2"
                             id="slide-73-layer-1"
                             data-x="['center','center','center','center']" data-hoffset="['600','500','390','220']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"

                             data-type="image"
                             data-responsive_offset="on"

                             data-frames='[{"delay":400,"speed":750,"sfxcolor":"#34c3ed","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 5;"><img src="images/main-slider/pattern.png" alt=""
                                                      data-ww="['845px','845px','800px','500px']"
                                                      data-hh="['670','670','670','670']" width="1200" height="670"
                                                      data-no-retina></div>


                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-2"
                             id="slide-1679-layer-7"
                             data-x="['right','right','right','right']" data-hoffset="['300','300','70','50']"
                             data-y="['top','top','top','top']" data-voffset="['143','110','120','50']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"

                             data-type="image"
                             data-responsive_offset="on"

                             data-frames='[{"from":"x:-200px;rZ:-45deg;opacity:0;","speed":2000,"to":"o:1;","delay":950,"ease":"Power4.easeOut"},{"delay":"wait","speed":700,"to":"auto:auto;","ease":"Power2.easeInOut"}]'
                             data-textAlign="['left','left','left','left']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 6;border-width:0px;">
                            <div class="rs-looped rs-wave" data-speed="6" data-angle="0" data-radius="2px"
                                 data-origin="50% 50%"><img class="right-side" src="images/main-slider/border.png"
                                                            alt="" data-ww="['309px','309px','300px','300px']"
                                                            data-hh="['382px','380px','300px','300px']" width="309"
                                                            height="382" data-lazyload="images/main-slider/border.png"
                                                            data-no-retina></div>
                        </div>

                        <div class="tp-caption"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingtop="[0,0,0,0]"
                             data-responsive_offset="on"
                             data-type="text"
                             data-height="none"
                             data-width="['550','450','300','290']"
                             data-whitespace="normal"
                             data-hoffset="['350','350','100','80']"
                             data-voffset="['-90','-90','-90','-90']"
                             data-x="['right','right','right','right']"
                             data-y="['middle','middle','middle','middle']"
                             data-textalign="['top','top','top','top']"
                             data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                             style="z-index: 7; white-space: nowrap;text-transform:left;">
                            <h2 class="dark-text text-right"><span>Expert</span><br>financial team</h2>
                        </div>

                        <div class="tp-caption"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingtop="[0,0,0,0]"
                             data-responsive_offset="on"
                             data-type="text"
                             data-height="none"
                             data-whitespace="normal"
                             data-width="['550','550','400','290']"
                             data-hoffset="['355','350','100','80']"
                             data-voffset="['20','0','-10','-15']"
                             data-x="['right','right','right','right']"
                             data-y="['middle','middle','middle','middle']"
                             data-textalign="['top','top','top','top']"
                             data-frames='[{"from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                             style="z-index: 7; white-space: nowrap;text-transform:left;">
                            <div class="text light text-right">Our Consulting company offers a full range of
                                consulting<br>services in all the countries
                            </div>
                        </div>

                        <div class="tp-caption tp-resizeme"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingtop="[0,0,0,0]"
                             data-responsive_offset="on"
                             data-type="text"
                             data-height="none"
                             data-width="['550','500','400','290']"
                             data-whitespace="normal"
                             data-hoffset="['10','350','100','80']"
                             data-voffset="['110','110','100','80']"
                             data-x="['right','right','right','right']"
                             data-y="['middle','middle','middle','middle']"
                             data-textalign="['top','top','top','top']"
                             data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                             style="z-index: 7; white-space: nowrap;text-transform:left;">
                            <a href="about.html" class="theme-btn btn-style-four">More About us</a>
                        </div>

                    </li>

                    <li  data-description="Slide Description" data-easein="default"
                         data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade"
                         data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1688"
                         data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3=""
                         data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                         data-rotate="0" data-saveperformance="off" data-slotamount="default"
                         data-thumb="images/main-slider/img-2-a.jpg" data-title="Slide Title"
                         data-transition="parallaxvertical">
                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10"
                             data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina=""
                             src="images/main-slider/img-2-a.jpg">

                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-2"
                             id="slide-73-layer-1"
                             data-x="['center','center','center','center']" data-hoffset="['-600','-500','-390','-220']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"

                             data-type="image"
                             data-responsive_offset="on"

                             data-frames='[{"delay":400,"speed":750,"sfxcolor":"#34c3ed","sfx_effect":"blockfromright",
                             "frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,
                             "sfxcolor":"#ffffff","sfx_effect":"blocktoright","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 5;"><img src="images/main-slider/pattern.png" alt=""
                                                      data-ww="['845px','845px','800px','500px']"
                                                      data-hh="['670','670','670','670']" width="1200" height="670"
                                                      data-no-retina></div>


                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-2"
                             id="slide-1679-layer-7"
                             data-x="['left','left','left','left']" data-hoffset="['300','300','70','50']"
                             data-y="['top','top','top','top']" data-voffset="['143','110','120','50']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"

                             data-type="image"
                             data-responsive_offset="on"

                             data-frames='[{"from":"x:-200px;rZ:-45deg;opacity:0;","speed":2000,"to":"o:1;","delay":950,"ease":"Power4.easeOut"},
                             {"delay":"wait","speed":700,"to":"auto:auto;","ease":"Power2.easeInOut"}]'
                             data-textAlign="['left','left','left','left']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 6;border-width:0px;">
                            <div class="rs-looped rs-wave" data-speed="6" data-angle="0" data-radius="2px"
                                 data-origin="50% 50%"><img class="right-side" src="images/main-slider/border.png"
                                                            alt="" data-ww="['309px','309px','300px','300px']"
                                                            data-hh="['382px','380px','300px','300px']" width="309"
                                                            height="382" data-lazyload="images/main-slider/border.png"
                                                            data-no-retina></div>
                        </div>

                        <div class="tp-caption"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingtop="[0,0,0,0]"
                             data-responsive_offset="on"
                             data-type="text"
                             data-height="none"
                             data-width="['550','450','300','290']"
                             data-whitespace="normal"
                             data-hoffset="['350','350','100','80']"
                             data-voffset="['-90','-90','-90','-90']"
                             data-x="['left','left','left','left']"
                             data-y="['middle','middle','middle','middle']"
                             data-textalign="['top','top','top','top']"
                             data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                             style="z-index: 7; white-space: nowrap;text-transform:left;">
                            <h2 class="dark-text"><span>Welcome to</span><br>FinanceHUB</h2>
                        </div>

                        <div class="tp-caption"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingtop="[0,0,0,0]"
                             data-responsive_offset="on"
                             data-type="text"
                             data-height="none"
                             data-whitespace="normal"
                             data-width="['550','550','400','290']"
                             data-hoffset="['350','350','100','80']"
                             data-voffset="['20','0','-10','-15']"
                             data-x="['left','left','left','left']"
                             data-y="['middle','middle','middle','middle']"
                             data-textalign="['top','top','top','top']"
                             data-frames='[{"from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                             style="z-index: 7; white-space: nowrap;text-transform:left;">
                            <div class="text light">Our Consulting company offers a full range of consulting <br>services
                                in all the countries
                            </div>
                        </div>

                        <div class="tp-caption tp-resizeme"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingtop="[0,0,0,0]"
                             data-responsive_offset="on"
                             data-type="text"
                             data-height="none"
                             data-width="['550','500','400','290']"
                             data-whitespace="normal"
                             data-hoffset="['350','350','100','80']"
                             data-voffset="['110','110','100','80']"
                             data-x="['left','left','left','left']"
                             data-y="['middle','middle','middle','middle']"
                             data-textalign="['top','top','top','top']"
                             data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                             style="z-index: 7; white-space: nowrap;text-transform:left;">
                            <a href="about.html" class="theme-btn btn-style-four">More About us</a>
                        </div>

                    </li>


                </ul>

            </div>
        </div>
    </section>
    <!--End Main Slider-->

    <!-- services section -->
    <section class="services-section">
        <div class="auto-container">
            <!--Sec Title-->
            <div class="sec-title centered">
                <h2>Our Main Services</h2>
            </div>

            <div class="clearfix row">
                <div class="col-md-8 col-sm-12">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <!--News Block Ten-->
                            <div class="services-block-ten">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="images/resource/services-4.jpg" alt="">
                                        <div class="overlay-box">
                                            <a href="services-single.html" class="theme-btn btn-style-one">read more</a>
                                        </div>
                                        <div class="bottom-box">
                                            <h3><a href="blog-single.html">Investment Planning</a></h3>
                                            <div class="icon-box">
                                                <span class="icon-money"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <!--News Block Ten-->
                            <div class="services-block-ten">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="images/resource/services-5.jpg" alt="">
                                        <div class="overlay-box">
                                            <a href="services-single.html" class="theme-btn btn-style-one">read more</a>
                                        </div>
                                        <div class="bottom-box">
                                            <h3><a href="blog-single.html">Insurance Policies</a></h3>
                                            <div class="icon-box">
                                                <span class="icon-shield"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <!--News Block Ten-->
                            <div class="services-block-ten">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="images/resource/services-6.jpg" alt="">
                                        <div class="overlay-box">
                                            <a href="services-single.html" class="theme-btn btn-style-one">read more</a>
                                        </div>
                                        <div class="bottom-box">
                                            <h3><a href="blog-single.html">Wealth Management</a></h3>
                                            <div class="icon-box">
                                                <span class="icon-luxury"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <!--News Block Ten-->
                            <div class="services-block-ten">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="images/resource/services-7.jpg" alt="">
                                        <div class="overlay-box">
                                            <a href="services-single.html" class="theme-btn btn-style-one">read more</a>
                                        </div>
                                        <div class="bottom-box">
                                            <h3><a href="blog-single.html">Financial Service</a></h3>
                                            <div class="icon-box">
                                                <span class="icon-money-1"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 col-sm-12">
                    <!--News Block ten-->
                    <div class="services-block-ten margin-bottom-0">
                        <div class="inner-box">
                            <div class="lower-content">
                                <div class="content">
                                    <h3><a href="blog-single.html">What We Do</a></h3>
                                    <div class="text">Must explain to you how all this mistaken idea of denouncing
                                        pleasure. Teachings the great explorer of ther builder.
                                    </div>
                                    <a href="blog-single.html" class="theme-btn btn-style-three">Read More </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News Block ten-->
                    <div class="services-block-ten margin-bottom-0">
                        <div class="inner-box">
                            <div class="lower-content">
                                <div class="content">
                                    <h3><a href="blog-single.html">Why Choose Us</a></h3>
                                    <div class="text">Anyone who loves or pursues or desires to obtain pain of itself,
                                        because it is pain can procure him some great pleasure.
                                    </div>
                                    <a href="blog-single.html" class="theme-btn btn-style-three">Read More </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!--About Section-->
    <section class="whychoose-us">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Column-->
                <div class="experience-column col-md-4 col-sm-12 col-xs-12">
                    <div class="content">
                        <div class="inner-box">
                            <h4><span class="theme_color">Since 1991,</span> we provide best <br>service for our
                                clients.</h4>
                            <h1>26</h1>
                            <h4>Years of experince</h4>
                        </div>

                    </div>

                </div>
                <!--Column-->
                <div class="content-column col-md-8 col-sm-12 col-xs-12">

                    <div class="inner-box">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="services-block-seven">
                                    <div class="inner">
                                        <div class="icon-box"><span class="icon icon-pencil"></span></div>
                                        <h3><a href="#">Innovative Works</a></h3>
                                        <p>Desires to obtain</p>
                                        <div class="text">How all this mistakens idea denouncing pleasures and completed
                                            account.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <div class="services-block-seven">
                                    <div class="inner">
                                        <div class="icon-box"><span class="icon icon-suitcase"></span></div>
                                        <h3><a href="#">Vey Experienced</a></h3>
                                        <p>Resultant pleasure</p>
                                        <div class="text">There anyone who loves or pursues or desires to obtain pain of
                                            itself.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="services-block-seven">
                                    <div class="inner">
                                        <div class="icon-box"><span class="icon icon-shapes"></span></div>
                                        <h3><a href="#">Certified Company</a></h3>
                                        <p>Resultant pleasure</p>
                                        <div class="text">There anyone who loves or pursues or desires to obtain pain of
                                            itself.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="services-block-seven">
                                    <div class="inner">
                                        <div class="icon-box"><span class="icon icon-shapes"></span></div>
                                        <h3><a href="#">Certified Company</a></h3>
                                        <p>Resultant pleasure</p>
                                        <div class="text">There anyone who loves or pursues or desires to obtain pain of
                                            itself.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End About Section-->


    <!--About Section-->
    <section class="about-section">
        <div class="auto-container">
            <!--Sec Title-->
            <div class="sec-title">
                <div class="clearfix">
                    <div class="pull-left">
                        <h2>About Our Company</h2>
                    </div>
                    <div class="pull-right">
                        <a href="services.html" class="theme-btn btn-style-seven">Meet Team Members</a>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <!--Column-->
                <div class="title-column col-md-6 col-sm-12 col-xs-12">

                    <div class="text">
                        <p>Must explain to you how all this mistaken idea denouncing plesure praising pain was born and
                            I will give you a complete account of the system expound teachings the great explorer of the
                            truth, the master-builder.</p>
                        <p>Who do not know how to pursue pleasure rationally encounter consequences that are extremely
                            painful. Nor again is there anyone who loves or pursues or desires obtain pain of itself,
                            because it is pain, but ut because occasionally toil pain can procure him some great
                            pleasure.</p>
                    </div>
                    <div class="author-information">
                        <h4>lara Crofta, <span>Founder</span></h4>
                        <p>Finance HUB.</p>
                    </div>
                    <div class="author-sign">
                        <img src="images/resource/sign.png" alt="">
                    </div>
                </div>
                <!--Content Column-->
                <div class="about-team-column col-md-6 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="image">
                                <img src="images/resource/author-4.jpg" alt="">
                                <div class="text">
                                    <h4>Venanda Santa</h4>
                                    <p>CEO / Founder</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="image">
                                <img src="images/resource/author-5.jpg" alt="">
                                <div class="text">
                                    <h4>Venanda Santa</h4>
                                    <p>CEO / Founder</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End About Section-->

    <!--Clients Section-->
    <section class="clients-section-two">
        <div class="auto-container">
            <div class="outer-box">
                <!--Sponsors Carousel-->
                <ul class="six-item-carousel owl-carousel owl-theme owl-dot-style-one owl-nav-none owl-dots-none">
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/clients/5.png" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/clients/6.png" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/clients/5.png" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/clients/6.png" alt=""></a></figure>
                    </li>
                </ul>
            </div>

        </div>
    </section>
    <!--End Clients Section-->

    <!--Gallery Section Two-->
    <section class="gallery-section style-two">
        <div class="outer-box">
            <div class="auto-container">
                <div class="clearfix">
                    <div class="pull-left">
                        <div class="sec-title light">
                            <h2>Our Latest Projects</h2>
                        </div>
                    </div>
                    <div class="filters-column pull-right">
                        <!--Filter-->
                        <div class="filters gallery-filters">
                            <ul class="filter-tabs filter-btns clearfix">
                                <li class="active filter" data-role="button" data-filter="all">View All</li>
                                <li class="filter" data-role="button" data-filter=".consulting">Investment</li>
                                <li class="filter" data-role="button" data-filter=".financial">Business</li>
                                <li class="filter" data-role="button" data-filter=".marketing">Insurance</li>
                                <li class="filter" data-role="button" data-filter=".growth">Income Tax</li>
                                <li class="filter" data-role="button" data-filter=".finance">Finance</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="auto-container">

            <div class="filter-list clearfix">

                <!--Project Block One-->
                <div class="col-md-4 col-sm-6 col-xs-12 project-block-one mix all marketing financial">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="images/gallery/gallery-21.jpg" alt="">
                            <div class="overlay-box">
                                <div class="lower-content">
                                    <h3><a href="project-details.html">Income Tax Planning</a></h3>
                                    <div class="text">Income Tax</div>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>

                <!--Project Block One-->
                <div class="col-md-4 col-sm-6 col-xs-12 project-block-one mix all finance consulting finance">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="images/gallery/gallery-22.jpg" alt="">
                            <div class="overlay-box">
                                <div class="lower-content">
                                    <h3><a href="project-details.html">Financial Markert</a></h3>
                                    <div class="text">Finance</div>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>

                <!--Project Block One-->
                <div class="col-md-4 col-sm-6 col-xs-12 project-block-one mix all financial">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="images/gallery/gallery-23.jpg" alt="">
                            <div class="overlay-box">
                                <div class="lower-content">
                                    <h3><a href="project-details.html">Investment Plan</a></h3>
                                    <div class="text">Investment</div>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>

                <!--Project Block One-->
                <div class="col-md-4 col-sm-6 col-xs-12 project-block-one mix all finance marketing consulting finance">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="images/gallery/gallery-24.jpg" alt="">
                            <div class="overlay-box">
                                <div class="lower-content">
                                    <h3><a href="project-details.html">Foreign Exchange</a></h3>
                                    <div class="text">Business</div>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>

                <!--Project Block One-->
                <div class="col-md-4 col-sm-6 col-xs-12 project-block-one mix all finance marketing">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="images/gallery/gallery-25.jpg" alt="">
                            <div class="overlay-box">
                                <div class="lower-content">
                                    <h3><a href="project-details.html">Investment Plan</a></h3>
                                    <div class="text">Investment</div>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>

                <!--Project Block One-->
                <div class="col-md-4 col-sm-6 col-xs-12 project-block-one mix all consulting growth">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="images/gallery/gallery-26.jpg" alt="">
                            <div class="overlay-box">
                                <div class="lower-content">
                                    <h3><a href="project-details.html">Foreign Exchange</a></h3>
                                    <div class="text">Business</div>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!--Gallery Section End -->

    <!--Testimonial Section Two-->
    <section class="testimonial-section-two">
        <div class="auto-container">
            <!--Sec Title-->
            <div class="sec-title grey-border centered">
                <h2>Customer Feedback</h2>
            </div>

            <div class="two-item-carousel owl-carousel owl-theme owl-nav-style-one owl-dots-none">

                <!--Testimonial Block Eight -->
                <div class="testimonial-block-eight">
                    <div class="img-box">
                        <img src="images/resource/author-1.jpg" alt="">
                    </div>
                    <div class="text">
                        <h4>More Effective Team</h4>
                        <p>“ These guys are just the coolest company ever! They were aware of our transported for road
                            and tail and complex, we will suggest to others. ”</p>
                    </div>
                    <div class="author-info">

                        <h4>Robert William </h4>
                        <p>Newyork City</p>
                        <ul class="rating">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-half-o"></i></li>
                        </ul>
                    </div>
                </div>

                <!--Testimonial Block Eight -->
                <div class="testimonial-block-eight">
                    <div class="img-box">
                        <img src="images/resource/author-2.jpg" alt="">
                    </div>
                    <div class="text">
                        <h4>Treated Us Very Kind</h4>
                        <p>“ Their performance on our project was extremely successful. Exceptional quality & in time
                            and within your afforatble budget. ”</p>
                    </div>
                    <div class="author-info">

                        <h4>Emmillia Cranez</h4>
                        <p>California</p>
                        <ul class="rating">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-half-o"></i></li>
                        </ul>
                    </div>
                </div>

                <!--Testimonial Block Eight -->
                <div class="testimonial-block-eight">
                    <div class="img-box">
                        <img src="images/resource/author-1.jpg" alt="">
                    </div>
                    <div class="text">
                        <h4>More Effective Team</h4>
                        <p>“ These guys are just the coolest company ever! They were aware of our transported for road
                            and tail and complex, we will suggest to others. ”</p>
                    </div>
                    <div class="author-info">

                        <h4>Robert William </h4>
                        <p>Newyork City</p>
                        <ul class="rating">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-half-o"></i></li>
                        </ul>
                    </div>
                </div>

                <!--Testimonial Block Eight -->
                <div class="testimonial-block-eight">
                    <div class="img-box">
                        <img src="images/resource/author-2.jpg" alt="">
                    </div>
                    <div class="text">
                        <h4>Treated Us Very Kind</h4>
                        <p>“ Their performance on our project was extremely successful. Exceptional quality & in time
                            and within your afforatble budget. ”</p>
                    </div>
                    <div class="author-info">

                        <h4>Emmillia Cranez</h4>
                        <p>California</p>
                        <ul class="rating">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-half-o"></i></li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!--End Testimonial Section Two-->

    <!--News Section-->
    <section class="news-section grey-bg">
        <div class="auto-container">
            <!--Sec Title-->
            <div class="sec-title clearfix">
                <div class="pull-left">
                    <h2>Latest News</h2>
                </div>
                <div class="pull-right">
                    <a href="blog.html" class="theme-btn btn-style-seven">More NEWS</a>
                </div>
            </div>

            <div class="row clearfix">

                <!--News Block Two-->
                <div class="news-block-three col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image">
                            <img src="images/resource/news-7.jpg" alt="">
                            <a href="blog-single.html" class="overlay-box">
                            </a>
                            <div class="post-meta">
                                <ul>
                                    <li><i class="fa fa-eye"></i><br>25</li>
                                    <li><i class="fa fa-heart"></i><br>25</li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="content">
                                <div class="post-time">August 18, 2017</div>
                                <h3><a href="blog-single.html">Why Do I Need To Use Financial Consulting Service?.</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>

                <!--News Block Two-->
                <div class="news-block-three col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image">
                            <img src="images/resource/news-8.jpg" alt="">
                            <a href="blog-single.html" class="overlay-box">
                            </a>
                            <div class="post-meta">
                                <ul>
                                    <li><i class="fa fa-eye"></i><br>25</li>
                                    <li><i class="fa fa-heart"></i><br>25</li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="content">
                                <div class="post-time">February 23, 2017</div>
                                <h3><a href="blog-single.html">5 Excuses That Prevent Wantrepreneurs From
                                        Entrepreneurs.</a></h3>
                            </div>
                        </div>
                    </div>
                </div>

                <!--News Block Two-->
                <div class="news-block-three col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image">
                            <img src="images/resource/news-9.jpg" alt="">
                            <a href="blog-single.html" class="overlay-box">

                            </a>
                            <div class="post-meta">
                                <ul>
                                    <li><i class="fa fa-eye"></i><br>25</li>
                                    <li><i class="fa fa-heart"></i><br>25</li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="content">
                                <div class="post-time">January 21, 2017</div>
                                <h3><a href="blog-single.html">Are High-Multiple Tech Stocks Winners or Losers?</a></h3>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End News Section-->

    <!-- subscribe section -->
    <section class="subscribe-section">
        <div class="auto-container">
            <div class="sec-title centered">
                <h2>Newsletter Subscribe</h2>
                <p>Subscribe now and receive weekly newsletter with Latest News and interesting activities.</p>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                    <form class="subscribe-form" _lpchecked="1">
                        <input type="text" placeholder="Your Name">
                        <input type="email" placeholder="Email Address">
                        <button type="submit" class="theme-btn btn-style-one">subscribe</button>
                    </form>
                </div>
            </div>

        </div>
    </section>
    <!-- End Subscribe Section -->

    <!--Main Footer-->
    <footer class="main-footer">
        <div class="auto-container">
            <!--Info Section-->
            <div class="info-section">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <div class="clearfix">
                            <div class="pull-left"><h4>Newsletter Subscribe</h4></div>
                            <div class="pull-left form-column">
                                <form action="#" class="subscribe-form">
                                    <input type="email" placeholder="Email Address ...">
                                    <button class="thm-btn btn-style-one">Subscribe Us</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="pull-left"><h4>Follow Us On:</h4></div>
                        <div class="pull-left">
                            <ul class="social-icon-three">
                                <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fa fa-skype"></span></a></li>
                                <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Info Section-->
        </div>

        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="auto-container">
                <div class="row clearfix">

                    <!--Footer Column-->
                    <div class="footer-column col-md-4 col-sm-8 col-xs-12">
                        <!--Logo Widget-->
                        <div class="footer-widget logo-widget">
                            <div class="widget-content">
                                <div class="footer-logo">
                                    <a href="index.html"><img src="images/footer-logo.png" alt=""/></a>
                                </div>
                                <div class="text">
                                    <p>FinanceHUB over 20 years of experience we’ll ensure you always get the best
                                        guidance. Serve a clients at every level of their organization, in whatever
                                        capacity we can be most useful, whether as a trusted advisor.</p>
                                </div>
                                <div class="link">
                                    <a href="#" class="thm-btn btn-style-one">Buy FinanceHUB</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Footer Column-->
                    <div class="footer-column col-md-2 col-sm-4 col-xs-12">
                        <!--Links Widget-->
                        <div class="footer-widget links-widget">
                            <h2>Quick Links</h2>
                            <div class="widget-content">
                                <ul class="footer-links">
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Our Services</a></li>
                                    <li><a href="#">Latest News</a></li>
                                    <li><a href="#">Testimonals</a></li>
                                    <li><a href="#">Our Projects</a></li>
                                    <li><a href="#">Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!--Footer Column-->
                    <div class="footer-column col-md-3 col-sm-6 col-xs-12">
                        <!-- news widget -->
                        <div class="footer-widget posts-widget">
                            <h2>latest news</h2>
                            <div class="widget-content">
                                <!--Post-->
                                <div class="post">
                                    <div class="img-box"><a href="#"><img src="images/resource/thumb-1.jpg" alt=""></a>
                                    </div>
                                    <div class="content">
                                        <div class="time">14 August, 2017</div>
                                        <h4><a href="#">We makes a succesful <br>financial website</a></h4>
                                    </div>
                                </div>
                                <!--Post-->
                                <div class="post">
                                    <div class="img-box"><a href="#"><img src="images/resource/thumb-2.jpg" alt=""></a>
                                    </div>
                                    <div class="content">
                                        <div class="time">22 July, 2017</div>
                                        <h4><a href="#">Insuring an increasingly <br>connected world</a></h4>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!--Footer Column-->
                    <div class="footer-column col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-widget contact-widget">
                            <div class="section-title">
                                <h2>Get In Touch</h2>
                            </div>
                            <div class="widget-content">
                                <ul class="contact-info">
                                    <li><span class="icon fa fa-map-marker"></span>Rock St 12, Newyork City, USA</li>
                                    <li><span class="icon fa fa-phone"></span> Phone: +44 567 890123</li>
                                    <li><span class="icon fa fa-envelope-o"></span>Mail@Financehub.com</li>
                                    <li><span class="icon fa fa-clock-o"></span>Mon - Satday: 9 Am to 18 Pm</li>
                                </ul>
                            </div>
                            <div class="link"><a href="#">Find Us On Map</a></div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <!--Footer Bottom-->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="column col-md-6 col-sm-6 col-xs-12">
                        <div class="copyright">Copyright &copy; <a href="#">Financehub</a> | All Right Reserved</div>
                    </div>
                    <div class="column col-md-6 col-sm-6 col-xs-12">
                        <ul class="footer-nav">
                            <li><a href="#">Support</a></li>
                            |
                            <li><a href="#">Privacy & Policy</a></li>
                            |
                            <li><a href="#">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!--End Main Footer-->

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-angle-up"></span></div>
{{--
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--Revolution Slider-->
<script src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="js/main-slider-script.js"></script>
<!--End Revolution Slider-->
<script src="js/jquery-ui.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/owl.js"></script>
<script src="js/appear.js"></script>
<script src="js/wow.js"></script>
<script src="js/mixitup.js"></script>
<script src="js/main-slider-script.js"></script>
<script src="js/script.js"></script>
--}}
@include('layouts.stacks')
</body>
</html>

