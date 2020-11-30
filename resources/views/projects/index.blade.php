@extends('layouts.master')

@section('content')
    <!--Gallery Section Two-->
    <section class="gallery-section padd-top-45" >
        <div class="auto-container">
            <div class="filters-column text-center">
                <!--Filter-->
                <div class="filters gallery-filters">
                    <ul class="filter-tabs filter-btns clearfix">
                        <li class="active filter" data-role="button" data-filter="all">{{ __('All') }}</li>
                        <li class="filter" data-role="button" data-filter=".consulting">{{ __('Collaboration') }}</li>
                        <li class="filter" data-role="button" data-filter=".financial">{{ __('Business') }}</li>
                        <li class="filter" data-role="button" data-filter=".marketing">{{ __('Transfer') }}</li>
                        <li class="filter" data-role="button" data-filter=".growth">{{ __('Service') }}</li>
                    </ul>
                </div>

            </div>

            <div class="filter-list row clearfix">
                <!--Project Block One-->
                <div class="col-xs-12   project-block-one mix all financial">
                    <p class="ml-5">
                        <em>
                            <strong>
                                Ponemos a tu disposición un amplio y variado portafolio de Proyectos de Innovación, en
                                distintas
                                <a href="#"> temáticas </a> como oportunidad para asociarte a otros usuarios <br>
                                en algunas de las <a href="#"> modalidades </a> de innovación. <br>
                                En todos los casos, se pone a disposición de los interesados, los <a href=""> servicios </a>
                                de asesoría de A+ Consultores
                                para el análisis y gestión del proyecto.
                            </strong>
                        </em>
                    </p>
                </div>
                <!--Project Block One-->
            </div>


            <div class="filter-list row clearfix">

                <!--Project Block One-->
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 project-block-one mix all finance consulting finance">
                    <div class="services-block-eleven mar-bottom-0">
                        <div class="inner-box img-holder">
                            <figure class="image-box">
                                <img src="images/gallery/proj-1.jpg" alt="">

                                <div class="icon-box">
                                    <span class="icon-luxury"></span>
                                </div>

                                <a href="project-details.html" class="overlay-box">
                                    <span class="icon fa fa-link"></span>
                                </a>
                            </figure>
                            <div class="lower-content grey-bg">
                                <h3><a href="project-details.html">Financial Markert</a></h3>
                                <div class="text">Finance</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Project Block One-->
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 project-block-one mix all finance consulting finance">
                    <div class="services-block-eleven mar-bottom-0">
                        <div class="inner-box img-holder">
                            <figure class="image-box">
                                <img src="images/gallery/proj-2.jpg" alt="">

                                <div class="icon-box">
                                    <span class="icon-luxury"></span>
                                </div>

                                <a href="project-details.html" class="overlay-box">
                                    <span class="icon fa fa-link"></span>
                                </a>
                            </figure>
                            <div class="lower-content grey-bg">
                                <h3><a href="project-details.html">Financial Markert</a></h3>
                                <div class="text">Finance</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Project Block One-->
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 project-block-one mix all financial">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="images/gallery/proj-3.jpg" alt="">
                            <a href="project-details.html" class="overlay-box">
                                <span class="icon fa fa-link"></span>
                            </a>
                        </figure>
                        <div class="lower-content grey-bg">
                            <h3><a href="project-details.html">Investment Plan</a></h3>
                            <div class="text">Investment</div>
                        </div>
                    </div>
                </div>

                <!--Project Block One-->
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 project-block-one mix all finance marketing consulting finance">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="images/gallery/proj-4.jpg" alt="">
                            <a href="project-details.html" class="overlay-box">
                                <span class="icon fa fa-link"></span>
                            </a>
                        </figure>
                        <div class="lower-content grey-bg">
                            <h3><a href="project-details.html">Foreign Exchange</a></h3>
                            <div class="text">Business</div>
                        </div>
                    </div>
                </div>

                <!--Project Block One-->
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 project-block-one mix all finance marketing">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="images/gallery/proj-5.jpg" alt="">
                            <a href="project-details.html" class="overlay-box">
                                <span class="icon fa fa-link"></span>
                            </a>
                        </figure>
                        <div class="lower-content grey-bg">
                            <h3><a href="project-details.html">Investment Plan</a></h3>
                            <div class="text">Investment</div>
                        </div>
                    </div>
                </div>

                <!--Project Block One-->
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 project-block-one mix all consulting growth">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="images/gallery/proj-6.jpg" alt="">
                            <a href="project-details.html" class="overlay-box">
                                <span class="icon fa fa-link"></span>
                            </a>
                        </figure>
                        <div class="lower-content grey-bg">
                            <h3><a href="project-details.html">Foreign Exchange</a></h3>
                            <div class="text">Business</div>
                        </div>
                    </div>
                </div>

                <!--Project Block One-->
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 project-block-one mix all growth business">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="images/gallery/proj-7.jpg" alt="">
                            <a href="project-details.html" class="overlay-box">
                                <span class="icon fa fa-link"></span>
                            </a>
                        </figure>
                        <div class="lower-content grey-bg">
                            <h3><a href="project-details.html">Income Tax Planning</a></h3>
                            <div class="text">Income Tax</div>
                        </div>
                    </div>
                </div>

                <!--Project Block One-->
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 project-block-one mix all growth finance business">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="images/gallery/proj-8.jpg" alt="">
                            <a href="project-details.html" class="overlay-box">
                                <span class="icon fa fa-link"></span>
                            </a>
                        </figure>
                        <div class="lower-content grey-bg">

                            <h3><a href="project-details.html">Financial Markert</a></h3>
                            <div class="text">Finance</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--Gallery Section End -->
@endsection
