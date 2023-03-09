<?php
/*récupération des infos de trmplateAvions.php qui ets le corps de page html qu'on affiche et modifie*/
$html = file_get_contents('templateContact.php');
echo $html;