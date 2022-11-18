<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Post;

class PageController extends Controller
{
    // public function index(): View
    // {
    //     reutrn view();
    // }

    public function blog(): View
    {
        $blog = Post::paginate(10);
        return view('blog.allPost',[
            'blog' => $blog,
        ]);
    }
}
