@extends ('layouts.main')\

<div class="container text-left mt-4">
  <h1>About Us</h1>
  <div class="row">
    <div class="col">
      <h4>{{ $judul1 }}</h4>

      <p> {{ $desk1 }}</p>
      <a href="/about" class="btn btn-primary mt-4">Discover More</a>
    </div>
    <div class="col">
      <img src="https://source.unsplash.com/500x450?makanan">
    </div>
  </div>
</div>

<div class="container mt-5 mb-5">
  <div class="row">
    <div class="col">
      <img src="https://source.unsplash.com/500x300?orang">
    </div>
    <div class="col">
      <h4>{{ $judul2 }}</h4>
        
      <p>{{ $desk2 }}<p>
      <a href="/about" class="btn btn-primary mt-4">Discover More</a>
    </div>
  </div>
</div>