<?php

$stid= $_GET['id'];
include 'connection.php';
$query= "delete from student where sid= $stid";
$res= mysqli_query($connect, $query) or die("Unsuccessfull Query");

header("Location: http://localhost/crud/index.php");

mysqli.close($connect);

?>