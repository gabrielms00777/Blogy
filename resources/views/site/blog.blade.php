@extends('layouts.base')

@section('content')
    <div class="hero overlay inner-page bg-primary py-5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center pt-5">
                <div class="col-lg-6">
                    <h1 class="heading text-white mb-3" data-aos="fade-up">Blog</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="section search-result-wrap">
        <div class="container">

            <div class="row posts-entry">
                <div class="col-lg-8">
                    @foreach ($posts as $post)
                        <div class="blog-entry d-flex blog-entry-search-item">
                            <a href="{{ route('blog.single', $post->slug) }}" class="img-link me-4">
                                @if ($post->image)
                                    <img src="{{ asset('storage/' . $post->path) }}" alt="Image" class="img-fluid">
                                @else
                                    <img src="images/img_1_sq.jpg" alt="Image" class="img-fluid">
                                @endif
                            </a>
                            <div>
                                <span class="date">{{ date('M. jS, Y', strtotime($post->created_at)) }} &bullet;
                                    @foreach ($post->categories as $category)
                                        <a href="{{ $category->id }}">{{ $category->name }}</a>
                                    @endforeach
                                </span>
                                <h2><a href="{{ route('blog.single', $post->slug) }}">{{ $post->title }}</a></h2>
                                {!! Str::limit($post->content, 25, '...') !!}
                                <p><a href="{{ route('blog.single', $post->slug) }}"
                                        class="btn btn-sm btn-outline-primary">Ler Mais</a></p>
                            </div>
                        </div>
                    @endforeach

                    <div class="row text-start pt-5 border-top">
                        <div class="col-md-12">
                            <div class="custom-pagination">
                                {{ $posts->links() }}
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4 sidebar">
                    <x-list.popular-post />

                    <x-list.categories />

                </div>
            </div>
        </div>
    </div>
@endsection
