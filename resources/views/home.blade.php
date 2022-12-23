@extends('layouts.main')

<section>
    <div class="circle"></div>

    <header>
        <a href="/"><img src="/assets/img/w.png" class="logo"></a>
        <ul>
            <li><a class="{{ $active === 'home' ? 'active' : '' }}" href="/">Home</a></li>
            <li><a class="{{ $active === 'about' ? 'active' : '' }}" href="/about">About</a></li>
            <li><a class="{{ $active === 'rooftop' ? 'active' : '' }}" href="/rooftop">Rooftoop Moments</a></li>
            <li><a class="{{ $active === 'menu' ? 'active' : '' }}" href="/menu">Menu Fav</a></li>
            <li><a class="{{ $active === 'contact' ? 'active' : '' }}" href="/contact">Contact Us</a></li>
            <li><a class="{{ $active === 'login' ? 'active' : '' }}" href="/login">Login</a></li>
        </ul>
    </header>

    <div class="content">
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
        <li><img src="/assets/img/img1.png" onclick="imgSlider('/assets/img/img1.png');changeCircleColor('#ffbe00')">
        </li>
        <li><img src="/assets/img/img2.png" onclick="imgSlider('/assets/img/img2.png');changeCircleColor('#90b217')">
        </li>
        <li><img src="/assets/img/img3.png" onclick="imgSlider('/assets/img/img3.png');changeCircleColor('#90b217')">
        </li>
    </ul>
    <ul class="sci">
        <li><a href="#"><img src="/assets/img/f.png"></a></li>
        <li><a href="#"><img src="/assets/img/i.png"></a></li>
        <li><a href="#"><img src="/assets/img/t.png"></a></li>
    </ul>
    </div>
</section>
