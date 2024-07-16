
<?php
session_start();
//echo"<script>alert('welcome')</script>";
if($_POST["email"]=="admin@gmail.com"&&$_POST["password"]=="1234")
{
     $_SESSION['']="";
    $con = mysqli_connect("localhost","root","","petstore");
if(!$con)
{ 
die("could not connect database".mysqli_connect_error());
}
  
else
{
    echo"<script>location.href='dashboard.php'</script>";
}
}
else
{
     echo"<script>alert('invaild username or password')</script>";
    echo"<script>location.href='home.php'</script>";
}

?>

