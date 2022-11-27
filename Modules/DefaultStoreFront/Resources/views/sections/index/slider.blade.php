<section>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-touch="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            @php

                $count_p = 0 ;
            @endphp
            @foreach ($product_photos as $item)
           
             @if ($count_p == 0)
                    <div class="carousel-item active">
                        <img src="{{  asset($item->link)}}" class="d-block w-100" alt="slide 1">
                    </div>
             @else
                    <div class="carousel-item">
                        <img src="{{  asset($item->link)}}" class="d-block w-100" alt="slide 1">
                    </div>
             @endif
          
             @php
               $count_p++
             @endphp
             
            @endforeach
           
            {{-- <div class="carousel-item">
                <img src="./images/slide2.png" class="d-block w-100" alt="slide 3">
            </div>
            <div class="carousel-item">
                <img src="./images/slide3.png" class="d-block w-100" alt="slide 3">
            </div> --}}
        </div>
    {{--     <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button> --}}
    </div>
</section>
