<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\ServerReligion;

class ServerReligionController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'ServerReligion';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ServerReligion());

        $grid->column('id', __('Id'));
        $grid->column('country_name', __('Country name'));
        $grid->column('status', __('Status'));
        $grid->column('description', __('Description'));
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
        $show = new Show(ServerReligion::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('country_name', __('Country name'));
        $show->field('status', __('Status'));
        $show->field('description', __('Description'));
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
        $form = new Form(new ServerReligion());

        $form->text('country_name', __('Country name'));
        $form->text('status', __('Status'));
        $form->textarea('description', __('Description'));

        return $form;
    }
}
