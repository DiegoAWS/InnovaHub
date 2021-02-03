
<div id="directoryContainer" class="auto-container">
    <div id="directorioView">

        <div class="my-xs-2 my-sm-3 my-md-4 my-xl-5 container-fluid">
            <div class="row">

                <div class="col-xs-12 col-md-4">
                    @include("material.textField",
                    [
                    "id"=>"searchName",
                    "label"=>__('Name'),
                    "class"=>"",
                    "inputClass"=>""
                    ]
                    )
                </div>
                <div  class="col-xs-12 col-md-6 mt-xs-3 mt-md-0">
                <div id="multiSelect2">
                </div>
                </div>
                <div class=" col-xs-12 col-md-2 mt-xs-1 mt-xs-3 mt-md-0" style="height:37px;">
                    <button id="searchDirectoryButton" type="button" class="btn btn-primary w-full h-full">{{__('Search')}}</button>
                </div>
            </div>
        </div>

        <div class="directoryContent container-fluid my-xs-2 my-sm-3 my-md-4 my-xl-5">

            <div class="row ">
                @php($cards = collect([
                [
                'title' => 'HARDVARD University',
                'image' => '/imagesTest/Image0.jpg',
                ],
                [
                'title' => 'Combinado cárnico',
                'image' => '/imagesTest/Image1.jpg',
                ],
                [
                'title' => 'Poder popular Centro Habana y Havana Vieja',
                'image' => '/imagesTest/Image2.jpg',
                ],
                [
                'title' => 'CITMATEL',
                'image' => '/imagesTest/Image3.jpg',
                ],
                [
                'title' => 'Apple Corp. Inc International',
                'image' => '/imagesTest/Image4.jpg',
                ],
                ]))


                @for ($i = 0; $i < 11; $i++)
                <div class="col-sm-6 col-md-4 col-lg-3 directoryCardWrapper" id="{{ $i }}">

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
</div>
<div id="detailsView" class="mx-5 auto-container">
    @include('directory.details')
</div>
