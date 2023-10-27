<?php include 'header.php';?>


<div class="container mt-3">
  
  <h1>Espace Client</h1>

  <h1>Product List</h1>

  <div class="container mt-3">


  <div class="row row-cols-1 row-cols-md-3 g-4">

  <?php

  include('../db/connexion.php');

  $sql="SELECT * FROM `produit`";

  $result=$conn->query($sql);


  while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
  {

    $photo= $row['photo'];

    ?>



  

  



    <div class="col">
    <div class="card h-100">
    <?php echo "<img src='$photo' height=300 width=150 class='card-img-top' alt='image1' >";?>
      <div class="card-body">
        <h5 class="card-title"><?php echo $row['libelle'];?></h5>
        <h5 class="card-price"><?php echo $row['prix'];?> DT</h5>
        <h6 class="card-title">Quantité: <?php echo $row['quantite'];?></h6>
        <h6 class="card-title">TVA: <?php echo $row['tva'];?>%</h6>

        <form action="commande.php?id_commande=<?php echo $row['id'];?>" method="POST">
        <button name="submit" type="submit" class="btn btn-primary">Commander</button>
        </form>
      </div>
    </div>
  </div>



    <?php

}


?>


<!--

  <div class="col">
    <div class="card h-100">
      <img src="../IMG/image.png" class="card-img-top" alt="image1">
      <div class="card-body">
        <h5 class="card-title">libelle</h5>
        <h5 class="card-price">200 D</h5>
        <h6 class="card-title">Quantité: 1</h6>
        <h6 class="card-title">TVA: 6%</h6>

        <a href="#" class="btn btn-primary">Commander</a>
      </div>
    </div>
  </div>

-->
 



<!--
  
  <div class="col">
    <div class="card h-100">
    <img src="../IMG/image.png" class="card-img-top" alt="image2">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a short card.</p>
        <a href="#" class="btn btn-primary">Commander</a>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card h-100">
    <img src="../IMG/image.png" class="card-img-top" alt="image3">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Commander</a>
      </div>
    </div>
  </div>

-->





</div>

</div>

</div>








