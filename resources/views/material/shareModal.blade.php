@if(!isset($id))
<?php
    $url=$_SERVER["REQUEST_URI"];
    $arrayUrl=explode("/",$url);
    $counter=count($arrayUrl);
    if($counter>0)
    $id=$arrayUrl[$counter-1];
    else
    $id=-1;
?>
 @endif


<div class="myModalShare myModalHide" data-idShare={{ $id }}>


    <div class="myModalOverlay">
        <div class="myModalContent">

            @php($myUrl = url('/directory/detail/'.$id))
            @php($myTitle = "InnovaHub")

            <div class="shareon" data-url={{ $myUrl }} data-title={{ $myTitle }}>
                <a class="facebook"></a>
                <a class="email" href="mailto:?subject={{ $myTitle }}&amp;body={{ $myUrl }}"></a>
                <a class="pinterest" data-media="https://picsum.photos/500"></a>
                <a class="reddit"></a>
                <a class="telegram" data-text={{ $myTitle }}></a>
                <a class="twitter" data-via=""></a>
                <a class="mastodon" data-via=""></a>
                <a class="whatsapp"></a>
            </div>

        </div>
    </div>
</div>
