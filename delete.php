<?php
include('connection.php');

$Id=$_GET['del'];

$query="DELETE FROM info WHERE Id='$Id'";

$result=mysqli_query($conn,$query);

if($result)
{
   echo "<script>alert ('shirt Deleted!');location.href='shirt.php';</script>";

}
else{
    echo "<script>alert ('shirt not deleted!');location.href='delete.php';</script>";
}
?>