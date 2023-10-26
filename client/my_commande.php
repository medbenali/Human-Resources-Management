<?php include 'header.php';?>

<div class="container mt-3">

<h1>My Commandes</h1>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Numero</th>
        <th>Mon TTC</th>
        <th>Etat</th>
        <th>Date Commande</th>
      </tr>
    </thead>
    <tbody>


      <?php

      include('../db/connexion.php');

      // id de client connecte

      $codeclient=303;

      $sql="SELECT * FROM `commande` WHERE codeclient='$codeclient'";

      $result=$conn->query($sql);

      while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))

      { 
      
      ?>
        
 
      <tr>
        <td><?php echo $row['num'];?></td>
        <td><?php echo $row['monttc'];?></td>
        <td><?php echo $row['etat'];?></td>
        <td><?php echo $row['datecmd'];?></td>
      </tr>

      <?php 
      }

      ?>
    </tbody>
  </table>

  </div>