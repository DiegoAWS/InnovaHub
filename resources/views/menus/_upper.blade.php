<div class="header-upper">
    <div class="auto-container">
        <div class="clearfix">

            <div class="logo-outer">
                <div class="logo">
                    <a href="{{ route('home') }}">
                        <img src="{{mix('images/logo.png')}}" alt="Logo" title="Company logo">
                    </a>
                </div>
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
                                <li>
                                    <a href="{{ route('home') }}">{{__('Home')}}</a>
                                </li>

                                <li class="dropdown">
                                    <a href="#">{{__('Services')}}</a>
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
                                        <li><a href="blog-grid.html">News Default</a></li>
                                        <li><a href="blog-sidebar.html">News With Sidebar</a></li>
                                        <li><a href="blog-large-image.html">News Large Image</a></li>
                                        <li><a href="blog-single.html">News Single Post</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="{{ route('projects') }}">{{__('Projects')}}</a>
                                </li>

                                <li>
                                    <a href="{{ route('projects') }}">{{__('Resources')}}</a>
                                </li>

                                <li>
                                    <a href="{{ route('projects') }}">{{__('Blog')}}</a>
                                </li>

                                <li>
                                    <a href="contact.html">{{ __('Contact Us') }}</a>
                                </li>

                                <li>
                                    <a href="{{route('login')}}">{{__('Login')}}</a>
                                </li>
                            </ul>

                        </div>
                    </nav>
                    <!-- Main Menu End-->

                </div>
            </div>
        </div>
    </div>
</div>
