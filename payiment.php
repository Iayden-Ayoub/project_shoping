<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page de Paiement</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 40px;
        }

        .container {
            background-color: white;
            max-width: 500px;
            margin: auto;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input[type="text"],
        input[type="number"],
        input[type="month"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            margin-top: 20px;
            width: 100%;
            padding: 12px;
            background-color: #28a745;
            color: white;
            border: none;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Paiement</h2>
    <form method="post" >
        <label>Nom complet</label>
        <input type="text" id="nom" name="nom" placeholder="Nom complet" required>

        <label>Numéro de carte</label>
        <input type="text" id="carte" maxlength="16" name="carte" placeholder="Numéro de carte" required>

        <label>Date d'expiration</label>
        <input type="month" id="expiration" name="expiration" required>

        <label>Code CVV</label>
        <input type="text" id="cvv" maxlength="4" name="cvv" placeholder="Code CVV" required>

        <label>Adresse de facturation</label>
        <input type="text" id="adresse" name="adresse" placeholder="Adresse de facturation" required>

        <button type="submit" name="pay">Confirmer le paiement</button>
    </form>
</div>

<!-- <script>
    function verifierPaiement() {
        let carte = document.getElementById("carte");
        let cvv = document.getElementById("cvv");
        let expiration = document.getElementById("expiration");
        let adresse = document.getElementById("adresse");
        let nom = document.getElementById("nom");

        if (!/^\d{16}$/.test(carte.value)) {
            alert("Numéro de carte invalide");
            return false;
        }

        if (!/^\d{3,4}$/.test(cvv.value)) {
            alert("Code CVV invalide");
            return false;
        }

        alert("Paiement effectué avec succès !");
        carte.value ="";
        cvv.value="";
        expiration.value="";
        adresse.value="";
        nom.value="";
        return true;
    }
</script> -->



<?php

require_once 'My_basse.php';
session_start();

if(isset($_POST['pay'])){
    $nom = $_POST['nom'];
    $adresse = $_POST['adresse'];
    $cv= $_POST['cvv'];
    $date = $_POST['expiration'];
    $carte = $_POST['carte'];
    echo $_SESSION['user']['id_user'];

    if(!empty($nom) && !empty($adresse) && !empty($cv) && !empty($date) && !empty($carte)){
        $sql =$conn->prepare("INSERT INTO paiements VALUES (NULL,?, ?, ?, ?, ?, ?)") ;
        $sql->execute([ $_SESSION['user']['id_user'],$nom, $carte,$date, $cv, $adresse]);
        header('location:caye.php');
    }else{
        echo "Veuillez remplir tous les champs";
    }

}

?>

</body>
</html>
