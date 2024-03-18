<?php
session_start();
include '../process/connection.php';
if(isset($_SESSION['user_id'])){
    $sql = "SELECT * FROM users WHERE id";
    $users = mysqli_query($conn ,$sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sinup | form</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
<div class="container my-4 text-center">
                   <h1 class="text-info">Welcome to our  website <?=$_SESSION['user_name']?></h1>
                   <a href="../process/logout.php">
                    <button class="btn btn-primary mt-3">log out</button>
                   </a>

<table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">S/N</th>
      <th scope="col">FName</th>
      <th scope="col">LName</th>
      <th scope="col">email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
     
     $i = 1; 
    foreach($users as $user) {  
    ?>

     <tr>
      <th scope="row"><?=$i++;?></th>
      <td><?=$user['first_name']?></td>
      <td><?=$user['user_name']?></td>
      <td><?=$user['email']?></td>
      <td>
      <button type="button" class="btn btn-primary">Edit</button>
       <a href="../process/delete.php?id=<?=$user['id']?>"><button type="button" class="btn btn-danger">Delete</button></a>

      </td>
    </tr>

    <?php } ?>
  </tbody>
</table>
          </div>
</body>
</html>
<?php } ?>