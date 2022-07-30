<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Excluir Motorista</title>
</head>
<body>
    <form action="{{ route('excluir_motorista', ['id' => $motorista->id])}}" method="POST">
        @csrf
        <label for="">Deseja mesmo excluir esse motorista ?$_COOKIE</label><br>
        <input type="text" name="name" placeholder="Nome:" value="{{ $motorista->name}}"><br>
        <button>Sim</button>
        <!-- {{ route('alterar_motorista', ['id' => $motorista->id])}} -->
    </form>
</body>
</html>
