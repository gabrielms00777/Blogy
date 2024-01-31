{{-- @extends('layouts.base')

@section('content')
    <div class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url('images/hero_5.jpg');">
        <div class="container">
            <div class="row same-height justify-content-center">
                <div class="col-md-6">
                    <div class="post-entry text-center">
                        <h1 class="mb-4">Sobre Mim</h1>
                        <p class="mb-4">Profissional apaixonado por tecnologia com amplo conhecimento em desenvolvimento de
                            software e hardware. Especializado em construir soluções eficientes e inovadoras.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section sec-halfs py-0">
        <!-- ... -->
    </div>

    <div class="section sec-features">
        <div class="container">
            <div class="row g-5">
                <div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
                    <div class="feature d-flex">
                        <span class="bi-layers-fill"></span>
                        <div>
                            <h3>Desenvolvimento de Backend</h3>
                            <p>Especializado em construir sistemas robustos e escaláveis utilizando Laravel e Python.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature d-flex">
                        <span class="bi-palette-fill"></span>
                        <div>
                            <h3>Desenvolvimento Frontend</h3>
                            <p>Domínio de Livewire e JavaScript para criar interfaces interativas e dinâmicas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature d-flex">
                        <span class="bi-trophy-fill"></span>
                        <div>
                            <h3>Projetos Inovadores</h3>
                            <p>Entregando soluções criativas e funcionais que atendem às necessidades dos clientes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-5 mx-auto text-center" data-aos="fade-up">
                    <h2 class="heading text-primary">Habilidades</h2>
                    <p>Tenho expertise tanto no desenvolvimento de backend quanto frontend, oferecendo soluções completas e
                        eficientes para projetos.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-4 text-center" data-aos="fade-up" data-aos-delay="0">
                    <img src="https://via.placeholder.com/150" alt="Imagem de Backend"
                        class="img-fluid w-50 rounded-circle mb-3">
                    <h5 class="text-black">Desenvolvimento Backend</h5>
                </div>
                <div class="col-lg-4 mb-4 text-center" data-aos="fade-up" data-aos-delay="100">
                    <img src="https://via.placeholder.com/150" alt="Imagem de Frontend"
                        class="img-fluid w-50 rounded-circle mb-3">
                    <h5 class="text-black">Desenvolvimento Frontend</h5>
                </div>
                <div class="col-lg-4 mb-4 text-center" data-aos="fade-up" data-aos-delay="200">
                    <img src="https://via.placeholder.com/150" alt="Imagem de Projetos"
                        class="img-fluid w-50 rounded-circle mb-3">
                    <h5 class="text-black">Projetos Inovadores</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mb-4 mb-lg-0">
                    <img src="https://via.placeholder.com/600x400" alt="Imagem do Projeto" class="img-fluid rounded">
                </div>
                <div class="col-lg-4 ps-lg-2">
                    <div class="mb-5">
                        <h2 class="text-black h4">Projetos</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut blandit justo. Nulla
                            facilisi.
                            Vivamus eget massa et ligula viverra bibendum non non elit.</p>
                    </div>
                    <div class="mb-3">
                        <h3>Projeto 1</h3>
                        <p>Descrição do projeto 1.</p>
                    </div>
                    <div class="mb-3">
                        <h3>Projeto 2</h3>
                        <p>Descrição do projeto 2.</p>
                    </div>
                    <div class="mb-3">
                        <h3>Projeto 3</h3>
                        <p>Descrição do projeto 3.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}
@extends('layouts.base')

@section('content')
    <div class="site-cover site-cover-sm same-height overlay single-page"
        style="background-image: url('{{ asset('images/hero_5.jpg') }}');">
        <div class="container">
            <div class="row same-height justify-content-center">
                <div class="col-md-6">
                    <div class="post-entry text-center">
                        <h1 class="mb-4">Sobre Nós</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section sec-halfs py-0">
        <div class="container">
            <div class="half-content d-lg-flex align-items-stretch">
                <div class="img" style="background-image: url('{{ asset('images/hero_1.jpg') }}')" data-aos="fade-in"
                    data-aos-delay="100">
                </div>
                <div class="text">
                    <h2 class="heading text-primary mb-3">Recursos para criadores e criativos</h2>
                    <p class="mb-4">Longe, muito longe, atrás da palavra montanhas, longe dos países Vokalia e
                        Consonantia, vivem os textos cegos. Separados, vivem em Bookmarksgrove, bem na costa do Semantics,
                        um grande oceano de línguas.</p>
                    <p><a href="#" class="btn btn-outline-primary py-2">Leia mais</a></p>
                </div>
            </div>

            <div class="half-content d-lg-flex align-items-stretch">
                <div class="img order-md-2" style="background-image: url('{{ asset('images/hero_2.jpg') }}')"
                    data-aos="fade-in">
                </div>
                <div class="text">
                    <h2 class="heading text-primary mb-3">Confiança de mais de 5.000 clientes</h2>
                    <p class="mb-4">Longe, muito longe, atrás da palavra montanhas, longe dos países Vokalia e
                        Consonantia, vivem os textos cegos. Separados, vivem em Bookmarksgrove, bem na costa do Semantics,
                        um grande oceano de línguas.</p>
                    <p><a href="#" class="btn btn-outline-primary py-2">Leia mais</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection
