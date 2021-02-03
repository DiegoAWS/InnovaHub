<div class="inner-banner text-center" style="background-image: url({{asset('imagesTest/directoryHeader.jpg')}});">
    <div class="auto-container">
        <div class="box">
            <h3>Directorio</h3>
        </div><!-- /.box -->
        <div class="breadcumb-wrapper">
            <div class="clearfix">
                <div class="pull-left">
                    <ul class="list-inline link-list">
                        <li><a href="{{ route('home') }}">Inicio</a></li>
                        <li><a href="{{ route('directory') }}">Directorio</a></li>
                        <li>Universidad de Harvard</li>
                    </ul>
                </div>
                <div class="pull-right">
                    <div class="mx-5">
                        <div>
                            <?php
                            $url = $_SERVER["REQUEST_URI"];
                            $arrayUrl = explode("/", $url);
                            $counter = count($arrayUrl);
                            if ($counter > 0)
                                $id = $arrayUrl[$counter - 1];
                            else
                                $id = -1;
                            ?>
                            @php($myUrl = url('/directory/detail/'.$id))
                            @php($myTitle = "InnovaHub")
                            <!-- <div class="c-share">
                                <input class="c-share__input" type="checkbox" id="checkbox">
                                <label class="c-share__toggler" for="checkbox">
                                    <span class="c-share__icon"></span>
                                </label>

                                <ul class="c-share_options" data-title="">
                                    <div class="shareon" data-url={{ $myUrl }} data-title={{ $myTitle }}>
                                        <a class="facebook"></a>
                                        <a class="email fa fa-envelope-open-text" href="mailto:?subject={{ $myTitle }}&amp;body={{ $myUrl }}"></a>
                                        <a class="telegram" data-text={{ $myTitle }}></a>
                                        <a class="whatsapp"></a>
                                    </div>
                                </ul>
                            </div> -->

                        </div>
                    </div>
                </div><!-- /.pull-right -->
            </div><!-- /.container -->
        </div>
    </div><!-- /.container -->
</div>

