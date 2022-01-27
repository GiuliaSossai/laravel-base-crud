@extends('layouts.main')

@section('content')
   
   <main class="container">
      <h1>Our Comics</h1>

      <table class="table">
         <thead>
            <tr>
               <th scope="col">id</th>
               <th scope="col">Title</th>
               <th scope="col">Price</th>
               <th scope="col" colspan="3">Actions</th>
            </tr>
         </thead>
         <tbody>
            @foreach ($comics as $comic)
               <tr>
                  <th scope="row">{{ $comic->id }}</th>
                  <td>{{ $comic->title }}</td>
                  <td>{{ $comic->price }}</td>
                  <td> <a href="{{ route('comics.show', $comic) }}" class="btn btn-info">show</a> </td>
                  <td> <a href="{{ route('comics.edit', $comic) }}" class="btn btn-warning">edit</a> </td>
                  <td> <a href="{{ route('comics.destroy', $comic) }}" class="btn btn-danger">delete</a> </td>
               </tr>
            @endforeach
         </tbody>
      </table>

      <div>
         {{ $comics->links() }}
      </div>

   </main>

@endsection