@extends('frontend.layouts.app')

@section('content')





    <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    @if(count($sliders) > 0)
        <div class="container">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="margin-top: 66px">
                <div class="carousel-inner">
                    @foreach($sliders as $key => $slider)

                            <div class="carousel-item {{$key == 0 ? 'active' : ''}}">

                                @if($slider->feature_image)
                                    <a href="{{url('blog/'.$slider->slug)}}" style="text-decoration: none !important;">
                                        <div style="background: url('{{url('storage/'.$slider->feature_image)}}');height: 360px;background-position: center;background-repeat: no-repeat;background-size: cover;">
                                            <div class="row">
                                                <div class="col-md-6">

                                                </div>
                                                <div class="col-md-6">
                                                    <div style="color: white !important;padding-top: 23%;padding-bottom: 23%;background: #0000005c;padding-left: 10%;padding-right: 10%;">
                                                        <h2 style="text-decoration: none !important;">{{$slider->title}}</h2>
                                                        <p style="color: white;text-decoration: none !important;">{{getLimitedString($slider->content)}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                @endif
                            </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        @endif



    <div class="container">
        <div class="row" style="margin-top: 30px;">
            @foreach($nextPosts as $newPost)
                    <div class="col-4">
                        <a href="{{url('blog/'.$newPost->slug)}}" style="text-decoration: unset !important;">
                            <div class="card">
                                <div class="card-body">
                                    <div style="background: url('{{url('storage/'.$newPost->feature_image)}}');height: 170px;background-position: center;background-size: cover;margin-bottom: 20px;"></div>
                                    <h2 style="padding-bottom: 10px;text-decoration: unset !important;">{{$newPost->title}}</h2>
                                    <p style="text-decoration: unset !important;">{{getLimitedString($slider->content,160)}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
            @endforeach
        </div>
    </div>





@endsection



