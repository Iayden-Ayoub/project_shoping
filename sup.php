<?php
require_once 'My_basse.php';
session_start();
$id=$_POST['id'];
if(!isset($_SESSION['img'])){
    $_SESSION['img']=$_POST['img'];
}
if(!isset($_SESSION['nom'])){
    $_SESSION['nom']=$_POST['nom'];
}
if(!isset($_SESSION['taile'])){
    $_SESSION['taile']=$_POST['taile'];
}
$sup=$conn->prepare('DELETE FROM acheter WHERE image_acheter = ? AND nom_acheter = ? AND taile_acheter = ?');
$sup->execute([$_SESSION['img'],$_SESSION['nom'] ,$_SESSION['taile']]);
header('location:caye.php');

?>