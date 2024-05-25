<?php

namespace App\Admin\Controllers;

use App\Models\ServerSizeList;
use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;

class ServerSizeListController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'ServerSizeList';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ServerSizeList());

        $grid->column('id', __('Id'));
        $grid->column('slug', __('Slug'));
        $grid->column('memory', __('Memory'));
        $grid->column('disk', __('Disk'));
        $grid->column('transfer', __('Transfer'));
        $grid->column('price_monthly', __('Price monthly'));
        $grid->column('price_hourly', __('Price hourly'));
        $grid->column('regions', __('Regions'));
        $grid->column('vcpus', __('Vcpus'));
        $grid->column('description', __('Description'));
        $grid->column('synced_time', __('Synced time'));
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
        $show = new Show(ServerSizeList::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('slug', __('Slug'));
        $show->field('memory', __('Memory'));
        $show->field('disk', __('Disk'));
        $show->field('transfer', __('Transfer'));
        $show->field('price_monthly', __('Price monthly'));
        $show->field('price_hourly', __('Price hourly'));
        $show->field('regions', __('Regions'));
        $show->field('vcpus', __('Vcpus'));
        $show->field('description', __('Description'));
        $show->field('synced_time', __('Synced time'));
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
        $form = new Form(new ServerSizeList());

        $form->textarea('slug', __('Slug'));
        $form->textarea('memory', __('Memory'));
        $form->textarea('disk', __('Disk'));
        $form->textarea('transfer', __('Transfer'));
        $form->decimal('price_monthly', __('Price monthly'));
        $form->decimal('price_hourly', __('Price hourly'));
        $form->text('regions', __('Regions'));
        $form->textarea('vcpus', __('Vcpus'));
        $form->textarea('description', __('Description'));
        $form->time('synced_time', __('Synced time'))->default(date('H:i:s'));

        return $form;
    }
}
