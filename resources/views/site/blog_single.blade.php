@extends('layouts.base')

@section('content')
    <div class="site-cover site-cover-sm same-height overlay single-page"
        style="background-image: url({{ asset('storage/' . $post->path) }});">
        <div class="container">
            <div class="row same-height justify-content-center">
                <div class="col-md-6">
                    <div class="post-entry text-center">
                        <h1 class="mb-4">{{ $post->title }}</h1>
                        <div class="post-meta align-items-center text-center">
                            {{-- <figure class="author-figure mb-0 me-3 d-inline-block"><img src="images/person_1.jpg"
                                    alt="Image" class="img-fluid"></figure> --}}
                            <span class="d-inline-block mt-1">Por {{ $post->user->name }}</span>
                            <span>&nbsp;-&nbsp; {{ date('d F Y', strtotime($post->created_at)) }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="section">
        <div class="container">
            <div class="row blog-entries element-animate">
                @if (session('comment::created'))
                    <div class="alert alert-success" role="alert">
                        {{ session('comment::created') }}
                    </div>
                @endif
                <div class="col-md-12 col-lg-8 main-content">
                    <div class="post-content-body">
                        {!! $post->content !!}
                    </div>


                    <div class="pt-5">
                        <p>Categories:
                            @foreach ($post->categories()->get() as $category)
                                <a href="#">{{ $category->name }}</a>,
                            @endforeach
                        </p>
                    </div>


                    <div class="pt-5 comment-wrap">
                        <h3 class="mb-5 heading">{{ $comments->count() }} Comments</h3>
                        <ul class="comment-list" style="margin-right: 10px">
                            @forelse ($comments as $comment)
                                <li class="comment">
                                    <div class="vcard">
                                        <img src="https://via.placeholder.com/150" alt="Image placeholder">
                                    </div>
                                    <div class="comment-body">
                                        <h3>{{ $comment->name }}</h3>
                                        <div class="meta">{{ date('F j, Y \a\t g:i A', strtotime($post->created_at)) }}
                                        </div>
                                        <p>{{ $comment->message }}</p>
                                        {{-- <p><a href="#" class="reply rounded">Reply</a></p> --}}
                                    </div>
                                </li>
                            @empty
                            @endforelse
                        </ul>
                        <!-- END comment-list -->

                        <div class="comment-form-wrap pt-5" id="coment">
                            <h3 class="mb-5">Deixe um comentarios</h3>
                            <form action="{{ route('comment.store') }}" class="p-5 bg-light" method="POST">
                                @csrf
                                <input type="hidden" name="post_id" value="{{ $post->id }}">
                                <div class="form-group">
                                    <label for="name">Name *</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        id="name" name="name">
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">Email *</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        id="email" name="email">
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea name="message" id="message" cols="30" rows="10"
                                        class="form-control @error('message') is-invalid @enderror"></textarea>
                                    @error('message')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="submit" value="Postar Comentario" class="btn btn-primary">
                                </div>

                            </form>
                        </div>
                    </div>

                </div>

                <!-- END main-content -->

                <div class="col-md-12 col-lg-4 sidebar">

                    <x-bio />

                    <x-list.popular-post />


                    <x-list.categories />

                </div>
                <!-- END sidebar -->

            </div>
        </div>
    </section>
@endsection
