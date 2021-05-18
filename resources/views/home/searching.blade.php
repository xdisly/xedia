@extends('layouts.layout')

@section('title', 'Поиск: {{ $s }}')

@section('content')
    <section class="search-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="search__text">
                        <h3>Поиск: {{ $s }}</h3>
                        @if($posts->count())
                            <p>Новости соответствующие этому поисковому запросу</p>
                        @else
                            <p>По этому поисковому запросу ничего не найдено</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    <section class="blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        @foreach($posts as $post)
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <div class="blog__item myshadow">
                                    <div class="blog__pic">
                                        <img src="{{ $post->getImage() }}">
                                        <div class="label"><a href="{{ route('home.category', ['slug' =>
$post->category->slug]) }}"> {{ $post->category->title }}</a></div>
                                    </div>
                                    <div class="blog__text">
                                        <h5><a href="{{ route('home.post', ['slug' => $post->slug]) }}">{{ $post->title }}</a></h5>
                                        <p>{{ $post->description }}</p>
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i> {{ $post->getPostDate() }}</li>
                                            <li><i class="far fa-eye"></i> {{ $post->view }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                {{ $posts->appends(['s' => request()->s])->links() }}
            </div>
        </div>
    </section>
@endsection
