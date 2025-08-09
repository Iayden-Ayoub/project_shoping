<?php

session_start();
session_destroy();
header('location:Connexion.php');
require_once 'My_basse.php';
$sel=$conn->prepare('DELETE FROM acheter');
$sel->execute();
?>