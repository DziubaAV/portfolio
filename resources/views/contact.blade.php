@extends("layouts.app")
@section('title-block')

Контакты

@endsection

@section('content')
<!-- Раздел контакты -->

<section class="contact" id="contact">
    <h2 class="heading">Напишите <span>мне!</span></h2>

   <form action="/contact/submit" method="POST">
    @csrf
    
    <div class="contact_input-box">
        @if ($errors->has('fullname'))
        <span class="contact_error">{{ $errors->first('fullname') }}</span>
        @endif
    <input type="text" name="fullname" placeholder="Полное имя (обязательно)" value="{{ old('fullname') }}">
        
        @if($errors->has('email'))
        <span class="contact_error">{{ $errors->first('email') }}</span>
        @endif
    <input type="email" name="email" placeholder="Адрес электронной почты (обязательно)" value="{{ old('email') }}">     
    </div>

    <div class="contact_input-box">
        @if($errors->has('mobile'))
        <span class="contact_error">{{ $errors->first('mobile') }}</span>
        @endif
    <input type="tel" name="mobile" placeholder="Мобильный телефон" value="{{ old('mobile') }}">
        
        @if($errors->has('email_subject'))
        <span class="contact_error">{{ $errors->first('email_subject') }}</span>
        @endif
    <input type="text" name="email_subject" placeholder="Тема письма (обязательно)" maxlength="110" value="{{ old('email_subject') }}"> 
    </div>

        @if($errors->has('message'))
        <span class="contact_error">{{ $errors->first('message') }}</span>
        @endif
        
        <div class="contact_counter-box">
            <textarea class="contact_counte-input" type="text" name="message" cols="30" rows="10" placeholder="Введите сообщения (обязательно)" maxlength="500">{{ old('message') }}</textarea> 
            <span class="contact_counter-text">
                    <span class="contact_counter-text_current">0</span>
                    /
                    <span>500</span>
                </span>
        </div>

    <button class="btn" type="submit">Отправить</button>
    
 




<!-- Счетчик для Textarea -->
    <script>
        const ta = document.querySelector('.contact_counte-input');
        const counter = document.querySelector('.contact_counter-text_current');

        ta.addEventListener('input', onInput);

        function onInput(evt) {
            const length = evt.target.value.length;
            counter.innerText = length;
        }
    </script>
</form>
</section>

@endsection

