<style>
    .iconcolumn:hover {
        font-size: 100px;
        filter: drop-shadow(1px 55px 77px black);
        transition: 0.5s;
    }
    .iconcolumn{
        filter: grayscale(1) sepia(14) hue-rotate(173deg) contrast(0.9);
    }
</style>



<section class="py-5 border-bottom" id="features" style="background-color: white">
    <div class="container px-5 my-5">
        <div class="row gx-5">
            @foreach($features as $featureItem)
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="featuretext-white rounded-3 mb-3" style="text-align: center">
                        <img class="iconcolumn" src="{{$featureItem['icon']}}" style="height: 100px;" alt="..." class="feature-icon">
                    </div>
                    <h2 class="h4 fw-bolder" style="text-align: center">{{$featureItem['title']}}</h2>
                    <p style="text-align: center">{{$featureItem['description']}}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>


