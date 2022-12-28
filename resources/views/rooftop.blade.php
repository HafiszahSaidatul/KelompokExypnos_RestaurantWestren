@extends('layouts.main')

@section('container')
    <div class="container" style="background-color: #FED049; border-radius:5%">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="text-white" style="margin-top: 120px; margin-bottom: 25px;">Moments</h1>
                <article>
                    <h2>{{ $rooftop->title }}</h2>

                    <p>By. <a href="/authors/{{ $rooftop->author->username }}"
                            class="text-decoration-none">{{ $rooftop->author->name }}</a>
                        in <a href="/categories/{{ $rooftop->category->slug }}"
                            class="text-decoration-none">{{ $rooftop->category->name }}</a></p>
                    <img src="https://source.unsplash.com/1200x400?{{ $rooftop->category->name }}" class="card-img-top"
                        alt="{{ $rooftop->category->name }}" class="img-fluid">

                    {!! $rooftop->body !!}
                </article>

                <a href="/rooftops" class="d-block mt-5 btn btn-success mb-3">Back to Rooftop</a>
            </div>
        </div>
    </div>
@endsection
