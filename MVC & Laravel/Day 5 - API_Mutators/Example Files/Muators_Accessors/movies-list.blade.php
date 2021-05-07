<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies List</title>
</head>
<body>
    @foreach($movies as $movie) 
    <ul>
        <li>{{$movie->title}}</li>
        <li>{{$movie->date_of_release}}</li>
        <br>
        <li>{{$movie->info}}</li>
    </ul>
    @endforeach
</body>
</html>