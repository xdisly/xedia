@extends('layouts.layout')

@section('title', $post->title)

@section('content')
<!-- Hero -->
<section class="about-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="news_page_name news__text">
                    <h2>{{ $post->title }}</h2>
                    <p>{{ $post->description }}</p>
                    <ul>
                        <li><i class='fa fa-clock-o'></i> {{ $post->getPostDate() }}</li>
                        <li><i class='far fa-eye'></i> {{ $post->view }}</li>
                        <li><i class='far fa-sticky-note'></i> <a href="{{ route('categories.single', ['slug' =>
$post->category->slug]) }}"> {{ $post->category->title }}</a></li>
                        @if($post->tags->count())
                            <li><i class='fas fa-paperclip'>
                            @foreach($post->tags as $tag)
                                <a href="{{ route('tags.single', ['slug' => $tag->slug]) }}">
                            </i> {{ $tag->title }}</a>
                            @endforeach
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- News Section Begin -->
<section class="blog-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class='col-lg-12 col-md-12 col-sm-12'>
                        <div class='blog__item'>
                            <div class='blog__text'>
                                {!! $post->content !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- News Section End -->

<!-- Feedback Form Begin -->
<!--
<div class="contact-form spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>Комментарии</h3>
                <form action="/" method="post">
                    <div class="input-list">
                        <input type="text" placeholder="Имя" name="username" id="username">
                        <textarea placeholder="Комментарий" name="mess" id="mess"></textarea>
                    </div>
                    <button type="submit" class="primary-btn" id="mess_send">Добавить комментарий</button>
                </form>
                        <div class="comment_note">
                            <h4>Выводим_Название комментария</h4>
                            <text>Выводим_Сообщение</text>
                        </div>
            </div>
        </div>
    </div>
</div>
-->
<!-- Feedback Form End -->
@endsection
