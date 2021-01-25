<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <table border="20px" class="form-control">
    <?php
    include ('function.php');
    $bdd=db_connect();
    $req2=$bdd->prepare('SELECT * FROM voitures');
    $req2->execute();
    ?>
    <thead>
        <tr>
            <th>Identifiant</th>
            <th>Modele</th>
            <th>Marque</th>            
            <th>Couleur</th>
            <th>Matricule</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php while($req =$req2->fetch(PDO::FETCH_OBJ)) {?>
        <tr>
            <td><?=$req->id ?></td>
            <td><?=$req->modele ?></td>
            <td><?=$req->marque ?></td>
            <td><?=$req->couleur ?></td>
            <td><?=$req->matricule ?></td>
            <td><?=$req->descriptionV ?></td>
            <td>
                <form method="POST" action="supprimer.php" enctype="multipart/form-data">
                    <button  name="delete" type="submit" value="<?=$req->id ?>" class="btn btn-danger">Supprimer</button> 
                </form> 
                <form method="POST" action="voir détails.php" enctype="multipart/form-data">
                    <button name="show" type="submit" value="<?=$req->id ?>" class="btn btn-info">Voir détails</button>
                </form> 
            </td>
        </tr>
    <?php } ?> 
    </tbody>
    </table>