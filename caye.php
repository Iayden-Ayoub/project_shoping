<?php
session_start();
unset($_SESSION['id']);
unset($_SESSION['nom']);
unset($_SESSION['img']);
unset($_SESSION['taile'])

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css.css">
    <title>Document</title>
</head>
<style>
    table{
        width: 100%;
        
        text-align: center;
        
    }
    .tab tr {
      border: 1px solid;
    }
    /* body{
      background-color: red;
    } */
</style>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="logo.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto m">
          <li class="nav-item"><a class="nav-link" href="Home.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="Shop.php">Shop</a></li>
          <li class="nav-item"><a class="nav-link" href="Blog.php">Blog</a></li>
          <li class="nav-item"><a class="nav-link" href="About.php">About</a></li>
          <li class="nav-item"><a class="nav-link active" href="Contact.php">Contact</a></li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-shopping-bag"></i></a>
          </li>
          <li class="nav-item"><a class="nav-link" href="Quitter.php" style="color: red;">=></a></li>
        </ul>
      </div>
    </div></nav>
     <div class="parent">
    <img src="banner.png" alt="" width="100%" height="200px">
    <div class="child">
        <h1>#L'ts_Talk</h1>
        <p style="opacity: 0.5;">Save More With Coupons & Up To 70% Off</p>
    </div>
  </div><br><br><br>
  <?php
      require_once 'My_basse.php';
      $sel=$conn->prepare('SELECT id_acheter, image_acheter , nom_acheter, prix_acheter , taile_acheter, SUM(quantity_acheter) AS Qua 
    
     FROM acheter  WHERE id_user = ? GROUP BY image_acheter, nom_acheter, prix_acheter, taile_acheter');
      $sel->execute([$_SESSION['user']['id_user']]);
      $res=$sel->fetchAll(PDO::FETCH_ASSOC);
  ?>
  <table class="table">
    <tr>
    <th>Img</th>
    <th>Nom_prodouit</th>
    <th>Prix_prodouit</th>
    <th>Quantity</th>
    <th>Taille</th>
    <th>Total</th>
    <th>Action</th>
    </tr>
    
        <?php    foreach($res as $i){?><tr>
        <td><?php echo "<img src='".$i['image_acheter']."' width=70px>" ?></td>
        <td><?php echo $i['nom_acheter'] ?></td>
        <td>$<?php echo $i['prix_acheter'] ?></td>
        <td><?php echo $i['Qua'] ?></td>
        <td><?php echo $i['taile_acheter'] ?></td>
        <td><mark>$<?php echo $i['prix_acheter'] * $i['Qua'] ?></mark></td>
        <td>
            <form action="sup.php" method="post">
                <input type="submit" name="Supprimer" value="Supprimer" style="background-color: red;border:none;border-radius:5px">
                <input type="hidden" name="id" value="<?php echo $i['id_acheter'] ?>">
                <input type="hidden" name="img" value="<?php echo $i['image_acheter'] ?>">
                <input type="hidden" name="nom" value="<?php echo $i['nom_acheter'] ?>">
                <input type="hidden" name="taile" value="<?php echo $i['taile_acheter'] ?>">
            </form><br>
            <form action="mod.php" method="post">
                <div class="input-group mb-3">
                <input type="number" class="form-control" name="qo" placeholder="Entrer Quantity" aria-label="Recipient's username" aria-describedby="button-addon2" style="width: 10px;">
                <input class="btn btn-outline-secondary" value="Modifier" type="submit" id="button-addon2" style="background-color: green;color:white">
                <input type="hidden" name="id" value="<?php echo $i['id_acheter'] ?>">
                <input type="hidden" name="img" value="<?php echo $i['image_acheter'] ?>">
                <input type="hidden" name="nom" value="<?php echo $i['nom_acheter'] ?>">
                <input type="hidden" name="prix" value="<?php echo $i['prix_acheter'] ?>">
                <input type="hidden" name="taile" value="<?php echo $i['taile_acheter'] ?>">
                  <!-- <input type="submit" name="Modifier" value="Modifier" style="background-color: green;border:none;border-radius:5px"> -->
                </div>
            </form>
        </td></tr>
       <?php } ?>
        
    
  </table>
  <br><br><br><br><br>
  <div class="row">
    <div class="col-sm-6">
  <table border="1" class="tab" style="background-color: #f2f2f2;">
    <tr>
      <th>Cart Tolals</th>
    </tr>
    <tr>
      <td>CartSubTotal</td>
      <td><?php
         $tot=$conn->prepare('SELECT SUM(total_dossier) as toot FROM acheter');
         $tot->execute();
         $res=$tot->fetch(PDO::FETCH_ASSOC);
         echo $res['toot']; ?>
      </td>
    </tr>
    <tr>
      <td>Shop</td>
      <td>Free</td>
    </tr>
    <tr>
      <td>Total</td>
      <td><?php
         $tot=$conn->prepare('SELECT SUM(total_dossier) as toot FROM acheter');
         $tot->execute();
         $res=$tot->fetch(PDO::FETCH_ASSOC);
         echo $res['toot']; ?></td>
    </tr>
    
  </table><button style="float: right;width:120px;padding:10px;margin:5px;background-color:green"><a href="payiment.php" style="text-decoration:none;color: white;">acheter</a></button></div></div><br><br><br>
  
</body>
</html>