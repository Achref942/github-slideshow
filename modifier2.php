<?php
$id= $_GET['id'];
$nomdep = $_GET['nomdep'];
 $idchef = $_GET['idchef'];
 $description = $_GET['descriptionn'];
require("connexion.php");

$req="UPDATE gestiondépartement set nom_dep='$nomdep' , id_chef='$idchef' ,discriptionn='$discription' ,  where id_dep=$id ";

$res=$conn->exec($req);
if($res)
    header("Location:affiche.php");
else
    echo"echec de modification";


?>