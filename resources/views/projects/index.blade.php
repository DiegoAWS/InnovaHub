@extends('layouts.master')

@section('content')
    <!--Gallery Section Two-->
    <section class="gallery-section padd-top-45">
        <div class="auto-container">
            <div class="filters-column text-center">
                <!--Filter-->
                <div class="filters gallery-filters">
                    <ul class="filter-tabs filter-btns clearfix">
                        <li class="active filter all" data-role="button" data-filter=".all">{{ __('All') }}</li>
                        <li class="filter" data-role="button" data-filter=".consulting">{{ __('Collaboration') }}</li>
                        <li class="filter" data-role="button" data-filter=".innovation">{{ __('Innovation') }}</li>
                        <li class="filter" data-role="button" data-filter=".financial">{{ __('Business') }}</li>
                        <li class="filter" data-role="button" data-filter=".transfer">{{ __('Transfer') }}</li>
                        <li class="filter" data-role="button" data-filter=".service">{{ __('Service') }}</li>
                    </ul>
                </div>

            </div>
            {{--            onclick="$('div.consulting').show(); $('div.text-filter:not(div.consulting)').hide()--}}
            <div class="row gallery-filters  clearfix">
                <!--Project Block One-->
                <div class="col-xs-12  filter-text all ">
                    <p class="mx-5 proyect-presentation-text">
                        
                                Ponemos a tu disposición un amplio y variado portafolio de Proyectos de Innovación, en
                                distintas
                                <a href="#"> temáticas </a> como oportunidad para asociarte a otros usuarios 
                                en algunas de las <a href="#"> modalidades </a> de innovación. <br>
                                En todos los casos, se pone a disposición de los interesados, los <a href="">
                                    servicios </a>
                                de asesoría de A+ Consultores
                                para el análisis y gestión del proyecto.
                           
                     
                    </p>
                </div>
                <!--Project Block One-->

                <!--Project Block One-->
                <div class="col-xs-12  filter-text consulting hide">
                    <p class="mx-5 proyect-presentation-text">
                        
                            
                                En este tipo de proyectos se forjan alianzas entre 2 o más <a href="#">
                                    Usuarios </a> que comparten y complementan habilidades y competencias para solucionar un determinado problema, con
                                iniciativas vinculadas a la estrategia de negocio y pretendiendo la sostenibilidad
                                financiara.
                            
                        
                    </p>
                </div>
                <!--Project Block One-->

                <!--Project Block One-->
                <div class="col-xs-12  filter-text financial hide">
                    <p class="mx-5 proyect-presentation-text">
                        
                            
                                En este tipo de proyecto, se busca que uno o varios usuarios financien la
                                ejecución de
                                un proyecto.
                            
                        
                    </p>
                </div>
                <!--Project Block One-->

                <!--Project Block One-->
                <div class="col-xs-12  filter-text innovation hide">
                    <p class="mx-5 proyect-presentation-text">
                        
                            
                                En este tipo de proyecto existe el aporte de resultados de la investigación o de
                                cualquier otro tipo de conocimiento científico y se busca que otros
                                usuarios garanticen
                                su concresión como nuevo producto, servicio o proceso, o la mejora de
                                existentes.
                            
                        
                    </p>
                </div>
                <!--Project Block One-->

                <!--Project Block One-->
                <div class="col-xs-12  filter-text transfer hide">
                    <p class="mx-5 proyect-presentation-text">
                        
                            
                                En este tipo de proyecto un usuario oferta una <a href="#"> tecnología </a>, un negocio,
                                un modelo de negocio para ser asimilado por uno o varios usuarios en el
                                desarrollo de un nuevo proyecto.
                            
                        
                    </p>
                </div>
                <!--Project Block One-->

                <!--Project Block One-->
                <div class="col-xs-12  filter-text service hide">
                    <p class="mx-5 proyect-presentation-text">
                        
                            
                                En este tipo de proyecto un usuario solicita que otro usuario le de un servicio para
                                lograr objetivos concretos, en un lapso de tiempo y con <a href="#"> financiamiento </a> acordado.
                            
                        
                    </p>
                </div>
                <!--Project Block One-->
            </div>


            <div class="filter-list row clearfix">

                <!--Project Block One-->

                <div
                    class="col-lg-3 col-md-4 col-sm-6 col-xs-12 project-block-one mix all consulting financial">
                    <div class="services-block-eleven mar-bottom-0">
                        <div class="inner-box img-holder">
                            <figure class="image-box">
                                <img src="images/gallery/proj-1.jpg" alt="">

                                <div class="icon-box">
                                    <span class="icon-luxury"></span>
                                </div>

                                <a href="{{ route('projects.show') }}" class="overlay-box">
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
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 project-block-one mix all transfer consulting">
                    <div class="services-block-eleven mar-bottom-0">
                        <div class="inner-box img-holder">
                            <figure class="image-box">
                                <img src="images/gallery/proj-2.jpg" alt="">

                                <div class="icon-box">
                                    <span class="icon-luxury"></span>
                                </div>

                                <a href="{{ route('projects.show') }}" class="overlay-box">
                                    <span class="icon fa fa-link"></span>
                                </a>
                            </figure>
                            <div class="lower-content grey-bg">
                                <h3><a href="{{ route('projects.show') }}">Financial Markert</a></h3>
                                <div class="text">Finance</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Project Block One-->
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 project-block-one mix all financial innovation">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="images/gallery/proj-3.jpg" alt="">
                            <a href="{{ route('projects.show') }}" class="overlay-box">
                                <span class="icon fa fa-link"></span>
                            </a>
                        </figure>
                        <div class="lower-content grey-bg">
                            <h3><a href="{{ route('projects.show') }}">Investment Plan</a></h3>
                            <div class="text">Investment</div>
                        </div>
                    </div>
                </div>

                <!--Project Block One-->
                <div
                    class="col-lg-3 col-md-4 col-sm-6 col-xs-12 project-block-one mix all  innovation consulting">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="images/gallery/proj-4.jpg" alt="">
                            <a href="{{ route('projects.show') }}" class="overlay-box">
                                <span class="icon fa fa-link"></span>
                            </a>
                        </figure>
                        <div class="lower-content grey-bg">
                            <h3><a href="{{ route('projects.show') }}">Foreign Exchange</a></h3>
                            <div class="text">Business</div>
                        </div>
                    </div>
                </div>

                <!--Project Block One-->
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 project-block-one mix all  service">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="images/gallery/proj-5.jpg" alt="">
                            <a href="{{ route('projects.show') }}" class="overlay-box">
                                <span class="icon fa fa-link"></span>
                            </a>
                        </figure>
                        <div class="lower-content grey-bg">
                            <h3><a href="{{ route('projects.show') }}">Investment Plan</a></h3>
                            <div class="text">Investment</div>
                        </div>
                    </div>
                </div>

                <!--Project Block One-->
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 project-block-one mix all consulting service transfer">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="images/gallery/proj-6.jpg" alt="">
                            <a href="{{ route('projects.show') }}" class="overlay-box">
                                <span class="icon fa fa-link"></span>
                            </a>
                        </figure>
                        <div class="lower-content grey-bg">
                            <h3><a href="{{ route('projects.show') }}">Foreign Exchange</a></h3>
                            <div class="text">Business</div>
                        </div>
                    </div>
                </div>

                <!--Project Block One-->
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 project-block-one mix all growth business">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="images/gallery/proj-7.jpg" alt="">
                            <a href="{{ route('projects.show') }}" class="overlay-box">
                                <span class="icon fa fa-link"></span>
                            </a>
                        </figure>
                        <div class="lower-content grey-bg">
                            <h3><a href="{{ route('projects.show') }}">Income Tax Planning</a></h3>
                            <div class="text">Income Tax</div>
                        </div>
                    </div>
                </div>

                <!--Project Block One-->
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 project-block-one mix all growth finance business">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="images/gallery/proj-8.jpg" alt="">
                            <a href="{{ route('projects.show') }}" class="overlay-box">
                                <span class="icon fa fa-link"></span>
                            </a>
                        </figure>
                        <div class="lower-content grey-bg">

                            <h3><a href="{{ route('projects.show') }}">Financial Markert</a></h3>
                            <div class="text">Finance</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--Gallery Section End -->
@endsection

@push('scripts')
    <script>
        $(function () {
            // Set ALl tab active by default ...
            $('li.all').addClass('active')

            $('li.filter').on('click', function (e) {
                let eClass = $(this).data('filter')
                $('div.filter-text').addClass('hide')
                $('div.filter-text' + eClass).removeClass('hide')
            })
        })

    </script>
@endpush

