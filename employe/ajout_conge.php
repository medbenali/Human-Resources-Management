

<?php include 'header.php';?>

<div class="container mt-3">

<h1>Ajout Conge</h1>


<form action="add_conge.php" method="POST">

<div class="form-group">


    <div class="form-group">
    <label>Titre</label>
    <input name="titre" type="text" class="form-control">
    </div>

    <div class="form-group">
    <label>Demande</label>
    <input name="demande" type="text" class="form-control">
    </div>


    <div class="form-group">
    <label>Duree</label>
    <input name="duree" type="text" class="form-control">
    </div>

    <div class="form-group">
    <label>Date Debut</label>
    <input name="datedebut" type="date" class="form-control">
    </div>

    <div class="form-group">
    <label>Date Fin</label>
    <input name="datefin" type="date" class="form-control">
    </div>

    <div class="form-group">
    <label>Nom</label>
    <input name="nom" type="text" class="form-control">
    </div>


    <div class="form-group">
    <label>Prenom</label>
    <input name="prenom" type="text" class="form-control">
    </div>

    <div class="form-group">
    <label>Code employer</label>
    <input name="codeemployer" type="text" class="form-control">
    </div>

    
    <button type="submit" class="btn btn-primary">Ajout Conge</button>

    </form>

</div>