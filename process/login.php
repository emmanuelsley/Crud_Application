<?php
session_start();
include 'connection.php';

if(isset($_POST['submit'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

            // validation
        if(!$email){
            header('location:../views/login.php?error=Email is required');
            exit();
        }else if(!$password){
            header('location:../views/login.php?error=Password is required');
            exit();
        }else{
                // Selecting all from the database
            $sql = "SELECT * FROM users WHERE email= '$email'";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) > 0){
                $user = mysqli_fetch_assoc($result);

                    // checking if the entered password is correct
                if($password != $user['password']){
                    header('location:../views/login.php?error=Incorrect password');
                }else{
                    $_SESSION['user_id']= $user ['id'];
                    $_SESSION['first_name']= $user['first_name'];
                    $_SESSION['user_name']= $user['user_name'];
                    $_SESSION['email']= $user['email'];

                    header('location:../views/home.php');
                }
            }else{
                header('location:../views/login.php?error=Email "' .$email.'" Has not yet registered , please go register');
                exit();
            }
        }
}
