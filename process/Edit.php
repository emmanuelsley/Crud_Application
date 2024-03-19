<?php
session_start();
include 'connection.php';

if (isset($_POST['Edit'])){

$fname = $_POST['fname'];
$uname = $_POST['uname'];
$email = $_POST['email'];
$id = $_POST['user_id'];


// validation steps

if(!$fname){
    header('location:../views/signup.php??id='.$id.'error=Firstname is required');
    exit();
}else if(!$uname){
header('location:../views/signup.php??id='.$id.'error=username is required');
     exit();
}else if(!$email){
    header('location:../views/signup.php??id='.$id.'error=email is required');
     exit();
}
else{
    // Checking if email is alredy in the database
   

     $sql= "UPDATE users SET  first_name= '$fname', 
        user_name='$uname' , email= '$email' WHERE id = $id ";

      $result = mysqli_query($conn , $sql);

        if($result){
            
            echo 'user updated successfully';
        }else{
            echo 'fail';

        }
    }
}
