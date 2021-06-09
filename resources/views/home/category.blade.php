@extends('layouts.layout')

@section('title', $category->title)

@section('content')
    <section class="about-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="about__text">
                        <h2>{{ $category->title }}</h2>
                        <p>Записи соответствующие этой категории</p>
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
                            <div class="col-lg-4 col-md-6 col-sm-6">
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
                                            <li><i class="fa fa-clock-o"></i> {{ Date::parse($post->created_at)->format('j F Y г.') }}</li>
                                            <li><i class="far fa-eye"></i> {{ $post->view }}</li>
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
