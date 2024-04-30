<?php
    include 'connect.php';
        $id = $_GET['id'];
        $delete = "DELETE FROM `tbl_emloyee` WHERE `id` = '$id'";
        if($connect->query($delete)){
            ?>
                <center><div class="alert alert-success" role="alert">Delete User Information Successfully!</div></center>
            <?php
            header("Location: index.php");
        }else{
            echo "Delete User Failed.";
        }
?>