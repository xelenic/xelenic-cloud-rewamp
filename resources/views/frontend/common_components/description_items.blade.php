<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-header">
                {{$sectionTitle}}
            </div>
            <div class="card-body">
                <div class="row">
                    @foreach($gridItems  as $gridItemPosts)
                        <div class="col-md-4">
                            <a href="" style="text-decoration: unset !important;">
                                <div class="card" style="margin-bottom: 20px;border-style: solid !important;border-color: #e7e7e7 !important;border-width: 1px;">
                                    <div class="card-header">
                                        <div style="background: url('{{$gridItemPosts['image_url']}}');height: 180px;"></div>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            {{$gridItemPosts['name']}}
                                        </h5>

                                        <div style=" overflow: hidden;height: 120px;">{{$gridItemPosts['description']}}</div>
                                    </div>
                                    <a href="{{url($gridItemPosts['button_url'])}}" class="btn btn-primary">{{$gridItemPosts['button_text']}}</a>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>





