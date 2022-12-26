@extends('layouts.main2')

@section('container')
  <div class="container text-white">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <h1 class="mb-3">{{ $menu->nama }}</h2>

        <p>Category <a href="/menus?category={{ $menu->category->slug }}"  class="text-decoration-none">{{ $menu->category->name }}</a></p>
          
        @if ($menu->image)
          <div style="max-height: 350px; overflow: hidden;"></div>
          {{-- <img src="{{ asset('storage/' . $menu->image) }}" alt="{{ $menu->category->name }}" class="img-fluid">   --}}
          <img src="{{ Route('image.displayImage' , $menu->image) }}" alt="{{ $menu->category->name }}" class="img-fluid">
        @else  
          <img src="https://source.unsplash.com/1200x400?{{ $menu->category->name }}" alt="{{ $menu->category->name }}" class="img-fluid">
        @endif
          
        <article class="my-3 fs-5">
          {!! $menu->body !!}
        </article>
      
        <a href="/menus" class="d-block mt-3">Back to menus</a>
      </div>
    </div>
  </div>
@endsection