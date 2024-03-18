<?php
include 'connection.php';

$user_id= $_GET['id'];

$sql= "DELETE FROM users WHERE id = $user_id";

$isDeleted = mysqli_query($conn , $sql);

if($isDeleted){
    header('location:../views/home.php?msg=User successfully deleted!');

}else{
    header('location:../views/home,php?msg=Failed to delete');
}