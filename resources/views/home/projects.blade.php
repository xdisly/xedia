@extends('layouts.layout')

@section('title', 'Проекты')

@section('content')
    <!-- Hero -->
    <section class="about-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="about__text">
                        <h2>Проекты</h2>
                        <p>Узнайте подробнее о наших проектах</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Project Section Begin -->
    <section class="project-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="section-title normal-title">
                        <h3>Интернет-проекты</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="project__item">
                        <div class="project__pic">
                            <img src="{{ asset ('assets/front/img/banner/tsb_banner.png') }}" alt="">
                        </div>
                        <div class="project__text">
                            <h5>TopSoundboard</h5>
                            <span>topsoundboard.ru</span>
                            <p>Слушай и загружай топовые фразы стримеров и блогеров</p>
                            <div class="project__social">
                                <a href="https://topsoundboard.ru" class="other"><i class="fa fa-globe-americas"></i></a>
                                <a href="https://vk.com/topsoundboard" class="vk"><i class="fa fa-vk"></i></a>
                                <a href="https://instagram.com/topsoundboard" class="instagram"><i class="fa fa-instagram"></i></a>
                                <a href="https://t.me/topsoundboard" class="telegram"><i class="fab fa-telegram-plane"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="section-btn">
                        <a href="/" class="primary-btn">О проекте</a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="project__item">
                        <div class="project__pic">
                            <img src="{{ asset ('assets/front/img/banner/tvcube_banner.png') }}" alt="">
                        </div>
                        <div class="project__text">
                            <h5>TV Cube</h5>
                            <span>tvcube.ru</span>
                            <p>Смотри трансляции онлайн</p>
                            <div class="project__social">
                                <a href="https://tvcube.ru" class="other"><i class="fa fa-globe-americas"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="section-btn">
                        <a href="/" class="primary-btn">О проекте</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Project Section End -->

    <!-- Project Section Begin -->
    <section class="project-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="section-title normal-title">
                        <h3>Медиа-проекты</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="project__item">
                        <div class="project__pic">
                            <img src="{{ asset ('assets/front/img/banner/6x6_banner.png') }}" alt="">
                        </div>
                        <div class="project__text">
                            <h5>6X6</h5>
                            <span>Платформа Twitch</span>
                            <p>Развлекательный канал для молодой аудитории</p>
                            <div class="project__social">
                                <a href="https://twitch.tv/6x6tv" class="twitch"><i class="fa fa-twitch"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="section-btn">
                        <a href="/" class="primary-btn">О проекте</a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="project__item">
                        <div class="project__pic">
                            <img src="{{ asset ('assets/front/img/banner/qchannel_banner.png') }}" alt="">
                        </div>
                        <div class="project__text">
                            <h5>Q Channel</h5>
                            <span>Платформа Twitch</span>
                            <p>Канал развлекательной тематики</p>
                            <div class="project__social">
                                <a href="https://twitch.tv/qchannel" class="twitch"><i class="fa fa-twitch"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="section-btn">
                        <a href="/" class="primary-btn">О проекте</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Project Section End -->
@endsection
