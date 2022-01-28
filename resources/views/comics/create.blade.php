@extends('layouts.main')

@section('content')
   
   <main class="container">
      <h1 class="mb-3">submit new comic!</h1>

      <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="title">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="text" class="form-control" id="image" name="image" placeholder="URL image">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="price">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" name="series" placeholder="series">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale date</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="sale_date">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Type</label>
                <input type="type" class="form-control" id="type" name="type" placeholder="type">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea type="text" class="form-control" id="description" name="description" placeholder="description"></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </form>

        <div> <a href="{{ route('comics.index') }}"> << back </a> </div>
   </main>

@endsection