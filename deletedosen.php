<?php
include 'connections.php';
$id = $_GET['id'];
$result = mysqli_query($conn,"DELETE FROM dosen WHERE id = '$id'");
header("Location:showdosen.php");
?>

