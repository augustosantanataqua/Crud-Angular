<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar</title>
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
</head>
<body>
    <form action="{{ route('alterar_motorista', ['id' => $motorista->id])}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Nome:" value="{{ $motorista->name}}"><br>
        <input type="text" name="cpf" placeholder="CPF:" value="{{ $motorista->cpf}}"><br>
        <input type="text" name="cnh" placeholder="CNH:" value="{{ $motorista->cnh}}"><br>
        <button>Editar</button>
    </form>
</body>
</html>
