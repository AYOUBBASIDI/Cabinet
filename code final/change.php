<?php

error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cabinet";

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$dtn = $_POST['dtn'];
$tele = $_POST['tele'];
$gmail = $_POST['gmail'];
$malad = $_POST['malad'];
$in = $_POST['in'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


    $query = "UPDATE patient SET nom='$nom', prenom='$prenom',gmail='$gmail', dtn='$dtn',tele='$tele', maladie='$malad' WHERE gmail='$in' ";

    $data=mysqli_query ($conn, $query);
    header('Location: operation.php');
?>
