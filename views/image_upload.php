<!DOCTYPE html>
<html>
<head>
  <title>Image Upload</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body >
  <form action="../process/imageUp.php" method="post" enctype="multipart/form-data" class="mt-5 px-5  " >
    <input type="file" name="image" class="form-control bg-light">
    <input type="submit" value="Upload" class="btn btn-success mt-2" name=""upload>
  </form>
</body>
</html>