
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary p-2">
        <a class="navbar-brand" href="/">
            <img src="{{url('xelenic_dark.png')}}" style="width: 145px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item dropdown dropdown-mega position-static">
                    <a class="nav-link" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">Products</a>
                    <div class="dropdown-menu shadow">
                        <div class="mega-content px-4">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-sm-4 col-md-6 py-4">
                                        <h4>Accelerate your digital transformation</h4>
                                        <p>Whether your business is early in its journey or well on its way to digital transformation, Google Cloud can help solve your toughest challenges.</p>
                                    </div>
                                    <div class="col-12 col-sm-4 col-md-6 py-4">
                                        <h5>Try Now</h5>
                                        <div class="list-group">
                                            @foreach($frontend_enabled_product_list as $product)
                                                <div>
                                                    <a class="dropdown-item" href="{{url('products/'.$product->slug)}}" style="white-space: inherit !important;color: #797979;">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <i class="{{$product->icon}}" style="font-size: 60px;"></i>
                                                            </div>
                                                            <div class="col-md-10">
                                                                <h2 style="font-size: 16px;">{{$product->product_name}}</h2>
                                                                <p style="white-space: pre-line;overflow: hidden;text-overflow: revert-layer;height: 50px;">{{$product->short_description}}</p>
                                                            </div>
                                                            <i class="icon-times"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown dropdown-mega position-static">
                    <a class="nav-link" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">Support Center</a>
                    <div class="dropdown-menu shadow">
                        <div class="mega-content px-4">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-sm-4 col-md-3 py-4">
                                        <h5>Pages</h5>
                                        <div class="list-group">
                                            <a class="list-group-item" href="#">Accomodations</a>
                                            <a class="list-group-item" href="#">Terms & Conditions</a>
                                            <a class="list-group-item" href="#">Privacy</a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-md-3 py-4">
                                        <h5>Card</h5>
                                        <div class="card">
                                            <img src="/frontend/assets/img/banner-image.jpg" class="img-fluid" alt="image">
                                            <div class="card-body">
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-md-3 py-4">
                                        <h5>About CodeHim</h5>
                                        <p><b>CodeHim</b> is one of the BEST developer websites that provide web designers and developers with a simple way to preview and download a variety of free code & scripts.</p>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-3 py-4">
                                        <h5>Damn, so many</h5>
                                        <div class="list-group">
                                            <a class="list-group-item" href="#">Accomodations</a>
                                            <a class="list-group-item" href="#">Terms & Conditions</a>
                                            <a class="list-group-item" href="#">Privacy</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
    </nav>
</header>
