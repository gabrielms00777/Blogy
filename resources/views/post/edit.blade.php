@extends('layouts.app')
@section('styles')
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
                            <h3 class="card-title mt-1">
                                Editar post
                            </h3>
                            <form action="{{ route('post.destroy', $post->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger float-right">Deletar Post</button>
                            </form>
                        </div>
                        <!-- /.card-header -->
                        <form action="{{ route('post.update', $post->id) }}" method="post" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="image">Imagem</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image" name="image">
                                            <label class="custom-file-label" for="image">{{ $post->image }}</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="title">Titulo do Post</label>
                                    <input type="text" name="title" class="form-control" id="title"
                                        value="{{ $post->title }}" placeholder="Nome">
                                </div>
                                <div class="form-group">
                                    <label>Minhas categorias: </label>
                                    @foreach ($post->categories as $category)
                                        <small class="badge badge-primary">{{ $category->name }}</small>
                                    @endforeach
                                </div>
                                <div class="form-group">
                                    <label>Categorias</label>
                                    <select multiple class="form-control" name="category_id[]">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <textarea id="summernote" name="content">{{ $post->content }}</textarea>
                            </div>
                            <div class="card-footer">
                                <div class="custom-control custom-switch float-left">
                                    <input type="checkbox" class="custom-control-input" id="draft" name="draft"
                                        @if ($post->draft) checked @endif>
                                    <label class="custom-control-label" for="draft">Rascunho</label>
                                </div>
                                <button type="submit" class="btn btn-info float-right">Editar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.col-->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body p-0">
                            <table class="table table-hover" id="#table">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Email</th>
                                        <th>Comment</th>
                                        <th>Data</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($comments as $comment)
                                        <tr>
                                            <td>{{ $comment->name }}</td>
                                            <td>{{ $comment->email }}</td>
                                            <td>{{ Str::limit($comment->message, 25, '...') }}</td>
                                            <td>{{ $comment->created_at }}</td>
                                            @if ($comment->visible)
                                                <td>
                                                    <form action="{{ route('comment.change', $comment->id) }}"
                                                        method="post">
                                                        @method('PUT')
                                                        @csrf
                                                        <button type="submit" class="btn btn-sm btn-success"><i
                                                                class="fa fa-eye"></i>
                                                            Visivel</button>
                                                    </form>
                                                </td>
                                            @else
                                                <td>
                                                    <form action="{{ route('comment.change', $comment->id) }}"
                                                        method="post">
                                                        @method('PUT')
                                                        @csrf
                                                        <button type="submit" class="btn btn-sm btn-danger"><i
                                                                class="fa fa-eye"></i>
                                                            Invisivel</button>
                                                    </form>
                                                </td>
                                            @endif

                                            <td>
                                                <a href="{{ route('blog.single', $post->slug) }}" target="_blank"
                                                    class="btn btn-sm btn-warning"><i class="fa fa-edit"></i>
                                                    Visualizar</a>
                                                <form action="{{ route('comment.destroy', $comment->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger"><i
                                                            class="fa fa-trash"></i>
                                                        Excluir</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer clearfix">
                            {{ $comments->links() }}
                        </div>
                    </div>

                </div>
            </div>
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
