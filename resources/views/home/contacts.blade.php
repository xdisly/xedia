@extends('layouts.layout')

@section('title', 'Контакты')

@section('content')
    <section class="contact-section contact-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
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
                        <!--
                        <p>Или заполните форму обратной связи</p>
                        <form action="/contacts" method="post">
                            @csrf
                            <div class="input-list">
                                <input type="text" id="name" name="name" placeholder="Имя" required>
                                <input type="email" id="email" name="email" placeholder="Email" required>
                            </div>
                            <textarea id="text" name="text" placeholder="Сообщение" required></textarea>
                            <button type="submit" id="send" class="primary-btn">Отправить</button>
                        </form>
                        !-->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
