@extends('admin.layouts.layout')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Категории</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Blank Page</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Список категорий</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>

                <div class="card-body">
                    <a href="{{route('categories.create')}}" class="btn btn-primary mb-3">Добавить категорию</a>
                    @if (count($categories))
                        <div class="table-responsive">
                        <table class="table table-bordered table-hover table-nowrap">
                        <thead>
                        <tr>
                            <th style="width: 30px">#</th>
                            <th style="width: 450px">Наименование</th>
                            <th>Slug</th>
                            <th style="width: 300px">Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->title }}</td>
                            <td>{{ $category->slug }}</td>
                            <td>
                                <a href="{{ route('categories.edit', ['category' => $category->id]) }}"
                                   class="float-sm-left btn btn-success btn-sm mr-1">Редактировать</a>
                                <form action="{{ route('categories.destroy', ['category' => $category->id]) }}" method="post" class="float-sm-left">

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
<p>Добавленных категорий пока нет</p>
@endif

                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    {{ $categories->links() }}
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
    </div>
@endsection
