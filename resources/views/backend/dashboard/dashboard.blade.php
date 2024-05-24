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



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="{{url('vendor/modals/modal.min.js')}}"></script>
