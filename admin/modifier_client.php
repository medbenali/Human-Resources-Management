<?php include 'header.php';?>

<div class="container mt-3">

<h1>Update Client</h1>


<form action="update_client.php" method="POST">

<div class="form-group">
    <label>Id</label>
    <input name="id" class="form-control" type="text" value="<?php echo $_GET['id'];?>" aria-label="Disabled input example" readonly>
    </div>



    <div class="form-group">
    <label>Nom</label>
    <input name="nom" type="text" class="form-control" value="<?php echo $_GET['nom'];?>" >
    </div>


    <div class="form-group">
    <label>Prenom</label>
    <input name="prenom" type="text" class="form-control" value="<?php echo $_GET['prenom'];?>" >
    </div>

    <div class="form-group">
    <label>Email</label>
    <input name="email" type="text" class="form-control" value="<?php echo $_GET['email'];?>" >
    </div>



    <div class="form-group">
    <label>Sexe</label>
    <input name="sexe" type="text" class="form-control" value="<?php echo $_GET['sexe'];?>" >
    </div>

    <div class="form-group">
    <label>Adresse</label>
    <input name="adresse" type="text" class="form-control" value="<?php echo $_GET['adresse'];?>" >
    </div>

    <div class="form-group">
    <label>Pays</label>
    <input name="pays" type="text" class="form-control" value="<?php echo $_GET['pays'];?>" >
    </div>

    <div class="form-group">
    <label>Ville</label>
    <input name="ville" type="text" class="form-control" value="<?php echo $_GET['ville'];?>" >
    </div>

    <div class="form-group">
    <label>Code Postal</label>
    <input name="codePostal" type="text" class="form-control" value="<?php echo $_GET['codePostal'];?>" >
    </div>

    <div class="form-group">
    <label>Telephone Fixe</label>
    <input name="telephoneFixe" type="text" class="form-control" value="<?php echo $_GET['telephoneFixe'];?>" >
    </div>

    <div class="form-group">
    <label>GSM</label>
    <input name="gsm" type="text" class="form-control" value="<?php echo $_GET['gsm'];?>" >
    </div>

    <div class="form-group">
    <label>Date de Naissance</label>
    <input name="dateNaissance" type="text" class="form-control" value="<?php echo $_GET['dateNaissance'];?>" >
    </div>


    <div class="form-group">
    <label>Lieu de Naissance</label>
    <input name="lieuNaissance" type="text" class="form-control" value="<?php echo $_GET['lieuNaissance'];?>" >
    </div>

    <div class="form-group">
    <label>Etat Civile</label>
    <input name="etatCivile" type="text" class="form-control" value="<?php echo $_GET['etatCivile'];?>" >
    </div>

    <div class="form-group">
    <label>Compte Utilisateur</label>
    <input name="compteUtilisateur" type="text" class="form-control" value="<?php echo $_GET['compteUtilisateur'];?>" >
    </div>

    <div class="form-group">
    <label>Login</label>
    <input name="login" type="text" class="form-control" value="<?php echo $_GET['login'];?>" >
    </div>

    <div class="form-group">
    <label>Password</label>
    <input name="pwd" type="password" class="form-control" value="<?php echo $_GET['pwd'];?>" >
    </div>

    <button type="submit" class="btn btn-primary">Update Client</button>

    </form>

</div>