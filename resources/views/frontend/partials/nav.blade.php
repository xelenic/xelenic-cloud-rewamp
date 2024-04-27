<!-- nav.blade.php -->
<header class="custom-navbar navbar navbar-light bg-white p-0 align-items-stretch">
    <a class="navbar-brand menu-width container-md bg-semi-dark text-center" href="http://localhost:8000/dashboard">
        <span class="short"><b>Xe</b></span><span class="long"><b>Xelenic</b> Cloud</span>
    </a>
    <div class="d-flex flex-fill flex-wrap header-items">

        <ul class="nav navbar-nav hidden-sm visible-lg-block">
            <a style="color: white;font-style: normal;text-decoration: unset;" href="{{route('home')}}">Home</a>
        </ul>

        <ul class="nav navbar-nav hidden-sm visible-lg-block" id="products" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
            <button style="background-color: rgba(0, 0, 255, 0); border: none; color: white; ">Products</button>
        </ul>
        <ul class="dropdown-menu dropdown-menu-hover" aria-labelledby="products">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div style="padding: 20px;margin-top: 10%;margin-bottom: 20%;">
                            <h2 style="margin-bottom: 30px;font-size: 30px">Accelerate your digital transformation</h2>
                            <p style="font-size: 20px">Whether your business is early in its journey or well on its way to digital transformation,
                                Google Cloud can help solve your toughest challenges.</p>
                        </div>
                    </div>
                    <div class="col-md-6" style="border-style: solid;border-bottom: none;border-right: none;border-top: none;border-width: 1px;border-color: #e7e7e7;">
                        <li>
                            <a class="dropdown-item" href="/xelauth" style="white-space: inherit !important;color: #797979;">
                                    <h2 style="font-size: 26px;">XelAuth</h2>
                                    <p>Authentication API by Xelenic</p>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#" style="white-space: inherit !important;color: #797979;">
                                <h2 style="font-size: 26px;">Research and Development</h2>
                                <p>Whether your business is early in its journey or well on its way to
                                    digital transformation, Google Cloud can help solve your toughest challenges.</p>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#" style="white-space: inherit !important;color: #797979;">
                                <h2 style="font-size: 26px;">Multi Cloud Handler</h2>
                                <p>Whether your business is early in its journey or well on its way to
                                    digital transformation, Google Cloud can help solve your toughest challenges.</p>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#" style="white-space: inherit !important;color: #797979;">
                                <h2 style="font-size: 26px;">High Secure Cloud</h2>
                                <p>Whether your business is early in its journey or well on its way to
                                    digital transformation, Google Cloud can help solve your toughest challenges.</p>
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="#" style="white-space: inherit !important;color: #797979;">
                                <h2 style="font-size: 26px;">Student Packages</h2>
                                <p>Whether your business is early in its journey or well on its way to
                                    digital transformation, Google Cloud can help solve your toughest challenges.</p>
                            </a>
                        </li>

                    </div>
                </div>
            </div>

        </ul>

        <ul class="nav navbar-nav hidden-sm visible-lg-block" id="support" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
            Community
        </ul>
        <ul class="dropdown-menu dropdown-menu-hover" aria-labelledby="support">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div style="padding: 20px;margin-top: 10%;margin-bottom: 20%;">
                            <h2 style="margin-bottom: 30px;font-size: 30px">Accelerate your digital transformation</h2>
                            <p style="font-size: 20px">Whether your business is early in its journey or well on its way to digital transformation,
                                Google Cloud can help solve your toughest challenges.</p></div>
                    </div>
                    <div class="col-md-6" style="border-style: solid;border-bottom: none;border-right: none;border-top: none;border-width: 1px;border-color: #e7e7e7;">
                        <li>
                            <a class="dropdown-item" href="#" style="white-space: inherit !important;color: #797979;">
                                <h2 style="font-size: 26px;">Why use Xelenic Cloud</h2>
                                <p>Top Reason business choose us</p>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#" style="white-space: inherit !important;color: #797979;">
                                <h2 style="font-size: 26px;">Research and Development</h2>
                                <p>Whether your business is early in its journey or well on its way to
                                    digital transformation, Google Cloud can help solve your toughest challenges.</p>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#" style="white-space: inherit !important;color: #797979;">
                                <h2 style="font-size: 26px;">Multi Cloud Handler</h2>
                                <p>Whether your business is early in its journey or well on its way to
                                    digital transformation, Google Cloud can help solve your toughest challenges.</p>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#" style="white-space: inherit !important;color: #797979;">
                                <h2 style="font-size: 26px;">High Secure Cloud</h2>
                                <p>Whether your business is early in its journey or well on its way to
                                    digital transformation, Google Cloud can help solve your toughest challenges.</p>
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="#" style="white-space: inherit !important;color: #797979;">
                                <h2 style="font-size: 26px;">Student Packages</h2>
                                <p>Whether your business is early in its journey or well on its way to
                                    digital transformation, Google Cloud can help solve your toughest challenges.</p>
                            </a>
                        </li>

                    </div>
                </div>
            </div>
        </ul>

        <ul class="nav navbar-nav hidden-sm visible-lg-block">
            <a class="btn btn-dark" href="{{route('register')}}" style="height: 34px;margin-top: 11px;background: #7218a1;border: #00a65a;">Get Started</a>
        </ul>
    </div>
</header>
