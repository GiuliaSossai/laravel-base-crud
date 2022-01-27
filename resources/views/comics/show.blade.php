@extends('layouts.main')

@section('content')
   
   <main class="container">
      <h1>{{ $comic->title }}</h1>

      <div> <a href="{{ route('comics.index') }}"> << back </a> </div>

   </main>

@endsection