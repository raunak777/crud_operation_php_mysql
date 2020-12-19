<?php

$stname= $_POST['sname'];
$stadd= $_POST['saddress'];
$stphone= $_POST['sphone'];
$stclass= $_POST['class'];


include 'connection.php';
$query= "insert into student(sname, saddress, sclass, sphone) values('$stname', '$stadd', '$stclass', '$stphone')";
$res= mysqli_query($connect, $query) or die("Unsuccessfull Query");

echo "Data insert successfull";

header("Location: http://localhost/crud/index.php");

mysqli_close();
?>