@extends('layouts.main')

@section('container')
  <h1 class="text-white" style="margin-top: 120px; margin-bottom: 25px;">Categories Food</h1>

  <div class="container">
    <div class="row">
      @foreach ($categories as $category)
      <div class="col-md-4"> 
        <div class="card">
          <div class="face front">
            <img src="https://source.unsplash.com/500x300?{{ $category->name }}">
            <h3>{{ $category->name }}</h3>
             </div>
             <div class="face back">
             <span>{{ $category->name }}</span>
                 <p>This breakfast menu is one of the most favorite dishes in this restaurant. served very delicious and hot, because the manufacturing time is fast and cooked right away and you can takeaway for lunch at the office or at home.</p>
                 <div class="link">
                     <a href="/menus?category={{ $category->slug }}">Details</a>
                 </div>
             </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
@endsection