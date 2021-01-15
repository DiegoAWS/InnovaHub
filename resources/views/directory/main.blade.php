<div id="directoryContainer" class="m-5">
  <div id="directorioView">

  <div class="searchBar my-5">


    @include("material.textField",["id"=>"searchName","label"=>"Nombre","class"=>"mx-5"])

    @include("material.textField",["id"=>"searchCateg","label"=>"Categoria","class"=>"mx-5"])

    <button type="button" class="btn btn-primary mx-5">Search</button>

  </div>

  <div class="directoryContent container-fluid my-5">

    <div class="row ">
      @php($cards = collect(
      [
      [
      'title' => 'HARDVARD University',
      'image' => '/imagesTest/Image0.jpg'
      ],
      [
      'title' => 'Combinado cárnico',
      'image' => '/imagesTest/Image1.jpg'
      ],
      [
      'title' => 'Poder popular Centro Habana y Havana Vieja',
      'image' => '/imagesTest/Image2.jpg'
      ],
      [
      'title' => 'CITMATEL',
      'image' => '/imagesTest/Image3.jpg'
      ],
      [
      'title' => 'Apple Corp. Inc International',
      'image' => '/imagesTest/Image4.jpg'
      ]
      ]
      ))


      @for ($i = 0; $i < 11; $i++) <div class="col-sm-6 col-md-4 col-lg-3">
        
          @include("material.card",
          [
          "id"=>$i,
          "stars"=>$i,
          "title"=>$cards[$i % 5]["title"],
          "image"=>$cards[$i % 5]["image"],
          "mainClass"=>"directoryCard"
          ])
      
    </div>
    @endfor




  </div>
  <div class="flex justify-end">


    <nav>
      <ul class="pagination">
        <li class="disabled"><a href="#"><span>&laquo;</span></a></li>
        <li class="active"><a href="#">1 </a></li>
        <li class=""><a href="#">2</a></li>
        <li class=""><a href="#">3</a></li>
        <li class=""><a href="#">4</a></li>
        <li class=""><a href="#">5</a></li>
        <li class=""><a href="#"><span> &raquo;</span></a></li>

      </ul>
    </nav>
  </div>
</div>
</div>
@include('directory.detail')
</div>