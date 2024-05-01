<?php

namespace App\Admin\Controllers;

use \App\Models\Blog;
use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;

class BlogController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Blog';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Blog());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('content', __('Content'));
        $grid->column('seo_tags', __('Seo tags'));
        $grid->column('categories', __('Categories'));
        $grid->column('feature_image', __('Feature image'));
        $grid->column('type', __('Type'));
        $grid->column('user_id', __('User id'));
        $grid->column('slug', __('Slug'));
        $grid->column('created_at', __('Created at'))->;
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
        $show = new Show(Blog::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('content', __('Content'));
        $show->field('seo_tags', __('Seo tags'));
        $show->field('categories', __('Categories'));
        $show->field('feature_image', __('Feature image'));
        $show->field('type', __('Type'));
        $show->field('user_id', __('User id'));
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
        $form = new Form(new Blog());

        $form->text('title', __('Title'));
        $form->textarea('content', __('Content'));
        $form->text('seo_tags', __('Seo tags'));
        $form->text('categories', __('Categories'));
        $form->image('feature_image', __('Feature image'));
        $form->select('type', __('Type'))->options(['blog' => 'Blog', 'news' => 'News']);
        $form->hidden('user_id', __('User id'))->value(auth()->id());
        $form->text('slug', __('Slug'));

        return $form;
    }
}
