

<?php include 'header.php';?>

<div class="container mt-3">

<h1>Ajout Produit</h1>


<form action="add_produit.php" method="POST">

<div class="form-group">
  
    <div class="form-group">
    <label>Libelle</label>
    <input name="libelle" type="text" class="form-control">
    </div>

    <div class="form-group">
    <label>Prix</label>
    <input name="prix" type="text" class="form-control">
    </div>


    <div class="form-group">
    <label>Quantite</label>
    <input name="quantite" type="text" class="form-control">
    </div>

    <div class="form-group">
    <label>TVA</label>
    <input name="tva" type="text" class="form-control">
    </div>

    <div class="form-group">
    <label>Photo</label>
    <input name="photo" type="text" class="form-control">
    </div>


 
    
    <button type="submit" class="btn btn-primary">Ajout Produit</button>

    </form>

</div>