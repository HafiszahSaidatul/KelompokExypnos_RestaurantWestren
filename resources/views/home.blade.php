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
        <h3 class="text-center" style ="margin-top : 30px; color: #ffba00; font-size:50px;">ABOUT US</h3>
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
    <div class="container mt-4">
        <h3 class="text-center" style="color :#ffbe00; font-size :50px;">Menu Favorite</h3>
        <div class="pgn">      
            <div class="card">
                <div class="face front">
                    <img src="https://source.unsplash.com/500x300?breakfast">
                    <h3>Breakfast</h3>
                </div>
                <div class="face back">
                    <span>Breakfast</span>
                    <p>This breakfast menu is one of the most favorite dishes in this restaurant. served very delicious and hot, because the manufacturing time is fast and cooked right away and you can takeaway for lunch at the office or at home.</p>
                    <div class="link">
                        <a href="#">Details</a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="face front">
                    <img src="https://source.unsplash.com/500x300?lunch">
                    <h3>Lunch</h3>
                </div>
                <div class="face back">
                    <span>Lunch</span>
                    <p>This Lunch menu is one of the most favorite dishes in this restaurant. served very delicious and hot, because the manufacturing time is fast and cooked right away and you can takeaway for lunch at the office or at home.</p>
                    <div class="link">
                        <a href="#">Details</a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="face front">
                    <img src="https://source.unsplash.com/500x300?dinner">
                    <h3>Dinner</h3>
                </div>
                <div class="face back">
                    <span>Dinner</span>
                    <p>This Dinner menu is one of the most favorite dishes in this restaurant. served very delicious and hot, because the manufacturing time is fast and cooked right away and you can takeaway for lunch at the office or at home.</p>
                    <div class="link">
                        <a href="#">Details</a>
                    </div>
                </div>
            </div>
        </div>    
    </div> 
@endsection