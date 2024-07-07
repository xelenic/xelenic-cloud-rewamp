@extends('frontend.layouts.app')

@section('content')

    @section('title', $blog->title.' | Xelenic Cloud')

    <div class="container"><br>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('blog')}}">Blog</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$blog->title}}</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-12">
                <div class="card" style="margin-top: 60px">
                    <div class="card-body">
                        <h2 style="text-align: center">{{$blog->title}}</h2>
                        <br>
                        <div style="font-size: 20px">{!! $blog->content !!}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>





@endsection



