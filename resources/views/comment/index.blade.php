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
                    <h1 class="m-0">{{ __('Comments') }}</h1>
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
                                        <th>Post ID</th>
                                        <th>Nome</th>
                                        <th>Messagem</th>
                                        <th>Status</th>
                                        <th>Data</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($comments as $comment)
                                        <tr>
                                            {{-- @dd($comment->post->id) --}}
                                            <td>{{ $comment->post->id }}</td>
                                            <td>{{ $comment->name }}</td>
                                            <td>{{ Str::limit($comment->message, 25, '...') }}</td>
                                            @if ($comment->visible)
                                                <td>
                                                    <span class="badge bg-success">Visivel</span>
                                                </td>
                                            @else
                                                <td>
                                                    <span class="badge bg-danger">Invisivel</span>
                                                </td>
                                            @endif
                                            <td>{{ $comment->created_at }}</td>
                                            <td>
                                                <a href="{{ route('post.edit', $comment->post->id) }}"
                                                    class="btn btn-sm btn-info"><i class="fa fa-edit"></i>
                                                    Editar post</a>
                                                <a href="{{ route('blog.single', $comment->post->slug) }}" target="_blank"
                                                    class="btn btn-sm btn-warning"><i class="fa fa-eye"></i>
                                                    Visualizar post</a>
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
            <!-- /.row -->
        </div><!-- /.container-fluid -->
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
