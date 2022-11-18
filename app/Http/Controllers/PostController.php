<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostControllerRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show(): View
    {
        return view();
    }

    public function update(PostControllerRequest $request): View
    {
        return view();
    }
}
