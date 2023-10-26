<?php include 'header.php';?>

<div class="container mt-3">

<h1>Gestion Commandes</h1>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Numero</th>
        <th>Code Client</th>
        <th>Montant HT</th>
        <th>Mon TVA</th>
        <th>Mon TTC</th>
        <th>Etat</th>
        <th>Id Prix de Vente</th>
        <th>Date Commande</th>
        <th>CIN Client</th>
        <th>Id Point de Vente</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>


      <?php

      include('../db/connexion.php');

      $sql="SELECT * FROM `commande`";

      $result=$conn->query($sql);

      while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))

      { 
      
      ?>
        
 
      <tr>
        <th scope="row"><?php echo $row['id'];?></th>
        <td><?php echo $row['num'];?></td>
        <td><?php echo $row['codeclient'];?></td>
        <td><?php echo $row['montantht'];?></td>
        <td><?php echo $row['montva'];?></td>
        <td><?php echo $row['monttc'];?></td>
        <td><?php echo $row['etat'];?></td>
        <td><?php echo $row['idpventee'];?></td>
        <td><?php echo $row['datecmd'];?></td>
        <td><?php echo $row['cinclient'];?></td>
        <td><?php echo $row['idpointvente'];?></td>
        <td>
        <a href="update_commande.php?id_commande=<?php echo $row['id'];?>" class="btn btn-success" role="button">valider</a>
        </td>
        <td>
        <a href="delete_commande.php?id_commande=<?php echo $row['id'];?>" class="btn btn-danger" role="button">Delete</a>
        </td>
      </tr>

      <?php 
      }

      ?>
    </tbody>
  </table>

  </div>