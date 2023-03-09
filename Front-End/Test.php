<?php

include '../Data/DataAvion.php';
include '../Data/DataCompte.php';
include '../Data/DataInstructeur.php';
include '../Data/DataMembre.php';
include '../Data/DataQualif.php';
include '../Data/DataSeq_vol.php';




/*test seq_vol*/
echo "test seq_vol";
$seq_vol = new DataSeq_vol();
/*test select data d'un seq_vol en fonctiond d l'id*/
$seq_vol->selectSeq_vol(5);
var_dump($seq_vol);
echo "fin de test1";
/*test select data de tout les seq_vol*/
$test = $seq_vol->selectAllSeq_vol();
/*
var_dump($test);
*/
echo "fin de test2";





/*test qualif*/
echo "test qualif";
$qualif = new DataQualif();
/*test select data d'un qualif en fonctiond d l'id*/
$qualif->selectQualif(5);
var_dump($qualif);
echo "fin de test1";
/*test select data de tout les qualif*/
$test = $qualif->selectAllQualif();
/*
var_dump($test);
*/
echo "fin de test2";




/*test membre*/
echo "test membre";
$membre = new DataMembre();
/*test select data d'un membre en fonctiond d l'id*/
$membre->selectMembre(5);
var_dump($membre);
echo "fin de test1";
/*test select data de tout les membre*/
$test = $membre->selectAllMembre();
/*
var_dump($test);
*/
echo "fin de test2";






/*test Instructeur*/
echo "test instructeur";
$instructeur = new DataInstructeur();
/*test select data d'un instructeur en fonctiond d l'id*/
$instructeur->selectInstructeur(5);
var_dump($instructeur);
echo "fin de test1";
/*test select data de tout les instructeur*/
$test = $instructeur->selectAllInstructeur();
/*
var_dump($test);
*/
echo "fin de test2";




/*test Compte*/
echo "test compte";
$compte = new DataCompte();
/*test select data d'un compte en fonctiond d l'id*/
$compte->selectCompte(5);
var_dump($compte);
echo "fin de test1";
/*test select data de tout les comptes*/
$test = $compte->selectAllCompte();
/*
var_dump($test);
*/
echo "fin de test2";





/*test Avion*/
echo 'test avion';
$avion = new DataAvion();
/*test select data d'un avions en fonctiond d l'id*/
$avion->selectAvion(5);
var_dump($avion);
echo "fin de test1";
/*test select data de tout les avions*/
$test = $avion->selectAllAvion();
/* 
var_dump($test);
*/
echo "fin de test2";
















/*
$element["id"] = $article->id;
$element["titre"] = $article->titre;
$element["accroche"] = $article->accroche;
$element["contenu"] = $article->contenu;
$element["publication"] = $article->publication;
$element["image"] = $article->image;



$html = file_get_contents('Accueil.html');
$html = str_replace('#titre#', $element["titre"], $html);
$html = str_replace('#accroche#', $element["accroche"], $html);
$html = str_replace('#contenu#', $element["contenu"], $html);
$html = str_replace('#publication#', $element["publication"], $html);
$html = str_replace('#image#', $element["image"], $html);

echo $html;
*/





?>
































































?>