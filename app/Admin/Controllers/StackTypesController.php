<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\StackTypes;

class StackTypesController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'StackTypes';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new StackTypes());

        $grid->column('id', __('Id'));
        $grid->column('stack', __('Stack'));
        $grid->column('language', __('Language'));
        $grid->column('deploy_script', __('Deploy script'));
        $grid->column('default_env_path', __('Default env path'));
        $grid->column('default_database_variables', __('Default database variables'));
        $grid->column('description', __('Description'));
        $grid->column('is_active', __('Is active'));
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
        $show = new Show(StackTypes::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('stack', __('Stack'));
        $show->field('language', __('Language'));
        $show->field('deploy_script', __('Deploy script'));
        $show->field('default_env_path', __('Default env path'));
        $show->field('default_database_variables', __('Default database variables'));
        $show->field('description', __('Description'));
        $show->field('is_active', __('Is active'));
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
        $form = new Form(new StackTypes());

        $form->text('stack', __('Stack'));
        $form->text('language', __('Language'));
        $form->table('files_structure', function ($table) {
            $table->text('files')->icon("icon-key");
            $table->select('type')->options([
                'file' => 'File',
                'dir' => 'Folder',
            ]);
        });



//        $form->text('files_structure', __('Files structure'));
        $form->text('deploy_script', __('Deploy script'));
        $form->textarea('default_env_path', __('Default env path'));
        $form->text('default_database_variables', __('Default database variables'));
//        $form->textarea('description', __('Description'));
//        $form->textarea('logo', __('Logo'));
        $form->switch('is_active', __('Is active'))->default(1);

        return $form;
    }
}
