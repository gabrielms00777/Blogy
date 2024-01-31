<?php

namespace App\View\Components\List;

use App\Models\Category;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\Component;

class Categories extends Component
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
        $categories = Category::with(['posts'])->where('is_active', true)->get();
        // $categories = Cache::rememberForever('categories', fn() => Category::with(['posts'])->where('is_active', true)->get());
        return view('components.list.categories', [
            'categories' => $categories
        ]);
    }
}
