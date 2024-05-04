
<div class="container" style="padding-top: 40px;">
    <div class="row">
        <h2>{{$sectionTitle}}</h2>
        @foreach($gridItems as $gridItem)
            <div class="col-md-3">
                <div class="card" style="text-align: center;margin-bottom: 70px;">
                    <a href="{{url('products/'.$gridItem['slug'])}}" style="text-decoration:unset">
                        <div class="card-body">
                            <i class="{{$gridItem['icon']}}" style="font-size: 80px;/* margin-top: 20%; */color: grey"></i>
                            <h3>{{$gridItem['product_name']}}</h3>
                            <p style="overflow: hidden;height: 76px;font-size: 13px;">{{$gridItem['short_description']}}</p>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
