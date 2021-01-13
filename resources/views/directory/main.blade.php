<div class="directoryContainer m-5">

  <div class="searchBar my-5">


    @include('material.textField',["id"=>"searchName","label"=>"Name","class"=>"mx-5"])

    @include('material.textField',["id"=>"searchCateg","label"=>"Category","class"=>"mx-5"])

    <button type="button" class="btn btn-primary mx-5">Search</button>

  </div>

  <div class="directoryContent container-fluid my-5">

    <div class="row ">
      @for ($i = 0; $i < 11; $i++) <div class="col-sm-6 col-md-4 col-lg-3">
        @include('material.card',["i"=>$i])
    </div>
    @endfor




  </div>
  <div class="flex justify-end">


    <nav>
      <ul class="pagination">
        <li class="disabled"><a href="#" ><span>&laquo;</span></a></li>
        <li class="active"><a href="#">1 </a></li>
        <li class=""><a href="#">2</a></li>
        <li class=""><a href="#">3</a></li>
        <li class=""><a href="#">4</a></li>
        <li class=""><a href="#">5</a></li>
        <li class=""><a href="#" ><span> &raquo;</span></a></li>
       
      </ul>
    </nav>
  </div>
</div>
</div>