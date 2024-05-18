@extends('frontend.layouts.app')

@section('content')
    <div class="container">
        <div style="background: white;margin-top: 40px;/* height: 600px; */padding: 30px;">
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
                    <div style="">
                        <a class="dropdown-item" href="#" style="white-space: inherit !important;color: #797979;">
                            <h2 style="font-size: 26px;">Research and Development</h2>
                            <p>Whether your business is early in its journey or well on its way to
                                digital transformation, Google Cloud can help solve your toughest challenges.</p>
                        </a>
                    </div>


                </div>

                <div class="col-md-6" style="padding: 20px;/* margin-bottom: 20%; */">
                    <h2 style="font-size: 30px;text-align: center">Accelerate your digital transformation</h2>
                    <div style="text-align: center">Create your own account with Xelenic Cloud and Lets make</div>

                    <div class="container">
                        <form method="POST" action="{{url('register')}}">
                            {{csrf_field()}}
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
                            @csrf
                            <div>
                                <label style="text-align: left !important;" for="name"
                                       class="col-md-4 col-form-label text-md-right">{{__('Name')}}</label>
                                <input type="text" name="name" value="{{old('name')}}" class="form-control" required>
                            </div>
                            <div>
                                <label style="text-align: left !important;" for="name"
                                       class="col-md-4 col-form-label text-md-right">{{__('Email')}}</label>
                                <input type="email" name="email_address" value="{{old('email_address')}}" class="form-control" required>
                            </div>
                            <div>
                                <label style="text-align: left !important;" for="name"
                                       class="col-md-4 col-form-label text-md-right">{{__('Username')}}}</label>
                                <input type="text" name="username" value="{{old('username')}}" class="form-control" required>
                            </div>
                            <div>
                                <label style="text-align: left !important;" for="name"
                                       class="col-md-4 col-form-label text-md-right">{{__('Password')}}</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <div style="margin-top: 10px">
                                <input style="text-align: left !important;" type="checkbox" name="email_news_letters">
                                <label for="">{{__('Receive occasional product updates and announcements.')}}</label>
                            </div>
                            <div style="margin-top: 10px">
                                <input style="text-align: left !important;" type="checkbox" name="agreement" required>
                                <label for="">Agree our <a href="#">{{__('license and polices')}}</a> </label>
                            </div>

                            <div style="padding-top: 10px;text-align: center;margin-top: 20px;">
                                <button type="submit" class="btn btn-primary"  style="background: #0d6efd">{{__('Create new Account')}}</button>
                                <span>Or</span>
                                <a href="{{ route('auth.github') }}" class="btn btn-dark">
                                    <i style="color: white !important;" class="icon-server"></i> {{__('Sign in using Github')}}
                                </a>

                                <div style="margin-top: 20px;">
                                    <p>Do you have an existing account ?</p>
                                    <a href="{{url('login')}}" class="btn btn-primary" style="background: #0d6efd"> {{__('Sign in Xelenic')}} </a>
                                </div>

                            </div>


                        </form>
                    </div>


                </div>
            </div>
        </div>

    </div>
@endsection
