@extends('layouts.layout')

@section('title', 'Новости')

@section('content')
    <!-- Hero -->
    <section class="about-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="about__text">
                        <h2>Новости</h2>
                        <p>Новости Xedia Project</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- News Section Begin -->
<section class="blog-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class='col-lg-4 col-md-6 col-sm-6'>
                        @foreach($posts as $post)
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
                        @endforeach
                    </div>
                </div>
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</section>
<!-- News Section End -->
@endsection
