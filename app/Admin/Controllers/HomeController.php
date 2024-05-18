<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Services\RepoManagement\GithubService;
use OpenAdmin\Admin\Admin;
use OpenAdmin\Admin\Controllers\Dashboard;
use OpenAdmin\Admin\Layout\Column;
use OpenAdmin\Admin\Layout\Content;
use OpenAdmin\Admin\Layout\Row;

class HomeController extends Controller
{
    public function index(Content $content)
    {
        $getRepoDetails = new GithubService();
        $manage = $getRepoDetails->getUserRepositories(\OpenAdmin\Admin\Facades\Admin::user()->github_token);

        $products = Products::where('status','active')->get();

        return $content
            ->title(__('Xelenic Cloud'))
            ->description('Hi '. auth()->user()->name)
            ->view('backend.dashboard.dashboard',[
                'product_list' => $products
            ]);
    }
}
