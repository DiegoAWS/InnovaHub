<div class="thumbnail myCard @if(isset($mainClass)) {{ $mainClass }} @endif">

    <a href="/directory/detail/{{$id}}" data-navigo>
        <img id={{ $id }} @if(isset($image)) src={{ $image }} @else src="/imagesTest/Image0.jpg" @endif class="imgCard" alt="" />
        <a></a>

        <div class="caption">

            <div class="cardTitle"> @if(isset($title)) {{ $title }} @else {{ "Cabilla Corrugada" }} @endif
            </div>



            <div class="cardFooter">
                <a href="http://enlaces-business.softok2.mx/login" title="Productos">
                    <div class="cardCart cartIconButton"><i class="fa fa-shopping-cart fa-lg" aria-hidden="true"></i></div>
                </a>

                <div class="appointmentModalCardTrigger" data-id={{ $id }}  title="Calendario">
                    <div class="cardCalendar  cartIconButton"><i  class="fa fa-calendar-o fa-lg" aria-hidden="true"></i></div>
                </div>
                <div>

                    <div class="c-share">
                        <input class="c-share__input" type="checkbox" id="checkboxTitle{{ $id }}">
                        <label class="c-share__toggler" for="checkboxTitle{{ $id }}">
                            <span class="c-share__icon"></span>
                        </label>

                        <ul class="c-share_options">
                            <div class="shareon" data-title="InnovaHub">
                                <a class="facebook"></a>
                                <a class="email" href="mailto:?subject='InnovaHub'&amp;body={{ Request::url().'/details/'.$id}}"></a>
                                <a class="telegram" data-text={{ Request::url()  }}></a>
                                <a class="whatsapp" data-text={{ Request::url()  }}></a>
                            </div>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
</div>
