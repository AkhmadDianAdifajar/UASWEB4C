<?php
include 'connections.php';
$id = $_GET['id'];
$result = mysqli_query($connections,"DELETE FROM mahasiswa WHERE id=$id");
header("Location:show.php");
?>

