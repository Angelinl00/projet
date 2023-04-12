<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="form">
        <form action=" {{ route('create.user') }}" method="post">
            @csrf

            @if($errors->any())
                @foreach($errors->all() as $error)
                    erreur : {{$error}}
                @endforeach
            @endif
            <input type="text" placeholder="matricule" name="matricule">
            <input type="text" placeholder="login" name="login">
            <input type="text" placeholder="telephone" name="telephone">
            <input type="mail" placeholder="mail" name="mail">
            <input type="password" placeholder="password" name="password">

            <button type="submit">Valider</button>
        </form>
    </div>
</body>
</html>
