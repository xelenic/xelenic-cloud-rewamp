<?php

namespace App\Admin\Controllers;

use App\Models\ProductCategory;
use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Products;

class ProductsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Products';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Products());

        $grid->column('id', __('Id'));
        $grid->column('product_name', __('Product name'));
        $grid->column('icon', __('Icon'));
        $grid->column('price', __('Price'));
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
        $show = new Show(Products::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('product_name', __('Product name'));
        $show->field('icon', __('Icon'));
        $show->field('price', __('Price'));
        $show->field('description', __('Description'));
        $show->field('short_description', __('Short description'));
        $show->field('status', __('Status'));
        $show->field('cover_photo', __('Cover photo'));
        $show->field('category_id', __('Category id'));
        $show->field('is_available_api', __('Is available api'));
        $show->field('showing_frontend', __('Showing frontend'));
        $show->field('product_type', __('Product type'));
        $show->field('payment_type', __('Payment type'));
        $show->field('payment_rules', __('Payment rules'));
        $show->field('faq', __('Faq'));
        $show->field('meta_tags', __('Meta tags'));
        $show->field('meta_description', __('Meta description'));
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
        $form = new Form(new Products());

        $form->tab('General', function ($form) {
            $form->text('product_name', __('Product name'));
            $categories = ProductCategory::all()->pluck('product_name','id');
            $form->select('category_id', __('Category id'))->options($categories);
            $form->text('slug', __('Slug'));
            $form->switch('is_available_api', __('Is available api'));
            $form->switch('showing_frontend', __('Showing frontend'));
            $form->select('product_type', __('Product type'))->options(config('products.product_type'));
            $form->file('cover_photo', __('Cover photo'));
            $form->select('status', __('Status'))->options([
                'active' => 'Active',
                'inactive' => 'Inactive'
            ]);


        })->tab('Product Information', function ($form) {

            $form->icon('icon', __('Icon'));

            $form->textarea('short_description', __('Short description'));
            $form->ckeditor('description', __('Description'));

        })->tab('Payment and Pricing', function ($form) {

            $form->decimal('price', __('Price'));
            $form->select('payment_type', __('Payment type'))->options(config('products.payment_type'));
            $form->table('payment_rules', function ($table) {
                $table->text('key_type');
                $table->text('key_name');
                $table->text('value');
            });

        })->tab('Seo', function ($form) {

            $form->tags('meta_tags', __('Meta tags'));
            $form->textarea('meta_description', __('Meta description'));

        })->tab('FAQ', function ($form) {
            $form->table('faq', function ($table) {
                $table->text('quiz');
                $table->text('answer');
                $table->tags('meta');
            });
        });
        return $form;
    }
}
