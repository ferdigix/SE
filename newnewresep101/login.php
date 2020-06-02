<?php 
    include './helpers/auth.php';
?>
<!DOCTYPE html> 
<html lang="en">
<head>
    <title>Resep101</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	<link rel="stylesheet" href="css/form.css">
	<link rel="shortcut icon" href="images/logo.jpeg" type="image/x-icon">
</head>
<body>
	<?php
	if(isset($_SESSION['username'])){
			header("location: ./home.php");
		} 
	?>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
		<div class="user_card">
		<div class="d-flex justify-content-center">
		<div class="brand_logo_container">
		<img src="images/logo.jpeg" class="brand_logo" style="background-color: snow" alt="" ></a>
		</div>
		</div>
		<div class="d-flex justify-content-center form_container">
		<form class="form-signin" action="./controller/logicon.php" method="post">
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
        <input type="text" id="inputUsername" class="form-control mb-1 mt-1" placeholder="Username" name="username" required="" autofocus="" value=<?php if(isset($_COOKIE['username'])) {echo htmlspecialchars($_COOKIE['username']);}?>>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control mb-1 mt-1" placeholder="Password" name="password" required="" value=<?php if(isset($_COOKIE['password'])) {echo htmlspecialchars($_COOKIE['password']);}?>>
		<div class="elem-group">
            
           
            <?php 
         //include 'captcha.php';
    //      $first_num = rand(1,100);
    //      $second_num= rand(1,100);
     
    //      $operators = array("+","-","*");
    //      $operator  = rand(0, count($operators)-1);
    //      $operator = $operators[$operator]; 
    //      $answer = 0;
     
    //  switch($operators){
     
    //          case "+" :
    //          $answer = $first_num + $second_num;
    //          break;
    //          case "-" :
    //          $answer = $first_num - $second_num;
    //          break;
    //          case "*":
    //          $answer = $first_num * $second_num;
    //          break;
    //  }
    //  $_SESSION["answer"] = $answer;
          
?>
   
        
            
            <br>
            
        </div>
		<div class="checkbox mb-2 mt-2">
            <label>
                <input type="checkbox" value="remember-me" name="remember"> Remember me
            </label>

    
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="signin">Sign in</button>
        <span class="mt-2 d-inline-block">Doesn't have an account yet? Register <a href="./register.php">here</a></span>
        <p class="mt-5 mb-3 text-muted"></p>
    </form>
				</div>
				
	        </div>
		</div>
	</div>
</body>
</html>