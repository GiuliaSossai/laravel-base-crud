@extends('layouts.main')

@section('content')
   
   <main class="container">
      <h1>modifica di: {{ $comic->title }}</h1>

      <form action="{{ route('comics.update', $comic) }}" method="POST">
         @csrf
         @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}" placeholder="Titolo">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="text" class="form-control" id="image" name="image" value="{{ $comic->image }}" placeholder="URL image">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ $comic->price }}" placeholder="price">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}" placeholder="series">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Type</label>
                <input type="type" class="form-control" id="type" name="type" value="{{ $comic->type }}" placeholder="type">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea type="text" class="form-control" id="description" name="description" placeholder="description">{{ $comic->description }}</textarea>
            </div>
            
         <button type="submit" class="btn btn-primary">Submit</button>
         <button type="reset" class="btn btn-secondary">Reset</button>
      </form>

      <div> <a href="{{ route('comics.index') }}"> << back </a> </div>

   </main>

@endsection