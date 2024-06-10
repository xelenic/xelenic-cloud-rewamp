<?php

namespace App\Admin\Controllers;

use App\Admin\Actions\Repos\RepoDetailsAction;
use App\Models\Repos;
use App\Services\RepoManagement\GithubService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use OpenAdmin\Admin\Auth\Database\Administrator;
use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Facades\Admin;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Layout\Content;
use OpenAdmin\Admin\Show;

class ReposController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Repos';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {

//        dd();

        self::feedRepoData(Admin::user()->github_token);
        $grid = new Grid(new Repos());
        $grid->model()->where('user_id', Admin::user()->id);



        $grid->column('name', __('Name'))->display(function ($name) {
            $str = '<svg height="15" aria-hidden="true" viewBox="0 0 16 16" version="1.1" width="32" data-view-component="true" class="octicon octicon-mark-github v-align-middle color-fg-default">
    <path d="M8 0c4.42 0 8 3.58 8 8a8.013 8.013 0 0 1-5.45 7.59c-.4.08-.55-.17-.55-.38 0-.27.01-1.13.01-2.2 0-.75-.25-1.23-.54-1.48 1.78-.2 3.65-.88 3.65-3.95 0-.88-.31-1.59-.82-2.15.08-.2.36-1.02-.08-2.12 0 0-.67-.22-2.2.82-.64-.18-1.32-.27-2-.27-.68 0-1.36.09-2 .27-1.53-1.03-2.2-.82-2.2-.82-.44 1.1-.16 1.92-.08 2.12-.51.56-.82 1.28-.82 2.15 0 3.06 1.86 3.75 3.64 3.95-.23.2-.44.55-.51 1.07-.46.21-1.61.55-2.33-.66-.15-.24-.6-.83-1.23-.82-.67.01-.27.38.01.53.34.19.73.9.82 1.13.16.45.68 1.31 2.69.94 0 .67.01 1.3.01 1.49 0 .21-.15.45-.55.38A7.995 7.995 0 0 1 0 8c0-4.42 3.58-8 8-8Z"></path>
</svg> <a href="'.$this->html_url.'" target="_blank" style="
    text-decoration: initial !important;
    color: #20211f;
    font-size: 15px;
">'.$name.'</a>';
            return $str;
        });
        $grid->column('full_name', __('Full name'));
        $grid->language()->display(function ($language) {
            $str = '<span class="badge rounded-pill bg-success">'.$language.'</span> ';
            return $str;
        });
        $grid->column('stargazers_count', __('Stargazers count'));
        $grid->actions(function ($actions) {

            $actions->showLabels(true);
            $actions->disableEdit();
            $actions->disableDelete();
            $actions->disableView();
            $actions->add(new RepoDetailsAction());
        });

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Content
     */
    protected function showDetails($id, Content $content)
    {
        $repoDetails = Repos::where('repo_id', $id)->where('user_id', Admin::user()->id)->first();
        return $content
            ->title(__('Xelenic Cloud'))
            ->view('backend.repo.repo_details',[
                'repoDetails' => $repoDetails,
            ]);
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Repos());
//        $getToken = getGithubTokens();
//        dd($getToken);

        $form->textarea('name', __('Name'));
        $form->textarea('full_name', __('Full name'));
        $form->textarea('description', __('Description'));
        $form->text('fork', __('Fork'));
        $form->url('url', __('Url'));
        $form->number('size', __('Size'));
        $form->number('stargazers_count', __('Stargazers count'));
        $form->number('watchers_count', __('Watchers count'));
        $form->text('language', __('Language'));
        $form->textarea('has_issues', __('Has issues'));
        $form->textarea('has_projects', __('Has projects'));
        $form->text('permissions', __('Permissions'));
        $form->textarea('license', __('License'));
        $form->textarea('repo_created_at', __('Repo created at'));
        $form->textarea('repo_updated_at', __('Repo updated at'));
        $form->textarea('repo_pushed_at', __('Repo pushed at'));
        $form->text('default_branch', __('Default branch'));
        $form->text('owner_details', __('Owner details'));
        $form->textarea('node_id', __('Node id'));
        $form->textarea('repo_id', __('Repo id'));
        $form->textarea('html_url', __('Html url'));

        return $form;
    }

    public function feedRepoData($token)
    {
        $getRepoDetails = new GithubService();
        $manage = $getRepoDetails->getUserRepositories($token);


        foreach ($manage as $item)
        {
            $repo = Repos::where('repo_id', $item['id'])->first();

            $updateTimeDifference = true;
            if ($repo) {
                $existingUpdateTime = \Carbon\Carbon::parse($repo->repo_updated_at);
                $currentUpdateTime = \Carbon\Carbon::parse($item['updated_at']);
                $updateTimeDifference = $currentUpdateTime->diffInMinutes($existingUpdateTime) > 10;
            }

            if (!$repo || $updateTimeDifference) {
                Repos::updateOrCreate(
                    [
                        'repo_id' => $item['id'],

                    ],
                    [
                        'name' => $item['name'],
                        'full_name' => $item['full_name'],
                        'description' => $item['description'],
                        'fork' => $item['fork'],
                        'url' => $item['url'],
                        'raw_details' => json_encode($item),
                        'size' => $item['size'],
                        'stargazers_count' => $item['stargazers_count'],
                        'watchers_count' => $item['watchers_count'],
                        'language' => $item['language'] ?: 'N/A',
                        'has_issues' => $item['has_issues'],
                        'has_projects' => $item['has_projects'],
                        'permissions' => json_encode($item['permissions']),
                        'license' => json_encode($item['license']),
                        'repo_created_at' => $item['created_at'],
                        'repo_updated_at' => $item['updated_at'],
                        'repo_pushed_at' => $item['pushed_at'],
                        'default_branch' => $item['default_branch'],
                        'owner_details' => json_encode($item['owner']),
                        'node_id' => $item['node_id'],
                        'html_url' => $item['html_url'],
                        'user_id' => Admin::user()->id,
                    ]
                );
            }
        }
    }

    public function show_details($slug ,Content $content)
    {
        return $content
            ->title(__('Xelenic Cloud'))
            ->view('backend.repo.repo_details');
    }

    public function deployWorkFlowUpdate(Request $request){
        $content = $request->deploy_workflow;
        Repos::where('user_id', Admin::user()->id)
            ->where('id', $request->repo_id)
            ->update(['deploy_workflow' => $content]);
        admin_success('Deploy WorkFlow Updated');
        return back();
    }

}
