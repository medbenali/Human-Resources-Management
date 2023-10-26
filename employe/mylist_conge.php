<?php include 'header.php';?>

<div class="container mt-3">

<h1>My Liste Conge</h1>



  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Titre</th>
        <th>Demande</th>
        <th>Duree</th>
        <th>Date Debut</th>
        <th>Date Fin</th>
        <th>Valide</th>
      </tr>
    </thead>
    <tbody>


      <?php

      include('../db/connexion.php');

     // id de employe connecte

     $codeemployer=1;

      $sql="SELECT * FROM `conge` WHERE codeemployer='$codeemployer'";

      $result=$conn->query($sql);

      while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))

      { 
      
      ?>
    

 
      <tr>
        <td><?php echo $row['titre'];?></td>
        <td><?php echo $row['demande'];?></td>
        <td><?php echo $row['duree'];?></td>
        <td><?php echo $row['datedebut'];?></td>
        <td><?php echo $row['datefin'];?></td>
        <td><?php echo $row['valide'];?></td>

      </tr>

      <?php 
      }

      ?>
    </tbody>
  </table>

  </div>