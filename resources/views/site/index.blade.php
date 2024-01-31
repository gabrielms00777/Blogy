@extends('layouts.base')

@section('content')
    <!-- Start retroy layout blog posts -->
    <section class="section bg-light">
        <div class="container">
            <div class="row mb-4">
                <div class="col-sm-6">
                    <h2 class="posts-entry-title">Principais postagens</h2>
                </div>
                <div class="col-sm-6 text-sm-end"><a href="{{ route('blog') }}" class="read-more">Ver Todas</a></div>
            </div>
            <div class="row align-items-stretch retro-layout">
                <div class="col-md-4">
                    <a href="{{ route('blog.single', $posts->get(0)->slug) }}" class="h-entry mb-30 v-height gradient">

                        <div class="featured-img"
                            style="background-image: url({{ $posts->get(0)->image ? asset('storage/' . $posts->get(0)->path) : 'images/img_1_sq.jpg' }});">
                        </div>

                        <div class="text">
                            <span class="date">{{ date('M. jS, Y', strtotime($posts->get(0)->created_at)) }}</span>
                            <h2>{{ $posts->get(0)->title }}</h2>
                        </div>
                    </a>
                    <a href="{{ route('blog.single', $posts->get(1)->slug) }}" class="h-entry v-height gradient">

                        <div class="featured-img"
                            style="background-image: url({{ $posts->get(1)->image ? asset('storage/' . $posts->get(1)->path) : 'images/img_1_sq.jpg' }});">
                        </div>

                        <div class="text">
                            <span class="date">{{ date('M. jS, Y', strtotime($posts->get(1)->created_at)) }}</span>
                            <h2>{{ $posts->get(1)->title }}</h2>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('blog.single', $posts->get(2)->slug) }}" class="h-entry img-5 h-100 gradient">

                        <div class="featured-img"
                            style="background-image: url({{ $posts->get(2)->image ? asset('storage/' . $posts->get(2)->path) : 'images/img_1_sq.jpg' }});">
                        </div>

                        <div class="text">
                            <span class="date">{{ date('M. jS, Y', strtotime($posts->get(2)->created_at)) }}</span>
                            <h2>{{ $posts->get(2)->title }}</h2>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('blog.single', $posts->get(3)->slug) }}" class="h-entry mb-30 v-height gradient">

                        <div class="featured-img"
                            style="background-image: url({{ $posts->get(3)->image ? asset('storage/' . $posts->get(3)->path) : 'images/img_1_sq.jpg' }});">
                        </div>

                        <div class="text">
                            <span class="date">{{ date('M. jS, Y', strtotime($posts->get(3)->created_at)) }}</span>
                            <h2>{{ $posts->get(3)->title }}</h2>
                        </div>
                    </a>
                    <a href="{{ route('blog.single', $posts->get(4)->slug) }}" class="h-entry v-height gradient">

                        <div class="featured-img"
                            style="background-image: url({{ $posts->get(4)->image ? asset('storage/' . $posts->get(4)->path) : 'images/img_1_sq.jpg' }});">
                        </div>

                        <div class="text">
                            <span class="date">{{ date('M. jS, Y', strtotime($posts->get(4)->created_at)) }}</span>
                            <h2>{{ $posts->get(4)->title }}</h2>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>
    <!-- End retroy layout blog posts -->

    {{-- <!-- Start posts-entry -->
    <section class="section posts-entry">
        <div class="container">
            <div class="row mb-4">
                <div class="col-sm-6">
                    <h2 class="posts-entry-title">Business</h2>
                </div>
                <div class="col-sm-6 text-sm-end"><a href="category.html" class="read-more">View All</a></div>
            </div>
            <div class="row g-3">
                <div class="col-md-9">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="blog-entry">
                                <a href="single.html" class="img-link">
                                    <img src="images/img_1_sq.jpg" alt="Image" class="img-fluid">
                                </a>
                                <span class="date">Apr. 14th, 2022</span>
                                <h2><a href="single.html">Thought you loved Python? Wait until you meet Rust</a></h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis
                                    inventore vel voluptas.</p>
                                <p><a href="single.html" class="btn btn-sm btn-outline-primary">Read More</a></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="blog-entry">
                                <a href="single.html" class="img-link">
                                    <img src="images/img_2_sq.jpg" alt="Image" class="img-fluid">
                                </a>
                                <span class="date">Apr. 14th, 2022</span>
                                <h2><a href="single.html">Startup vs corporate: What job suits you best?</a></h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis
                                    inventore vel voluptas.</p>
                                <p><a href="single.html" class="btn btn-sm btn-outline-primary">Read More</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <ul class="list-unstyled blog-entry-sm">
                        <li>
                            <span class="date">Apr. 14th, 2022</span>
                            <h3><a href="single.html">Don’t assume your user data in the cloud is safe</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore
                                vel voluptas.</p>
                            <p><a href="#" class="read-more">Continue Reading</a></p>
                        </li>

                        <li>
                            <span class="date">Apr. 14th, 2022</span>
                            <h3><a href="single.html">Meta unveils fees on metaverse sales</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore
                                vel voluptas.</p>
                            <p><a href="#" class="read-more">Continue Reading</a></p>
                        </li>

                        <li>
                            <span class="date">Apr. 14th, 2022</span>
                            <h3><a href="single.html">UK sees highest inflation in 30 years</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore
                                vel voluptas.</p>
                            <p><a href="#" class="read-more">Continue Reading</a></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End posts-entry -->

    <!-- Start posts-entry -->
    <section class="section posts-entry posts-entry-sm bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="blog-entry">
                        <a href="single.html" class="img-link">
                            <img src="images/img_1_horizontal.jpg" alt="Image" class="img-fluid">
                        </a>
                        <span class="date">Apr. 14th, 2022</span>
                        <h2><a href="single.html">Thought you loved Python? Wait until you meet Rust</a></h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <p><a href="#" class="read-more">Continue Reading</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="blog-entry">
                        <a href="single.html" class="img-link">
                            <img src="images/img_2_horizontal.jpg" alt="Image" class="img-fluid">
                        </a>
                        <span class="date">Apr. 14th, 2022</span>
                        <h2><a href="single.html">Startup vs corporate: What job suits you best?</a></h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <p><a href="#" class="read-more">Continue Reading</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="blog-entry">
                        <a href="single.html" class="img-link">
                            <img src="images/img_3_horizontal.jpg" alt="Image" class="img-fluid">
                        </a>
                        <span class="date">Apr. 14th, 2022</span>
                        <h2><a href="single.html">UK sees highest inflation in 30 years</a></h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <p><a href="#" class="read-more">Continue Reading</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="blog-entry">
                        <a href="single.html" class="img-link">
                            <img src="images/img_4_horizontal.jpg" alt="Image" class="img-fluid">
                        </a>
                        <span class="date">Apr. 14th, 2022</span>
                        <h2><a href="single.html">Don’t assume your user data in the cloud is safe</a></h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <p><a href="#" class="read-more">Continue Reading</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End posts-entry -->

    <!-- Start posts-entry -->
    <section class="section posts-entry">
        <div class="container">
            <div class="row mb-4">
                <div class="col-sm-6">
                    <h2 class="posts-entry-title">Culture</h2>
                </div>
                <div class="col-sm-6 text-sm-end"><a href="category.html" class="read-more">View All</a></div>
            </div>
            <div class="row g-3">
                <div class="col-md-9 order-md-2">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="blog-entry">
                                <a href="single.html" class="img-link">
                                    <img src="images/img_1_sq.jpg" alt="Image" class="img-fluid">
                                </a>
                                <span class="date">Apr. 14th, 2022</span>
                                <h2><a href="single.html">Thought you loved Python? Wait until you meet Rust</a></h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis
                                    inventore vel voluptas.</p>
                                <p><a href="single.html" class="btn btn-sm btn-outline-primary">Read More</a></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="blog-entry">
                                <a href="single.html" class="img-link">
                                    <img src="images/img_2_sq.jpg" alt="Image" class="img-fluid">
                                </a>
                                <span class="date">Apr. 14th, 2022</span>
                                <h2><a href="single.html">Startup vs corporate: What job suits you best?</a></h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis
                                    inventore vel voluptas.</p>
                                <p><a href="single.html" class="btn btn-sm btn-outline-primary">Read More</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <ul class="list-unstyled blog-entry-sm">
                        <li>
                            <span class="date">Apr. 14th, 2022</span>
                            <h3><a href="single.html">Don’t assume your user data in the cloud is safe</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore
                                vel voluptas.</p>
                            <p><a href="#" class="read-more">Continue Reading</a></p>
                        </li>

                        <li>
                            <span class="date">Apr. 14th, 2022</span>
                            <h3><a href="single.html">Meta unveils fees on metaverse sales</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore
                                vel voluptas.</p>
                            <p><a href="#" class="read-more">Continue Reading</a></p>
                        </li>

                        <li>
                            <span class="date">Apr. 14th, 2022</span>
                            <h3><a href="single.html">UK sees highest inflation in 30 years</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore
                                vel voluptas.</p>
                            <p><a href="#" class="read-more">Continue Reading</a></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section class="section">
        <div class="container">

            <div class="row mb-4">
                <div class="col-sm-6">
                    <h2 class="posts-entry-title">Principais postagens</h2>
                </div>
                <div class="col-sm-6 text-sm-end"><a href="{{ route('blog') }}" class="read-more">Ver Todas</a></div>
            </div>

            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-lg-4 mb-4">
                        <div class="post-entry-alt">
                            <a href="{{ route('blog.single', $post->slug) }}" class="img-link"><img
                                    src="{{ $post->image ? asset('storage/' . $post->path) : 'images/img_1_sq.jpg' }}"
                                    alt="Image" class="img-fluid"></a>
                            <div class="excerpt">


                                <h2><a href="{{ route('blog.single', $post->slug) }}">{{ $post->title }}</a></h2>
                                <div class="post-meta align-items-center text-left clearfix">

                                    <span class="d-inline-block mt-1">Por {{ $post->user->name }}</span>
                                    <span>&nbsp;-&nbsp; {{ date('M. jS, Y', strtotime($post->created_at)) }}</span>
                                </div>

                                <p>{!! Str::limit($post->content, 100, '...') !!}</p>
                                <p><a href="{{ route('blog.single', $post->slug) }}" class="read-more">Continue Reading</a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </section> --}}

    {{-- <div class="section bg-light">
        <div class="container">

            <div class="row mb-4">
                <div class="col-sm-6">
                    <h2 class="posts-entry-title">Travel</h2>
                </div>
                <div class="col-sm-6 text-sm-end"><a href="category.html" class="read-more">View All</a></div>
            </div>

            <div class="row align-items-stretch retro-layout-alt">

                <div class="col-md-5 order-md-2">
                    <a href="single.html" class="hentry img-1 h-100 gradient">
                        <div class="featured-img" style="background-image: url('images/img_2_vertical.jpg');"></div>
                        <div class="text">
                            <span>February 12, 2019</span>
                            <h2>Meta unveils fees on metaverse sales</h2>
                        </div>
                    </a>
                </div>

                <div class="col-md-7">

                    <a href="single.html" class="hentry img-2 v-height mb30 gradient">
                        <div class="featured-img" style="background-image: url('images/img_1_horizontal.jpg');"></div>
                        <div class="text text-sm">
                            <span>February 12, 2019</span>
                            <h2>AI can now kill those annoying cookie pop-ups</h2>
                        </div>
                    </a>

                    <div class="two-col d-block d-md-flex justify-content-between">
                        <a href="single.html" class="hentry v-height img-2 gradient">
                            <div class="featured-img" style="background-image: url('images/img_2_sq.jpg');"></div>
                            <div class="text text-sm">
                                <span>February 12, 2019</span>
                                <h2>Don’t assume your user data in the cloud is safe</h2>
                            </div>
                        </a>
                        <a href="single.html" class="hentry v-height img-2 ms-auto float-end gradient">
                            <div class="featured-img" style="background-image: url('images/img_3_sq.jpg');"></div>
                            <div class="text text-sm">
                                <span>February 12, 2019</span>
                                <h2>Startup vs corporate: What job suits you best?</h2>
                            </div>
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div> --}}
@endsection
