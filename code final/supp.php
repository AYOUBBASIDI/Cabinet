<?php


$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "cabinet";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$gmail=$_GET['gm'];
$query = "DELETE FROM patient WHERE gmail = $gmail";
// sql to delete a record
$sql = "DELETE FROM patient WHERE gmail='$gmail'";

$conn->query($sql) === TRUE;

$conn->close();

header('Location: operation.php');

?>