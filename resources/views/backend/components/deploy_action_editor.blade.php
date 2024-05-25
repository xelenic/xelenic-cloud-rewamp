<div class="card" style="
    border-style: solid;
    border-width: 1px;
    margin-bottom: 20px;
    border-color: #cdcdcd;
    border-radius: 10px;
    color: #454545;
">
    <div class="card-body">
        <h5>Create Deployment Workflows</h5>
        <small>Take control of your deployment process by creating custom workflows tailored to your needs. Define parameters,
            set up deployment triggers, and configure build commands to streamline your application deployment</small>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark bg-light" style="
    background: #3a96ff !important;
    color: white;
    height: 40px;
">
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#"> <i class="icon-forward"></i> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> <i class="icon-search"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="icon-server"></i></a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<form action="{{url('dashboard/repos/deploy-work-flow-update')}}" method="post">
    {{csrf_field()}}
    <input type="hidden" name="repo_id" value="{{$repoDetails->id}}">
    <textarea name="deploy_workflow" style="background: #232323;font-size: 12px;color: white;width: 100%;height: 500px;padding: 20px">{{$repoDetails->deploy_workflow}}</textarea>
    <button class="btn btn-primary">Update Workflow</button>
</form>

