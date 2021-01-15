<?php

$id = $_GET['id'];
require("connexion.php");
 $req="SELECT id_dep,nom_dep,id_chef, descriptionn FROM gestiondépartement WHERE id_dep=:i";

 $stmt= $connexion->prepare($req);

$stmt->bindValue('i',$id,PDO::PARAM_INT);
$stmt->execute();
$rows=$stmt->fetch(PDO::FETCH_OBJ);
if(!$rows)
header("Location:affiche.php");
?>
<html>
    <head>
        <link rel="stylesheet" href="xxx.css">
    </head>
    <body>
        <div class="container">  
            <form id="contact" action="ajout2.php" method="POST">
              <h3>Ajout d'un d&eacute;partement</h3>
              <fieldset>
                <input placeholder=" Nom de d&eacute;partement" type="text" tabindex="1" name=nomdep required autofocus value="<?=$rows->nom_dep?>">
              </fieldset>
              <fieldset>
                <input placeholder="ID de la chef" type="text" tabindex="2"name=idchef required value="<?=$rows->id_chef?>">
              </fieldset>
              <fieldset>
                <input placeholder="Description" type="text" tabindex="3" name=descriptionn required value="<?=$rows->descriptionn?>">
              </fieldset>                  
              <fieldset>
                <button name="Ajouter" type="submit">Ajouter</button>
              </fieldset>
        
            </form>
          </div>    
    </body>
    
</html>