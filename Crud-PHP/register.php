<?php
    include 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="stylecss/register.css">
    <title>Register Account</title>
</head>
<body>
    <br><br>
    <div class="container">
        <div class="title">
            <h1>Create Account</h1>
        </div>
        <div class="row">
            <div class="col-6 p-0">
                <form method="POST" class="register-form">
                    <div class="field-name">
                        <input name="name" class="Your-name" id="your-name" type="text" placeholder="Your name *" required>
                        <div class="under-line"></div>
                    </div><br>        
                    <div class="field-name">
                        <input class="Your-email" id="your-email" name="email" type="text" placeholder="Your email *" required>
                        <div class="under-line"></div>
                    </div><br>      
                    <div class="field-name">
                        <input class="Your-pass" id="your-pass" name="pass" type="password" placeholder="Your password *" required>
                        <div class="under-line"></div>
                    </div><br>         
                    <div class="field-name">
                        <input class="Re-pass" id="re-pass" name="re-password" type="password" placeholder="Confirm your password *" required>
                        <div class="under-line"></div>
                    </div><br><br><br>
                    <div class="clickme">
                        <button name="signup" type="submit" class="btn btn-primary">Register <i class="bi bi-box-arrow-in-right"></i></button>
                        <span><a href="login.php">Already have an account?</a></span>
                    </div>
                </form>
            </div>
            <div class="col-6">
                <div class="image">
                    <img src="images/sign-in.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</body>
</html>