@extends('frontend.layouts.app')

@section('content')
    <div style="background: url('https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/e10a24d0-0dfa-41d0-9868-fd0ccd245a99/d7lmemf-4c875e9a-c85f-4470-be46-785e59315ed9.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2UxMGEyNGQwLTBkZmEtNDFkMC05ODY4LWZkMGNjZDI0NWE5OVwvZDdsbWVtZi00Yzg3NWU5YS1jODVmLTQ0NzAtYmU0Ni03ODVlNTkzMTVlZDkuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.kCAlE95OTtqlmj-iQo1pBH5x5eFynuZNMJCxX923klw');height: 300px;filter: saturate(3.5);">
        <div class="container">
            <div style="text-align: center;color: white;padding-top: 120px;font-size: 40px;">
                Welcome to our products page
            </div>
        </div>
    </div>

    @include('frontend.common_components.item_grid', ['sectionTitle' => 'Features', 'gridItems' => $frontend_enabled_product_list->toArray()])



    @include('frontend.common_components.description_items', ['sectionTitle' => 'Tutorial and News', 'gridItems' => [
        [
            'name' => 'Tutorial',
            'description' => 'This is a tutorial on how to use our products. It is a step by step guide on how to use our products.
             It is a tutorial on how to use our products. It is a step by step guide on how to use our products. It is a tutorial
             on how to use our products. It is a step by step guide on how to use our products.',
             'image_url' => 'https://cdn.dribbble.com/users/1338391/screenshots/15339530/media/cb11372488dc560088b3e7df16546b65.jpg?resize=400x300&vertical=center',
             'button_text' => 'Learn More',
             'button_url' => 'asdasdasd'
        ],
        [
            'name' => 'Database',
            'description' => 'This is a database of our products. It is a list of all the products we have. It is a database of our products.
             It is a list of all the products we have. It is a database of our products. It is a list of all the products we have.',
             'image_url' => 'https://cdn.dribbble.com/users/1338391/screenshots/15339530/media/cb11372488dc560088b3e7df16546b65.jpg?resize=400x300&vertical=center',
             'button_text' => 'Learn More',
             'button_url' => 'aszxczxczxc'
        ],
        [
            'name' => 'Database',
            'description' => 'This is a database of our products. It is a list of all the products we have. It is a database of our products.
             It is a list of all the products we have. It is a database of our products. It is a list of all the products we have.',
             'image_url' => 'https://cdn.dribbble.com/users/1338391/screenshots/15339530/media/cb11372488dc560088b3e7df16546b65.jpg?resize=400x300&vertical=center',
             'button_text' => 'Learn More',
             'button_url' => 'aszxczxczxc'
        ],
        ]])

{{--        <h2>Categories</h2>--}}
{{--        <div class="card">--}}
{{--            <div class="card-body">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-12">--}}
{{--                        <div class="row">--}}
{{--                            @foreach($categories as $item)--}}
{{--                                <div class="col-md-4">--}}
{{--                                    <div class="card" style="margin-bottom: 22px;">--}}
{{--                                        <div class="card-header" style="background: #d3d3d2;">--}}
{{--                                            <h5 class="card-title">{{$item->product_name}}</h5>--}}
{{--                                        </div>--}}
{{--                                        <div class="card-body" style="text-align: center;background: whitesmoke;">--}}
{{--                                            <i class="icon-server" style="font-size: 60px;text-align: center;"></i>--}}
{{--                                            <p style="font-size: 13px;margin-top: 10px;background-color: gainsboro;padding: 10px;border-radius: 5px;">{{$item->description}}</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            @endforeach--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>


@endsection
