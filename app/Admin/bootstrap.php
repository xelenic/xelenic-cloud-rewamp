<?php
use OpenAdmin\Admin\Facades\Admin;
use OpenAdmin\Admin\Widgets\Box;

/**
 * Open-admin - admin builder based on Laravel.
 * @author z-song <https://github.com/z-song>
 *
 * Bootstraper for Admin.
 *
 * Here you can remove builtin form field:
 * OpenAdmin\Admin\Form::forget(['map', 'editor']);
 *
 * Or extend custom form field:
 * OpenAdmin\Admin\Form::extend('php', PHPEditor::class);
 *
 * Or require js and css assets:
 * Admin::css('/packages/prettydocs/css/styles.css');
 * Admin::js('/packages/prettydocs/js/main.js');
 *
 */

OpenAdmin\Admin\Form::forget(['editor']);

Admin::navbar(function (\OpenAdmin\Admin\Widgets\Navbar $navbar) {

    $navbar->right(view('backend.components.navbar_credit_balance', ['credit' => getCreditBalance()]));
//    $navbar->right(view('backend.components.navbar_get_update_github_permanent_token'));
    // adds ajax refresh button
    $navbar->right(new OpenAdmin\Admin\Widgets\Navbar\RefreshButton());
});


