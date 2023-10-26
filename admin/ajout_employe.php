<?php include 'header.php';?>

<div class="container mt-3">

<h1>Ajout Employe</h1>



<form action="add_employe.php" method="POST">

<div class="form-group">

    <div class="form-group">
    <label>Nom</label>
    <input name="nom" type="text" class="form-control">
    </div>


    <div class="form-group">
    <label>Prenom</label>
    <input name="prenom" type="text" class="form-control">
    </div>

    <div class="form-group">
    <label>Email</label>
    <input name="email" type="text" class="form-control">
    </div>



    <div class="form-group">
    <label>Sexe</label>
    <input name="sexe" type="text" class="form-control">
    </div>

    <div class="form-group">
    <label>Adresse</label>
    <input name="adresse" type="text" class="form-control">
    </div>

    <div class="form-group">
    <label>Pays</label>
    <input name="pays" type="text" class="form-control">
    </div>

    <div class="form-group">
    <label>Ville</label>
    <input name="ville" type="text" class="form-control">
    </div>

    <div class="form-group">
    <label>Code Postal</label>
    <input name="codePostal" type="text" class="form-control">
    </div>

    <div class="form-group">
    <label>Telephone Fixe</label>
    <input name="telephoneFixe" type="text" class="form-control">
    </div>

    <div class="form-group">
    <label>GSM</label>
    <input name="gsm" type="text" class="form-control">
    </div>

    <div class="form-group">
    <label>Date de Naissance</label>
    <input name="dateNaissance" type="text" class="form-control">
    </div>


    <div class="form-group">
    <label>Lieu de Naissance</label>
    <input name="lieuNaissance" type="text" class="form-control">
    </div>

    <div class="form-group">
    <label>Etat Civile</label>
    <input name="etatCivile" type="text" class="form-control">
    </div>

    <div class="form-group">
    <label>Compte Utilisateur</label>
    <input name="compteUtilisateur" type="text" class="form-control">
    </div>

    <div class="form-group">
    <label>Login</label>
    <input name="login" type="text" class="form-control">
    </div>

    <div class="form-group">
    <label>Password</label>
    <input name="pwd" type="password" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Ajout Employe</button>

    </form>

</div>