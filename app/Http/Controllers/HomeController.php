<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home',[
            'posts' => Post::query()->count(),
            'comments' => Comment::query()->count(),
            'categories' => Category::query()->count(),
            'contacts' => Contact::query()->count(),
        ]);
    }
}
