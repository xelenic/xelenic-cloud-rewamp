<?php

namespace App\Admin\Controllers;

use App\Admin\Actions\Project\ViewProjectAction;
use Illuminate\Http\Request;
use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Facades\Admin;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Layout\Content;
use OpenAdmin\Admin\Show;
use \App\Models\Projects;
use function Laravel\Prompts\pause;

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
     */
    protected function grid(Content $content)
    {
        $detail = $this->projectList();
        if ($this->hasHooks('alterDetail')) {
            $detail = $this->callHooks('alterDetail', $detail);
        }

        return $content
            ->title($this->title())
            ->description($this->description['show'] ?? trans('admin.show'))
            ->body($detail);
    }


    protected function detail($id,$page = null, $params = [])
    {
        $params['projectDetails'] = Projects::find($id);
        $params['page'] = $page;
        return view('backend.project.project_playground', $params);
    }

    public function projectList($params = [])
    {
        $params['projects'] = Projects::all();
        return view('backend.project.project_list', $params);
    }





    /**
     * Make a detail builder.
     *
     * @param mixed $id
     * @param string $page
     * @param mixed $contentr
     */
    public function viewData($id, $page, Content $contentr)
    {

        $detail = $this->detail($id,$page);
        if ($this->hasHooks('alterDetail')) {
            $detail = $this->callHooks('alterDetail', $detail);
        }

        return $contentr
            ->title($this->title())
            ->description($this->description['show'] ?? trans('admin.show'))
            ->body($detail);
    }


    public function projectListView(Content $contentr)
    {

        $detail = $this->projectList();
        if ($this->hasHooks('alterDetail')) {
            $detail = $this->callHooks('alterDetail', $detail);
        }

        return $contentr
            ->title($this->title())
            ->description($this->description['show'] ?? trans('admin.show'))
            ->body($detail);
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
