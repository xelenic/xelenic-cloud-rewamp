<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\ProductCategory;

class ProductCategoryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'ProductCategory';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ProductCategory());

        $grid->column('id', __('Id'));
        $grid->column('product_name', __('Product name'));
        $grid->column('description', __('Description'));
        $grid->column('meta_tags', __('Meta tags'));
        $grid->column('meta_description', __('Meta description'));
        $grid->column('category_type', __('Category type'));
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
        $show = new Show(ProductCategory::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('product_name', __('Product name'));
        $show->field('description', __('Description'));
        $show->field('meta_tags', __('Meta tags'));
        $show->field('meta_description', __('Meta description'));
        $show->field('category_type', __('Category type'));
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
        $form = new Form(new ProductCategory());

        $form->textarea('product_name', __('Product name'));
        $form->textarea('description', __('Description'));
        $form->textarea('meta_tags', __('Meta tags'));
        $form->textarea('meta_description', __('Meta description'));
        $form->textarea('category_type', __('Category type'));

        return $form;
    }
}
