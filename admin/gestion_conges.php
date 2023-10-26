<?php include 'header.php';?>

<div class="container mt-3">

<h1>Gestion Conges</h1>



  <table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Titre</th>
        <th>Demande</th>
        <th>Duree</th>
        <th>Date Debut</th>
        <th>Date Fin</th>
        <th>nom</th>
        <th>prenom</th>
        <th>codeemployer</th>
        <th>Valide</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>


      <?php

      include('../db/connexion.php');

      $sql="SELECT * FROM `conge`";

      $result=$conn->query($sql);

      while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))

      { 
      
      ?>
    

 
      <tr>
        <th scope="row"><?php echo $row['id'];?></th>
        <td><?php echo $row['titre'];?></td>
        <td><?php echo $row['demande'];?></td>
        <td><?php echo $row['duree'];?></td>
        <td><?php echo $row['datedebut'];?></td>
        <td><?php echo $row['datefin'];?></td>
        <td><?php echo $row['nom'];?></td>
        <td><?php echo $row['prenom'];?></td>
        <td><?php echo $row['codeemployer'];?></td>
        <td><?php echo $row['valide'];?></td>
        <td>
        <a href="update_conge.php?id_conge=<?php echo $row['id'];?>" class="btn btn-success" role="button">valider</a>
        </td>
        <td>
        <a href="delete_conge.php?id_conge=<?php echo $row['id'];?>" class="btn btn-danger" role="button">Delete</a>
        </td>
      </tr>

      <?php 
      }

      ?>
    </tbody>
  </table>

  </div>