<h1>Afficher tous les département dans la base</h1>
<?php
 $requete = "SELECT `id_dep`, `nom_dep`, `id_chef`, `descriptionn` FROM `gestiondépartement`";
require("connexion.php");
 $stmt = $connexion->query($requete);
$resultat = $stmt->fetchAll();
echo "<table border=1>";
echo "<th>id_dep</th><th>nom_dep</th><th>id_chef</th><th>description</th>
<th colspan=2>Action</th></tr>"; 
$i=0;
foreach($resultat as $p)
{ echo "<tr>";
 echo "<td>".$p['id_dep']."</td>";
 echo "<td>".$p['nom_dep']."</td>";
 echo "<td>".$p['id_chef']."</td>";
 echo "<td>".$p['descriptionn']."</td>";
 echo "<td><a href='supprimer.php?id=".$p['id_dep']."'>Supprimer</a></td>";
 echo "<td><a href='modifier.php?id=".$p['id_dep']."'>modifier</a></td>"; 

 echo "</tr>";
 $i=$i+1;
}
echo"<font color=red><h2>le nomber de departement est $i</h2></font>";
echo "</table>";

?>
<hr>
<a href="ajout2.html">Ajout Produit</a>