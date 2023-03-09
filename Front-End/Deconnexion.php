<?php
/*on start la session pour la réouvriret ensuite on détruit tou ce qu'elle contient et on renvois a la page de connexion*/
session_start();
session_unset();
session_destroy();
header('Location: Connexion.php');
exit();

