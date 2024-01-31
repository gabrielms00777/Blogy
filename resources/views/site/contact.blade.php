@extends('layouts.base')

@section('content')
    <div class="hero overlay inner-page bg-primary py-5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center pt-5">
                <div class="col-lg-6">
                    <h1 class="heading text-white mb-2" data-aos="fade-up">Entre em Contato</h1>
                </div>
            </div>
        </div>
    </div>




    <div class="section">
        <div class="container">
            @if (session('success'))
                <div class="alert alert-success mb-3" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger mb-3" role="alert">
                    {{ session('error') }}
                </div>
            @endif
            <div class="row">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="contact-info">

                        <div class="address mt-2">
                            <i class="icon-room"></i>
                            <h4 class="mb-2">Localização:</h4>
                            <p>Ribeirão Preto, São Paulo</p>
                        </div>

                        <div class="open-hours mt-4">
                            <i class="icon-clock-o"></i>
                            <h4 class="mb-2">Disponibilidade:</h4>
                            <p>
                                Sempre!
                            </p>
                        </div>

                        <div class="email mt-4">
                            <i class="icon-envelope"></i>
                            <h4 class="mb-2">Email:</h4>
                            <p><a href="mailto:gabrielms00777@gmail.com">gabrielms00777@gmai.com</a></p>
                        </div>

                        <div class="phone mt-4">
                            <i class="icon-phone"></i>
                            <h4 class="mb-2">Telefone:</h4>
                            <p>(16) 98129-4778</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-8">
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-6 mb-3">
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    placeholder="Seu Nome" name="name" value="{{ old('name') }}">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-6 mb-3">
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    placeholder="Seu Email" name="email" value="{{ old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 mb-3">
                                <input type="text" class="form-control @error('subject') is-invalid @enderror"
                                    placeholder="Assunto" name="subject" value="{{ old('subject') }}">
                                @error('subject')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 mb-3">
                                <textarea id="" cols="30" rows="7" class="form-control @error('message') is-invalid @enderror"
                                    name="message" placeholder="Digite sua menssagem">{{ old('message') }}</textarea>
                                @error('message')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <input type="submit" value="Enviar menssagem" class="btn btn-primary">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> <!-- /.untree_co-section -->
@endsection
