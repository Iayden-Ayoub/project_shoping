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
    <title>Document</title>
</head>

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
            $sell=$conn->prepare('SELECT COUNT(*) as total FROM acheter');
            $sell->execute();
            $res=$sell->fetch(PDO::FETCH_ASSOC);
            ?>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning text-dark">
          <?php echo $res['total']; ?>
        </span></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="parent">
    <img src="b1.jpg" alt="" width="100%">
    <div class="child">
        <h1>#StayHome</h1>
        <p style="opacity: 0.5;">Save More With Coupons & Up To 70% Off</p>
    </div>
  </div>
  <section class="featured">
    <div class="container">
      <div class="row">
        <div class="col-md-2 col-sm-4 col-6 opp">
          <img class="img2" src="f1.jpg" alt="Category 1">
          <br><br>
          <span style="font-size:12px;opacity:0.5">Zara</span><br>
          <b style="font-size: 13px;">VoidWear</b><br>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span><br>
          <div class="flex">
            <p style="color: green;">$38</p>
            <a class="tra" href="accueil.php?numero=1" style="text-decoration:none;background-color: red;width:100px;height:30px;border-radius:10px;padding:3px"><p style="padding-left:2px;color:white;">View Produit </p></a>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-6 opp">
          <img class="img2" src="f2.jpg" alt="Category 2">
          <br><br>
          <span style="font-size:12px;opacity:0.5">Zara</span><br>
          <b style="font-size: 13px;">NoirX</b><br>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span><br>
          <div class="flex">
            <p style="color: green;">$66</p>
            <a class="tra" href="accueil.php?numero=2" style="text-decoration:none;background-color: red;width:100px;height:30px;border-radius:10px;padding:3px"><p style="padding-left:2px;color:white;">View Produit </p></a>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-6 opp">
          <img class="img2" src="f3.jpg" alt="Category 3">
          <br><br>
          <span style="font-size:12px;opacity:0.5">Zara</span><br>
          <b style="font-size: 13px;">UrbanSin</b><br>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span><br>
          <div class="flex">
            <p style="color: green;">$78</p>
            <a class="tra" href="accueil.php?numero=3" style="text-decoration:none;background-color: red;width:100px;height:30px;border-radius:10px;padding:3px"><p style="padding-left:2px;color:white;">View Produit </p></a>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-6 opp">
          <img class="img2" src="f4.jpg" alt="Category 4">
          <br><br>
          <span style="font-size:12px;opacity:0.5">Zara</span><br>
          <b style="font-size: 13px;">DSTRCT</b><br>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span><br>
          <div class="flex">
            <p style="color: green;">$78</p>
            <a class="tra" href="accueil.php?numero=4" style="text-decoration:none;background-color: red;width:100px;height:30px;border-radius:10px;padding:3px"><p style="padding-left:2px;color:white;">View Produit </p></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="featured">
    <div class="container">
      <div class="row">
        <div class="col-md-2 col-sm-4 col-6 opp">
          <img class="img2" src="f5.jpg" alt="Category 1">
          <br><br>
          <span style="font-size:12px;opacity:0.5">Zara</span><br>
          <b style="font-size: 13px;">CTRL Mode</b><br>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span><br>
          <div class="flex">
            <p style="color: green;">$88</p>
            <a class="tra" href="accueil.php?numero=5" style="text-decoration:none;background-color: red;width:100px;height:30px;border-radius:10px;padding:3px"><p style="padding-left:2px;color:white;">View Produit </p></a>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-6 opp">
          <img class="img2" src="f6.jpg" alt="Category 2">
          <br><br>
          <span style="font-size:12px;opacity:0.5">Zara</span><br>
          <b style="font-size: 13px;">OffTrack</b><br>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span><br>
          <div class="flex">
            <p style="color: green;">$78</p>
            <a class="tra" href="accueil.php?numero=6" style="text-decoration:none;background-color: red;width:100px;height:30px;border-radius:10px;padding:3px"><p style="padding-left:2px;color:white;">View Produit </p></a>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-6 opp">
          <img class="img2" src="f7.jpg" alt="Category 3">
          <br><br>
          <span style="font-size:12px;opacity:0.5">Zara</span><br>
          <b style="font-size: 13px;">MutedSoul</b><br>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span><br>
          <div class="flex">
            <p style="color: green;">$70</p>
            <a class="tra" href="accueil.php?numero=7" style="text-decoration:none;background-color: red;width:100px;height:30px;border-radius:10px;padding:3px"><p style="padding-left:2px;color:white;">View Produit </p></a>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-6 opp">
          <img class="img2" src="f8.jpg" alt="Category 4">
          <br><br>
          <span style="font-size:12px;opacity:0.5">Zara</span><br>
          <b style="font-size: 13px;">RawEdge</b><br>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span><br>
          <div class="flex">
            <p style="color: green;">$58</p>
            <a class="tra" href="accueil.php?numero=8" style="text-decoration:none;background-color: red;width:100px;height:30px;border-radius:10px;padding:3px"><p style="padding-left:2px;color:white;">View Produit </p></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="featured">
    <div class="container">
      <div class="row">
        <div class="col-md-2 col-sm-4 col-6 opp">
          <img class="img2" src="n1.jpg" alt="Category 1">
          <br><br>
          <span style="font-size:12px;opacity:0.5">Zara</span><br>
          <b style="font-size: 13px;">VibeKill</b><br>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span><br>
          <div class="flex">
            <p style="color: green;">$68</p>
            <a class="tra"href="accueil.php?numero=9" style="text-decoration:none;background-color: red;width:100px;height:30px;border-radius:10px;padding:3px"><p style="padding-left:2px;color:white;">View Produit </p></a>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-6 opp">
          <img class="img2" src="n2.jpg" alt="Category 2">
          <br><br>
          <span style="font-size:12px;opacity:0.5">Zara</span><br>
          <b style="font-size: 13px;">AshRiot</b><br>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span><br>
          <div class="flex">
            <p style="color: green;">$55</p>
            <a class="tra"href="accueil.php?numero=10" style="text-decoration:none;background-color: red;width:100px;height:30px;border-radius:10px;padding:3px"><p style="padding-left:2px;color:white;">View Produit </p></a>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-6 opp">
          <img class="img2" src="n3.jpg" alt="Category 3">
          <br><br>
          <span style="font-size:12px;opacity:0.5">Zara</span><br>
          <b style="font-size: 13px;">DRFT</b><br>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span><br>
          <div class="flex">
            <p style="color: green;">$18</p>
            <a class="tra" href="accueil.php?numero=11" style="text-decoration:none;background-color: red;width:100px;height:30px;border-radius:10px;padding:3px"><p style="padding-left:2px;color:white;">View Produit </p></a>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-6 opp">
          <img class="img2" src="n4.jpg" alt="Category 4">
          <br><br>
          <span style="font-size:12px;opacity:0.5">Zara</span><br>
          <b style="font-size: 13px;">BLEDX</b><br>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span><br>
          <div class="flex">
            <p style="color: green;">$22</p>
            <a class="tra" href="accueil.php?numero=12" style="text-decoration:none;background-color: red;width:100px;height:30px;border-radius:10px;padding:3px"><p style="padding-left:2px;color:white;">View Produit </p></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="featured">
    <div class="container">
      <div class="row">
        <div class="col-md-2 col-sm-4 col-6 opp">
          <img class="img2" src="n5.jpg" alt="Category 1">
          <br><br>
          <span style="font-size:12px;opacity:0.5">Zara</span><br>
          <b style="font-size: 13px;">HYDE 99</b><br>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span><br>
          <div class="flex">
            <p style="color: green;">$14</p>
            <a class="tra" href="accueil.php?numero=13" style="text-decoration:none;background-color: red;width:100px;height:30px;border-radius:10px;padding:3px"><p style="padding-left:2px;color:white;">View Produit </p></a>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-6 opp">
          <img class="img2" src="n6.jpg" alt="Category 2">
          <br><br>
          <span style="font-size:12px;opacity:0.5">Zara</span><br>
          <b style="font-size: 13px;">MNSTR</b><br>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span><br>
          <div class="flex">
            <p style="color: green;">$70</p>
            <a class="tra" href="accueil.php?numero=14" style="text-decoration:none;background-color: red;width:100px;height:30px;border-radius:10px;padding:3px"><p style="padding-left:2px;color:white;">View Produit </p></a>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-6 opp">
          <img class="img2" src="n7.jpg" alt="Category 3">
          <br><br>
          <span style="font-size:12px;opacity:0.5">Zara</span><br>
          <b style="font-size: 13px;">GL!TCH</b><br>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span><br>
          <div class="flex">
            <p style="color: green;">$68</p>
            <a class="tra" href="accueil.php?numero=15" style="text-decoration:none;background-color: red;width:100px;height:30px;border-radius:10px;padding:3px"><p style="padding-left:2px;color:white;">View Produit </p></a>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-6 opp">
          <img class="img2" src="n8.jpg" alt="Category 4">
          <br><br>
          <span style="font-size:12px;opacity:0.5">Zara</span><br>
          <b style="font-size: 13px;">NEBULA</b><br>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span><br>
          <div class="flex">
            <p style="color: green;">$17</p>
            <a class="tra" href="accueil.php?numero=16" style="text-decoration:none;background-color: red;width:100px;height:30px;border-radius:10px;padding:3px"><p style="padding-left:2px;color:white;">View Produit </p></a>
          </div>
        </div>
      </div>
    </div>
  </section><br><br><br>
  <div class="ul">
  <ul class="pagination">
    <li class="page-item">
        <a href="Home.php" class="page-link" style="background-color: green;color:white">1</a>
    </li>
    <li class="page-item" >
        <a href="#" class="page-link" style="background-color: green;color:white">2</a>
    </li>
    <li class="page-item">
        <a href="#" class="page-link" style="background-color: green;color:white">-></a>
    </li>
  </ul></div><br>
  <div class="fin">
    <div>
      <b style="font-size: 23px;">Sign Up For Newsletters</b><br>
      <span style="font-size: 13px;opacity:0.5">Get Email Updates About Aour Latest Shop And</span> <span style="color: yellow;font-size: 13px;">Special Offers</span>
    </div>
    <div>
    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Your Email Adresse" aria-label="Recipient's username" aria-describedby="button-addon2">
      <button class="btn btn-outline-secondary" type="button" id="button-addon2">Sign Up</button>
    </div>
    </div>
  </div><br>
  <section class="featured">
    <div class="container">
      <div class="row">
        <div class="col-md-4 " >
          <img src="logo.png" alt=""><br><br>
          <h5><b>Contact :</b> </h5>
          <span style="font-size: 20px;">Adresse :</span><span>Andalous Errahma Gh 63</span><br>
          <span style="font-size: 20px;">Phone :</span><span>+212 0772529608</span><br>
          <span style="font-size: 20px;">Hours :</span><span>08:00-18:00_Mon-Sat</span><br><br>
          <h5><b>Follow Us :</b></h5>
          <a href="#" class="fa fa-facebook l"></a>
          <a href="#" class="fa fa-twitter l"></a>
          <a href="#" class="fa fa-instagram l"></a>
          <a href="#" class="fa fa-youtube l"></a>
          <a href="#" class="fa fa-linkedin l"></a>
        </div>
        <div class="col-md-2 ">
          <h5><b>About </b> </h5>
          <p>About Us</p>
          <p>Delivery Information</p>
          <p>Privacy Policy</p>
          <p>Terms & Conditions</p>
          <p>Contact Us</p>
        </div>
        <div class="col-md-2 ">
          <h5><b>My Account </b> </h5>
          <p>Sign In</p>
          <p>View Cart</p>
          <p>My Wishlist</p>
          <p>Track My Order</p>
          <p>Help</p>
        </div>
        <div class="col-md-4 ">
          <h5><b>Install App</b> </h5>
          <span style="font-size: 13px;">From App Store Or Google Play</span><br>
          <div style="display: flex;gap:5px">
          <div style="border: 1px solid;">
            <img src="app.jpg" alt="">
          </div>
          <div style="border: 1px solid;">
            <img src="play.jpg" alt="">
          </div></div>
          <span style="font-size: 13px;">Socured Poyment Gateways</span><br><br>
          <img src="pay.png" alt="">
          
        </div>
      </div>
    </div>
  </section>
  <style>
#btn{
      background-color: black;
      width: 50px;
      height: 50px;
      border:none;
      font-size: 30px;
      border-radius: 25px;
      position: fixed;
      right: 30px;
      bottom: 50px;
      display: none;
  }
</style><button id="btn">^</button>
  <script>
        let btn =document.getElementById('btn');
        onscroll=function(){
            if(scrollY >=400){
                btn.style.display="block"
            }else{
                btn.style.display="none"
            }}
        btn.onclick=function (){
            scroll({
                left:0,
                top:0,
                behavior:"smooth"
            })
        }</script>
</body>
</html>