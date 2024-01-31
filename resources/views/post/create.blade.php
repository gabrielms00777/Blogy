@extends('layouts.app')
@section('styles')
    {{-- <link rel="stylesheet" href="{{ asset('css/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/summernote-bs4.min.css') }}"> --}}
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Post') }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Text Editors</li>
                    </ol>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">
                                Criar post
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                @csrf
                                <div class="form-group">
                                    <label for="image">Imagem</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image" name="image">
                                            <label class="custom-file-label" for="image">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="title">Titulo do Post</label>
                                    <input type="text" name="title" class="form-control" id="title"
                                        value="{{ old('title') }}" placeholder="Nome">
                                </div>
                                <div class="form-group">
                                    <label>Categorias</label>
                                    <select multiple class="form-control" name="category_id[]">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <textarea id="summernote" name="content">{{ old('content') }}</textarea>
                            </div>
                            <div class="card-footer">
                                <div class="custom-control custom-switch float-left">
                                    <input type="checkbox" class="custom-control-input" id="draft" name="draft">
                                    <label class="custom-control-label" for="draft">Rascunho</label>
                                </div>
                                <button type="submit" class="btn btn-info float-right">Cadastrar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.col-->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
@section('scripts')
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/summernotes/adminlte.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('js/bs-custom-file-input.min.js') }}"></script>
    <script>
        $('#summernote').summernote()
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
@endsection
