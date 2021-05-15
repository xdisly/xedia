@extends('layouts.layout')

@section('title', 'Новость_ID')

@section('content')
<!-- Hero -->
<section class="about-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="news_page_name">
                    <h2>Название</h2>
                    <p>Описание</p>
                    <p><i class='fa fa-clock-o'></i> Дата</p>
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
                                <p>Текст</p>
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
