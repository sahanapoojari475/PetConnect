<?php
 session_start();
 if(isset($_SESSION['user']))
 {

 }
 else{
  echo"<script>location.href='customerupdate.php'</script>";
 }
?>
<!doctype html>
<html>
<head>
        <title>Customer </title>
        <style>
            body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background: #484848;
}
.topnav {
  overflow: hidden;
  background-color:palevioletred;
  height: 70px;
  border: 3px solid #b40a70;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 35px;
  font-weight: bold;
}

.topnav-right {
  float: right;
}


fieldset { 
  background: #FAFAFA;
	padding: 10px;
   margin:auto;
   max-width:450px;
	box-shadow: 1px 1px 25px rgba(0, 0, 0, 0.35);
	border-radius: 10px;
	border: 6px solid #b40a70;


}

</style>    
</head>
<body>
<div class="topnav">
            <a class="active" href="home.php"><img src="ic_add_pet.png"></a>
            <a href="customer.php">Customers</a>
            <div class="topnav-right">
              <a href="logout.php">logout</a>
            </div>
          </div>
   <form>
       <button type="submit" formaction="customer.php" style="margin:15px;height: 30px;width: 100px;
       border-radius:15px;
border: 3px solid  #b40a70;background-color: #8d2663;color:#f2f2f2;font-size:15px;cursor:pointer;">back</button>
</form> 
<form method="post" action="customerupdate.php">  
<fieldset>
<input type="text" name="id" placeholder="Enter the customer id" style="width:100%;height:30px;
    border: 2px solid  #b40a70; border-radius:5px; background:transparent;" required>
  <br><br>
 <input type="text" name="fname" placeholder="Enter customer first_name" style="width:100%;height:30px;
    border: 2px solid  #b40a70; border-radius:5px; background:transparent;" required>
  <br><br>
   <input type="text" name="minit" placeholder="Enter customer middle_name" style="width:100%;height:30px;
    border: 2px solid  #b40a70; border-radius:5px; background:transparent;" required>
  <br><br>
   <input type="text" name="lname" placeholder="Enter customer last_name" style="width:100%;height:30px;
    border: 2px solid #b40a70; border-radius:5px; background:transparent;" required>
  <br><br>
  <input type="text" name="address" placeholder="Enter customer address" style="width:100%;height:30px;
    border: 2px solid  #b40a70; border-radius:5px; background:transparent;" required>
  <br><br>
  <input type="submit" name="submit" value="update" style="width:100%;height:30px;
    border: 2px solid  #b40a70; border-radius:5px; cursor:pointer;background-color: #8d2663">  
  </fieldset>
</form> 
</body>
</html>
<?php
if(isset($_POST["submit"]))
{
// define variables and set to empty values
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "petstore";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "  CONNECTION ESTABLISHED \r\n";
//echo "  INSERTION IN PROCESS";
$id = $_POST["id"];
  $fname = $_POST["fname"];
  $minit= $_POST["minit"];
  $lname = $_POST["lname"];
  $address = $_POST["address"];


  $Query2="select count(*) from customer where cs_id='$id'";
  $Execute = mysqli_query($conn,$Query2);
  $count = mysqli_fetch_row($Execute);
  if($count[0]==1)
  {
    $sql = "UPDATE customer set cs_fname='$fname',cs_minit='$minit' ,cs_lname='$lname' ,cs_address='$address'
    where cs_id='$id'";
  if ($conn->query($sql) == TRUE) {
    echo'<div>
    <h1 style="color:#f2f2f2;font-size:20px; font-family: "Roboto", sans-serif;margin:auto;">'
    .$id. ' updated successfully</h1>
       </div>';
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  }
  else{
    echo '<div>
    <h1 style="color:#f2f2f2;font-size:30px; font-family: "Roboto", sans-serif;margin:auto;">Given cs_id not found</h1>
       </div>';
}


$conn->close();
}
?>