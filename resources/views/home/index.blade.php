@extends('layouts.layout')

@section('title', 'Главная')

@section('content')
<!-- About Section Begin -->
<section class="about-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="about__text">
                    <h2>Добро пожаловать</h2>
                    <p>На этом сайте вы можете узнать о наших проектах и рекламных возможностях</p>
                    <div class="about__achievement">
                        <div class="about__achieve__item">
                            <span class="fa fa-globe"></span>
                            <h4 class="achieve-counter">2</h4>
                            <p>Интернет-проекта</p>
                        </div>
                        <div class="about__achieve__item">
                            <span class="fa fa-play-circle-o"></span>
                            <h4 class="achieve-counter">2</h4>
                            <p>Медиа-проекта</p>
                        </div>
                        <div class="about__achieve__item">
                                <span class="fa fa-ad">
                                <h4 class="achieve-counter">3</h4>
                                <p>Рекламные площадки</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->

<!-- Project Section Begin -->
<section class="project-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div class="section-title normal-title">
                    <h3>Интернет-проекты</h3>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="section-btn">
                    <a href="/" class="primary-btn">Перейти</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="product__item">
                    <div class="product__pic">
                        <img src="{{ asset ('assets/front/img/logo/topsoundboard_logo.png') }}" alt="">
                    </div>
                    <div class="product__text">
                        <h5>TopSoundboard</h5>
                        <span>topsoundboard.ru</span>
                        <p>Слушай и загружай топовые фразы стримеров и блогеров</p>
                        <div class="product__social">
                            <a href="https://topsoundboard.ru" class="other"><i class="fa fa-globe-americas"></i></a>
                            <a href="https://vk.com/topsoundboard" class="vk"><i class="fa fa-vk"></i></a>
                            <a href="https://instagram.com/topsoundboard" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="https://t.me/topsoundboard" class="telegram"><i class="fab fa-telegram-plane"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="product__item">
                    <div class="product__pic">
                        <img src="{{ asset ('assets/front/img/logo/tvcube_logo.png') }}" alt="">
                    </div>
                    <div class="product__text">
                        <h5>tvcube▢</h5>
                        <span>tvcube.ru</span>
                        <p>Смотрите трансляции и тв-каналы в прямом эфире</p>
                        <div class="product__social">
                            <a href="https://tvcube.ru" class="other"><i class="fa fa-globe-americas"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Project Section End -->

<!-- Resources Section Begin -->
<section class="resources-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div class="section-title normal-title">
                    <h3>Медиа-проекты</h3>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="section-btn">
                    <a href="/" class="primary-btn">Перейти</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="product__item">
                    <div class="product__pic">
                        <img src="{{ asset ('assets/front/img/logo/6x6_logo.png') }}" alt="">
                    </div>
                    <div class="product__text">
                        <h5>6X6</h5>
                        <span>Платформа Twitch</span>
                        <p>Развлекательный канал для молодой аудитории</p>
                        <div class="product__social">
                            <a href="https://twitch.tv/6x6tv" class="twitch"><i class="fa fa-twitch"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="product__item">
                    <div class="product__pic">
                        <img src="{{ asset ('assets/front/img/logo/qchannel_logo.png') }}" alt="">
                    </div>
                    <div class="product__text">
                        <h5>Q Channel</h5>
                        <span>Платформа Twitch</span>
                        <p>Канал развлекательной тематики</p>
                        <div class="product__social">
                            <a href="https://twitch.tv/qchannel" class="twitch"><i class="fa fa-twitch"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Resources Section End -->

<!-- Ad Section Begin -->
<section class="resources-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div class="section-title normal-title">
                    <h3>Реклама</h3>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="section-btn">
                    <a href="/" class="primary-btn">Перейти</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="feature__item">
                    <h5>Интернет-проекты</h5>
                    <p>Размещение рекламы на интернет-проектах: TopSoundboard, tvcube▢</p>
                    <div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="feature__item">
                    <h5>Медиа-проекты</h5>
                    <p>Размещение рекламы на медиа-проектах: Q Channel</p>
                    <div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- Ad Section End -->

<!-- News Section Begin -->
<section class="blog-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div class="section-title normal-title">
                    <h3>Новости</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class='col-lg-4 col-md-6 col-sm-6'>
                        <div class='blog__item'>
                            <div class='blog__text'>
                                <h5><a href="/">Название</a></h5>
                                <p>Описание</p>
                                <ul>
                                    <li><i class='fa fa-clock-o'></i> Дата</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="load-more">
                    <a href="/" class="button_2">Все новости</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- News Section End -->
@endsection
