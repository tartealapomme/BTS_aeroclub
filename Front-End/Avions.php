<?php
/*appel class data*/
include '../Data/DataAvion.php';

/*récupération des infos de trmplateAvions.php qui ets le corps de page html qu'on affiche et modifie*/
$html = file_get_contents('templateAvions.php');

/*prend les infos d'aviosn et remplace les #description# par les case des avions*/
$avion = new DataAvion();
$value = $avion->selectAllAvion();
$reponse = "";
foreach ($value as $raw){
    $type = $raw['type_avion'];
    $immat = $raw['immatriculation'];
    $image = $raw['photo'];
    $option =  "<div class='col'>
                    <div class='card shadow-sm'>
                        <img src='images/".$image."'></img>
                        <div class='card-body'>
                            <p class='card-text'>type: $type<br>immatriculation: $immat</p>
                                <div class='d-flex justify-content-between align-items-center'>
                                    <div class='btn-group'>
                                        <button type='button' class='btn btn-sm btn-outline-secondary'>View</button>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>";
    $reponse .= $option;
}
$html = str_replace('#description#', $reponse, $html);

/*renvois la page*/
echo $html;









































