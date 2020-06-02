<?php
include "./../database/db.php";
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $confirmPassword = mysqli_real_escape_string($conn,$_POST['confirmPassword']);
    // sha1
    // $hash_password = sha1($password);

    // bcrypt
    $hash_password = password_hash($password, PASSWORD_BCRYPT);

    if($username == 'admin'){
        $_SESSION['error'] = 'Prohibited username';
        header ("location:../register.php");
    }else if(strcmp($confirmPassword,$password ) != 0)
    {
        $_SESSION['error'] = 'Password must be same';
        header("location: ./../register.php");
    }else if($confirmPassword === ""){
        $_SESSION['error'] = 'Confirm Password must be fill';
        header("location: ./../register.php");
}

    else{
   $sql = "INSERT INTO user VALUES(null, '$username', '$hash_password')";
    $conn->query($sql);
   header("location: ./../login.php"); 
        
    }
    

    
}