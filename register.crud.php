<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | form</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body class='container: w-25 pl-5 shadow   m-5 mx-auto g-3 '>
<form action="process/register.php" method="POST" class="mt-5 shadow bg-light  ">
<h1 ex-auto class="btn-info text-white fw-bold ">Signup</h1>

<div  class="field">
  <div class="container"  mb-3 ml-5 g-3>
    <label for="fname" class="form-label text-danger fw-bold"><strong>First name :</strong></label>
    <input type="text" name= "fname" class="form-control" id="fname">
    
  </div>
  </div>

  <div  class="field">
  <div class="container mb-1 ml-5 g-3 ">
    <label for="uname" class="form-label text-danger fw-bold"><strong>User name :</strong></label>
    <input type="text" name= "uname" class="form-control" id="uname" placeholder="">
  </div>
  </div>

  <div  class="field">
  <div class="container">
    <label for="email" class="form-label text-danger fw-bold"><strong>Email :</strong></label>
    <input type="email" name="email" id="email" class="form-control" placeholder="" >
  </div>
  </div>

  <div  class="field">
  <div class="container mb-3">
    <label for="password" class="form-label text-danger fw-bold"><strong>Password :</strong></label>
    <input type="password" name="password" class="form-control" id="password" placeholder="">
  </div>
  </div>
 
  
  <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
  <input type="submit" class="btn btn-warning mt-2 mb-2 fs-5 text-white fw-bold mx-auto " value="Submit" name="submit">
  <p mr-5><i><mark><b>Already have an account?</b></mark>.....</i> <a href="views/login.php" class="fs-4">login</a></p>
</form>
    
</body>
</html>