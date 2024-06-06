<?php require_once "../controllerUserData.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Code Verification</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <style>
    body, html {
        height: 100%;
        margin: 0;
        display: flex;
        align-items: center;
        background-image: url("../homepage/img/backgroundblue.jpg");
    }
    .container {
        max-width: 600px; /* Adjust max-width as needed */
        position: absolute;
        width: 100%;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: white;
        left: 400px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-control {
        position: relative;
        width: 200px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        left: 0px;
    }

    .button {
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        cursor: pointer;
    }

    .button:hover {
        background-color: #0056b3;
    }

    .text-center {
        text-align: center;
    }

    .alert {
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 20px;
        align: center;
    }

    .alert-success {
        background-color: #d4edda;
        border-color: #c3e6cb;
        color: #155724;
        width: 550px;
        right: 193px;
    }

    .alert-danger {
        background-color: #f8d7da;
        border-color: #f5c6cb;
        color: #721c24;
        width: 550px;
        right: 193px;
    }
    .logo{
        position: absolute;
        top: 0;
        left: 600px;
    }
    .imgflex{
        display: flex;
    }
 </style>  
</head>
<body>
    <div class="imgflex">
        <img src="../homepage/img/Rectangle 13.png" alt="Logo" class="logo">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="user-otp.php" method="POST" autocomplete="off">
                    <h2 class="text-center">Verify Your Account</h2>
                    <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert alert-success text-center" id="greenone">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <script>
                            document.addEventListener("DOMContentLoaded", function() {
                            var greenone = document.getElementById("greenone");
                                if (greenone) {
                                    greenone.style.display = "none";
                                    }
                                });
                        </script>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="number" name="otp" placeholder="Enter verification code" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="check" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>