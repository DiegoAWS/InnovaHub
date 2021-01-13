<div class="thumbnail">
    <img 

    @if(!isset($i))
 src= "/imagesTest/Image0.jpg"
 @else
  src= "/imagesTest/Image{{ $i % 5 }}.jpg"
@endif
  
    class="imgCard"
    alt="...">
    <div class="caption">
      <h3>Thumbnail label</h3>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque reprehenderit labore iure, accusamus autem voluptatibus. </p>
      <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default"
          role="button">Button</a></p>
    </div>
  </div>