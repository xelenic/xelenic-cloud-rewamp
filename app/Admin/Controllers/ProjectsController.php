<?php

namespace App\Admin\Controllers;

use Illuminate\Http\Request;
use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Facades\Admin;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Layout\Content;
use OpenAdmin\Admin\Show;
use \App\Models\Projects;

class ProjectsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Projects';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Projects());

        $grid->column('id', __('Id'));
        $grid->column('project_name', __('Project name'));
        $grid->column('user_id', __('User id'));
        $grid->column('project_description', __('Project description'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
//        $grid->disableCreateButton();


        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     */
    protected function detail($id)
    {
        $newProject = Projects::find($id);
        return view('backend.project.project_playground', ['projectDetails' => $newProject]);
    }


    public function addBucketServer($id, Content $content)
    {
        $newProject = Projects::find($id);

        return $content->view('backend.project.bucket_server.create',['projectDetails' => $newProject]);
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Projects());
        $form->setView('backend.project.create');
        return $form;
    }

    public function custom_store(Request $request)
    {
        $project = new Projects();
        $project->project_name = $request->project_name;
        $project->project_description = $request->description;
        $project->user_id = Admin::user()->id;
        $project->save();

        return redirect('dashboard/projects/'.$project->id);
    }
}
