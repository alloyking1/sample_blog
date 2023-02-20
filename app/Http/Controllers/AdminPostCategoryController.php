<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPostCategoryController extends Controller
{
    public function show()
    {
        return view('admin.categoryShow');
    }
}
