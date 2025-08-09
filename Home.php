<?php
require_once 'My_basse.php';
session_start();
if (!isset($_SESSION['user'])) {
  header('location:Connexion.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Zara Fashion</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

  <link rel="stylesheet" href="css.css">
  <!--  <style>
    body{
      background-color: black;
      color: white;
    }
  </style> -->
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
          <li class="nav-item"><a class="nav-link active" href="Home.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="Shop.php">Shop</a></li>
          <li class="nav-item"><a class="nav-link" href="Blog.php">Blog</a></li>
          <li class="nav-item"><a class="nav-link" href="About.php">About</a></li>
          <li class="nav-item"><a class="nav-link" href="Contact.php">Contact</a></li>
          <li class="nav-item position-relative">
            <a class="nav-link" href="caye.php"><i class="fas fa-shopping-bag"></i><?php
                                                                                    $sel = $conn->prepare('SELECT COUNT(*) as total FROM acheter');
                                                                                    $sel->execute();
                                                                                    $res = $sel->fetch(PDO::FETCH_ASSOC);
                                                                                    ?>
              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning text-dark">
                <?php echo $res['total']; ?>
              </span></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="hero">
    <img class="hero-img" src="hero4.png" alt="Fashion collection">
    <div class="hero-content">
      <p>Trade-in-offer</p>
      <h2>Super Value Deals</h2>
      <h2 class="highlight">On All Products</h2>
      <p>Save more with coupons & up to 70% off!</p>
      <div class="shop-btn">
        <img src="button.png" alt="Shop Now button">
        <p>Shop Now</p>
      </div>
    </div>
  </section>

  <section class="featured">
    <div class="container">
      <div class="row rowa">
        <div class="col-md-2 col-sm-4 col-6 op" data-aos="fade-up">
          <img src="f1.png" alt="Category 1">
          <br><br>
          <button>Free Shipping</button>
        </div>
        <div class="col-md-2 col-sm-4 col-6 op" data-aos="fade-up">
          <img src="f2.png" alt="Category 2">
          <br><br>
          <button>Online Order</button>
        </div>
      </div>
      <div class="row rowb">
        <div class="col-md-2 col-sm-4 col-6 op" data-aos="fade-up">
          <img src="f3.png" alt="Category 3">
          <br><br>
          <button>Save Maney</button>
        </div>
        <div class="col-md-2 col-sm-4 col-6 op" data-aos="fade-up">
          <img src="f4.png" alt="Category 4">
          <br><br>
          <button>Promotions</button>
        </div>
        <div class="col-md-2 col-sm-4 col-6 op" data-aos="fade-up">
          <img src="f5.png" alt="Category 5">
          <br><br>
          <button>Happy Sell</button>
        </div>
        <div class="col-md-2 col-sm-4 col-6 op" data-aos="fade-up">
          <img src="f6.png" alt="Category 6">
          <br><br>
          <button>F24/7 Support</button>
        </div>
      </div>
    </div>
  </section>
  <br><br><br>
  <div class="Featured">
    <h1 style="font-size: 52px;">Featured Products</h1>
    <span>Summer Collection New Morden Design</span>
  </div><br><br>
  <section class="featured">
    <div class="container">
      <div class="row">
        <div class="col-md-2 col-sm-4 col-6 opp" data-aos="fade-up">
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
            <a class="tra" href="#" style="text-decoration:none;background-color: red;width:100px;height:30px;border-radius:10px;padding:3px">
              <p style="padding-left:2px;color:white;">View Produit </p>
            </a>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-6 opp" data-aos="fade-up">
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
            <a class="tra" href="#" style="text-decoration:none;background-color: red;width:100px;height:30px;border-radius:10px;padding:3px">
              <p style="padding-left:2px;color:white;">View Produit </p>
            </a>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-6 opp" data-aos="fade-up">
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
            <a class="tra" href="#" style="text-decoration:none;background-color: red;width:100px;height:30px;border-radius:10px;padding:3px">
              <p style="padding-left:2px;color:white;">View Produit </p>
            </a>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-6 opp" data-aos="fade-up">
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
            <a class="tra" href="#" style="text-decoration:none;background-color: red;width:100px;height:30px;border-radius:10px;padding:3px">
              <p style="padding-left:2px;color:white;">View Produit </p>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="featured">
    <div class="container">
      <div class="row">
        <div class="col-md-2 col-sm-4 col-6 opp" data-aos="fade-up">
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
            <a class="tra" href="#" style="text-decoration:none;background-color: red;width:100px;height:30px;border-radius:10px;padding:3px">
              <p style="padding-left:2px;color:white;">View Produit </p>
            </a>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-6 opp" data-aos="fade-up">
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
            <a class="tra" href="#" style="text-decoration:none;background-color: red;width:100px;height:30px;border-radius:10px;padding:3px">
              <p style="padding-left:2px;color:white;">View Produit </p>
            </a>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-6 opp" data-aos="fade-up">
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
            <a class="tra" href="#" style="text-decoration:none;background-color: red;width:100px;height:30px;border-radius:10px;padding:3px">
              <p style="padding-left:2px;color:white;">View Produit </p>
            </a>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-6 opp" data-aos="fade-up">
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
            <a class="tra" href="#" style="text-decoration:none;background-color: red;width:100px;height:30px;border-radius:10px;padding:3px">
              <p style="padding-left:2px;color:white;">View Produit </p>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="parent-tof">
    <img src="b2.jpg" alt="" width="100%">
    <div class="tof">
      <span style="text-align: center;">Repair Services</span>
      <h1>Up to <span style="color: red;">70% Off</span>-All t-Shirt & Accessoires</h1>
      <button class="tof-button">Explore More</button>
    </div>
  </div><br><br><br>
  <div class="Featured">
    <h1 style="font-size: 52px;">New Arrivals</h1>
    <span>Summer Collection New Morden Design</span>
  </div><br><br>


  <section class="featured">
    <div class="container">
      <div class="row">
        <div class="col-md-2 col-sm-4 col-6 opp" data-aos="fade-up">
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
            <a class="tra" href="#" style="text-decoration:none;background-color: red;width:100px;height:30px;border-radius:10px;padding:3px">
              <p style="padding-left:2px;color:white;">View Produit </p>
            </a>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-6 opp" data-aos="fade-up">
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
            <a class="tra" href="#" style="text-decoration:none;background-color: red;width:100px;height:30px;border-radius:10px;padding:3px">
              <p style="padding-left:2px;color:white;">View Produit </p>
            </a>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-6 opp" data-aos="fade-up">
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
            <a class="tra" href="#" style="text-decoration:none;background-color: red;width:100px;height:30px;border-radius:10px;padding:3px">
              <p style="padding-left:2px;color:white;">View Produit </p>
            </a>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-6 opp" data-aos="fade-up">
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
            <a class="tra" href="#" style="text-decoration:none;background-color: red;width:100px;height:30px;border-radius:10px;padding:3px">
              <p style="padding-left:2px;color:white;">View Produit </p>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="featured">
    <div class="container">
      <div class="row">
        <div class="col-md-2 col-sm-4 col-6 opp" data-aos="fade-up">
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
            <a class="tra" href="#" style="text-decoration:none;background-color: red;width:100px;height:30px;border-radius:10px;padding:3px">
              <p style="padding-left:2px;color:white;">View Produit </p>
            </a>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-6 opp" data-aos="fade-up">
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
            <a class="tra" href="#" style="text-decoration:none;background-color: red;width:100px;height:30px;border-radius:10px;padding:3px">
              <p style="padding-left:2px;color:white;">View Produit </p>
            </a>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-6 opp" data-aos="fade-up">
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
            <a class="tra" href="#" style="text-decoration:none;background-color: red;width:100px;height:30px;border-radius:10px;padding:3px">
              <p style="padding-left:2px;color:white;">View Produit </p>
            </a>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-6 opp" data-aos="fade-up">
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
            <a class="tra" href="#" style="text-decoration:none;background-color: red;width:100px;height:30px;border-radius:10px;padding:3px">
              <p style="padding-left:2px;color:white;">View Produit </p>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="featured">
    <div class="container">
      <div class="row">
        <div class="col-md-6 parent-collection">
          <img src="b17.jpg" alt="Category 2" style="height:315px">
          <div class="collection">
            <span>Crozy deols</span>
            <h2>Buy 1 Get Free</h2>
            <p>The Best Classic Adresse Is On Sale At Cora</p>
            <button>Collection</button>
          </div>
        </div>
        <div class="col-md-6 parent-collection">
          <img src="b10.jpg" alt="Category 3">
          <div class="collection">
            <span>Spring/Summer</span>
            <h2>Upcomming Season</h2>
            <p>The Best Classic Adresse Is On Sale At Cora</p>
            <button>Collection</button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="featured">
    <div class="container">
      <div class="row">
        <div class="col-md-4 parent-collectionn">
          <img src="b4.jpg" alt="Category 2" style="height:250px">
          <div class="collectionn">
            <b>SEASONAL SALE</b>
            <p style="color: red;">Writer Chopping</p>
          </div>
        </div>
        <div class="col-md-4 parent-collectionn">
          <img src="b7.jpg" alt="Category 3" style="height: 250px;">
          <div class="collectionn">
            <b>NEW FOOTWEAR COLLECTION</b>
            <p style="color: red;">Spring/Summer 2025</p>
          </div>
        </div>
        <div class="col-md-4 parent-collectionn">
          <img src="b18.jpg" alt="Category 3" style="height: 250px;">
          <div class="collectionn">
            <b style="font-size: 20px;">T-SHIRTS/Summer</b>
            <p style="color: red;">Spring Summer</p>
          </div>
        </div>
      </div>
    </div>
  </section><br><br><br>
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
        <div class="col-md-4 ">
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
            </div>
          </div>
          <span style="font-size: 13px;">Socured Poyment Gateways</span><br><br>
          <img src="pay.png" alt="">

        </div>
      </div>
    </div>
  </section>
  <style>
    #btn {
      background-color: black;
      width: 50px;
      height: 50px;
      border: none;
      font-size: 30px;
      border-radius: 25px;
      position: fixed;
      right: 30px;
      bottom: 50px;
      display: none;
    }
  </style><button id="btn">^</button>
  <script>
    let btn = document.getElementById('btn');
    onscroll = function() {
      if (scrollY >= 400) {
        btn.style.display = "block"
      } else {
        btn.style.display = "none"
      }
    }
    btn.onclick = function() {
      scroll({
        left: 0,
        top: 0,
        behavior: "smooth"
      })
    }
  </script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      AOS.init({
        duration: 1000,
        once: true
      });
    });
  </script>
</body>

</html>