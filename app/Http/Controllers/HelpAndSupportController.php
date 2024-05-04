<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelpAndSupport extends Controller
{
    public function help()
    {
        return view('help-and-support.help');
    }
}
