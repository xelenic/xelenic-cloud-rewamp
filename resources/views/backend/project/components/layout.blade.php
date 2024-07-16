<div class="card">
    <div class="card-body">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            @stack('tabs_button')
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><i style="margin-right: 10px" class="icon-terminal"></i> Console</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><i style="margin-right: 10px" class="icon-plug"></i>Plugings</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false"><i style="margin-right: 10px" class="icon-cogs"></i>Settings</button>
            </li>
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
