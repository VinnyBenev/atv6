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
        <a href="{{route('app.calculos')}}">
            Início
        </a>
     <a href="{{route('app.quadrado', ['lado' => $lado])}}">
        Quadrado
     </a> 
    </li>
</ul>
<h3>Página Quadrado<h3>

    <p>área: {{$areaQuadrado}}</p>
</body>
</html>