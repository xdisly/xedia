@extends('layouts.layout')

@section('title', 'Новости')

@section('content')
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
                                    <li><i class="fa fa-clock-o"></i> {{ Date::parse($post->created_at)->format('j F Y г.') }}</li>
                                    <li><i class="far fa-eye"></i> {{ $post->view }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="blog__popular spad">
                            <h3>Популярные новости</h3>
                        </div>
                    </div>
                    @foreach($popular_posts as $post)
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <div class="blog__item myshadow">
                                    <div class="blog__pic">
                                        <img src="{{ $post->getImage() }}">
                                        <div class="label"><a href="{{ route('home.category', ['slug' =>
$post->category->slug]) }}"> {{ $post->category->title }}</a></div>
                                    </div>
                                    <div class="blog__text">
                                        <h5><a href="{{ route('home.post', ['slug' => $post->slug]) }}">{{ $post->title }}</a></h5>
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i> {{ Date::parse($post->created_at)->format('j F Y г.') }}</li>
                                            <li><i class="far fa-eye"></i> {{ $post->view }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    <div class="col-lg-12">
                        <div class="blog__popular spad">
                            <h3>Популярные категории</h3>
                        </div>
                    </div>
                    @foreach($cats as $cat)
                        <div class="all_label"><a href="{{ route('home.category', ['slug' =>
$cat->slug]) }}"> {{ $cat->title }}</a><!--{{ $cat->posts_count }}!--></div>
                    @endforeach
                    </div>
                </div>
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</section>
@endsection
