<?php
/*vérification de la création de la session et sinon rnvois a la page de connexion*/
session_start();
if(!isset($_SESSION["userid"])){
    header('Location: Connexion.php');
    exit();
}
/*appel class data*/
include '../Data/DataMembre.php';
include '../Data/DataCompte.php';

/*récupération des infos de trmplatepagemembre.php qui ets le corps de page html qu'on affiche et modifie*/
$html = file_get_contents('templatePageMembre.php');

if(isset($_SESSION["userid"])){
    $id = $_SESSION["userid"];
}else{
    header('Location: Connexion.php');
    exit();
}

/*select des infos du membre avec l'id de la session*/
$db = new DataMembre();
$membre = $db->selectMembre($id);

/*affichage infos de compte du membre*/
$db = new DataCompte();
$comptes = $db->selectAllCompte();
$values = [];
foreach($comptes as $compte){
    if($compte["num_membre"] == $id){
        array_push($values, $compte);
    }
}
$debit = 0;
$credit = 0;
foreach($values as $value){
    $debit += $value["debit"];
    $credit += $value["credit"];
}
$solde = $credit - $debit;
/*affichage template*/
$old_message = array("#nom#", "#prenom#", "#adresse#", "#code_postale#", "#ville#", "#telephone#", "#portable#", "#email#", "#profession#", "#date_naissance#", "#lieu_naisance#", 
    "#numéro_ppla#", "#numéro_bb#", "#num_membre#", "#carte_federal#", "#date_attestation#", "#date_theorique_bb#", "#date_bb#", "#date_theorique_ppla#", "#date_ppla#", 
    "#date_entrée#", "#date_vm#", "#validite_vm#", "#date_sep#", "#validite_sep#", "#solde#", "#credit#", "#debit#");
$new_message = array($membre["nom"], $membre["prenom"], $membre["adresse"], $membre["code_postal"], $membre["ville"], $membre["tel"], $membre["portable"], $membre["email"], 
    $membre["profession"], $membre["lieu_naissance"], $membre["date_naissance"], $membre["numero_ppla"], $membre["numero_bb"], $membre["num_membre"], $membre["carte_federal"], $membre["date_attestation"], 
    $membre["date_theorique_bb"], $membre["date_bb"], $membre["date_theorique_ppla"], $membre["date_ppla"], $membre["date_entree"], $membre["date_vm"], $membre["date_sep"], 
    $membre["carte_federal"], $membre["validite_sep"], $solde, $credit, $debit);
$html = str_replace($old_message, $new_message, $html);
echo $html;
