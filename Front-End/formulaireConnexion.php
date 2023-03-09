<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    </head>
    <body>
        
<header>
  <div class="navbarre">
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Aeroclub</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Accueil.php">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="Avions.php">Nos Avions</a>
          </li>
        </ul>
          <li class="nav-item">
              <a style="color: white;" class="nav-link active" href="Contact.php">Contact</a>
          </li>
        <li class="nav-item">
            <a class="nav-link active" href="formulaireConnexion.php">Connexion</a>
          </li>
      </div>
    </div>
  </nav>
  </div>
</header>
</div>

<div class='conteneur3'>
<main class="form-signin w-100 m-auto">
    <form method="post" action="" autocomplete="off"> <!-- PageMembre.php -->
    <h1 class="h3 mb-3 fw-normal">Se connecter</h1>

    <div class="form-floating">
      <input type="text" name="identifiant" class="form-control" id="floatingInput" placeholder="Identifiant">
      <label for="floatingInput">Identifiant</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Mot de Passe</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Connexion</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
  </form>
</main>
</div>        
    </body>
</html>

    

<!--
$mdp1 = "Mup7!8A/>W8d";     identifiant: Pierre.Averlant
$mdp2 = "u6>_yh%3TW4J";     identifiant: Pierre.Bailly

$mdp_hash1 = password_hash($mdp1, PASSWORD_BCRYPT);
$mdp_hash2 = password_hash($mdp2, PASSWORD_BCRYPT);

echo $mdp_hash1;
echo "<br><br>";
echo $mdp_hash2;

    
-->
