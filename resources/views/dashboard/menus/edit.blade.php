@extends('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Menu</h1>
  </div>

  <div class="col-lg-8">
    <form method="post" action="/dashboard/menus/{{ $menu->slug }}" class="mb-5" enctype="multipart/form-data">
      @method('put')
      @csrf
      <div class="mb-3">
        <label for="nama" class="form-label">Menu Name</label>
        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required autofocus value="{{ old('title', $menu->nama) }}">
        @error('nama')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug', $menu->slug) }}">
        @error('slug')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="harga" class="form-label">Price</label>
        <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" required value="{{ old('harga', $menu->harga) }}">
        @error('harga')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <select class="form-select" name="category_id">
          @foreach ($categories as $category)
            @if(old('category_id', $menu->category_id) == $category->id)
              <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
            @else
              <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endif
          @endforeach
        </select>
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Menu Image</label>
        
        @if ($menu->image)
          <img src="{{ asset('storage/' . $menu->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
        @else
          <img class="img-preview img-fluid mb-3 col-sm-5">
        @endif
        
        <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
        @error('image')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="body" class="form-label">Body</label>
        @error('body')
          <p class="text-danger">{{ $message }}</p>
        @enderror
        <input id="body" type="hidden" name="body" value="{{ old('body', $menu->body) }}">
        <trix-editor input="body"></trix-editor>
      </div>
      
      <button type="submit" class="btn btn-primary">Update Menu</button>
    </form>
  </div>

  <script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function() {
      fetch('/dashboard/menus/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });

    document.addEvenListener('trix-file-accept', function(e) {
      e.preventDefault();
    })

    function previewImage() {
      const image = document.querySelector('#image');
      const imgPreview = document.querySelector('.img-preview');

      imgPreview.style.display = 'block';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);

      oFReader.onload = function(oFREvent) {
        imgPreview.src = oFReader.target.result;
      }
    }
  </script>
@endsection