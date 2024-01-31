@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Dashboard') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-primary"><i class="fas fa-envelope"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Posts</span>
                            <span class="info-box-number">{{ $posts }}</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-secondary"><i class="fas fa-flag"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Comentarios</span>
                            <span class="info-box-number">{{ $comments }}</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-warning"><i class="fas fa-copy"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Categorias</span>
                            <span class="info-box-number">{{ $categories }}</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-danger"><i class="fas fa-star"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Contatos</span>
                            <span class="info-box-number">{{ $contacts }}</span>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
