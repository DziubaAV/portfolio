@extends("layouts.app")
@section('title-block') 

Обо мне 

@endsection
@section('content')

<!-- Раздел обо мне -->
<section class="about" id="about">
    <div class="about-img">
        <img src="img\portfolio_about.png" alt="">
    </div>

    <div class="about-content">
        <h2 class="heading">Обо <span>мне</span></h2>
        <h3>Frontend Developer!</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore expedita praesentium,
        vel iusto sit recusandae quasi qui dolore obcaecati, quo vero tempora. Consectetur iste dolorum 
        voluptatibus eligendi non! Magnam doloremque provident nulla hic, officia laboriosam architecto 
        mollitia eaque eveniet veniam recusandae id omnis, consequatur quaerat quibusdam.</p>

        <a href="#" class="btn">Написать мне</a>
    </div>
</section>

@endsection