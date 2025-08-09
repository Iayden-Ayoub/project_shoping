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
    <title>Document</title>
</head>
<style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    .parent{
        position: relative;
        color: white;
    }
    .child{
        position: absolute;
        top: 40%;
        left: 40%;
        text-align: center;
    }
    body {
      padding-top: 56px; 
      font-family: 'Arial', sans-serif;
    }
    
    .navbar {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 1000;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
    
    .m {
      margin-right: 20px;
    }
    
    .navbar-nav {
      gap: 15px;
    }
    
    .nav-item {
      position: relative;
    }
    
    .nav-item::after {
      content: "";
      position: absolute;
      bottom: 0;
      left: 0;
      height: 2px;
      width: 0%;
      background: red;
      transition: width 0.4s ease-in-out;
    }
    
    .nav-item:hover::after {
      width: 100%;
    }
    
    .hero {
      position: relative;
      width: 100%;
      height: 91.2vh;
      overflow: hidden;
    }
    
    .hero-img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    
    .hero-content {
      position: absolute;
      top: 30%;
      left: 10%;
      color: black;
      z-index: 2;
      padding: 20px;
      max-width: 500px;
    }
    
    .hero-content h2 {
      font-size: 3rem;
      font-weight: 700;
      margin-bottom: 15px;
    }
    
    .hero-content .highlight {
      color: green;
    }
    
    .shop-btn {
      position: relative;
      display: inline-block;
      margin-top: 20px;
      cursor: pointer;
    }
    
    .shop-btn p {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: green;
      font-weight: bold;
      z-index: 3;
      margin: 0;
    }
    .featured {
      padding: 10px 0;
    }
    
    .featured .col {
      padding: 15px;
      text-align: center;
    }
    
    .featured img {
      max-width: 100%;
      height: auto;
      transition: transform 0.3s ease;
    }
    
    .op:hover {
      transform: scale(1.05);
      border: none;
      cursor: pointer;
    }
    .op{
        border-radius: 10px;
        border: solid 1px;
        width: 250px;
        height: 220px;
        padding-top: 30px;
        padding-left: 40px;
        gap: 2px;
    }
    .opp{
        border-radius: 10px;
        
        margin-left: 70px;
        padding-top: 10px;
        height: 330px;
        width: 215px;
        box-shadow: 0 0 10px 7px black;
    }
    .opp:hover{
      cursor: pointer;
      transform: scale(1.1);
    }
    .Featured{
        text-align: center;
    }
    @media (max-width: 768px) {
      .hero-content {
        left: 5%;
        top: 25%;
      }
      
      .hero-content h2 {
        font-size: 2rem;
      }
      
      .hero {
        height: 70vh;
      }
    }
    button{
        border: none;
        border-radius: 7px;
        background-color: red;
        margin-left: 30px;
        color: white;
        padding: 10px;
    }
    .checked {
      color: orange;
    }
    .img2{
      border-radius: 10px;
    }
    .flex{
      display: flex;
      justify-content: space-between;
      
    }
    .tra:hover{
      transform: scale(1.1);
    }
    .parent-tof{
      position: relative;
    }
    .tof-button{
      background-color:white;
      color: black;
    }
    .tof-button:hover{
      background-color:green;
      color: white;
    }
    .tof{
      position: absolute;
      top: 20%;
      left: 25%;
      color: white;
      text-align: center;
    }
    .parent-collection{
      position: relative;
    }
    .parent-collectionn{
      position: relative;
    }
    .parent-collection:hover{
         transform: scale(1.05);
         cursor: pointer;
        
    }
    .parent-collectionn:hover{
         transform: scale(1.05);
         cursor: pointer;
        
    }
    .collection{
      position: absolute;
      top: 16%;
      left: 5%;
      color: white;
    }
    .collectionn{
      position: absolute;
      top: 40%;
      left: 5%;
      color: white;
    }
    .collection button{
      background-color: transparent;
      width: 120px;
      color: wheat;
      border: solid 1px white;
      border-radius: none;
    }
    .collection button:hover{
      background-color: green;
      color: black;
      
    }
     .fin{
      display: flex;
      justify-content: space-around;
      align-items: center;
      background-color: blue;
      color: white;
      height: 180px;
    }
    .fin button{
      background-color: green;
      color: black;
    }
    .l {
    padding: 20px;
    font-size: 30px;
    width: 60px;
    text-align: center;
    text-decoration: none;
    margin: 5px 2px;
  }

  .l:hover {
      opacity: 0.7;
  }
  .fa-facebook {
  background: #3B5998;
  color: white;
}

  .fa-twitter {
    background: #55ACEE;
    color: white;
  }
    .fa-linkedin {
    background: #007bb5;
    color: white;
  }

  .fa-youtube {
    background: #bb0000;
    color: white;
  }

  .fa-instagram {
    background: #125688;
    color: white;
  }
  .rowa{
    margin: 10px;
    margin-left: 280px;
  }
  .rowa .op{
    margin: 10px;
  }
  .rowb .op{
    margin: 10px;
  }
  .rowb{
    margin: 10px;
    margin-left: 20px;
  }
  .ul{
    display: flex;
    justify-content: center;
  }
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
  </nav>
  <div class="parent">
    <img src="banner.png" alt="" width="100%" height="350px">
    <div class="child">
        <h1>#L'ts_Talk</h1>
        <p style="opacity: 0.5;">Save More With Coupons & Up To 70% Off</p>
    </div>
  </div><br><br><br>
  <section class="featured">
    <div class="container">
      <div class="row">
        <div class="col-md-6 pt-5 ">
            <h1 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Visit One Of Our Agency Locations Or Contact Us Today</h1>
            <br><h4 style="font-size:20px;">Head Office</h4>
            <br><span><i class="fa fa-envelope" style="font-size:20px;margin-right:10px"></i> Ayoubiayden@gmail.com</span><br>
            <br><span><i class="fa fa-phone" style="font-size:20px;margin-right:10px"></i> 0772529608</span><br>
            <br><span><i class="material-icons" style="font-size:20px;margin-right:10px"></i> 08:00-18:00_Mon-Sat </span><br>

          
        </div>
        <div class="col-md-6 pt-5">
          <iframe 
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2437.241395241147!2d-1.2578496841554696!3d51.7548168796769!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876c6aee4797c71%3A0x14b413c9cb5b3cb2!2sUniversity%20of%20Oxford!5e0!3m2!1sen!2suk!4v1624012468143!5m2!1sen!2suk"
    width="600" 
    height="450" 
    style="border:0;" 
    allowfullscreen="" 
    loading="lazy">
  </iframe>
        </div>
        </div>
    </div>
  </section><br><br><br>
  <section class="featured">
      <div class="container">
        <br><h4 style="font-size:20px;">Leave A Message</h4>
      <div class="row" style="border: solid 1px black; border-radius:10px">
        <div class="col-md-8 pt-5 ">
           <h1 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">We Love To Hear From You</h1>
           <form action="" method="post">
            <input style="width: 90%;height:40px;padding:10px;border-radius:10px;border:none;outline: none;box-shadow:0 0 5px 1px blue ;" type="text" name="name" placeholder="Your Name"><br><br>
            <input style="width: 90%;height:40px;padding:10px;border-radius:10px;border:none;outline: none;box-shadow:0 0 5px 1px blue ;" type="email" name="email" placeholder="Your Email"><br><br>
            <input style="width: 90%;height:40px;padding:10px;border-radius:10px;border:none;outline: none;box-shadow:0 0 5px 1px blue ;" type="text" name="subject" placeholder="Subject"><br><br>
            <textarea style="width: 90%;height:200px;padding:10px;border-radius:10px;border:none;outline: none;box-shadow:0 0 5px 1px blue ;" name="message" id="" placeholder="Your Message" ></textarea><br>
            <input type="submit" value="Submit" name="submit" style="color: white;background-color:green;margin-top:10px;border-radius:7px;width:80px;border:none;height:40px;margin-bottom:10px">
        </form>
        </div>
        <div class="col-md-4 pt-5">
          <div style="display: flex;">
            <img src="1.png" alt="" style="width: 70px;height:70px;margin-top:10px">
            <div style="margin: 10px;"><b>John Doe</b><p>Senior Marketing Manager Phone 000 123 007</p></div>
          </div><br>
          <div style="display: flex;">
            <img src="2.png" alt="" style="width: 70px;height:70px;margin-top:10px">
            <div style="margin: 10px;"><b>John Doe</b><p>Senior Marketing Manager Phone 000 123 007</p></div>
          </div><br>
          <div style="display: flex;">
            <img src="3.png" alt="" style="width: 70px;height:70px;margin-top:10px">
            <div style="margin: 10px;"><b>John Doe</b><p>Senior Marketing Manager Phone 000 123 007</p></div>
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