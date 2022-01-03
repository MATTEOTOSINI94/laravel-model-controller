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
 
      
         
         
          <div class="text-center menu-nav" >
            <ul class="navbar-nav link-page">
              <li class="nav-item link-style">
                <a class="nav-link active" aria-current="page" href="{{route("home")}}">Home</a>
              </li>
              <li class="nav-item link-style">
                <a class="nav-link" href="{{route("film")}}">Film</a>
              </li>
              
            </ul>
          </div>
     
     
</body>
</html>
<style>

    .menu-nav{
        width: 100vw;
        height: 100vh;
    }

    .link-page{
        position: absolute;
        bottom: 50%;
        right: 50%;
        transform: translate(50%, 50%);
    }
    li{
        font-size: 30px
    }
</style>