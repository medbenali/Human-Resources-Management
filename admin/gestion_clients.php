<?php include 'header.php';?>

<div class="container mt-3">

  <h1>Ajout Client</h1>

  <a href="ajout_client.php" class="btn btn-primary" role="button">Ajout Client</a>
  
  
  <h1>Gestion Clients</h1>

  <div class="table-responsive">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Email</th>
        <th>Sexe</th>
        <th>Adresse</th>
        <th>Pays</th>
        <th>Ville</th>
        <th>Code Postal</th>
        <th>Telephone Fixe</th>
        <th>GSM</th>
        <th>Date de Naissance</th>
        <th>Lieu de Naissance</th>
        <th>Etat Civile</th>
        <th>Compte Utilisateur</th>
        <th>Login</th>
        <th>Password</th>
        <th colspan="2">Action</th>

    
      </tr>

    </thead>
    <tbody>

      <?php

      include('../db/connexion.php');

      $sql="SELECT * FROM `client`";

      $result=$conn->query($sql);

      while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))

      { 
      
      ?>
        
 

 
      <tr>
        <th scope="row"><?php echo $row['id'];?></th>
        <td><?php echo $row['nom'];?></td>
        <td><?php echo $row['prenom'];?></td>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['sexe'];?></td>
        <td><?php echo $row['adresse'];?></td>
        <td><?php echo $row['pays'];?></td>
        <td><?php echo $row['ville'];?></td>
        <td><?php echo $row['codePostal'];?></td>
        <td><?php echo $row['telephoneFixe'];?></td>
        <td><?php echo $row['gsm'];?></td>
        <td><?php echo $row['dateNaissance'];?></td>
        <td><?php echo $row['lieuNaissance'];?></td>
        <td><?php echo $row['etatCivile'];?></td>
        <td><?php echo $row['compteUtilisateur'];?></td>
        <td><?php echo $row['login'];?></td>
        <td><?php echo $row['pwd'];?></td>
       
        <td>
        <a href="modifier_client.php?
        id=<?php echo $row['id'];?>
        &&nom=<?php echo $row['nom'];?>
        &&prenom=<?php echo $row['prenom'];?>
        &&email=<?php echo $row['email'];?>
        &&sexe=<?php echo $row['sexe'];?>
        &&adresse=<?php echo $row['adresse'];?>
        &&pays=<?php echo $row['pays'];?>
        &&ville=<?php echo $row['ville'];?>
        &&codePostal=<?php echo $row['codePostal'];?>
        &&telephoneFixe=<?php echo $row['telephoneFixe'];?>
        &&gsm=<?php echo $row['gsm'];?>
        &&dateNaissance=<?php echo $row['dateNaissance'];?>
        &&lieuNaissance=<?php echo $row['lieuNaissance'];?>
        &&etatCivile=<?php echo $row['etatCivile'];?>
        &&compteUtilisateur=<?php echo $row['compteUtilisateur'];?>
        &&login=<?php echo $row['login'];?>
        &&pwd=<?php echo $row['pwd'];?>
        " 
        class="btn btn-success" role="button">Edit</a>
        </td>
        <td>
        <a href="delete_client.php?id=<?php echo $row['id'];?>" class="btn btn-danger" role="button">Delete</a>
        </td>

  
       </tr>

        
      <?php 
      }

      ?>
    </tbody>
  </table>

  </div>
  </div>