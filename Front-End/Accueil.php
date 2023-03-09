<?php
/*appel class data*/
include '../Data/DataAvion.php';
include '../Data/DataCompte.php';
include '../Data/DataInstructeur.php';
include '../Data/DataMembre.php';
include '../Data/DataQualif.php';
include '../Data/DataSeq_vol.php';

/*récupération des infos de trmplateAcueil.php qui ets le corps de page html qu'on affiche et modifie*/
$html = file_get_contents('templateAccueil.php');
echo $html;

/*a supprimer, ceci sont des test 
 
$mdp1 = "Mup7!8A/>W8d";     //identifiant: Pierre.Averlant
$mdp2 = "u6>_yh%3TW4J";     //identifiant: Pierre.Bailly
$mdp3 = "s7Fkuz6TwgG1";     //identifiant: Pierre.Blonde
$mdp4 = "aujdhuf";          //identifiant: Pierre.Blond
$mdp5 = "jdjdindioje";      //identifiant: Pierre.Bourgeois

$mdp_hash1 = password_hash($mdp1, PASSWORD_BCRYPT);
$mdp_hash2 = password_hash($mdp2, PASSWORD_BCRYPT);
$mdp_hash3 = password_hash($mdp3, PASSWORD_BCRYPT);
$mdp_hash4 = password_hash($mdp4, PASSWORD_BCRYPT);
$mdp_hash5 = password_hash($mdp5, PASSWORD_BCRYPT);

echo $mdp_hash1;
echo "<br><br>";
echo $mdp_hash2;
echo "<br><br>";
echo $mdp_hash3;
echo "<br><br>";
echo $mdp_hash4;
echo "<br><br>";
echo $mdp_hash5;
*/




















































