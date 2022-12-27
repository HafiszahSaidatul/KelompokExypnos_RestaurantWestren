@extends('layouts.main')
<link href="/css/font-awesome/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="/css/plugins/cubeportfolio/css/cubeportfolio.min.css">
<link href="/css/owl.carousel.css" rel="stylesheet" media="screen" />
<link href="/css/nivo-lightbox.css" rel="stylesheet" />
<link href="/css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
<link href="/css/owl.theme.css" rel="stylesheet" media="screen" />
<link href="/css/animate.css" rel="stylesheet" />
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

@endsection