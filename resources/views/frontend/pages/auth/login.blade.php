<!-- index.blade.php -->
@extends('frontend.layouts.app')

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
                        <form method="POST" action="{{ route('login.post') }}">
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger"
                                     style="/* height: 50px; */margin-top: 20px;background: #dc3545;color: white;font-size: 14px;margin-bottom: 20px;padding-bottom: unset;">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div>
                                <label for="username" class="col-md-4 col-form-label text-md-right">Username</label>
                                <input type="text" name="username" class="form-control">
                                @error('username')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                <input type="password" name="password" class="form-control">
                                @error('password')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div style="margin-top: 10px">
                                <input type="checkbox" name="remember_me">
                                <label for="">Remember me</label>
                            </div>


                            <div style="padding-top: 10px;text-align: center;margin-top: 20px;">
                                <button type="submit" class="btn btn-primary">Login your Xelenic Console</button>
                                <span>Or</span>
                                <button type="submit" class="btn btn-dark"><i style="color: white !important;"
                                                                              class="icon-server"></i> Sign in using
                                    Github
                                </button>
                            </div>

                            <div style="padding-top: 10px;text-align: center;margin-top: 20px;">
                                <a href="{{ route('register') }}">Create an account? Register</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
