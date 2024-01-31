<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $posts = Post::query()->withCount('comments')
                                ->orderByDesc('comments_count')
                                ->take(5)
                                ->get();

        return view('site.index',[
            'posts' => $posts
        ]);
    }

    public function blog()
    {
        return view('site.blog',[
            'posts' => Post::query()
                            ->with('categories')
                            ->where('draft', false)
                            ->latest()
                            ->paginate()
        ]);
    }

    public function blogSingle(Post $post)
    {
        return view('site.blog_single',[
            'post' => $post,
            'comments' => $post->comments()->where('visible', true)->get()
        ]);
    }

    public function category(Category $category)
    {
        abort_if($category->is_active == 'Inativo', 404);

        return view('site.category', [
            'category' => $category
        ]);
    }

    public function about()
    {
        return view('site.about');
    }
}
