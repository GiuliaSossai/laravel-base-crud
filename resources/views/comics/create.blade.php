@extends('layouts.main')

@section('content')
   
   <main class="container">
        <!-- @dump($errors->all()) -->

        <h1 class="mb-3">submit new comics!</h1>

        @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input 
                    type="text" class="form-control @error('title') is-invalid @enderror" 
                    id="title" name="title" placeholder="title"
                    value="{{ old('title') }}"
                >
                @error('title')
                    <p class="gs-error">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input 
                    type="text" class="form-control @error('image') is-invalid @enderror" 
                    id="image" name="image" placeholder="URL image"
                    value="{{ old('image') }}"
                >
                @error('image')
                    <p class="gs-error">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input 
                    type="number" class="form-control @error('price') is-invalid @enderror"
                    id="price" name="price" placeholder="price"
                    value="{{ old('price') }}"
                >
                @error('price')
                    <p class="gs-error">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input 
                    type="text" class="form-control @error('series') is-invalid @enderror"
                    id="series" name="series" placeholder="series"
                    value="{{ old('series') }}"
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
                    id="type" name="type" placeholder="type"
                    value="{{ old('type') }}"
                >
                @error('type')
                    <p class="gs-error">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea type="text" class="form-control @error('description') is-invalid @enderror"
                id="description" name="description" placeholder="description">{{ old('description') }}</textarea>
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