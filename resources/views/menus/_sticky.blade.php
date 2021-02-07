<div class="sticky-header color-less-black">
    <div class="auto-container clearfix">
        <!--Logo-->
        <div class="logo pull-left">
            <a href="index.html" class="img-responsive" title="Finace Hub"><img src="{{mix('images/logo-small.png')}}"
                                                                                alt="Finace Hub"
                                                                                height="30px"
                                                                                width="220px"
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
                        <li>
                            <a href="{{ route('home') }}">{{__('Home')}}</a>

                        </li>
                        <li class="dropdown"><a href="#">{{__('Services')}}</a>
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
                        <li class="dropdown"><a href="#">{{__('Company')}}</a>
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
                        <li><a href="{{ route('directory') }}">{{__('Directory')}}</a>
                        <li><a href="{{ route('projects') }}">{{__('Blog')}}</a>
                        <li><a href="contact.html">{{__('Contact Us')}}</a></li>
                    </ul>
                </div>
            </nav><!-- Main Menu End-->
        </div>

    </div>
</div>
