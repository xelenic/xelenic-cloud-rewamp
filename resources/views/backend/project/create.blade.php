<div class="row">
    <div class="col-md-9">
        <div class="card">
            <div class="card-body"><br>
                <div style="">
                    <h2>Start Your Journey with Xelenic Cloud Platform</h2>
                    <br>
                    <p> Creating a new project is the first step towards leveraging our cutting-edge cloud services. Whether
                        you're developing a small application or deploying a complex infrastructure, our platform provides
                        the tools and resources you need to succeed.</p>
                </div>

                <div class="card">
                    <div class="card-body">
                        <form action="{{admin_url('project/create/action-create')}}" method="POST">
                            {{csrf_field()}}

                            <div class="form-group">
                                <label>Project Name</label><br>
                                <small>Choose a unique name for your project. This name will help you identify and manage your project easily.</small>
                                <input type="text" class="form-control" name="project_name">
                            </div>

                            <br>
                            <div class="form-group">
                                <label>Description</label><br>
                                <small>Provide a brief description of your project. This will help team members and collaborators understand the purpose and scope of your project.</small>
                                <textarea style="height: 200px" name="description" class="form-control"></textarea>
                            </div>
                            <br>

                            <button type="submit" class="btn btn-secondary">Create Project</button>
                            <a href="{{url('dashboard/projects')}}" class="btn btn-primary">Cancel</a>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <div class="card">
                    <div class="card-body">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href="#billing-payments">Billing and Payments</a>
                                <ul>
                                    <li><a href="#understanding-billing">Understanding your billing</a></li>
                                    <li><a href="#managing-credits">Adding and managing credits</a></li>
                                    <li><a href="#payment-methods">Payment methods and invoices</a></li>
                                </ul>
                            </li>
                            <li><a href="#security-compliance">Security and Compliance</a>
                                <ul>
                                    <li><a href="#data-security">Data security measures</a></li>
                                    <li><a href="#compliance-certifications">Compliance certifications</a></li>
                                    <li><a href="#data-privacy">User data privacy</a></li>
                                </ul>
                            </li>
                            <li><a href="#updates-announcements">Updates and Announcements</a>
                                <ul>
                                    <li><a href="#latest-updates">Latest platform updates</a></li>
                                    <li><a href="#upcoming-features">Upcoming features</a></li>
                                    <li><a href="#release-notes">Release notes</a></li>
                                </ul>
                            </li>
                            <li><a href="#tutorials-examples">Tutorials and Examples</a>
                                <ul>
                                    <li><a href="#step-by-step">Step-by-step tutorials</a></li>
                                    <li><a href="#sample-projects">Sample projects</a></li>
                                    <li><a href="#code-examples">Code examples</a></li>
                                </ul>
                            </li>
                        </ul>

                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

