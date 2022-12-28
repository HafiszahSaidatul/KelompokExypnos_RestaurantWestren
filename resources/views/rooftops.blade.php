@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="mb-5 text-center text-white mt-6" style="margin-top: 120px; margin-bottom: 25px;"> {{ $title }}
            </h1>

            @if ($rooftops->count())
            @else
                <p class="text-center fs-4">No post found.</p>
            @endif
        </div>
    </div>



    <div class="container mt-3">
        <div class="row">
            @foreach ($rooftops->skip(1) as $rooftop)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="position-absolute px-3 py-2 " style="background-color: rgba(0,0,0,0.7)"><a
                                href="/categories/{{ $rooftop->category->slug }}" class="text-white text-decoration-none">
                                {{ $rooftop->category->name }}</a></div>
                        <img src="https://source.unsplash.com/500x400?rooftop-bar{{ $rooftop->category->name }}" class="card-img-top"
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
