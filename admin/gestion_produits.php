<?php include 'header.php';?>

<div class="container mt-3">

<h1>Ajout Produit</h1>

<a href="ajout_produit.php" class="btn btn-primary" role="button">Ajout Produit</a>


<h1>Gestion Produits</h1>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <td>Photo</th>
        <th>Libelle</th>
        <th>Prix</th>
        <th>Quantite</th>
        <th>TVA</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
 
    <?php

    include('../db/connexion.php');

    $sql="SELECT * FROM `produit`";

    $result=$conn->query($sql);

    while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))

    { 


      $photo = $row['photo'];
    
    ?>
      

      <tr>
        <th scope="row"><?php echo $row['id'];?></th>
        <td><?php echo "<img src='$photo' height='130' width='150'>";?></td>
        <td><?php echo $row['libelle'];?></td>
        <td><?php echo $row['prix'];?></td>
        <td><?php echo $row['quantite'];?></td>
        <td><?php echo $row['tva'];?></td>
        <td>
        <a href="modifier_produit.php?
        id=<?php echo $row['id'];?>
        &&photo=<?php echo $row['photo'];?>
        &&libelle=<?php echo $row['libelle'];?>
        &&prix=<?php echo $row['prix'];?>
        &&quantite=<?php echo $row['quantite'];?>
        &&tva=<?php echo $row['tva'];?>
        "
        class="btn btn-success" role="button">Edit</a>
        </td>
        <td>
        <a href="delete_produit.php?id_produit=<?php echo $row['id'];?>" class="btn btn-danger" role="button">Delete</a>
        </td>

     


      </tr>

      <?php
    }

      ?>
    </tbody>
  </table>



  </div>