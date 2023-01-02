@extends('dashboard.layouts.main')

@section('container')
  <div class="container">
    <div class="row my-3">
      <div class="col-lg-8">
        <h1 class="my-3">{{ $menu->nama }}</h2>
        
        <a href="/dashboard/menus" class="btn btn-success"><span data-feather="arrow-left"></span> Back to All My menus</a>
        <a href="/dashboard/menus/{{ $menu->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
        <form action="/dashboard/menus/{{ $menu->slug }}" method="post" class="d-inline">
          @method('delete')
          @csrf
          <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span> Delete</button>
        </form>
        
        @if ($menu->image)
          <div style="max-height: 350px; overflow: hidden;"></div>
          <img src="{{ Route('image.displayImage' , $menu->image) }}" alt="{{ $menu->name }}" class="img-fluid">
        @else  
          <img src="https://source.unsplash.com/1200x400?{{ $menu->category->name }}" alt="{{ $menu->category->name }}" class="img-fluid mt-3">
        @endif
          
        <article class="my-3 fs-5">
          {!! $menu->body !!}
        </article>
      </div>
    </div>
  </div>
@endsection