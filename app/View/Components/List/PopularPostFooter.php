<?php

namespace App\View\Components\List;

use App\Models\Post;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PopularPostFooter extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $posts = Post::query()->withCount('comments')
                                ->latest()
                                ->take(3)
                                ->get();
        return view('components.list.popular-post-footer',[
            'posts' => $posts
        ]);
    }
}
