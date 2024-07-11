@extends('frontend.layouts.app')

@section('content')

    @section('title', $blog->title.' | Xelenic Cloud')

    @push('meta')
        <meta property="og:title" content="{{$blog->title}}" />
        <meta property="og:description" content="{{getLimitedString($blog->content,160)}}" />
        <meta property="og:image" content="{{url('storage/'.$blog->feature_image)}}" />
        <meta property="og:url" content="{{url('blog')}}" />
        <meta property="og:type" content="{{$blog->content}}" />
    @endpush
    <style>
        img{
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }
        li{
            font-size: 16px;
            padding-bottom: 20px;
        }
        h2{
            margin-bottom: 30px;
        }
        .nav li{
            padding-bottom: unset !important;
        }
        .dropdown-item h2{
            margin-bottom: unset !important;
        }
    </style>

    <div class="container"><br>


        <div class="row">
            <div class="col-4">
                <div class="">
                    <div class="card-body">
                        <h4>Recent Posts</h4>
                        <hr>
                        @foreach($blogPosts as $newPost)
                            <a href="{{url('blog/'.$newPost->slug)}}" style="text-decoration: unset !important;">
                                <div class="row">
                                    <div class="col-4">
                                        <div style="background: url('{{url('storage/'.$newPost->feature_image)}}');height: 100px;background-position: center;background-repeat: no-repeat;background-size: cover;">
                                            <div style="color: white !important;padding-top: 23%;padding-bottom: 23%;background: #0000005c;padding-left: 10%;padding-right: 10%;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <h6>{{$newPost->title}}</h6>
                                        <small>{{getLimitedString($newPost->content,160)}}</small>
                                    </div>
                                </div>
                            </a>
                            <hr>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-8" style="border-style: solid;border-width: 1px;border-color: #afc8e5;padding: 30px;">
                <div style="height:240px;padding-top: 100px;background: url('{{url('storage/'.$blog->feature_image)}}');text-align: center;background-position: center;background-repeat: no-repeat;background-size: cover;color: white;margin-bottom: 60px;">
                  <div style="background: #000000a6;padding-top: 10px;padding-bottom: 10px;">
                      <h1 style="text-align: center;font-size: 28px">{{$blog->title}}</h1>
                  </div>


                </div>

                <div style="font-size: 20px">{!! $blog->content !!}</div>

            </div>
        </div>
    </div>





@endsection



