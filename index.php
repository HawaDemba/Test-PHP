<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet"  href="index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <title>formulaire de  description d'une voiture</title>
</head>
<body>
    <form method="POST" action="traitement.php">
    <FIELDSET>
        <legend  style="color:red; align-item:center; text-align:center;"><strog>FORMULAIRE DE DESCRIPTION </strong></legend>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./images.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./Blanc4.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./Rouge2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./téléchargement.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>
    <div class="container">    
      <div class=" col-6 " >
          <div class=" form-group " >
            <p><label for="modele"> Modele :</label>
            <input Type="text" name="modele"   placeholder="modele"></p>
          </div>
        </div>
        <div class=" col-6" >
          <div class="form-group " >
            <p><label for="marque"> Marque :</label>
            <input Type="text" name="marque"  placeholder="marque"  ></p>
         </div>
        </div>
        <div  class="col-6">
          <div class=" form-group " >
            <p><label for="couleur"> Couleur:</label>
            <input Type="text" name="couleur" placeholder="couleur"></p>     
          </div>
        </div> 
        <div  class="col-6">
          <div class=" form-group " >
          <p><label for="matricule"> Matricule:</label>
          <input type="number" id="matricule" name="matricule" min="1"></p>
        </div>
        </div>
            <textarea id="descriptionV" name="descriptionV" cols="50" rows="10" placeholder="Description"  style="height: 150px; width: 42%;"></textarea><p>
        </div>
        <div class="col-4">
        <p style="text-center">
                <input type="submit" name="envoyer" class="btn btn-success" value="Envoyer information">
          
                <a href="affichage.php"> <button type="button" >Affichage</button></a>
        </p>
        </div>
        </div>
        </FIELDSET>
    </form>
    
</body> 
</html>