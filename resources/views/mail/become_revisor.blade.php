<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

    <p>Un utente ha richiesto di lavorare con noi</p>
    <p>Ecco i suoi dati </p>
    <p>Nome:{{$user->name}}</p>
    <p>Email:{{$user->email}}</p>
    <p>Se vuoi renderlo revisore clicca qui</p>
    <a href="{{route('make.revisor',compact('user'))}}"> Rendi revisore </a>

</body>
</html>