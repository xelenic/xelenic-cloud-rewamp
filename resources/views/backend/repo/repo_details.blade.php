<div style="background: #5f7bce;color: white;height: 179px;">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="card" style="margin-top: 30px;">
                    <div class="card-body">
                        <div style="text-align: center">
                            <div style="background: url('{{json_decode($repoDetails->raw_details)->owner->avatar_url}}');height: 160px;background-size: cover;background-position: center;background-repeat: no-repeat;margin: 0 auto;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div style="text-align: center">
                            <div style="margin-top: 10px;">
                                <a href="{{json_decode($repoDetails->raw_details)->html_url}}" class="btn btn-primary">View on Github</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div style="padding: 0px;margin-top: 4%;">
                    <h2 style="font-size: 30px">{{$repoDetails->name}}</h2>
                    <small>{{$repoDetails->full_name}}</small>
                    <div style="margin-top: 30px;">
                    </div>
                </div>
                <div class="card" style="">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <a class="btn btn-primary">Add to Existing Project</a>
                                <a class="btn btn-secondary">Deploy as a new project</a>
                                <a class="btn btn-secondary"><i class="icon-backward"></i></a>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Overview</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Deploy Actions</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Automatic Services</button>
                                    </li>
                                </ul>


                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade active show" style="color:black !important;" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="card">
                                            <div class="card-header">
                                                Overview
                                            </div>
                                            <div class="card-body">




                                                @include('backend.components.repo_overview')
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" style="color:black !important;"  id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="card">
                                            <div class="card-header">
                                                Deploy Actions
                                            </div>
                                            <div class="card-body">
                                                @include('backend.components.deploy_action_editor')
                                            </div>
                                        </div>

                                    </div>
                                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                        asdasds
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: -25px">

        </div>
    </div>
</div>
