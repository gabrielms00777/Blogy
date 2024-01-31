<li class="has-children active">
    <a href="#" disabled>Categorias</a>
    <ul class="dropdown">
        @foreach ($categories as $category)
            <li><a href="{{ route('category', $category->name) }}">{{ $category->name }}</a></li>
        @endforeach
    </ul>
</li>
