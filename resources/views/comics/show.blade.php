@extends('layouts.main')

@section('content')
   
   <main class="container">
      <h1 class="mb-5">{{ $comic->title }}</h1>
      
      <div class="row mb-5">
         <div class="col-4">
            <img src="{{ $comic->image }}" alt="{{ $comic->title }}" class="img-fluid">
         </div>
         <div class="col-8">
            <p>Price: {{ $comic->price }}£</p>
            <p>Series: {{ $comic->series }}</p>
            <p>Type: {{ $comic->type }}</p>
            <p>{{ $comic->description }}</p>
            <button class="btn btn-success"> <a href="{{ route('comics.edit', $comic) }}" class="text-white">edit</a> </button>
         </div>

      </div>
      
      <div> <a href="{{ route('comics.index') }}"> << back </a> </div>

   </main>

@endsection