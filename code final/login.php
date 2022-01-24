<?php
$user = $_POST['user'];
$pass = $_POST['pass'];


$conn = new mysqli('localhost','root','','cabinet');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT user, pass FROM login";
$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);

if ($user == $row["user"] && $pass == $row["pass"]) {
     header('location: choix.html');
    }
?>