@extends('layouts.main')

@section('container')

<!-- Halaman Home  -->
    <div class="circle"></div>
    
    <div class="content my-5 py-5">
        <div class="textBox">
            <h2>Restaurant<br><span>Affomato</span></h2>
            <p>A Delectable Distinguished Affomato Like No Other. Exclusive & Unorthodox.
               A Feast for the Palette. A Break From the Hustle, Residing On A Rooftop
               Evoking Moments To Remember,Whisper to us about your feelings
               and we will prepare what you need now.</p>
          <a class="{{ $active === 'login' ? 'active' : '' }}" href="/login">View Menu</a>
        </div>

        <div class="imgBox">
            <img src="/assets/img/img1.png" class="starbucks">
        </div>
    </div>
    
    <ul class="thumb">
        <li><img src="/assets/img/img1.png" onclick="imgSlider('/assets/img/img1.png');changeCircleColor('#ffbe00')"></li>
        <li><img src="/assets/img/img2.png" onclick="imgSlider('/assets/img/img2.png');changeCircleColor('#90b217')"></li>
        <li><img src="/assets/img/img3.png" onclick="imgSlider('/assets/img/img3.png');changeCircleColor('#9dc741')"></li>
    </ul>
    <ul class="sci">
         <li><a href="#"><img src="/assets/img/f.png"></a></li>
        <li><a href="#"><img src="/assets/img/ig.png"></a></li>
        <li><a href="#"><img src="/assets/img/t.png"></a></li>
    </ul>

<!-- Halaman About -->
    <section>
        <div class="container text-left text-white">
            <div class="row">
                <div class="wow fadeInDown" data-wow-delay="0.1s">
                <div class="section-heading text-center">
        <h3 class="text-center" style ="margn-top : 30px; color: #ffba00; font-size:50px;">ABOUT US</h3>
        </div>
                </div>
            </div>
            <div class="row mt-5 py-5" style="margin-top: 50px">
                <div class="col">
                    <img src="https://source.unsplash.com/500x300?restaurant">
                </div>
                <div class="col">
                    <h5>Between eaven & Earth</h5>
                    <p>A Delectable Distinguished Omakase Like No Other. Exclusive & Unorthodox.<p>
                    <p>A Feast for the Palette. A Break From the Hustle, Residing On A Rooftop; Evoking Moments To Remember.</p>
                    <p>Whisper to us about your feelings, and we will prepare what you need now.</p>
                    <a href="/about" class="btn btn-primary mt-4">Discover More</a>
                </div>
            </div>
        </div>
    </section>


<!-- Halaman Menu -->
    <div class="container text-left text-white">
        <div class="row">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
                <div class="section-heading text-center">
                <h3 class="text-center" style ="margin: 0 20px -50pt; color: #ffba00; font-size:50px;">Menu Best Seller</h3>
                    <div class="col">
                        <div class="containeroo">
                            <div class="card">
                                <img src="/assets/img/b.png" alt="" class="card__img">
                                <div class="card__data">
                                    <h1 class="card__title"> Strawberry Roll</h1>
                                    <span class="card__preci">50K</span>
                                    <p class="card__description"> Strawberry shortcake Menu Best Seller Breakfast.</p>
                                    <a href="/menus" class="card__button">Review</a>
                                </div>
                            </div>
                            <div class="card">
                                <img src="/assets/img/nodle.png" alt="" class="card__img">
                                <div class="card__data">
                                    <h1 class="card__title">Veggle Noodles</h1>
                                    <span class="card__preci">90K</span>
                                    <p class="card__description">Veggle Noodles Menu Best Seller Have Lunch.</p>
                                    <a href="/menus" class="card__button">Review</a>
                                </div>
                            </div>
                            <div class="card">
                                <img src="/assets/img/pasta.png" alt="" class="card__img">
                                <div class="card__data">
                                    <h1 class="card__title">Pasta Tomato</h1>
                                    <span class="card__preci">135K</span>
                                    <p class="card__description">Pasta Tomato Menu Best Seller Dinner.</p>
                                    <a href="/menus" class="card__button">Review</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection