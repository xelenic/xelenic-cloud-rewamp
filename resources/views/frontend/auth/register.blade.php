<!-- index.blade.php -->
@extends('frontend.layouts.xelenic')

@section('content')
    <div class="container">
        <div style="background: white;margin-top: 40px;height: 600px;padding: 30px;">
            <div class="row" style="padding-top: 0px;">
                <div class="col-md-6"
                     style="border-style: solid;border-bottom: none;border-left: none;border-top: none;border-width: 1px;border-color: #e7e7e7;">

                    <div style="text-align: center;margin-top: 10px;">
                        <h1 style="font-size: 100px">Xelenic</h1>
                        <h2 style="margin-bottom: 30px;font-size: 20px">Accelerate your digital transformation</h2>
                    </div>

                    <div style="padding-top: 20px;">
                        <a class="dropdown-item" href="#" style="white-space: inherit !important;color: #797979;">
                            <h2 style="font-size: 26px;">Research and Development</h2>
                            <p>Whether your business is early in its journey or well on its way to
                                digital transformation, Google Cloud can help solve your toughest challenges.</p>
                        </a>
                    </div>
                    <div style="padding-top: 20px;">
                        <a class="dropdown-item" href="#" style="white-space: inherit !important;color: #797979;">
                            <h2 style="font-size: 26px;">Research and Development</h2>
                            <p>Whether your business is early in its journey or well on its way to
                                digital transformation, Google Cloud can help solve your toughest challenges.</p>
                        </a>
                    </div>


                </div>

                <div class="col-md-6" style="padding: 20px;margin-bottom: 20%;">
                    <h2 style="font-size: 30px;text-align: center">Accelerate your digital transformation</h2>
                    <div style="text-align: center">Create your own account with Xelenic Cloud and Lets make</div>

                    <div class="container">
                        <form method="POST" action="http://localhost:8000/register">
                            @csrf
                            <div>
                                <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div>
                                <label for="name" class="col-md-4 col-form-label text-md-right">Email</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div>
                                <label for="name" class="col-md-4 col-form-label text-md-right">Username</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div>
                                <label for="name" class="col-md-4 col-form-label text-md-right">Password</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div style="margin-top: 10px">
                                <input type="checkbox" name="">
                                <label for="">Receive occasional product updates and announcements.</label>
                            </div>
                            <div style="margin-top: 10px">
                                <input type="checkbox" name="">
                                <label for="">Agree our <a href="#">license and polices</a> </label>
                            </div>

                            <div style="padding-top: 10px;text-align: center;margin-top: 20px;">
                                <button type="submit" class="btn btn-primary">Create new Account</button>
                                <span>Or</span>
                                <button type="submit" class="btn btn-dark"><i style="color: white !important;"
                                                                              class="icon-server"></i> Sign in using
                                    Github
                                </button>
                            </div>


                        </form>
                    </div>


                </div>
            </div>
        </div>

    </div>
@endsection
