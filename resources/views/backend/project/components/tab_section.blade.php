

@foreach(config('project.create_products.menu') as $menuItem)

    @if($page == $menuItem['uri'])
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{url('dashboard/project/'.$projectDetails->id.'/'.$menuItem['uri'])}}">{{$menuItem['title']}}</a>
        </li>
    @else
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{url('dashboard/project/'.$projectDetails->id).'/'.$menuItem['uri']}}">{{$menuItem['title']}}</a>
        </li>
    @endif



@endforeach




