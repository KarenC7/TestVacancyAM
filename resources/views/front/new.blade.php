<!-- Estructura de noticia individual-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <!-- Se añaden metadatos especificos de la noticia -->
    @foreach($note as $new)
    <meta name="description" content="{{$new->description}}">
    @endforeach
    <meta name="keywords" content="Noticias,News,Información,Notas">
    <meta name="author" content="Periodico AM, {{$new->name_author}} {{$new->last_name}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
    <title>News</title>
</head>
<body>

   <!-- Menu-->
    @include('front.navbar')
    <div class="container">
  <!-- Se añade la noticia seleccionada -->
    @foreach($note as $new)
        <div class="row seccion s1 justify-content-center current-note">
            <div class="col-md-6 p-5">

                <h1 class="title-new">{{ $new->title }}</h1>
                <p>
                    <strong>{{ $new->description }}</strong><br>
                <p class="date-new">
                <i>Fecha: {{ $new->date }}</i>
                </p>
                <p class="body-new">
                    {{ $new->body }}
                </p>
                <p class="author-new">
                    <i>Author: {{$new->name_author}} {{$new->last_name}}</i>
                </p>
            </div>
            <div class="col-md-4 p-5"  id="programasimg" data-aos="fade-left">
                <img src="{{asset('front/images/waterfalls.jpg')}}" alt="" width="100%" style="height: auto; max-width: 350px;">
            </div>

        </div>
        @endforeach
    </div>
       <!-- footer-->
    @include('front.footer')

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

