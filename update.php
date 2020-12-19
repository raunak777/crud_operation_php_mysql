<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Edit Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>
    <?php
        if(isset($_POST['showbtn'])){
             include 'connection.php';
                $stu_id= $_POST['sid'];
                $query= "select * from student where sid= {$stu_id}";
                $res= mysqli_query($connect, $query) or die("Unsuccessfull Query");
                if(mysqli_num_rows($res)> 0){
                while ($row = mysqli_fetch_assoc($res)) {
       
    ?>
    <form class="post-form" action="updatedata.php" method="post">
        <div class="form-group">
            <label for="">Name</label>
            <input type="hidden" name="sid"  value="<?php echo $row['sid']?>" />
            <input type="text" name="sname" value="<?php echo $row['sname']?>" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" value="<?php echo $row['saddress']?>" />
        </div>
        <div class="form-group">
        <label>Class</label>
        <?php 
          $query1="select * from studentclass";
           $res1= mysqli_query($connect, $query1) or die("Unsuccessfull Query");
            if(mysqli_num_rows($res1)> 0){
              echo '<select name="sclass">';
            while ($row1 = mysqli_fetch_assoc($res1)) {
            if($row['sclass']==$row1['cid']){
                $select= "selected";
            }
            else{
              $select="";
            }
            echo "<option {$select} value='{$row1['cid']}'>{$row1['cname']}</option>";
          }
          echo '</select>';
        }
          ?>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" value="<?php echo $row['sphone']?>" />
        </div>
    <input class="submit" type="submit" value="Update" />
    </form>
    <?php
}
}
}
    ?>
</div>
</div>
</body>
</html>
