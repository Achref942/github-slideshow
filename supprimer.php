<?php
#récupérer l'id de l'élément à supprimer
 $id= $_GET['id'];
require("connexion.php");
# requete 
$requete =" DELETE from gestiondépartement where id_dep = $id";
#exécuter
$resultat = $connexion->exec($requete);
if($resultat)
 header("Location:affiche.php");
else
 echo "echec de suppression";
?>