@extends('layouts.menu')

@section('container')
    <div class="circle"></div>
        <div class="pgn" style="margin-top:90px;"> 
            @foreach ($menus as $menu)     
                <div class="card">
                    <div class="face front">
                        <img src="https://source.unsplash.com/500x300?{{ $menu->category->name }}">
                        <h3>{{ $menu->category->name }}</h3>
                    </div>
                    <div class="face back">
                        <span>{{ $menu->nama }}</span>

                        <img src="https://source.unsplash.com/500x400?{{ $menu->nama }}" alt="{{ $menu->nama }}">

                        <div class="link">
                            <a href="/menus/{{ $menu->slug }}">Details</a>
                        </div>
                    </div>
                </div>
             @endforeach
        </div>    
    </div> 
@endsection