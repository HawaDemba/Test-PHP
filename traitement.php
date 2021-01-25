<?php
//include ('model/voit.php');
include ('function.php');
$bdd=db_connect();
 if(isset($_POST['envoyer'])){

    $modele = $_POST['modele'];
    $marque= $_POST['marque'];
    $couleur =$_POST['couleur'] ;
    $matricule =$_POST['matricule'] ;
     $descriptionV =$_POST['descriptionV'] ;
    $req = $bdd->prepare("INSERT INTO voitures(modele,marque,couleur,matricule,descriptionV) VALUES ('$modele',' $marque','$couleur', '$matricule','$descriptionV' )");
    $req->execute();
var_dump($_POST);
 }
    
?>