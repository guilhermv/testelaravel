@extends('templates.template')

@section('content')
    <h1 class = "text-center"> Visualizar </h1><hr>

    <div class = "col-8 m-auto"> 
    @php 
      $user = $book->find($book->id)->relUsers;
    @endphp
    Titulo: {{$book->title}}<br>
    Páginas: {{$book->pages}}<br>
    Preço: R$ {{$book->price}}<br>
    Comprador: {{$user->name}}<br>
    E-mail Comprador: {{$user->email}}<br>
    </div>
@endsection