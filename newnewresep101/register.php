<?php 
    include './helpers/auth.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resep101</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/form.css">
    <link rel="shortcut icon" href="images/logo.jpeg" type="image/x-icon">
</head>
<body class="text-center">
<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
		<div class="user_card">
		<div class="d-flex justify-content-center">
		<div class="brand_logo_container">
		<img src="images/logo.jpeg" class="brand_logo" style="background-color: snow" alt="" ></a>
		</div>
		</div>
		<div class="d-flex justify-content-center form_container">


    <form class="form-signin" action="./controller/doRegister.php" method="post">
    <?php 
            if(isset($_SESSION['error'])) {
        ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $_SESSION['error']?>
                </div>
        <?php
                unset($_SESSION['error']);
            }
        ?>
        <label for="inputUsername" class="sr-only">Username</label>
        <input type="text" id="inputUsername" class="form-control mb-1 mt-1" placeholder="Username" name="username" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control mb-1 mt-1" placeholder="Password" name="password" required="">
        <label for="confirmPassword" class="sr-only">Confirm Password</label>
        <input type="password" id="confirmPassword" class="form-control mb-1 mt-1" placeholder="Confirm Password" name="confirmPassword" required="">
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="register">Register</button>
        <span class="mt-2 d-inline-block">Already have an account? Sign in <a href="./login.php">here</a></span>
        <p class="mt-5 mb-3 text-muted"></p>
    </form>
</body>
</html>