<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function addAboutSection()
    {
        return view('admin.about-section.add');
    }
    public function manageAboutSection()
    {
        return view('admin.about-section.manage');
    }
}
