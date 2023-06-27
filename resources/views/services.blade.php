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
   <div class="price_table-box">
        <div class="price_table-row price_table-head">
            <div class="price_table-cell price_first-cell">
                <p>Виды работ</p>
            </div>
            <div class="price_table-cell price_last-cell">
                <p>Цена</p>
            </div> 
        </div>
        @foreach($prices as $price)
        <div class="price_table-row">
        
            <div class="price_table-cell price_first-cell">
                <p>{{ $price->service }}</p>
            </div>
            <div class="price_table-cell price_last-cell">
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

    <div class="faq_accordion-container">
        @foreach($questionAnswers as $questionAnswer)
            <div class="faq_accordion">
                <div class="faq_accordion-heading">
                    <h3>{{ $questionAnswer->question }}</h3>
                    <i class='bx bxs-chevron-down'></i>
                </div>
                <p class="faq_accordion-content">{{ $questionAnswer->answer }}</p>
            </div>
        @endforeach
    </div>
</section>
<!-- FAQ end -->

@endsection
