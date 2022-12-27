@extends('layouts.main')

@section('container')
    <div class="container md-5 mt-5">
        <div class="row">
            
    </div>

    <div class="container text-left mt-4">
        <div class="row">
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

    <div class="slider">
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
        <h5 class="text-center">From Our Menu</h5>
        <h3 class="text-center">Try Our Special Cuisines</h3>

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

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-lg-4">
                <main class="form-registration w-100 m-auto">
                    <h1 class="h3 mb-3 fw-normal text-center">Make a Reservation</h1>
                    <form action="/register" method="post">
                        @csrf
                        <div class="form-floating">
                            <input type="text" name="name"
                                class="form-control rounded-top @error('name') is-invalid @enderror" id="name"
                                placeholder="Name" required value="{{ old('name') }}">
                            <label for="name">Your Name</label>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror"
                                id="phone" placeholder="phone" requiredvalue="{{ old('phone') }}">
                            <label for="phone">Your Phone</label>
                            @error('phone')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="text" name="email"
                                class="form-control @error('email') is-invalid @enderror" id="email"
                                placeholder="name@example.com" required value="{{ old('email') }}">
                            <label for="email">Your Email</label>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <select class="form-select">
                                <option selected>Your Person</option>
                                <option value="1">2 Person</option>
                                <option value="2">3 Person</option>
                                <option value="3">4 Person</option>
                                <option value="4">5 Person</option>
                                <option value="5">6 Person</option>
                                <option value="6">7 Person</option>
                                <option value="7">8 Person</option>
                                <option value="8">9 Person</option>
                                <option value="9">10 Person</option>
                            </select>
                        </div>
                        <div class="form-floating">
                            <input type="date" name="tgl"
                                class="form-control rounded-bottom @error('tgl') is-invalid @enderror" id="tgl"
                                placeholder="tgl" required>
                            <label for="tgl"></label>
                            @error('tgl')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <select class="form-select">
                                <option selected>Your Time</option>
                                <option value="1">11:30 am</option>
                                <option value="2">12:00 pm</option>
                                <option value="3">01:00 pm</option>
                                <option value="4">02:00 pm</option>
                                <option value="5">03:00 pm</option>
                                <option value="6">04:00 pm</option>
                                <option value="7">05:00 pm</option>
                                <option value="8">06:00 pm</option>
                                <option value="9">07:00 pm</option>
                                <option value="10">08:00 pm</option>
                                <option value="11">09:00 pm</option>
                                <option value="12">10:00 pm</option>
                                <option value="13">11:00 pm</option>
                            </select>
                        </div>

                        <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">BOOK A TABLE</button>
                    </form>
                </main>
            </div>
            <div class="col">
                <h5>Some Facts</h5>
                <h3>Enhancing Your Feelings</h3>

                <p>From signature delights such as Sakizuke and the best Nigiri Sushi & Soup, all the way to unique
                    specialties such as Agemono, Yakimono or Dessert.
                <p>
            </div>
        </div>
    </div>
@endsection
