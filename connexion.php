<?php
function maConnexion(){ 
try
{	
$bdd = new PDO('mysql:host=localhost; dbname=dermasurgical', 'root', '');

$bdd->query("SET NAMES 'utf8'");
return $bdd;
}
catch (PDOException $e)
{
die ('Erreur : ' . $e->getMessage());
}
}
?>