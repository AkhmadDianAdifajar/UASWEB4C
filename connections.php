<?php 
$databaseHost       = "localhost:3308";
$databaseName       = "universitas";
$databaseUsername   = "root";
$databasePassword   = "";

$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
if (mysqli_connect_errno()){
    echo "<h1> Koneksi database error : ". mysqli_connect_errno()."</h1>";
}
?>