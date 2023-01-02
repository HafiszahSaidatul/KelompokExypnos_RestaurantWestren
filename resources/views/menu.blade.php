@extends('layouts.main')

@section('container')
    <div class="container" style="margin-top: 150px; widht: 50px; background-color: #FED049; border-radius:5%">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="text-white" style="margin-top: 120px; margin-bottom: 25px;">Menu</h1>
                <article>
                    <h2>{{ $menu->nama }}</h2>

                    <p>Category <a href="/categories/{{ $menu->category->slug }}"
                            class="text-decoration-none">{{ $menu->category->name }}</a></p>

                    @if ($menu->image)
                      <img src="{{ Route('image.displayImage' , $menu->image) }}" alt="{{ $menu->name }}" class="img-fluid">
                    @else  
                      <img src="https://source.unsplash.com/500x300?{{ $menu->nama }}" alt="{{ $menu->nama }}" class="img-fluid mt-3">
                    @endif
                    
                    <br>
                    {!! $menu->body !!}
                </article>

                <a href="/menus" class="d-block mt-5 btn btn-success mb-3">Back to Menu</a>
            </div>
        </div>
    </div>
@endsection
