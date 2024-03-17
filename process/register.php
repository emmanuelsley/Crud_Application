<?php
include 'connection.php';

if (isset($_POST['submit'])){

$fname = $_POST['fname'];
$uname = $_POST['uname'];
$email = $_POST['email'];
$password = $_POST['password'];

// validation steps

if(!$fname){
    header('location:../views/signup.php?error=Firstname is required');
    exit();
}else if(!$uname){
header('location:../views/signup.php?error=Username is required');
     exit();
}else if(!$email){
    header('location:../views/signup.php?email is required');
     exit();
}
else{
    // Checking if email is alredy in the database
    $query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result)>0){
        header('location:../views/signup.php?error= Your email "' .$email. '"has already registered!');

    }else {
        $sql= "INSERT INTO users (first_name,user_name,email,password)
        VALUES ('fname','uname','email','password')";
        $result = mysqli_query($conn, $query);

        if($result){
            header('location:../views/login.php');
            exit();
        }else{
            header('location:../views/signup.php?error= something went wrong!');
            exit();
        }
    }
}
}