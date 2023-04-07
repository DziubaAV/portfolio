@extends("layouts.app")
@section('title-block')Контакты@endsection
@section('content')
<!-- Раздел контакты -->

<section class="contact" id="contact">

@include('messages')

    <h2 class="heading">Напиши <span>мне!</span></h2>

    <form action="/contact/submit" method="POST">
        @csrf
        <div class="input-box">
            <input type="text" name="fullname" placeholder="Полное имя">
            <input type="email" name="email" placeholder="Адрес электронной почты">
        </div>
        <div class="input-box">
            <input type="tel" name="mobile" placeholder="Мобильный телефон">
            <input type="text" name="email_subject" placeholder="Тема письма">
        </div>
        <textarea type="text" name="message" name="" cols="30" rows="10" placeholder="Введите сообщения"></textarea>
        <!-- <input class="btn" type="submit" value="Отправить"> -->
        <button class="btn" type="submit">Отправить</button>
        
    </form>
</section>

@endsection