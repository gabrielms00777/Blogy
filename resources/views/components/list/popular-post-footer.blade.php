<div class="widget">
    <h3 class="mb-4">Posts Mais Recentes</h3>
    <div class="post-entry-footer">
        <ul>
            @foreach ($posts as $post)
                <li>
                    <a href="{{ route('blog.single', $post->slug) }}">
                        <img src="{{ $post->image ? asset('storage/' . $post->path) : 'images/img_1_sq.jpg' }}"
                            alt="{{ $post->title }}" class="me-4 rounded">
                        <div class="text">
                            <h4>{{ $post->title }}</h4>
                            <div class="post-meta">
                                <span class="mr-2">{{ date('F d, Y', strtotime($post->created_at)) }} </span>
                            </div>
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>


</div> <!-- /.widget -->
