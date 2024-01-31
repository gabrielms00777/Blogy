@extends('layouts.base')

@section('content')
    <div class="section search-result-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading">Categoria: {{ $category->name }}</div>
                </div>
            </div>
            <div class="row posts-entry">
                <div class="col-lg-8">
                    @forelse ($category->posts()->paginate() as $post)
                        <div class="blog-entry d-flex blog-entry-search-item">
                            <a href="{{ route('blog.single', $post->slug) }}" class="img-link me-4">
                                <img src="{{ asset('storage/' . $post->path) }}" alt="Image" class="img-fluid">
                            </a>
                            <div>
                                <span class="date">Apr. 14th, 2022 &bullet; <a href="#">Business</a></span>
                                <h2><a href="{{ route('blog.single', $post->slug) }}">{{ $post->title }}</a></h2>
                                <p>{!! Str::limit($post->content, 100, '...') !!}</p>
                                <p><a href="{{ route('blog.single', $post->slug) }}"
                                        class="btn btn-sm btn-outline-primary">Ler Mais</a></p>
                            </div>
                        </div>
                    @empty
                        <div class="blog-entry d-flex blog-entry-search-item">
                            Nenhnum post cadastrado
                        </div>
                    @endforelse

                    <div class="row text-start pt-5 border-top">
                        <div class="col-md-12">
                            <div class="custom-pagination">
                                {{ $category->posts()->paginate()->links() }} <!-- Exibir os links de paginação -->
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4 sidebar">

                    <x-list.popular-post />

                    <x-list.categories />

                    <x-list.tags />

                </div>
            </div>
        </div>
    </div>
@endsection
