<?php
    include 'header.php';
    include 'functions.php';
    session_start();
    if(!$_SESSION['id']){
        header("Location:login.php");
    }else{
?>
    <div class="indexpage">
        <div class="row">
            <div class="col-12">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="bi bi-person-plus-fill"></i>  Add User
                </button>
                <a href="logout.php">
                    <button type="button" class="btn btn-secondary" style="float: right;">
                        Sign-Out    <i class="bi bi-box-arrow-right"></i>
                    </button>
                </a>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <form method="POST" enctype="multipart/form-data">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header link-dark" style="background: linear-gradient(-160deg, rgb(0, 156, 13), rgb(181, 247, 186), rgb(0, 156, 13), lavender)">
                                    <h5 class="modal-title d-flex w-100 justify-content-center link-light" id="exampleModalLabel"><b>Input Information User</b></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <label for=""> Your fullname <span class="link-danger">*</span></label>
                                    <input name="fullname" type="text" class="form-control"><br>
                                    <label for=""> Your address <span class="link-danger">*</span></label>
                                    <input name="address" type="text" class="form-control"><br>
                                    <label for=""> Your Phone Number <span class="link-danger">*</span></label>
                                    <input name="number" type="number" class="form-control"><br>
                                    <label for=""> Your email <span class="link-danger">*</span></label>
                                    <input name="email" type="email" class="form-control"><br>
                                    <label for=""> Your profile picture <span class="link-danger">*</span></label>
                                    <input name="profile" type="file" class="form-control">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <button name="save" type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="border-bottom" style="margin: 5px 0px;"></div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover"><br>
                    <thead>
                            <th>#ID</th>
                            <th>Profile</th>
                            <th>Fullname</th>
                            <th>Address</th>
                            <th>PhoneNumber</th>
                            <th>Email</th>
                            <th>Option</th>                 
                    </thead>
                    <tbody>
                        <?php
                            select();
                        ?>
                    </tbody>
                </table>            
            </div>
        </div>
    </div>
<?php 
        include 'footer.php';
    }
?>