@extends('admin.layouts.layout')

@section('content')
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h1>Категории</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="card">
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
                            <th style="width: 100px"></th>
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
                                   class="btn btn-info btn-sm float-left mr-1">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <form
                                    action="{{ route('categories.destroy', ['category' => $category->id]) }}"
                                    method="post" class="float-left">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Подтвердите удаление')">
                                        <i
                                            class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
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
            </div>
        </section>
@endsection
