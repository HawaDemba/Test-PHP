<?php
include ('function.php');
$bdd=db_connect();
$req2=$bdd->prepare('SELECT * FROM voitures');
    $req2->execute();
    if(isset($_POST['delete']))
    //tester si la variable est bien declaré
    {
    
        //var_dump($_POST['delete']);
        $id = $_POST['delete'];
        $req= $bdd->prepare('DELETE FROM voitures WHERE id=?');
        $req->execute([$id]);
    }
    header('Location:affichage.php');
?>
         
        </div>
        <div  class="alert alert-info">
            Suppression effectué avec succés
        </div> 