<div class="thumbnail myCard @if(isset($mainClass)) {{ $mainClass }} @endif">
    <img id={{ $id }} @if(isset($image)) src={{ $image }} @else src="/imagesTest/Image0.jpg" @endif class="imgCard" alt="" />


    <div class="caption">

        <div class="cardTitle"> @if(isset($title)) {{ $title }} @else {{ "Cabilla Corrugada" }} @endif
        </div>



        <div class="cardFooter">
            <a href="http://enlaces-business.softok2.mx/login" title="Productos">
                <div class="cardCart cartIconButton"><i class="fa fa-shopping-cart fa-lg" aria-hidden="true"></i></div>
            </a>

            <div class="cardShare  cartIconButton" data-idCard={{ $id }}>

                <i class="fa fa-share-alt" aria-hidden="true"></i></div>

            <div class="cardCalendar  cartIconButton"><i class="fa fa-calendar-o fa-lg" aria-hidden="true"></i></div>

        </div>
    </div>
</div>

@include("material.shareModal", [ "id"=>$id])
