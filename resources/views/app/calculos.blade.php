<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<ul>
    <li>
        <a href="{{route('site.index')}}">
            Início
        </a>
        <a href="{{ route('app.circulo')}}">
            Círculo
        </a>
        <a href="{{ route('app.retangulo')}}">
       Retangulo
    </a>
     <a href="{{ route('app.quadrado')}}">
        Quadrado
     </a> 
    </li>
</ul>
</body>
</html>