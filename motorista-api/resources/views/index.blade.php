@extends('templates.template')

@section('content')
    <h1 class="text-center">Crud</h1>

    <div class="text-center">
        <a href="{{route('motorista_view')}}">
        <button class="btn btn-success">Cadastrar</button>
        </a>
    </div>

    <div class ="col-8 m-auto">
    <table class="table text-center">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">CPF</th>
      <th scope="col">CNH</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    @foreach($motorista as $motoristas)
    <tr>
      <th scope="row">{{$motoristas->id}}</th>
      <td>{{$motoristas->name}}</td>
      <td>{{$motoristas->cpf}}</td>
      <td>{{$motoristas->cnh}}</td>
      <td>
        <a href="{{route('editar_motorista',['id'=>$motoristas->id])}}">
           <button class="btn btn-primary">Editar</button>
        </a>

        <a href="{{route('apagar_motorista',['id'=>$motoristas->id])}}">
           <button class="btn btn-danger">Apagar</button>
        </a>
      </td>
    </tr>
    @endforeach

  </tbody>
</table>
    </div>
@endsection
