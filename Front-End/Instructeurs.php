<?php
session_start();
if(!isset($_SESSION["userid"])){
    header('Location: Connexion.php');
    exit();
}
include '../Data/DataInstructeur.php';
echo "<br><br><br><br><br><br><br>";
/*select toutes les données des instructeurs*/
$instructeurs = new DataInstructeur();
$value = $instructeurs->selectAllInstructeur();
/*affichage en tableau*/
$tableau = "";
foreach($value as $data){
    $tableau .= "<tr><th>".$data["nom"]."</th><th>".$data["prenom"]."</th><th>".$data["email"]."</th></tr>";
    //var_dump($data);
}
/*appel templat et l'affiche avec les données*/
$html = file_get_contents('templateInstructeur.php');
$html = str_replace("#tableau#", $tableau, $html);
echo $html;
