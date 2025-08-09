
<?php
require_once 'My_basse.php';
session_start();
if(!isset($_SESSION['user'])){
    header('location:Connexion.php');
}
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
    <script src="jquery-3.6.4.min.js"></script>
    <title>Document</title>
</head>
<style>
     
    
    
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
          <li class="nav-item"><a class="nav-link active" href="Shop.php">Shop</a></li>
          <li class="nav-item"><a class="nav-link" href="Blog.php">Blog</a></li>
          <li class="nav-item"><a class="nav-link" href="About.php">About</a></li>
          <li class="nav-item"><a class="nav-link" href="Contact.php">Contact</a></li>
          <li class="nav-item position-relative">
            <a class="nav-link" href="caye.php"><i class="fas fa-shopping-bag"></i><?php  
            $sel=$conn->prepare('SELECT COUNT(*) as total FROM acheter');
            $sel->execute();
            $res=$sel->fetch(PDO::FETCH_ASSOC);
            ?>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning text-dark">
          <?php echo $res['total']; ?>
        </span></a>
          </li>
        </ul>
      </div>
    </div>
  </nav><br>
  
<!-- <script>
    const params = new URLSearchParams(window.location.search);
    const numero = params.get("numero");
</script> -->
<?php
require_once 'My_basse.php';

if (isset($_GET['numero'])) {
    $numero = $_GET['numero'];

    $po = $conn->prepare('SELECT * FROM prodouit WHERE id_prodouit = ?');
    $po->execute([$numero]);

    $result = $po->fetch(PDO::FETCH_ASSOC);

    if ($result) {?>

    <div class="container">
      <div class="row ">
        <div class="col-sm-6 p">
          <?php echo "<img src='" .htmlspecialchars($result['image_prodouit']). "' style='width:100%;border-radius:10px;margin-right:30px' >" ; ?>
        </div>
        <div class="col-sm-6 pp">
            <p style="margin-top: 20px;">Home/T'Shirt</p>
            <h2 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Men's Fashion T Shirt  <span style="color:red"> <?php echo  htmlspecialchars($result['nom_prodouit'])?></span></h2><br>
            <h3><b>$<?php echo htmlspecialchars($result['prix_prodouit']) ?>.00</b></h3>
            <form action="" method="post">
            <select name="tail" id="d">
                <option value="Select Size">Select Size</option>
                <option value="XL">XL</option>
                <option value="XXL">XXL</option>
                <option value="Small">Small</option>
                <option value="Large">Large</option>
            </select><br><br>
            <input type="number" name="nmb" value="1" style="width: 50px; text-align:center;height:40px;">
            <input type="submit" name="sub" id="display" value="Add To Cart" style="background-color: green; color:white;width:120px;height:40px;border-radius:10px;border:none">
            </form><br><br>
            <h3><b>Product Details</b></h3>
            <?php
            echo htmlspecialchars($result['description_prodouit'])
            ?>
        </div>
    </div>
    </div>

<?php
    } else {
        echo "Aucun produit trouvé.";
    }
} else {
    echo "Paramètre 'numero' manquant.";
  }
  $sel=$conn->prepare('SELECT * FROM acheter');
      $sel->execute();
      $res=$sel->fetchAll(PDO::FETCH_ASSOC);
      $tail=@$_POST['tail'];
      foreach( $res as $row ){
if ($result['nom_prodouit'] == $row['nom_acheter'] && $tail == $row['taile_acheter']) {
        ?><script>window.onload=function(){let dis = document.getElementById("display");dis.style.display="none";}</script><?php
           ?><script>alert('Ce produit avec cette taille a déjà été acheté.\nSi vous souhaitez augmenter ou diminuer la quantité, veuillez accéder à votre panier.');
          window.location.href = "Shop.php";</script><?php
           
           
           
           return;
        }
    }
        
if(isset($_POST['sub'])){
    $qua=$_POST['nmb'];
    $tail=$_POST['tail'];
    $id_user=$_SESSION['user']['id_user'];
    $prix=$result['prix_prodouit'];
    $total=$qua*$prix;
    if(!empty($qua) && !empty($tail)){
        $in=$conn->prepare('INSERT INTO acheter VALUES(null,?,?,?,?,?,?,?)');
        $in->execute([$_SESSION['user']['id_user'],$result['image_prodouit'],$result['nom_prodouit'],$result['prix_prodouit'],$qua,$tail,$total]);
        ?><script>window.location.href = "Shop.php";</script><?php
        
        
    }

}
        
?>
</body>
</html>