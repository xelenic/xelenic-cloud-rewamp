<?php

namespace App\Admin\Controllers;

use App\Models\Packages;
use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;

class PackagesController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Packages';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Packages());

        $grid->column('id', __('Id'));
        $grid->column('package_name', __('Package name'));
        $grid->column('credits', __('Credits'));
        $grid->column('price', __('Price'));
        $grid->column('discount', __('Discount'));
        $grid->column('final_price', __('Final price'));
        $grid->column('status', __('Status'));
        $grid->column('package_type', __('Package type'));
        $grid->column('package_image', __('Package image'));
        $grid->column('description', __('Description'));
        $grid->column('short_description', __('Short description'));
        $grid->column('slug', __('Slug'));
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
        $show = new Show(Packages::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('package_name', __('Package name'));
        $show->field('credits', __('Credits'));
        $show->field('price', __('Price'));
        $show->field('discount', __('Discount'));
        $show->field('final_price', __('Final price'));
        $show->field('status', __('Status'));
        $show->field('package_type', __('Package type'));
        $show->field('package_image', __('Package image'));
        $show->field('description', __('Description'));
        $show->field('short_description', __('Short description'));
        $show->field('slug', __('Slug'));
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
        $form = new Form(new Packages());

        $form->tab('General', function ($form) {
            $form->text('package_name', __('Package name'));
            $form->ckeditor('description', __('Description'));
            $form->textarea('short_description', __('Short description'));
            $form->textarea('slug', __('Slug'));

            $form->select('status', __('Status'))->options([
                'active' => 'Active',
                'inactive' => 'Inactive',
            ]);
            $form->number('package_type', __('Package type'))->options([
                'For Student' => 'For Student',
                'For Business' => 'For Business',
            ]);
            $form->image('package_image', __('Package image'));
        });

        $form->tab('Pricing', function ($form) {
            $form->text('credits', __('Credits'));
            $form->number('price', __('Price'));
            $form->number('discount', __('Discount'));
            $form->number('final_price', __('Final price'));
        });








        return $form;
    }
}
