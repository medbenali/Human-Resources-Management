<?php include 'header.php';?>

<div class="container mt-3">

<h1>Liste Commandes</h1>






<?php


session_start();

$_SESSION['cart']= array();

if (isset($_POST['submit'])) { 

    $id=$_GET['id_commande'];
  
    array_push($_SESSION['cart'],$id);
  
    //print_r($_SESSION);
  
  }

  


$id_cart="";

foreach ($_SESSION['cart'] as $cart) 
{
    {
        $id_cart = $cart;
    }
}


include('../db/connexion.php');

$sql = "SELECT * FROM `produit` WHERE id='$id_cart'";

$result=$conn->query($sql);

while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))

{ 


?>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Photo</th>
        <th>Libelle</th>
        <th>Prix</th>
        <th>Quantite</th>
        <th>TVA</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>


    <?php 

    $photo = $row['photo'];
 


    ?>
 
      <tr>
      <td><?php echo "<img src='$photo' height='130' width='150'>";?></td>
        <td><?php echo $row['libelle'];?></td>
        <td><?php echo $row['prix'];?></td>
        <td><?php echo $row['quantite'];?></td>
        <td><?php echo $row['tva'];?></td>
        <td>
        <a href="#" class="btn btn-success" role="button">Edit</a>
        </td>
        <td>
        <a href="#" class="btn btn-danger" role="button">Delete</a>
        </td>
      </tr>

  
    </tbody>
  </table>


  <a href="add_commande.php?id_commande=<?php echo $row['id'];?>" class="btn btn-primary" role="button">Ajout Commande</a>


  <?php

}
?>
  </div>






