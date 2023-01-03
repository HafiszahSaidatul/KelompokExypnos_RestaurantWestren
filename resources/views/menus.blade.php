@extends('layouts.menu')

@section('container')
    <div class="circle"></div>

    <div class="title" style="margin-top: 125px">
        <h1 class="mb-3 text-white text-center mt-5" style="margin-top: 100px">{{ $title }}</h1>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="/menus">
                @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                    <button class="btn btn-danger" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    <div class="pgn"> 
            @foreach ($menus as $menu)     
                <div class="card">
                    <div class="face front">
                        <img src="https://source.unsplash.com/500x300?{{ $menu->category->name }}-food">

                        <h3>{{ $menu->category->name }}</h3>
                    </div>
                    <div class="face back">
                        <span>{{ $menu->nama }}</span>
                        
                        @if ($menu->image)
                            <div style="max-height: 300px; overflow: hidden;"></div>
                            <img src="{{ Route('image.displayImage' , $menu->image) }}" alt="{{ $menu->name }}-food" class="img-fluid" style="height: 150px; width: 500p">
                        @else  
                            <img src="https://source.unsplash.com/500x300?{{ $menu->nama }}-food" alt="{{ $menu->nama }}-food" class="img-fluid mt-3">
                        @endif

                        <div class="link">
                            <a href="/menus/{{ $menu->slug }}">Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>    
    </div> 
@endsection