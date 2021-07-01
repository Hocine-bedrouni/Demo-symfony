<?php
require $_SERVER['DOCUMENT_ROOT']."/model/cobdd.php";
$requete = $db->query('select * from hotel.station');
$resultat = $requete->fetchAll();
var_dump($resultat);