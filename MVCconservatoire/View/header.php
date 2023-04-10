<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>

  <style>
  body{
    background-image: url(img/background.jpg);
    background-repeat: no-repeat;
    background-size: 100%;
}

.navbar{
  /*background: linear-gradient(rgba(0, 0, 0, 3), rgba(0, 0,0, 3));*/
    padding: 15px;
    display: flex;
    justify-content: space-between;
    position: static;
}

.navbar a{
color: white;
    }

 .navbar-brand{
    font-size: 30px;
    font-weight: bold;
    
 }  
 

 @media screen and (max-width: 900px){

  
    .navbar{
        padding: 0;
    }
    .nav-link {
    background-color: rgba(255, 255, 255, 0.200);
    display: flex;
    justify-content: center;
    align-items: center;
    top: 0;
    left: 0;

    }


    
 }

    </style>
  
  <nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Conservatoire</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Cours</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="View/formInscription.php">Inscription</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>

