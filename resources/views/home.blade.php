@extends('layouts.main')

@section('container')
    <div class="circle"></div>
    
    <div class="content my-5 py-5">
        <div class="textBox">
            <h2>Restaurant<br><span>Affomato</span></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, s
                ed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris n
                isi ut aliquip ex ea commodo.</p>
            <a href="#">View Menu</a>
        </div>

        <div class="imgBox">
            <img src="/assets/img/img1.png" class="starbucks">
        </div>
    </div>
    
    <ul class="thumb">
        <li><img src="/assets/img/img1.png" onclick="imgSlider('/assets/img/img1.png');changeCircleColor('#ffbe00')"></li>
        <li><img src="/assets/img/img2.png" onclick="imgSlider('/assets/img/img2.png');changeCircleColor('#90b217')"></li>
        <li><img src="/assets/img/img3.png" onclick="imgSlider('/assets/img/img3.png');changeCircleColor('#90b217')"></li>
    </ul>
    <ul class="sci">
        <li><a href="#"><img src="/assets/img/f.png"></a></li>
        <li><a href="#"><img src="/assets/img/i.png"></a></li>
        <li><a href="#"><img src="/assets/img/t.png"></a></li>
    </ul>

    <div class="container text-left text-white">
        <div class="row mt-5 py-5" style="margin-top: 100px">
            <div class="col">
                <img src="https://source.unsplash.com/500x300?orang">
            </div>
            <div class="col">
                <h5>About Us</h5>
                <h3>Between Heaven & Earth</h3>

                <p>A Delectable Distinguished Omakase Like No Other. Exclusive & Unorthodox.
                <p>
                <p>A Feast for the Palette. A Break From the Hustle, Residing On A Rooftop; Evoking Moments To Remember.</p>

                <p>Whisper to us about your feelings, and we will prepare what you need now.</p>
                <a href="/about" class="btn btn-primary mt-4">Discover More</a>
            </div>
        </div>
    </div>

    <div class="slider text-white">
        <h5 class="text-center">Enjoy</h5>
        <h3 class="text-center">Our Various Moments</h3>

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://source.unsplash.com/500x300?restoran" class="d-block w-100" alt="restoran">
                </div>
                <div class="carousel-item">
                    <img src="https://source.unsplash.com/500x300?western" class="d-block w-100" alt="restoran">
                </div>
                <div class="carousel-item">
                    <img src="https://source.unsplash.com/500x300?food" class="d-block w-100" alt="restoran">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="container mt-4">
        <h5 class="text-center  text-white">From Our Menu</h5>
        <h3 class="text-center  text-white">Try Our Special Cuisines</h3>

        <div class="row mt-3">
            <div class="col-md-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">From Our Lunch Menu</h5>
                        <h3 class="text-center">Lunch Shima - $58</h3>

                        <p class="mt-2">Zensai</p>
                        <p>Seasonal Sashimi (2 Types)</p>
                        <p>Chef Selection Nigiri (5 Pcs)</p>
                        <p>Signature Mini Don</p>
                        <p>Miso Shiru</p>
                        <p>Seasonal Dessert</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">From Our Lunch Menu</h5>
                        <h3 class="text-center">Lunch Shima - $58</h3>

                        <p class="mt-2">Zensai</p>
                        <p>Seasonal Sashimi (2 Types)</p>
                        <p>Chef Selection Nigiri (5 Pcs)</p>
                        <p>Signature Mini Don</p>
                        <p>Miso Shiru</p>
                        <p>Seasonal Dessert</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="button center">
            <a href="/about" class="btn btn-primary mt-2">Discover More</a>
        </div>
    </div>
@endsection