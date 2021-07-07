<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <title>Editar</title>
</head>
<body class="container">
   <form action="{{ route('user.edit', ['user' => $user->id]) }}" method="POST">
        @csrf     
        @method('PUT')
        <label for="">Nome Usuario</label>
        <input type="text" name="name" value="{{ $user->name }}">

        <label for="">Email Usuario</label>
        <input type="email" name="email" value="{{ $user->email }}">

        <label for="">senha Usuario</label>
        <input type="password" name="senha">

        <button type="submit">Editar</button>
   </form>
</body>
</html>