
<link rel="stylesheet" href="{{url('vendor/modals/bootstrap.css')}}">


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width: -webkit-fill-available;width: 1280px;">
        <div class="modal-content">
            <div class="modal-body" style="margin-left: 70px; margin-right: 70px;">
                <h3 style="padding-bottom: 10px;">Create Cloud Server</h3>
                <p>Cloud box are virtual machines that anyone can setup in seconds. You can use cloud server, either standalone or as part of a larger, cloud based infrastructure.</p>

                <div>
                    <h4 style="padding-top: 10px;">Repositories</h4>
                    <input type="text" class="form-control" value="{{$repoDetails->name}}">
                </div>


                <div style="height: 10px;"></div>
                <h4 style="padding-top: 10px;">Choose Region</h4>



                <div class="row" style="background: #f5faff;padding: 20px;padding-bottom: 10px;border-radius: 15px;">
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <input type="radio" name="country" id="ukraine" style="display: none">
                                <label for="ukraine" class="d-flex align-items-center" style="margin-bottom: 0px;">
                                    <div class="mr-2" style="background: url('https://flagcdn.com/w80/us.png');height: 20px;width: 30px;background-repeat: no-repeat;background-size: contain;margin-right: 10px;"></div>
                                    <h5 class="mb-0" style="margin:inherit;">New York</h5>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <input type="radio" name="country" id="ukraine" style="display: none">
                                <label for="ukraine" class="d-flex align-items-center" style="margin-bottom: 0px;">
                                    <div class="mr-2" style="background: url('https://flagcdn.com/w80/us.png');height: 20px;width: 30px;background-repeat: no-repeat;background-size: contain;margin-right: 10px;"></div>
                                    <h5 class="mb-0" style="margin:inherit;">San Francisco</h5>

                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <input type="radio" name="country" id="ukraine" style="display: none">
                                <label for="ukraine" class="d-flex align-items-center" style="margin-bottom: 0px;">
                                    <div class="mr-2" style="background: url('https://flagcdn.com/w80/nl.png');height: 20px;width: 30px;background-repeat: no-repeat;background-size: contain;margin-right: 10px;"></div>
                                    <h5 class="mb-0" style="margin:inherit;">Amsterdam</h5>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <input type="radio" name="country" id="ukraine" style="display: none">
                                <label for="ukraine" class="d-flex align-items-center" style="margin-bottom: 0px;">
                                    <div class="mr-2" style="background: url('https://flagcdn.com/w80/sg.png');height: 20px;width: 30px;background-repeat: no-repeat;background-size: contain;margin-right: 10px;"></div>
                                    <h5 class="mb-0" style="margin:inherit;">Singapore</h5>

                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <input type="radio" name="country" id="ukraine" style="display: none">
                                <label for="ukraine" class="d-flex align-items-center" style="margin-bottom: 0px;">
                                    <div class="mr-2" style="background: url('https://flagcdn.com/w80/gb.png');height: 20px;width: 30px;background-repeat: no-repeat;background-size: contain;margin-right: 10px;"></div>
                                    <h5 class="mb-0" style="margin:inherit;">London</h5>

                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <input type="radio" name="country" id="ukraine" style="display: none">
                                <label for="ukraine" class="d-flex align-items-center" style="margin-bottom: 0px;">
                                    <div class="mr-2" style="background: url('https://flagcdn.com/w80/gr.png');height: 20px;width: 30px;background-repeat: no-repeat;background-size: contain;margin-right: 10px;"></div>
                                    <h5 class="mb-0" style="margin:inherit;">Frankfurt</h5>

                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <input type="radio" name="country" id="ukraine" style="display: none">
                                <label for="ukraine" class="d-flex align-items-center" style="margin-bottom: 0px;">
                                    <div class="mr-2" style="background: url('https://flagcdn.com/w80/ca.png');height: 20px;width: 30px;background-repeat: no-repeat;background-size: contain;margin-right: 10px;"></div>
                                    <h5 class="mb-0" style="margin:inherit;">Toronto</h5>

                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <input type="radio" name="country" id="ukraine" style="display: none">
                                <label for="ukraine" class="d-flex align-items-center" style="margin-bottom: 0px;">
                                    <div class="mr-2" style="background: url('https://flagcdn.com/w80/in.png');height: 20px;width: 30px;background-repeat: no-repeat;background-size: contain;margin-right: 10px;"></div>
                                    <h5 class="mb-0" style="margin:inherit;">Bangalore</h5>

                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <input type="radio" name="country" id="ukraine" style="display: none">
                                <label for="ukraine" class="d-flex align-items-center" style="margin-bottom: 0px;">
                                    <div class="mr-2" style="background: url('https://flagcdn.com/w80/au.png');height: 20px;width: 30px;background-repeat: no-repeat;background-size: contain;margin-right: 10px;"></div>
                                    <h5 class="mb-0" style="margin:inherit;">Sydney</h5>

                                </label>
                            </div>
                        </div>
                    </div>
                </div>


                <div style="height: 10px;"></div>

                <div>
                    <h4 style="padding-top: 10px;">Data Center</h4>
                    <p>All resources created in this datacenter will be members of the same VPC network. They can communicate securely over their Private IP addresses.</p>
                </div>





            </div>
        </div>
    </div>
</div>



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
                                <a class="btn btn-primary"  data-toggle="modal" data-target="#myModal">Add to Existing Project</a>
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


                                @include('backend.dialogs.explore_github_workflows')

                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade active show" style="color:black !important;" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="card">
                                            <div class="card-header">
                                                Overview
                                            </div>
                                            <div class="card-body">





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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
