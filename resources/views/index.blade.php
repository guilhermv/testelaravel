@extends('templates.template')

@section('content')
    <h1 class = "text-center"> Crud </h1>

    <div class = "text-center mt-3 mb-4">

        <a href="">
        <buttom class="btn btn-success">Cadastrar</buttom>
        </a>

    </div> 

    <div class = "col-8 m-auto"> 
    <table class="table text-center">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Título</th>
      <th scope="col">Comprador</th>
      <th scope="col">Preço</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($book as $books)
    @php
    $user = $books->find($books->id)->relUsers;
    @endphp
    <tr>
      <th scope="row">{{$books->id}}</th>
      <td>{{$books->title}}</td>
      <td>{{$user->name}}</td>
      <td>{{$books->price}}</td>
      <td>
        <a href= "{{url("books/$books->id")}}">
        <buttom class="btn btn-dark">Visualizar</buttom>
        </a>

        <a href="">
        <buttom class="btn btn-primary">Editar</buttom>
        </a>

        <a href="">
        <buttom class="btn btn-danger">Deletar</buttom>
        </a>

      </td>
    </tr>
  @endforeach
  </tbody> 
</table>
    </div>
@endsection