<?php
include("connection.php");

if($_SERVER['REQUEST_METHOD']=="POST")
{
   
    $email=$_POST['email'];
    $psw=$_POST['psw'];

    $query="SELECT * FROM user WHERE email='$email' AND psw='$psw'";

    $result=mysqli_query($conn,$query);

    if(mysqli_num_rows($result)==1)
    {
        echo"<script> location.href='admin.php' </script>";
    }
    else{
        echo "<script>alert ('data not inserted !');location.href='registration.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

.container {
  padding: 20px;
  background: linear-gradient(to bottom right, #4e54c8, #8f94fb);
  border-radius: 10px;
  margin: 50px auto;
  width: 80%;
  max-width: 400px;
}

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

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  border-radius: 4px;
}

.registerbtn:hover {
  opacity: 1;
}

a {
  color: dodgerblue;
}

.signin {
  text-align: center;
}

@media screen and (max-width: 600px) {
  .container {
    width: 90%;
  }
}
</style>
</head>
<body>

<form action="index.php" method="POST">
  <div class="container">
    <h1>Login Page</h1>
    <p>Please fill in this form to login an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <hr>
    <button type="submit" class="registerbtn">Login</button>
  </div>
  
  <div class="container signin">
    <p>Don't have an account? <a href="registration.php">Sign Up</a>.</p>
  </div>
</form>

</body>
</html>
