<div class="sidebar-box">
    <h3 class="heading">Posts Mais Populares</h3>
    <div class="post-entry-sidebar">
        <ul>
            @foreach ($posts as $post)
                <li>
                    <a href="{{ route('blog.single', $post->slug) }}">
                        <img src="{{ asset('storage/' . $post->path) }}" alt="{{ $post->title }}" class="me-4 rounded">
                        <div class="text">
                            <h4>{{ $post->title }}</h4>
                            <div class="post-meta">
                                <span class="mr-2">{{ date('F d, Y', strtotime($post->created_at)) }}</span>
                            </div>
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
