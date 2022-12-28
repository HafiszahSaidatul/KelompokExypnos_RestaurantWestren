@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="mb-5 text-center text-white mt-6" style="margin-top: 120px; margin-bottom: 25px;"> {{ $title }}
            </h1>

            @if ($rooftops->count())
                <div class="card mb-3 text-center">
                    <div class="position-absolute px-3 py-2 " style="background-color: rgba(0,0,0,0.7)"><a
                            href="/categories/{{ $rooftops[0]->category->slug }}" class="text-white text-decoration-none">
                            {{ $rooftops[0]->category->name }}</a></div>
                    <img src="https://source.unsplash.com/1200x400?{{ $rooftops[0]->category->name }}" class="card-img-top"
                        alt="{{ $rooftops[0]->category->name }}">
                    <div class="card-body text-center">
                        <h3 class="card-title"><a href="/posts/{{ $rooftops[0]->slug }}"
                                class="text-decoration-none text-dark">{{ $rooftops[0]->title }}</a></h3>
                        <p>
                            <small>
                                By. <a href="/authors/{{ $rooftops[0]->author->username }}"
                                    class="text-decoration-none">{{ $rooftops[0]->author->name }}</a>
                                in
                                <a href="/categories/{{ $rooftops[0]->category->slug }}"
                                    class="text-decoration-none">{{ $rooftops[0]->category->name }}</a>{{ $rooftops[0]->created_at->diffForHumans() }}

                            </small>
                        </p>
                        <p class="card-text">{{ $rooftops[0]->excerpt }}</p>

                        <a href="/rooftops/{{ $rooftops[0]->slug }}"
                            class="
            text-decoration-none btn btn-success mt-3">Read
                            More</a>
                    </div>
                </div>
            @else
                <p class="text-center fs-4">No post found.</p>
            @endif
        </div>
    </div>



    <div class="container mt-3">
        <div class="row">
            @foreach ($rooftops->skip(1) as $rooftop)
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="position-absolute px-3 py-2 " style="background-color: rgba(0,0,0,0.7)"><a
                                href="/categories/{{ $rooftop->category->slug }}" class="text-white text-decoration-none">
                                {{ $rooftop->category->name }}</a></div>
                        <img src="https://source.unsplash.com/500x400?{{ $rooftop->category->name }}" class="card-img-top"
                            alt="{{ $rooftop->category->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $rooftop->title }}</h5>
                            <p>
                                <small class="text-muted">
                                    By. <a href="/authors/{{ $rooftop->author->username }}"
                                        class="text-decoration-none">{{ $rooftop->author->name }}</a>
                                    {{ $rooftop->created_at->diffForHumans() }}
                                </small>
                            </p>
                            <a href="/rooftops/{{ $rooftop->slug }}" class="btn btn-success mt-3">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
