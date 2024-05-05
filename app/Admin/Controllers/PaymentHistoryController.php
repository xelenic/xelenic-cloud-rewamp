<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\PaymentHistory;

class PaymentHistoryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Billing';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new PaymentHistory());

        $grid->column('id', __('Id'));
        $grid->column('payment_method', __('Payment method'));
        $grid->column('user_id', __('User id'));
        $grid->column('payment_type', __('Payment type'));
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
        $show = new Show(PaymentHistory::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('payment_method', __('Payment method'));
        $show->field('user_id', __('User id'));
        $show->field('payment_type', __('Payment type'));
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
        $form = new Form(new PaymentHistory());
        $form->setView('backend.payment.create.payment');


        return $form;
    }
}
