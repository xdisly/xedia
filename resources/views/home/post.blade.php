@extends('layouts.layout')

@section('title', $post->title)

@section('content')
<section class="about-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="news__item news_page_name news__text">
                    <div class="label"><a href="{{ route('home.category', ['slug' =>
$post->category->slug]) }}"> {{ $post->category->title }}</a></div>
                    <h2>{{ $post->title }}</h2>
                    <p>{{ $post->description }}</p>
                    <ul>
                        <li><i class="fa fa-clock-o"></i> {{ Date::parse($post->created_at)->format('j F Y г.') }}</li>
                        <li><i class="far fa-eye"></i> {{ $post->view }}</li>
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
                <div class="row d-flex justify-content-center">
                    <div class='col-lg-10 col-md-12 col-sm-12'>
                        <div class='blog__item'>
                            <div class='blog__text'>
                                {!! $post->content !!}
                            </div>
                        </div>
                        @if($post->tags->count())
                            <div class="blog__details__tags">
                                @foreach($post->tags as $tag)
                                    <a href="{{ route('home.tag', ['slug' => $tag->slug]) }}">
                                        </i> {{ $tag->title }}</a>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
