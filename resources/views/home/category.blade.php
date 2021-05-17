@extends('layouts.layout')

@section('title', $category->title)

@section('content')
    <section class="about-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="about__text">
                        <h2>Категория "{{ $category->title }}"</h2>
                        <p>Все записи с категорией "{{ $category->title }}"</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        @foreach($posts as $post)
                            <div class='col-lg-4 col-md-6 col-sm-6'>
                                <div class='blog__item'>
                                    <div class='blog__pic'>
                                        <img src="{{ $post->getImage() }}">
                                    </div>
                                    <div class='blog__text'>
                                        <h5><a href="{{ route('home.post', ['slug' => $post->slug]) }}">{{ $post->title }}</a></h5>
                                        <p>{{ $post->description }}</p>
                                        <ul>
                                            <li><i class='fa fa-clock-o'></i> {{ $post->getPostDate() }}</li>
                                            <li><i class='far fa-eye'></i> {{ $post->view }}</li>
                                        </ul>
                                        <ul>
                                            <li><i class='far fa-sticky-note'></i> <a href="{{ route('home.category', ['slug' =>
$category->slug]) }}"> {{ $category->title }}</a></li>
                                        </ul>
                                        <ul>
                                            @if($post->tags->count())
                                                <li><i class='fas fa-paperclip'>
                                                        @foreach($post->tags as $tag)
                                                            <a href="{{ route('home.tag', ['slug' => $tag->slug]) }}">
                                                    </i> {{ $tag->title }}</a>
                                                    @endforeach
                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </section>
@endsection
