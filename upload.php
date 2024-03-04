<?php
include("connection.php");

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $Brand=$_POST['Brand'];
    $Type=$_POST['Type'];
    $Size=$_POST['Size'];
    $Color=$_POST['Color'];
    $Price=$_POST['Price'];
    $file=$_FILES['file']['name'];
    $tmp_file=$_FILES['file']['tmp_name'];
    $path="images/".$file;

    if(move_uploaded_file($tmp_file,$path))
    {
        $query="INSERT INTO info (Brand,Type,Size,Color,Price,file)
 VALUES ('$Brand','$Type','$Size','$Color','$Price','$file')";

$result=mysqli_query($conn,$query);

if($result)
{
   echo "<script>alert ('Shirt inserted !');location.href='shirt.php';</script>";

}
else{
    echo "<script>alert ('Shirt not inserted !');location.href='upload.php';</script>";
}
    }


}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Shirt</title>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background: linear-gradient(to right, aqua, #ff9078);
  border-radius: 10px;
  margin: 0;
  padding: 0;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
  border-radius: 10px;
  margin: 0 auto;
  max-width: 400px; /* Adjust max-width as needed */
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  border-radius: 10px;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}

@media screen and (max-width: 600px) {
  /* Adjust styles for smaller screens */
  .container {
    max-width: 300px; /* Adjust max-width for smaller screens */
  }
}
</style>
</head>
<body>

<form action="" method="POST" enctype="multipart/form-data">
  <div class="container">
    <h1>Upload Shirt Details</h1>

    <hr>

    <label for="Brand"><b>Brand</b></label>
    <input type="text" placeholder="Enter Shirt Brand" name="Brand" id="Brand " required>

    <label for="Type"><b>Type</b></label>
    <input type="text" placeholder="Shirt Category" name="Type" id="Type" required>

    <label for="Size"><b>Size </b></label>
    <input type="text" placeholder="Enter Size of Shirt" name="Size" id="Size"required>

    <label for="Color"><b>Color</b></label>
    <input type="text" placeholder="Enter language" name="Color" id="Color"required>

    <label for="Price"><b>Price</b></label>
    <input type="text" placeholder="Repeat Category" name="Price" id="Price" required>

    <hr>

    <label for="file"><b>Upload</b></label>
    <input type="file" placeholder="upload pic" name="file" id="file"required>

    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">Upload</button>
  </div>
  
  <div class="container signin">
    <p>Already Updated <a href="index.php">  Home Page</a>.</p>
  </div>
</form>

</body>
</html>
