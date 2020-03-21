<!DOCTYPE html>
<?php
$servername = "localhost";
$username="root";
$password="";
$dbname="userss";
try{
$conn = mysqli_connect($servername, $username,$password,$dbname);
echo("connection successful");
}catch(MySQLi_Sql_Exception $ex){
echo("error in connection");
}
if(isset($_POST['submit'])){
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Phone = $_POST['Phone'];
$City = $_POST['City'];
$Password = $_POST['Password'];
$register_query = "INSERT INTO `quiz`(`Name`, `Email`, `Phone`, `City`, `Password`) VALUES ('$Name','$Email','$Phone','$City', '$Password')";
try{
$register_result = mysqli_query($conn, $register_query);
if($register_result){
if(mysqli_affected_rows($conn)>0){
echo("registration successful");
}else{
echo("error in registration");
}
 
}
}catch(Exception $ex){
echo("error".$ex->getMessage());
}
}
 
?>
<html>
<head>
<title>Register</title>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background:url(8972.jpg);
  background-size:cover; 
  color: white; 
  align: center;                 
 }
h1
{
	text-align: center;
	color:white;
	background: #19A227;  
}

.container {
  padding: 10px;
  text-align: center;

}
.already{

	color: black;
	align:center;
}


input[type=text], input[type=password] {
  width: 20%;
  padding: 15px;
  margin: 5px 0 22px 0px;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}


div{
	text-align: center;
}


hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  cursor: pointer;
  width: 15%;
  opacity: 0.9;
  
}

a {
  color: dodgerblue;
}
.signin {
  background-color:white;
  width: 30%;
  align:center;
}
</style>
</head>
 
<body>
<form action="" method="post">


<div class="container">
    <h1><br>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label for="Name" ><b>Name</b></label><br>
    <input type="text" placeholder="Enter Name" name="Name" required> <br>
    <label for="Email"><b>Email</b></label><br>
    <input type="text" placeholder="example@gmail.com" name="Email" required><br>

    <label for="Phone"><b>Phone No.</b></label>
    <br><input type="text" placeholder="Enter Phone No." name="Phone" required><br>

     <label for="City"><b>City</b></label>
    <br><input type="text" placeholder="Select city" name="City" required><br>

    <label for="Password"><b>Password</b></label>
    <br><input type="password" placeholder="*******" name="Password" required><br>

    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn" name = "submit">Register</button><br><br><br>
  </div>
  
  <div class="container signin already">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>
</form>
</body>
</html>