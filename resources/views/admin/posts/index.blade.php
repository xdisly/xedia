@extends('admin.layouts.layout')

@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h1>Записи</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">

                <div class="card-body">
                    <a href="{{route('posts.create')}}" class="btn btn-primary mb-3">Добавить запись</a>
                    @if (count($posts))
                        <div class="table-responsive">
                        <table class="table table-bordered table-hover table-nowrap">
                        <thead>
                        <tr>
                            <th style="width: 30px">#</th>
                            <th style="width: 350px">Наименование</th>
                            <th>Категория</th>
                            <th>Теги</th>
                            <th>Дата</th>
                            <th style="width: 225px">Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->category->title }}</td>
                            <td>{{ $post->tags->pluck('title')->join(', ') }}</td>
                            <td>{{ $post->created_at }}</td>
                            <td>
                                <a href="{{ route('posts.edit', ['post' => $post->id]) }}"
                                   class="float-sm-left btn btn-success btn-sm mr-1">Редактировать</a>
                                <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="post" class="float-sm-left">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger btn-sm mb-1" onclick="return confirm('Подтвердите удаление')">
                                        Удалить
                                    </button>
                                </form>
                                <!--<button type="submit" class="btn btn-danger btn-sm mb-1" onclick="return confirm('Подтвердите удаление')"></button>
                           -->
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                        </div>
                </div>

@else
<p>Добавленных записей пока нет</p>
@endif

                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    {{ $posts->links() }}
                    <!--
                    <ul class="pagination pagination-sm m-0 float-right">
                        <li class="page-item"><a class="page-link" href="#">«</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">»</a></li>
                    </ul>
                    -->
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
@endsection

