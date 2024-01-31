<!-- /*
* Template Name: Blogy
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="{{ asset('css/tiny-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('css/flatpickr.min.css') }}">


    <title>Blogy &mdash; Free Bootstrap 5 Website Template by Untree.co</title>
</head>

<body>

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <nav class="site-nav">
        <div class="container">
            <div class="menu-bg-wrap">
                <div class="site-navigation">
                    <div class="row g-0 align-items-center">
                        <div class="col-2">
                            <a href="{{ route('index') }}" class="logo m-0 float-start">Blogy<span
                                    class="text-primary">.</span></a>
                        </div>
                        <div class="col-8 text-center">
                            {{-- <form action="#" class="search-form d-inline-block d-lg-none">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="bi-search"></span>
                            </form> --}}

                            <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
                                <li class="active"><a href="{{ route('index') }}">Home</a></li>
                                <li class="active"><a href="{{ route('blog') }}">Blog</a></li>
                                <x-dropdown-base />
                                {{-- <li class="active"><a href="{{ route('about') }}">Sobre</a></li> --}}
                                <li class="active"><a href="{{ route('contact.index') }}">Contato</a></li>
                                @auth
                                    <li class="active d-md-none"><a href="{{ route('dashboard') }}">Painel</a></li>
                                @else
                                    <li class="active d-md-none"><a href="{{ route('login') }}">Login</a></li>
                                @endauth
                            </ul>
                        </div>
                        <div class="col-1 text-end">
                            <a href="#"
                                class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light">
                                <span></span>
                            </a>
                            @auth
                                <a href="{{ route('dashboard') }}"
                                    class="btn btn-outline-light py-2 d-none d-md-block">Painel</a>
                            @else
                                <a href="{{ route('login') }}"
                                    class="btn btn-outline-light py-2 d-none d-md-block">Login</a>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')


    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="widget">
                        <h3 class="mb-4">Sobre</h3>
                        <p>Projeto pessoal de um blog.</p>
                    </div> <!-- /.widget -->
                    <div class="widget">
                        <h3>Social</h3>
                        <ul class="list-unstyled social">
                            <li><a href="https://github.com/gabrielms00777/" target="_blank"><span
                                        class="icon-github"></span></a></li>
                            <li><a href="http://www.linkedin.com/in/gabriel-moreira-51132b20b target="_blank"><span
                                        class="icon-linkedin"></span></a></li>
                            <li><a href="https://portfolio.gcmsoftware.com.br/" target="_blank"><span
                                        class="icon-globe"></span></a></li>
                            <li><a href="mailto:gabrielms00777@gmail.com" target="_blank"><span
                                        class="icon-envelope"></span></a></li>
                        </ul>
                    </div> <!-- /.widget -->
                </div> <!-- /.col-lg-4 -->
                <div class="col-lg-6">
                    <x-list.popular-post-footer />
                </div> <!-- /.col-lg-4 -->
            </div> <!-- /.row -->

            <div class="row mt-5">
                <div class="col-12 text-center">
                    <!--
              **==========
              NOTE:
              Please don't remove this copyright link unless you buy the license here https://untree.co/license/
              **==========
            -->

                    <p>Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>. All Rights Reserved. &mdash; Designed with love by <a
                            href="https://untree.co">Untree.co</a> Distributed by <a
                            href="https://themewagon.com">ThemeWagon</a>
                        <!-- License information: https://untree.co/license/ -->
                    </p>
                </div>
            </div>
        </div> <!-- /.container -->
    </footer> <!-- /.site-footer -->

    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>


    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/tiny-slider.js') }}"></script>

    <script src="{{ asset('js/tiny-slider.js') }}"></script>

    <script src="{{ asset('js/flatpickr.min.js') }}"></script>


    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/glightbox.min.js') }}"></script>
    <script src="{{ asset('js/navbar.js') }}"></script>
    <script src="{{ asset('js/counter.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

    @vite('resources/js/app.js')
    @stack('scripts')

</body>

</html>
