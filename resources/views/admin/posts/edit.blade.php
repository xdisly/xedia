@extends('admin.layouts.layout')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Редактирование записи "{{ $post->title }}"</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <form role="form" method="post" action="{{ route('posts.update', ['post' => $post->id]) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Название</label>
                                    <input type="text" name="title"
                                           class="form-control @error('title') is-invalid @enderror" id="title" value="{{ $post->title }}">
                                </div>
                                <div class="form-group">
                                    <label for="description">Описание</label>
                                    <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description" rows="5">{{ $post->description }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="content">Текст</label>
                                    <textarea name="content" class="form-control @error('content') is-invalid @enderror" id="content" rows="5">{{ $post->content }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="category_id">Категория</label>
                                    <select class="form-control @error('category_id') is-invalid @enderror" id="category_id" name="category_id">
                                        @foreach($categories as $k => $v)
                                            <option value="{{ $k }}" @if($k == $post->category_id) selected @endif>{{ $v }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="tags">Теги</label>
                                    <select name="tags[]" id="tags" class="select2" multiple="multiple" data-placeholder="Выбор тегов" style="width: 100%;">
                                        @foreach($tags as $k => $v)
                                            <option value="{{ $k }}" @if(in_array($k, $post->tags->pluck('id')->all())) selected @endif>{{ $v }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="thumbnail">Изображение</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="thumbnail" id="thumbnail" class="custom-file-input">
                                            <label class="custom-file-label" for="thumbnail">Выберите файл</label>
                                        </div>
                                    </div>
                                    <div>
                                        <img src="{{ $post->getImage() }}" class="img-thumbnail mt-2" width="250">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Сохранить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>
@endsection
