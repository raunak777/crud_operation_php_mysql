<?php include 'header.php'; 

if(isset($_POST['deletebtn']))
{
$stid= $_POST['sid'];
include 'connection.php';
$query= "delete from student where sid= $stid";
$res= mysqli_query($connect, $query) or die("Unsuccessfull Query");

header("Location: http://localhost/crud/index.php");

mysqli.close($connect);
}

?>


<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>
