<?php

namespace App\Admin\Controllers;

use App\Models\Repos;
use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
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
        $grid = new Grid(new Repos());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('full_name', __('Full name'));
        $grid->column('description', __('Description'));
        $grid->column('fork', __('Fork'));
        $grid->column('url', __('Url'));
        $grid->column('size', __('Size'));
        $grid->column('stargazers_count', __('Stargazers count'));
        $grid->column('watchers_count', __('Watchers count'));
        $grid->column('language', __('Language'));
        $grid->column('has_issues', __('Has issues'));
        $grid->column('has_projects', __('Has projects'));
        $grid->column('permissions', __('Permissions'));
        $grid->column('license', __('License'));
        $grid->column('repo_created_at', __('Repo created at'));
        $grid->column('repo_updated_at', __('Repo updated at'));
        $grid->column('repo_pushed_at', __('Repo pushed at'));
        $grid->column('default_branch', __('Default branch'));
        $grid->column('owner_details', __('Owner details'));
        $grid->column('node_id', __('Node id'));
        $grid->column('repo_id', __('Repo id'));
        $grid->column('html_url', __('Html url'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Repos::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('full_name', __('Full name'));
        $show->field('description', __('Description'));
        $show->field('fork', __('Fork'));
        $show->field('url', __('Url'));
        $show->field('size', __('Size'));
        $show->field('stargazers_count', __('Stargazers count'));
        $show->field('watchers_count', __('Watchers count'));
        $show->field('language', __('Language'));
        $show->field('has_issues', __('Has issues'));
        $show->field('has_projects', __('Has projects'));
        $show->field('permissions', __('Permissions'));
        $show->field('license', __('License'));
        $show->field('repo_created_at', __('Repo created at'));
        $show->field('repo_updated_at', __('Repo updated at'));
        $show->field('repo_pushed_at', __('Repo pushed at'));
        $show->field('default_branch', __('Default branch'));
        $show->field('owner_details', __('Owner details'));
        $show->field('node_id', __('Node id'));
        $show->field('repo_id', __('Repo id'));
        $show->field('html_url', __('Html url'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Repos());

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
}
