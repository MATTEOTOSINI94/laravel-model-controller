@php
  
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container pt-5 pb-5">        
        <div class="row" >
            @foreach ($movies as $movie)
            <div class="col-2 border " style="{{$movie->nationality === "american" ? "background-color: coral" : "background-color: green" }}">
                <div><h1>Titolo: {{$movie->title}}</h1></div>
                <div><p>Nationality: {{$movie->nationality}}</p><br><p>Date: {{$movie->date}}</p></div>
                <div><p>Vote: {{$movie->vote}}</p></div>
            </div>
            @endforeach
           
        </div>
    </div>
</body>
</html>

