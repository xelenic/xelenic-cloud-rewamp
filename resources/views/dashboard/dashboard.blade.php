<div class="row">

    @foreach($product_list as $item)
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <div style="text-align: center">
                        <i class="{{$item->icon}}" style="font-size: 50px;"></i>
                    </div>
                    <h3 style="text-align: center;font-size: 20px;margin-bottom: -5px;margin-top: 30px;">{{$item->product_name}}</h3>
                    <div style="font-size: 11px;padding-top: 20px;text-align: center;">
                        {{substr($item->short_description,0,160)}}...
                    </div>
                </div>
            </div>
        </div>
    @endforeach


</div>
