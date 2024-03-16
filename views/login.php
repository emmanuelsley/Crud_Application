<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | form</title>
</head>
<body  class='container: w-25 pl-5 shadow  m-5 mx-auto g-3 '>
<form action="../process/register.php" method="POST" class="mt-5 shadow bg-light" >
<h1 ex-auto class="btn-info text-white fw-bold  ">Login</h1>
<div  class="field">
  <div class="container"   ml-5 g-3>
    <label for="email" class="form-label text-danger fw-bold mt-0.5"><strong>email :</strong></label>
    <input type="email" name= "email" class="form-control mt-0.5"  id="email">
    
  </div>
  </div>

  <div  class="field">
  <div class="container"  ml-5 g-3 >
    <label for="password" class="form-label text-danger fw-bold mt-0.5"><strong>password: </strong></label>
    <input type="password" name= "password" class="form-control" id="password"><br>
    <input type="submit" class="btn btn-warning fs-5 text-white fw-bold mb-3" value="Submit" name="submit">
    <p class= ""><mark><i><b>Don't have account? </b></i></mark>......<a href="../register.crud.php">Sign up</a></p>
  </div>
  </div>
</form>
    
</body>
</html>