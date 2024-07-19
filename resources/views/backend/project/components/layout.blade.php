<div class="card">
    <div class="card-body">
        <ul class="nav nav-tabs">

            @include('backend.project.components.tab_section')

        </ul>
        <br>
        <nav aria-label="breadcrumb" style="margin-left:36px;padding-top: 0px;padding-bottom: 0px;margin-bottom: 0px;">
            <ol class="breadcrumb" style="padding-top: 0px;padding-bottom: 0px;margin-bottom: 0px;">
                <li class="breadcrumb-item"><a href="{{url('dashboard/projects')}}" style="text-decoration: unset;">Projects</a></li>
                <li class="breadcrumb-item"><a href="{{url('dashboard/projects/'.$projectDetails->id)}}" style="text-decoration: unset;">{{$projectDetails->project_name}}</a></li></li>
                @stack('breadcrumb')
            </ol>
        </nav>

        @yield('project_content')
    </div>
</div>
