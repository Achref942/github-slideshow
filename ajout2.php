<?php

 $nomdep = $_POST['nomdep'];
 $idchef = $_POST['idchef'];
 $description = $_POST['descriptionn'];
$requete ="insert into gestiondépartement(nom_dep,id_chef,descriptionn) value (:n,:p,:d)";
require("connexion.php");
$reqpr = $connexion->prepare($requete);
$reqpr->bindParam(":n", $nomdep);
$reqpr->bindParam(":p", $idchef);
$reqpr->bindParam(":d", $description);
$resultat = $reqpr->execute();
if($resultat)
  header("Location:affiche.php");
else
 echo "echec d'ajout";
?>