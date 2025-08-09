<?php
require_once 'My_basse.php';
$id=$_POST['id'];
$qo=$_POST['qo'];
if(!isset($_SESSION['id'])){
    $_SESSION['id']=$_POST['id'];
}
if(!isset($_SESSION['taile'])){
    $_SESSION['taile']=$_POST['taile'];
}
if(!isset($_SESSION['img'])){
    $_SESSION['img']=$_POST['img'];
}
if(!isset($_SESSION['nom'])){
    $_SESSION['nom']=$_POST['nom'];
}
if(!isset($_SESSION['prix'])){
    $_SESSION['prix']=$_POST['prix'];
}
echo $_SESSION['prix'];
echo "<br>";
echo $_SESSION['img'];
echo "<br>";
echo $_SESSION['nom'];
echo "<br>";
echo $_SESSION['taile'];
$up=$conn->prepare('UPDATE acheter SET quantity_acheter = ? 
WHERE image_acheter = ? AND nom_acheter = ? AND taile_acheter = ?');
$up->execute([$qo,$_SESSION['img'],$_SESSION['nom'] ,$_SESSION['taile']]);
header('location:caye.php');

?>


