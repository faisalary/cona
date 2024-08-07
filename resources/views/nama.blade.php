<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Nama Dosen</h1>
    <br> 
    <p>Nama : {{$nama}} </p>
    <h2> List kerja </h2>
    <ul>
        @foreach($kerja as $k)
        <li>{{$k}}</li>
        @endforeach
</ul>

    
</body>
</html>