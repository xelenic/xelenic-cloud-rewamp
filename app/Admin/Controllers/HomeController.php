<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Products;
use OpenAdmin\Admin\Admin;
use OpenAdmin\Admin\Controllers\Dashboard;
use OpenAdmin\Admin\Layout\Column;
use OpenAdmin\Admin\Layout\Content;
use OpenAdmin\Admin\Layout\Row;

class HomeController extends Controller
{
    public function index(Content $content)
    {
        $products = Products::where('status','active')->get();

        return $content
            ->title(__('Xelenic Cloud'))
            ->description('Hi '. auth()->user()->name)
            ->view('dashboard.dashboard',[
                'product_list' => $products
            ]);
    }
}
