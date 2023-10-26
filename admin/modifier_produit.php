

<?php include 'header.php';?>

<div class="container mt-3">

<h1>Update Produit</h1>


<form action="update_produit.php" method="POST">

<div class="form-group">

<div class="form-group">
    <label>Id</label>
    <input name="id" class="form-control" type="text" value="<?php echo $_GET['id'];?>" aria-label="Disabled input example" readonly>
    </div>
  
    <div class="form-group">
    <label>Libelle</label>
    <input name="libelle" type="text" class="form-control" value="<?php echo $_GET['libelle'];?>">
    </div>

    <div class="form-group">
    <label>Prix</label>
    <input name="prix" type="text" class="form-control" value="<?php echo $_GET['prix'];?>">
    </div>


    <div class="form-group">
    <label>Quantite</label>
    <input name="quantite" type="text" class="form-control" value="<?php echo $_GET['quantite'];?>">
    </div>

    <div class="form-group">
    <label>TVA</label>
    <input name="tva" type="text" class="form-control" value="<?php echo $_GET['tva'];?>">
    </div>

    <div class="form-group">
    <label>Photo</label>
    <input name="photo" type="text" class="form-control" value="<?php echo $_GET['photo'];?>">
    </div>


 
    
    <button type="submit" class="btn btn-primary">Update Produit</button>

    </form>

</div>