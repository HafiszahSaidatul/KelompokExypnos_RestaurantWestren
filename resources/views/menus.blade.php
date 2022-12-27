@extends('layouts.menu')

@section('container')
    <div class="circle"></div>

    <h1 class="mb-3 text-center text-white">{{ $title }}</h1>

    <div class="row">
        @foreach ($menus as $menu)
            <div class="col-md-4">
                <div class="card">
                    <img src="https://source.unsplash.com/500x300?{{ $menu->category->name }}" alt="" class="card__img"> 
    
                    <!-- <div class="card__content">  -->
                         <div class="card__data">
                             <h1 class="card__title">{{ $menu->nama }}</h1>
                             <span class="card__preci">{{ $menu->harga }}</span>
                             <p class="card__description">{{ $menu->body }}</p>
                             <a href="/menus/{{ $menu->slug }}" class="card__button">Detail</a>
                         </div>
                    <!-- </div> -->
                </div>
            </div>
         @endforeach
    </div>
@endsection