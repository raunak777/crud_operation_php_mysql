
<?php

$stid= $_POST['sid'];
$stname= $_POST['sname'];
$stadd= $_POST['saddress'];
$stphone= $_POST['sphone'];
$stclass= $_POST['sclass'];


include 'connection.php';
$query= "update student set sname='{$stname}', saddress='{$stadd}', sclass='{$stclass}', sphone='{$stphone}' where sid='{$stid}'";
$res= mysqli_query($connect, $query) or die("Unsuccessfull Query");

echo "Data insert successfull";

header("Location: http://localhost/crud/index.php");

mysqli_close();

?>