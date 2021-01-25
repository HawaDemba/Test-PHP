<?php
include ('function.php');
$bdd=db_connect();
$req2=$bdd->prepare('SELECT * FROM voitures');
    $req2->execute();
    if(isset($_POST['show']))
    //tester si la variable est bien declaré
    {
    
        //var_dump($_POST['delete']);
        $id = $_POST['show'];
        $req= $bdd->prepare('SELECT * FROM voitures WHERE id=?');
        $req->execute([$id]);
        $resultat=$req->fetch(); //affichage des informations de la réquete
        
    }
?>
<div class="row">
    L'indentifiant : <?=$resultat['id'] ?><br/>
    Le modele est : <?=$resultat['modele'] ?><br/>
    La marque est : <?=$resultat['marque'] ?><br/>
    La couleur est : <?=$resultat['couleur'] ?><br/>
    La matricul est : <?=$resultat['matricule'] ?><br/>
    Description  de la Voiture: <?=$resultat['id'] ?> <?=$resultat['modele'] ?> <?=$resultat['marque'] ?> <?=$resultat['couleur'] ?>  <?=$resultat['matricule'] ?><br/><br/>
</div>
         
        