<!--Gallery Section Two-->
<div class="case-single">
    <div class="auto-container">
        <div class="inner-box">
            <div class="row md-flex">
                <div class="col-md-8 col-sm-12">
                    <div class="h-full ">
                        <div class="borderB h-full">
                            <div class="enterpriseTitle">Universidad de Harvard</div>
                            <div class="scrollContainer">
                                <div class="scrollInner">
                                    <div class="detailsMainQuote">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius facere assumenda possimus architecmagnam esse, error dolorum totam maiores sed? Modi dolor porro animi nisi voluptates minima natus officiis eveniet illum numquam fugit consequatur mollitia ducimus eum nobis nulla vero amet quasi, repudiandae recusandae ullam ea eos, quod accusamus. Aperiam ut commodi assumenda ab enim veniam, ad, odit voluptatum quaerat tempore illum quos laborum provident. Mollitia, explicm ipsum dolor sit amet, consectetur adipisicing elit. Eius facere assumenda possimus architecmagnam esse, error dolorum totam maiores sed? Modi dolor porro animi nisi voluptates minima natus officiis eveniet illum numquam fugit consequatur mollitia ducimus eum nobis nulla vero amet quasi, repudiandae recusandae ullam ea eos, quod accusamus. Aperiam ut commodi assumenda ab enim veniam, ad, odit voluptatum quaerat tempore illum quos laborum provident. Mollitia, explicabo?</div>
                                </div>
                            </div>
                        </div>
                        <!-- <img src="images/gallery/gallery-30.jpg" alt="" class="h-full"> -->
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="h-50">
                        <img src="{{asset('imagesTest/logoEmpresaGenerico.jpg')}}" alt="" class="h-full contain">
                    </div>
                    <div class="h-50">
                        <img src="images/gallery/gallery-32.jpg" alt="" class="h-full">
                    </div>
                </div>
            </div>

            <div class="row clearfix mt-5">
                <div class="info-column col-lg-5 col-md-12 col-sm-12 col-xs-12">
                    <div class="inner-box">
                        <ul>
                            <li class="clearfix"><span>Sector</span>Infocomunicaciones / Servicios</li>
                            <li class="clearfix"><span>Tipo</span>Empresa Estatal</li>
                            <li class="clearfix"><span>Tamaño</span>+500 empleados</li>
                        </ul>
                    </div>
                    <div class="w-full flex justify-around mt-5">
                        <div class="flex">
                            <a href="http://enlaces-business.softok2.mx/login" title="Oportunidades">
                                <div class="handShakeIcon cartIconButton">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" fill="white">
                                        <path d="M519.2 127.9l-47.6-47.6A56.252 56.252 0 0 0 432 64H205.2c-14.8 0-29.1 5.9-39.6 16.3L118 127.9H0v255.7h64c17.6 0 31.8-14.2 31.9-31.7h9.1l84.6 76.4c30.9 25.1 73.8 25.7 105.6 3.8 12.5 10.8 26 15.9 41.1 15.9 18.2 0 35.3-7.4 48.8-24 22.1 8.7 48.2 2.6 64-16.8l26.2-32.3c5.6-6.9 9.1-14.8 10.9-23h57.9c.1 17.5 14.4 31.7 31.9 31.7h64V127.9H519.2zM48 351.6c-8.8 0-16-7.2-16-16s7.2-16 16-16 16 7.2 16 16c0 8.9-7.2 16-16 16zm390-6.9l-26.1 32.2c-2.8 3.4-7.8 4-11.3 1.2l-23.9-19.4-30 36.5c-6 7.3-15 4.8-18 2.4l-36.8-31.5-15.6 19.2c-13.9 17.1-39.2 19.7-55.3 6.6l-97.3-88H96V175.8h41.9l61.7-61.6c2-.8 3.7-1.5 5.7-2.3H262l-38.7 35.5c-29.4 26.9-31.1 72.3-4.4 101.3 14.8 16.2 61.2 41.2 101.5 4.4l8.2-7.5 108.2 87.8c3.4 2.8 3.9 7.9 1.2 11.3zm106-40.8h-69.2c-2.3-2.8-4.9-5.4-7.7-7.7l-102.7-83.4 12.5-11.4c6.5-6 7-16.1 1-22.6L367 167.1c-6-6.5-16.1-6.9-22.6-1l-55.2 50.6c-9.5 8.7-25.7 9.4-34.6 0-9.3-9.9-8.5-25.1 1.2-33.9l65.6-60.1c7.4-6.8 17-10.5 27-10.5l83.7-.2c2.1 0 4.1.8 5.5 2.3l61.7 61.6H544v128zm48 47.7c-8.8 0-16-7.2-16-16s7.2-16 16-16 16 7.2 16 16c0 8.9-7.2 16-16 16z" />
                                    </svg>
                                </div>
                            </a>
                            <div class="iconValueDetails">
                                30
                            </div>
                        </div>

                        <div class="flex mt-2">
                            <a href="http://enlaces-business.softok2.mx/login" title="Productos">
                                <div class="storeIcon cartIconButton">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" fill="#0064ff">
                                        <path d="M528.12 301.319l47.273-208C578.806 78.301 567.391 64 551.99 64H159.208l-9.166-44.81C147.758 8.021 137.93 0 126.529 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24h69.883l70.248 343.435C147.325 417.1 136 435.222 136 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-15.674-6.447-29.835-16.824-40h209.647C430.447 426.165 424 440.326 424 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-22.172-12.888-41.332-31.579-50.405l5.517-24.276c3.413-15.018-8.002-29.319-23.403-29.319H218.117l-6.545-32h293.145c11.206 0 20.92-7.754 23.403-18.681z" />
                                    </svg>
                                </div>
                            </a>
                            <div class="iconValueDetails">
                                10
                            </div>
                        </div>
                    </div>
                </div>
                <!--Content Column-->
                <div class="content-column col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <h2 class="color-blue">Contáctenos</h2>
                        <div class="text">Por favor contáctenos hoy? Nuestros expertos siempre están listos para ayudarles</div>
                        <div class="flex justify-around w-full">

                            <div class="mx-5">
                                <a href="http://enlaces-business.softok2.mx/login" title="Productos">
                                    <div class="squareIcon cartIconButton">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="white">
                                            <path d="M12 192h424c6.6 0 12 5.4 12 12v260c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V204c0-6.6 5.4-12 12-12zm436-44v-36c0-26.5-21.5-48-48-48h-48V12c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v52H160V12c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v52H48C21.5 64 0 85.5 0 112v36c0 6.6 5.4 12 12 12h424c6.6 0 12-5.4 12-12z" />
                                        </svg>
                                    </div>
                                </a>
                            </div>

                            <div class="mx-5">
                                <div>
                                    <?php
                                    $url = $_SERVER["REQUEST_URI"];
                                    $arrayUrl = explode("/", $url);
                                    $counter = count($arrayUrl);
                                    if ($counter > 0)
                                        $id = $arrayUrl[$counter - 1];
                                    else
                                        $id = -1;
                                    ?>
                                    @php($myUrl = url('/directory/detail/'.$id))
                                    @php($myTitle = "InnovaHub")
                                    <div class="c-share">
                                        <input class="c-share__input" type="checkbox" id="checkbox">
                                        <label class="c-share__toggler" for="checkbox">
                                            <span class="c-share__icon"></span>
                                        </label>

                                        <ul class="c-share_options" data-title="">
                                            <div class="shareon" data-url={{ $myUrl }} data-title={{ $myTitle }}>
                                                <a class="facebook"></a>
                                                <a class="email" href="mailto:?subject={{ $myTitle }}&amp;body={{ $myUrl }}"></a>
                                                <a class="telegram" data-text={{ $myTitle }}></a>
                                                <a class="whatsapp"></a>
                                            </div>
                                        </ul>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-lg-4  col-md-12 col-sm-12 col-xs-12 h-30v">
                    <div class="docWrapper">
                        <div class="docTitle">
                            Documentación
                        </div>
                        <div class="docScroll">
                            <div class="docItem">
                                <div class="itemExtension">PDF</div>
                                <div class="itemTitle">Resultados de la Investigación</div>
                                <div class="itemDownload"><i class="icPointer fa fa-download"></i></div>
                            </div>

                            <div class="docItem">
                                <div class="itemExtension">DOC</div>
                                <div class="itemTitle">Dossier de Servicios</div>
                                <div class="itemDownload"><i class="icPointer fa fa-download"></i></div>
                            </div>
                            <div class="docItem">
                                <div class="itemExtension">PPT</div>
                                <div class="itemTitle">Presentación Empresa</div>
                                <div class="itemDownload"><i class="icPointer fa fa-download"></i></div>
                            </div>

                            <div class="docItem">
                                <div class="itemExtension">RAR</div>
                                <div class="itemTitle">Paquete de Servicios</div>
                                <div class="itemDownload"><i class="icPointer fa fa-download"></i></div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <div class="mediaWrapper">
        @include("directory.medias")
    </div>

</div>
<!--Gallery Section End -->
