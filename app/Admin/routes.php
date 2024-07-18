<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('products', \App\Admin\Controllers\ProductsController::class);



    $router->resource('product-categories', \App\Admin\Controllers\ProductCategoryController::class);


    $router->resource('projects', \App\Admin\Controllers\ProjectsController::class);
    $router->post('project/create/action-create',[\App\Admin\Controllers\ProjectsController::class,'custom_store'])->name('project_create_action_base');

    $router->get('project/{id}/{page}', [\App\Admin\Controllers\ProjectsController::class,'viewData'])->name('addBucketServer');

    $router->resource('payment-histories', \App\Admin\Controllers\PaymentHistoryController::class);
    $router->resource('server-religions', \App\Admin\Controllers\ServerReligionController::class);
    $router->resource('blogs', \App\Admin\Controllers\BlogController::class);

    $router->resource('packages', \App\Admin\Controllers\PackagesController::class);

    $router->resource('repos', \App\Admin\Controllers\ReposController::class);
//        ->middleware(\App\Http\Middleware\CheckGitHubToken::class);
    $router->get('repos-details-slug/{repo_slug}',[\App\Admin\Controllers\ReposController::class,'showDetails'])->name('repo_details');

    $router->post('repos/deploy-work-flow-update',[\App\Admin\Controllers\ReposController::class,'deployWorkFlowUpdate'])->name('deploy_work_flow_update');

    $router->resource('server-size-lists', \App\Admin\Controllers\ServerSizeListController::class);

    $router->resource('stack-types', \App\Admin\Controllers\StackTypesController::class);

});



