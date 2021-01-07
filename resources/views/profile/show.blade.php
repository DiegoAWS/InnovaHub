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
    @include('menus.main')
    <!--End Main Header -->

    <div class="inner-banner text-center" style="background-image: url(images/background/6.jpg);">
        <div class="auto-container">
            <div class="box">
                <h3>Single Service</h3>
            </div><!-- /.box -->
            <div class="breadcumb-wrapper">
                <div class="clearfix">
                    <div class="pull-left">
                        <ul class="list-inline link-list">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Services</a></li>
                            <li>Single Service</li>
                        </ul>
                    </div>
                    <div class="pull-right">
                        <a href="#" class="get-qoute"><i class="fa fa-share-alt"></i>share</a>
                    </div><!-- /.pull-right -->
                </div><!-- /.container -->
            </div>
        </div><!-- /.container -->
    </div>

    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side / Services Single-->
                <div class="content-side pull-right col-md-9 col-sm-12 col-xs-12">
                    <div class="services-single">
                        <div class="inner-box">

                            <div class="tabs-outer mar-bottom-60">
                                <div class="sec-title mar-bottom-30">
                                    <h3>{{__('My Profile')}}</h3>
                                </div>
                                <!--Tabs Box-->
                                <div class="tabs-box tabs-style-two">
                                    <!--Tab Buttons-->
                                    <ul class="tab-buttons clearfix">
                                        <li data-tab="#tab-one"
                                            class="tab-btn active-btn">{{__('Basic Information')}}</li>
                                        <li data-tab="#tab-two" class="tab-btn">{{__('Password')}}</li>
                                    </ul>

                                    <!--Tabs Content-->
                                    <div class="tabs-content">
                                        <!--Tab / Active Tab-->
                                        <div class="tab active-tab" id="tab-one" style="display: block;">
                                            <div class="text-content clearfix">
                                                <!--Default Form-->
                                                <div class="default-form style-four">
                                                    <div class="row clearfix">
                                                        <form method="post" action="contact.html">
                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                <!--Form Group-->
                                                                <div class="form-group">
                                                                    <input type="text" name="name" value="" placeholder="Your Name"
                                                                           required>
                                                                </div>
                                                                <!--Form Group-->
                                                                <div class="form-group">
                                                                    <input type="email" name="email" value=""
                                                                           placeholder="Email Address" required>
                                                                </div>
                                                                <!--Form Group-->
                                                                <div class="form-group">
                                                                    <input type="text" name="name" value="" placeholder="Subject"
                                                                           required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                <!--Form Group-->
                                                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                        <textarea name="message" placeholder="Asq Your Questions"
                                                                  required></textarea>
                                                                </div>
                                                            </div>

                                                            <!--Form Group-->
                                                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                                <button type="submit"
                                                                        class="w-100 theme-btn btn-style-one with-100">
                                                                    {{__('Save')}}
                                                                </button>
                                                            </div>
                                                            <!--Default Form-->
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="text">
                                                    <p>There are many variations of passages of Lorem
                                                        Ipsum available, but the majority have suffered alterationsome
                                                        form by injected humour, or randomised words which don't look
                                                        even slightly believable. If you are going to use passage of
                                                        Lorem Ipsum, you need to be sure there isn't anything
                                                        embarrassing hidden.</p>
                                                    <p>The majority have suffered alterationsome form by injected
                                                        humour, or randomised words which don't look even slightly
                                                        believable. If you are going touse passage of , you need to be
                                                        sure.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!--Tab-->
                                        <div class="tab" id="tab-two" style="display: none;">
                                            <div class="text-content clearfix">
                                                <div class="default-form style-four">
                                                    <div class="row clearfix">
                                                        <form method="post" action="contact.html">
                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                <!--Form Group-->
                                                                <div class="form-group">
                                                                    <input type="text" name="name" value="" placeholder="Your Name"
                                                                           required>
                                                                </div>
                                                                <!--Form Group-->
                                                                <div class="form-group">
                                                                    <input type="email" name="email" value=""
                                                                           placeholder="Email Address" required>
                                                                </div>
                                                            </div>

                                                            <!--Form Group-->
                                                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                                <button type="submit"
                                                                        class="w-100 theme-btn btn-style-one with-100">
                                                                    {{__('Save')}}
                                                                </button>
                                                            </div>
                                                            <!--Default Form-->
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Sidebar-->
                <div class="sidebar-side pull-left col-md-3 col-sm-12 col-xs-12">
                    <aside class="sidebar">

                        <!--Contact Category-->
                        <div class="sidebar-widget contact-widget">
                            <div class="inner-box">
                                <div class="img-box"><img src="images/resource/contact-1.jpg" alt=""></div>
                                <h2>{{Auth::user()->name}}</h2>
                                <div class="text">Please contact us today! Our experts always ready to help you.</div>
                                <ul>
                                    <li><i class="fa fa-map-marker"></i>Rock St 12, Newyork, USA</li>
                                    <li><i class="fa fa-phone"></i>Phone: +44 567 890123</li>
                                </ul>
                                <a href="#" class="contact-btn theme-btn btn-style-three">Get Quote free</a>
                            </div>
                        </div>

                    </aside>
                </div>

            </div>
        </div>
    </div>

    <section class="call-to-action-three">
        <div class="auto-container">
            <div class="clearfix">
                <div class="pull-left">
                    <h2>Looking For A First-Class Financial Consulting Service? We are here!.</h2>
                </div>
                <div class="pull-right">
                    <a href="#" class="thmeme-btn btn-style-two">Make an Apppintment</a>
                </div>
            </div>

        </div>
    </section>

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

@include('layouts.jsImports')
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
<script src="js/mixitup.js"></script>
<script src="js/validate.js"></script>
<script src="js/script.js"></script> --}}

</body>
</html>

