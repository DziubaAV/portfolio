@extends("layouts.app")

@section('title-block')
Услуги
@endsection

@section('content') 

<section class="services_home" id="home">
    <div class="services_home-img">
        <img src="{{ asset('\img\home-img.png') }}" alt="">
    </div>
    
    <div class="services_home-content">
        <h1>Ремонт <span>компьютеров</span></h1>
        <p> Обращаясь ко мне, вы получаете красивое решение для устранения проблем с вашим компьютером или ноутбуком. Независимо от причины, будь то вирусное заражение или сложности с его включением, я готов предложить вам эффективный ремонт компьютера в Минске по самым привлекательным ценам. Пожалуйста, свяжитесь со мной, и я оперативно выясню причину проблемы и приведу ваше устройство в полный порядок.</p>
    </div>
</section>


<!-- Price -->
<section class="price" id="price">
   <h2 class="heading"> <span>Цена</span> </h2>
   <div class="table-box">
        <div class="table-row table-head">
            <div class="table-cell first-cell">
                <p>Виды работ</p>
            </div>
            <div class="table-cell last-cell">
                <p>Цена</p>
            </div> 
        </div>
        @foreach($prices as $price)
        <div class="table-row">
        
            <div class="table-cell first-cell">
                <p>{{ $price->service }}</p>
            </div>
            <div class="table-cell last-cell">
                <p>{{ $price->price }}</p>
            </div> 
             
        </div>
        @endforeach 
</div>  
</section>
<!-- Price end -->

<!-- FAQ -->
<section class="faq" id="faq">
    <h2 class="heading">Часто задаваемые <span>вопросы</span></h2>

    <div class="accordion-container">
        @foreach($questionAnswers as $questionAnswer)
            <div class="accordion">
                <div class="accordion-heading">
                    <h3>{{ $questionAnswer->question }}</h3>
                    <i class='bx bxs-chevron-down'></i>
                </div>
                <p class="accordion-content">{{ $questionAnswer->answer }}</p>
            </div>
        @endforeach
    </div>
</section>
<!-- FAQ end -->

@endsection
