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
            <li class="nav-item">
                <a class="nav-link active" href="Instructeurs.php">Instructeurs</a>
            </li>
            </ul>
              <li class="nav-item">
                  <a style="color: white;" class="nav-link active" href="Contact.php">Contact</a>
              </li>
            <li class="nav-item">
                <a class="nav-link active" href="Deconnexion.php">Deconnexion</a>
              </li>
          </div>
        </div>
      </nav>
      </div>
    </header>
    <main>
        <div class="première-div">
            <h3>Informations personelles</h3>
            <p>
                Nom: #nom#<br>
                Prénom: #prenom#<br>
                Adresse: #adresse#<br>
                Code postale: #code_postale#<br>
                Ville: #ville#<br>
                Numéro de téléphone fixe: #telephone#<br>
                Numéro de téléphone portable: #portable#<br>
                Email: #email#<br>
                Profession: #profession#<br>
                Date de naissance: #date_naissance#<br>
                Lieu de naissance: #lieu_naisance#<br>
                numéro de ppla: #numéro_ppla#<br>
                numéro de bb: #numéro_bb#<br>
            </p>
        </div>
        <div>
            <h3>Informations numéros attestations</h3>
            <p>
                Numéro de membre: #num_membre#<br>
                Carte fédérale: #carte_federal#<br>
            </p>
        </div>
        <div>
            <h3>Dates</h3>
            <p>
                Date d'attestation: #date_attestation# <br>
                Date théorique du bb: #date_theorique_bb#<br>
                Date du bb: #date_bb#<br>
                Date théorique du ppla: #date_theorique_ppla#<br>
                Date du ppla: #date_ppla#<br>
                Date d'entrée: #date_entrée#<br>
                Date de vm: #date_vm#<br>
                Validité de vm jusqu'en: #validite_vm#<br>
                Date de sep: #date_sep#<br>
                Validité de sep jusqu'en: #validite_sep#<br>
            </p>
        </div>
        <div>
            <h3>Comptes</h3>
            <p>
                Solde actuel: #solde# €<br>
                crédit total: #credit# €<br>
                Débit total: #debit# €<br>
            </p>
        </div>
    </main>
    <!-- FOOTER -->
    <footer class="container">
      <p class="float-end"><a href="#">Back to top</a></p>
      <p>&copy; 2022–2023 Aeroclub</p>
    </footer>

        
    </body>
</html>
