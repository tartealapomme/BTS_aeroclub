<?php
/*start session et enlever les valeurs de la précédente session si elle existe*/
session_start();
session_unset();
/*appel class data et JWT c'est pour les cookies on s'en fout xD*/
include '../Data/DataMembre.php';
require '../vendor/firebase/php-jwt/src/JWT.php';

/*récupération des infos de trmplateAcueil.php qui ets le corps de page html qu'on affiche et modifie*/
$html = file_get_contents('formulaireConnexion.php');
echo $html;

/*mot de passe et identifiant vérif si ils sont rentrés*/
$ident = "";
$password = "";
if(isset($_POST['identifiant'])){
    $ident = $_POST['identifiant'];
}
if(isset($_POST['password'])){
    $password = $_POST['password'];
}
/* test mdp/ident*/
if($ident != ""){
    if($password != ""){
        /*import infos membre pour vérif mdp / ident   */
        $db = new DataMembre();
        $membres = $db->selectAllMembre();
        foreach ($membres as $membre){
            if($membre["membre_inscrit"] == true){
                if($membre["identifiant"] == $ident){
                    //Verification du mot de passe
                    $passordVerify = password_verify($password, $membre["mdp_hash"]);
                    if ($passordVerify) {
                        $n = rand(10, 30);
                        $key = bin2hex(random_bytes($n));

                        $secretKey  = 'U7BZbzxwwhSs1qEn5btfDvIY8VkZx8m9';
                        $issuedAt   = new DateTimeImmutable();
                        $expire     = $issuedAt->modify('+15 minutes')->getTimestamp();      // Ajoute 15 minutes
                        $data = [
                            'iat'  => $issuedAt->getTimestamp(),         // Issued at:  : heure à laquelle le jeton a été généré
                            'iss'  => "localhost",                     // Émetteur
                            'nbf'  => $issuedAt->getTimestamp(),         // Pas avant..
                            'exp'  => $expire,                           // Expiration
                            'userName' => $membre['identifiant'],                     // Nom d'utilisateur
                        ];
                        $_SESSION["key"] = $key;
                        $_SESSION["userid"] = $membre["num_membre"];
                        header('Location: PageMembre.php');
                    }          
                }
            }
        }
    }
}


    



















