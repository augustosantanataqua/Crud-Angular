@extends('templates.template')

@section('content')
<h1 class="text-center">Cadastrar</h1>

<div class="col-8 m-auto">
    <form name="formCad" id="formCad" method="post" action="{{route('cadastrar_motorista')}}">
        @csrf
        <input class="form-control" type="text" name="name" id="name" placeholder="Nome:" required><br>
        <input class="form-control" type="text" name="cpf" id="cpf" placeholder="CPF:" required><br>
        <input class="form-control" type="text" name="cnh" id="cnh" placeholder="CNH:" required><br>
        <input class="btn btn-primary" type="submit" value="Cadastrar">
    </form>
</div>
@endsection
