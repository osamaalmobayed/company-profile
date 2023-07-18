
@php
$homeslide = App\Models\HomeSlide::find(14);
 

@endphp

<section class="banner">
    <div class="container custom-container">
    <div class="row align-items-center justify-content-center justify-content-lg-between">
    <div class="col-lg-6 order-0 order-lg-2">
    <div class="banner__img text-center text-xxl-end">
    <img src="{{ asset('upload/home_slide/1727377781656871.png') }} " alt="">
    </div> 
    </div>
    <div class="col-xl-5 col-lg-6">
    <div class="banner__content">
    <h2 class="title wow fadeInUp" data-wow-delay=".2s"><span>Best Product in the shortest time now</h2>
    Rasalina based product design & visual designer focused on crafting clean & user‑friendly experiences
    <p class="wow fadeInUp" data-wow-delay=".4s"></p>
        <a href="about" class="btn banner__btn wow fadeInUp" data-wow-delay=".6s">more about me</a>
    </div>
    </div>
    </div>
    </div>
    <div class="scroll__down">
    <a href="#aboutSection" class="scroll__link">Scroll down</a>
    </div>
    <div class="banner__video">
    <a href="https://www.youtube.com/watch?v=Zlf1DNafvnw" class="popup-video"><i class="fas fa-play"></i></a>

    </section>