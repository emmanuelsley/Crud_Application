<?php
session_start();
include '../process/connection.php';

$id= $_GET['id'];
$sql= "SELECT * FROM users WHERE id= $id";
$selected= mysqli_query($conn , $sql);

$user = mysqli_fetch_assoc($selected);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit | User</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body class="container: w-25 pl-5 shadow   m-5 mx-auto g-3 ">
  <form action="../process/Edit.php" method="POST" class="mt-5 shadow bg-light  ">
    <h1 ex-auto class="btn-info text-white fw-bold ">Edit User</h1>

    <div  class="field">
      <div class="container"  mb-3 ml-5 g-3>
        <label for="fname" class="form-label text-danger fw-bold"><strong>First name :</strong></label>
        <input type="text" name= "fname" class="form-control" id="fname" value= "<?= $user['first_name']?>">
        
      </div>
      </div>

      <div  class="field">
      <div class="container mb-1 ml-5 g-3 ">
        <label for="uname" class="form-label text-danger fw-bold"><strong>User name :</strong></label>
        <input type="text" name= "uname" class="form-control" id="uname" placeholder="" value="<?=$user['user_name']?>">
      </div>
      </div>

      <div  class="field">
      <div class="container">
        <label for="email" class="form-label text-danger fw-bold"><strong>Email :</strong></label>
        <input type="email" name="email" id="email" class="form-control" placeholder="" value="<?=$user['email'] ?>">
      </div>
      </div>

      <input type= "hidden" name= "user_id" value= "<?=$user['id']?>" >
<!-- 
      <div  class="field">
      <div class="container mb-3">
       
        <button class="btn btn-dark fw-bold mt-2">Change password</button>
      </div>
      </div>
     -->
      
      <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
      <input type="submit" class="btn btn-danger ml-2 mb-2 fs-5 text-white fw-bold mx-auto " value="Update" name="Edit">
      <!-- <p mr-5><i><mark><b>Already have an account?</b></mark>.....</i> <a href="login.php" class="fs-4">login</a></p> -->
  </form>
    
</body>
</html>