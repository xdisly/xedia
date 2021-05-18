@extends('layouts.layout')

@section('title', 'Контакты')

@section('content')
<section class="contact-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="contact__text">
                    <h3>Контакты</h3>
                    <p>Хотите предложить сотрудничество или возникли какие-либо вопросы?
                        <br>Свяжитесь с нами!</p>
                    <ul>
                        <li>
                            <span class="fa fa-envelope"></span>
                            <h5>Email</h5>
                            <p>contact@xedia.ru</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--
<div class="contact-form spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>Обратная связь</h3>
                <form action="" method="post">
                    <div class="input-list">
                        <input type="text" id="username" name="username" placeholder="Имя">
                        <input type="email" id="email" name="email" placeholder="Email">
                    </div>
                    <textarea id="mess" name="mess" placeholder="Текст"></textarea>
                    <div class="attention_note" id="errorBlock"></div>
                    <button type="button" id="mess_send" class="primary-btn">Отправить</button>
                </form>
            </div>
        </div>
    </div>
</div>
!-->
@endsection
