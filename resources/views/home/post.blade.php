@extends('layouts.layout')

@section('title', $post->title)

@section('content')
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
                        <li><i class='far fa-sticky-note'></i> <a href="{{ route('home.category', ['slug' =>
$post->category->slug]) }}"> {{ $post->category->title }}</a></li>
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
    </div>
</section>
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
@endsection
