@extends('layouts.app')
@section('styles')
    <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-10">
                    <h1 class="m-0">{{ __('Post') }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-2">
                    <a href="{{ route('post.create') }}" class="btn btn-info">
                        Criar post
                    </a>
                </div><!-- /.col -->
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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body p-0">
                            <table class="table table-hover" id="#table">
                                <thead>
                                    <tr>
                                        <th>Autor</th>
                                        <th>Titulo</th>
                                        <th>Status</th>
                                        <th>Data</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post)
                                        <tr>
                                            <td>{{ $post->user->name }}</td>
                                            <td>{{ $post->title }}</td>
                                            @if ($post->draft)
                                                <td>
                                                    <span class="badge bg-danger">Rascunho</span>
                                                </td>
                                            @else
                                                <td>
                                                    <span class="badge bg-success">Ativo</span>
                                                </td>
                                            @endif
                                            <td>{{ $post->created_at }}</td>
                                            <td>
                                                <a href="{{ route('post.edit', $post->id) }}" class="btn btn-sm btn-info"><i
                                                        class="fa fa-edit"></i>
                                                    Editar</a>
                                                <a href="{{ route('blog.single', $post->slug) }}" target="_blank"
                                                    class="btn btn-sm btn-warning"><i class="fa fa-eye"></i>
                                                    Visualizar</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer clearfix">
                            {{ $posts->links() }}
                        </div>
                    </div>

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Default Modal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('category.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input type="name" name="name" class="form-control" id="name"
                                placeholder="Nome da categoria" value="{{ old('name') }}">
                        </div>
                        <div class="form-group">
                            <label>Select</label>
                            <select class="form-control" name="is_active">
                                <option value="1">Ativo</option>
                                <option value="0">Inativo</option>
                            </select>
                        </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.content -->
@endsection
@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        });
    </script>
@endsection
