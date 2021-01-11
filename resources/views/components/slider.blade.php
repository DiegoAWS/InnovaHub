@isset($slides)
    <section class="main-slider">
        <div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_two_wrapper" data-source="gallery">
            <div class="rev_slider fullwidthabanner" id="rev_slider_two" data-version="5.4.1">
                <ul>
                    @foreach($slides as $key => $slide)
                        @include('components._slide_' . $key %2 )
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
@endisset

