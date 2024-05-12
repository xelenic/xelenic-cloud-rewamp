<div class="" style="background: #e9edf2;padding: 10px">
    <div class="container">
        <div class="row">
            @foreach(\App\Models\Packages::where('status', 'active')->get() as $package)
                <div class="col-md-4">
                    <div style="height: 40px;background: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQMauLg84sHHPeZuYa8-o3IA2HQMu_F3H6YxCfhNet6xw&amp;s');background-size: cover;background-repeat: no-repeat;background-color: white;background-position: center;">

                    </div>
                    <div class="card">
                        <div class="card-header">Package 1</div>
                        <div class="card-body">
                            <p style="text-overflow: clip;overflow: hidden;height: 80px;">If you need to handle events like successful payments or refunds, set up webhook endpoints in your Laravel application to receive and process Stripe webhook events.</p>
                        </div>
                        <div class="card-footer">
                            <h4 style="text-align: right">USD {{number_format($package->price,2)}}</h4>
                            <button class="btn btn-primary">Purchase</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
