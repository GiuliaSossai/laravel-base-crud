@extends('layouts.main')

@section('content')
   
   <main class="container">
        <h1>modifica di: {{ $comic->title }}</h1>

        @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('comics.update', $comic) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input 
                    type="text" class="form-control @error('title') is-invalid @enderror" 
                    id="title" name="title" 
                    value="{{ old('title', $comic->title) }}" 
                    placeholder="Titolo"
                >
                @error('title')
                    <p class="gs-error">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input 
                    type="text" class="form-control @error('image') is-invalid @enderror" 
                    id="image" name="image" 
                    value="{{ old('image', $comic->image) }}" 
                    placeholder="URL image"
                >
                @error('image')
                    <p class="gs-error">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input 
                    type="number" class="form-control @error('price') is-invalid @enderror" 
                    id="price" name="price" 
                    value="{{ old('price', $comic->price) }}" 
                    placeholder="price"
                >
                @error('price')
                    <p class="gs-error">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input 
                    type="text" class="form-control @error('series') is-invalid @enderror" 
                    id="series" name="series" 
                    value="{{ old('series', $comic->series) }}" 
                    placeholder="series"
                >
                @error('series')
                    <p class="gs-error">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale date</label>
                <input 
                    type="text" class="form-control @error('sale_date') is-invalid @enderror"
                    id="sale_date" name="sale_date" placeholder="sale_date"
                    value="{{ old('sale_date') }}"
                >
                @error('sale_date')
                    <p class="gs-error">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input 
                    type="type" class="form-control @error('type') is-invalid @enderror" 
                    id="type" name="type" 
                    value="{{ old('type', $comic->type) }}" 
                    placeholder="type"
                >
                @error('type')
                    <p class="gs-error">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea 
                    type="text" class="form-control @error('description') is-invalid @enderror" 
                    id="description" name="description" placeholder="description"
                >{{ old('description', $comic->description) }}</textarea>
                @error('description')
                    <p class="gs-error">{{ $message }}</p>
                @enderror
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
      </form>

      <div class="mt-4"> <a href="{{ route('comics.index') }}"> << back </a> </div>

   </main>

@endsection