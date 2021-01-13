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
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque reprehenderit labore iure, accusamus autem voluptatibus. Eveniet dolorem aliquid repellat quae nihil, facere dignissimos adipisci repudiandae, harum aperiam ab velit officia deserunt. Asperiores id pariatur natus aperiam sunt magnam enim, cumque, voluptas delectus culpa iusto sint quae quod facilis nemo accusantium?</p>
      <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default"
          role="button">Button</a></p>
    </div>
  </div>