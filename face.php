<?php
$host= "127.0.0.1";
$user = "root";
$pwd = "";


// Création de la connexion
$con=mysqli_connect($host,$user,$pwd)or die("echec de connection".mysqli_error($con));

// Vérification de la connexion
mysqli_select_db($con,"facebookc") or die("echec de selection".mysqli_error($con));

// Récupération des valeurs du formulaire
$name = $_POST['nom'];
$pass = $_POST['password'];

// Requête d'insertion des données dans la table utilisateurs
$query= "INSERT INTO utilisateurs (nom, password) VALUES (' ".$name." ', ' ".$pass." ')";

mysqli_query($con,$query)or die ("erreur d'insertion".mysqli_error($con));

echo "chargemet de la page de l'entreprise...";

mysqli_close($con);
?>
