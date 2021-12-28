<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\View;

class AppController extends Controller
{
    /**
     * @return View
     */
    public function __invoke(): View
    {
        return view('home', [
            'posts' => Post::with(['postCategories'])->get()
        ]);
    }
}
