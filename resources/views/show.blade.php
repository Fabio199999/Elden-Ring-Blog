<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Elden Ring</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="/style.css" rel="stylesheet">
  </head>
  <body>
  <body class="bg-secondary">
     <!-- NAVBAR -->
<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="{{route('Welcome')}}">Elden Ring Wiki</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-light" href="{{route('Pagina1')}}">Homepage</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="{{route('Pagina2')}}">Dove siamo</a>
        </li>
    </div>
  </div>
</nav>
    <!-- END NAVBAR -->

    <!-- CARD-DESCRIZIONE-CLASSE -->
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-12 py-5">
                <h1>DETTAGLI SULLA CLASSE {{$classi['Name']}}</h1>
            </div>
        </div>
        <div class="row justify-content-center ">
            <div class="card col-12 col-md-6 justify-content-around bg-black text-light py-5 text-center " style="width: 18rem;">
            <img src="{{$classi['img']}}" class="card-img-top" alt="...">
            <div class="card-body">
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur magni accusamus dignissimos neque commodi eum non! Sequi qui harum beatae.</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Livello {{$classi['Level']}}</li>
              <li class="list-group-item">Vigore {{$classi['Vigor']}}</li>
              <li class="list-group-item">Resistenza {{$classi['Endurance']}}</li>
              <li class="list-group-item">Forza {{$classi['Strength']}}</li>
              <li class="list-group-item">Destrezza {{$classi['Dexterity']}}</li>
              <li class="list-group-item">Intelligenza {{$classi['Intelligence']}}</li>
              <li class="list-group-item">Fede {{$classi['Faith']}}</li>
              <li class="list-group-item">Arcano = {{$classi['Arcane']}}</li>
            </ul>
    </div>
    <!-- END-CARD-DESCRIZIONE-CLASSE -->