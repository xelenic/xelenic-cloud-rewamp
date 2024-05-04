<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpensourceContributionController extends Controller
{
    public function contribution()
    {
        return view('open-sources-contribution.contribution');
    }
}
