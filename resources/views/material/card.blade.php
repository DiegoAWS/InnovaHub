<div class="thumbnail myCard @if(isset($mainClass)) {{ $mainClass }} @endif" id={{ $id }}>
  <img @if(isset($image)) src={{ $image }} @else src="/imagesTest/Image0.jpg" @endif class="imgCard" alt="" />


  <div class="caption">

    <div class="cardTitle"> @if(isset($title)) {{ $title }} @else {{ "Cabilla Corrugada" }} @endif
      <div class="cardShare"> <i class="fa fa-share-alt" aria-hidden="true"></i></div>
    </div>

    <div class="cardFooter">

      <div class="cardCart"><i class="fa fa-shopping-cart fa-lg" aria-hidden="true"></i></div>

      <div class="cardStars">
        @for ($i = 0; $i < 5; $i++) @if(!isset($stars)) <i class="fa fa-star-o" aria-hidden="true"></i>
          @else

          @if($stars-1 > $i*2) <i class="fa fa-star" aria-hidden="true"></i>
          @endif

          @if($stars -1==$i*2)
          <i class="fa fa-star-half-o" aria-hidden="true"></i>
          @endif

          @if($stars-1 <$i*2) <i class="fa fa-star-o" aria-hidden="true"></i>
            @endif
            @endif
            @endfor

      </div>

      <div class="cardCalendar"><i class="fa fa-calendar-o fa-lg" aria-hidden="true"></i></div>

    </div>
  </div>
</div>