<div class="header-top">
    <div class="auto-container">
        <div class="clearfix">
            <!--Top Left-->
            <div class="top-left">
                <ul class="dropdown-option clearfix">
                    <li class="language dropdown"><a class="btn btn-default dropdown-toggle" id="dropdownMenu1"
                                                     data-toggle="dropdown" aria-haspopup="true"
                                                     aria-expanded="true" href="#">{{__('Language')}} &nbsp;<span
                                class="icon fa fa-angle-down"></span></a>
                        <ul class="dropdown-menu style-one" aria-labelledby="dropdownMenu1">
                            <li><a href="{{route('locale', 'en')}}">{{__('English')}}</a></li>
                            <li><a href="{{route('locale', 'es')}}">{{__('Spanish')}}</a></li>
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
