<?php
    include 'connect.php';
    $id = $_GET['id'];
        $select = "SELECT *FROM `tbl_emloyee` WHERE `id` = '$id'";
        $result = $connect->query($select);
        $row = $result->fetch_assoc();
        if(isset($_POST['save'])){
            if($_FILES['profile']['name'] == ""){
                $target_dir = 'images/';
                $target_file = $target_dir.basename($_FILES["profile"]["name"]);
                $imageFileType = pathinfo($target_dir,PATHINFO_EXTENSION);
                move_uploaded_file($_FILES['profile']['tmp_name'],$target_file);

                $update = "UPDATE tbl_emloyee SET `name`='".$_POST['fullname']."',`address`='".$_POST['address']."',`number`='".$_POST['number']."',`email`='".$_POST['email']."',`profile`='".$row['profile']."' WHERE `id` = '$id'";
                $result = $connect->query($update);
                if($result){
                    header("Location: index.php");
                }
            }
            else{
                $target_dir = 'images/';
                $target_file = $target_dir.basename($_FILES["profile"]["name"]);
                $imageFileType = pathinfo($target_dir,PATHINFO_EXTENSION);
                move_uploaded_file($_FILES['profile']['tmp_name'],$target_file);

                $update = "UPDATE tbl_emloyee SET `name`='".$_POST['fullname']."',`address`='".$_POST['address']."',`number`='".$_POST['number']."',`email`='".$_POST['email']."',`profile`='".$_FILES['profile']['name']."' WHERE `id` = '$id'";
                $result = $connect->query($update);
                if($result){
                    header("Location: index.php");
                }
            }
        }
    include 'header.php';
?>
        <div class="container">
            <div class="row">
                <div class="title">
                    <span>Update Information</span>
                </div>
                <div class="border-bottom"></div>
                <div class="col-12"><br>
                    <form method="POST" enctype="multipart/form-data">
                        <label for=""> Fullname</label>
                        <input value="<?php echo $row['name'] ?>" name="fullname" type="text" class="form-control"><br>
                        <label for=""> Address</label>
                        <input value="<?php echo $row['address'] ?>" name="address" type="text" class="form-control"><br>
                        <label for=""> Phone Number</label>
                        <input value="<?php echo $row['number'] ?>" name="number" type="text" class="form-control"><br>
                        <label for=""> Email</label>
                        <input value="<?php echo $row['email'] ?>" name="email" type="text" class="form-control"><br>
                        <label for=""> Profile</label>
                        <input value="<?php echo $row['profile'] ?>" name="profile" type="file" class="form-control"><br>
                        <button name="save" type="submit" class="btn btn-success submit">Update  <i class="bi bi-pencil"></i></button>
                    </form>     
                    <a href="index.php"><button class="btn btn-warning">Cancel <i class="bi bi-x-circle-fill"></i></button></a>  
                </div>
            </div>
        </div>
    </section>   
<?php include 'footer.php' ?>