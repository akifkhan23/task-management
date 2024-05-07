<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function list()
    {
        return view('dashboard.list');
    }
    public function lead()
    {
        return view('dashboard.lead');
    }

}
