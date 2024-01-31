<div class="sidebar-box">
    <h3 class="heading">Categories</h3>
    <ul class="categories">
        @foreach ($categories as $category)
            <li><a href="{{ route('category', $category->id) }}">{{ $category->name }}
                    <span>({{ $category->posts()->count() }})</span></a></li>
        @endforeach
    </ul>
</div>
