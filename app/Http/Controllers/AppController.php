<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AppController extends Controller
{
    /**
     * @param Request $request
     * @return View
     */
    public function __invoke(Request $request): View
    {
        $data = $request->all();
        $data['posts'] = Post::with(['postCategories'])->get();

        dd($data['posts']);
//        return view('home', $data);
    }
}
