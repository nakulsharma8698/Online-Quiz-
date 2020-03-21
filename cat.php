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
$Category = $_POST['Category'];
$Id=$_POST['Id'];
$register_query = "INSERT INTO `category`(`Id`, `Category`) VALUES ('$Id','$Category')";
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
<title> CHOOSE CATEGORIES </title>

<style>
body
{
	margin: 0;
	padding: 0;
	background: url(8972.jpg);
	background-size: cover;
	font-family: sans-serif;
}
h1
{
	text-align: center;
	color:white;
	background: #19A227;  
}
.loginBox
{
	margin: auto;
    	align: center;
	width: 350px;
	height: 350px;
	padding: 80px 40px;
	box-sizing: border-box;
	background: rgba(360, 360, 360, 0.5);
}
.loginBox input[type="submit"]
{
	border: 2px;
	width: 100px;
	height: 40px;
	color: #fff;
	font-size: 16px;
	background: #19A227;     
	cursor: pointer;
	border-radius: 20px;
}
.loginBox input[type="text"]
{
	border: 2px;
	border-bottom: 1px solid #fff;
	text-color:black;
	height: 30px;
	color:black;
	font-size: 20px;
}
.loginBox input[type="submit"]:hover
{
	background: #1B530A;
	color: #262626;
}

.addbut{
	color:white;
	align: center;
	width: 200px;
    	height: 50px;
    	background-color: #2274EF;
    	text-color: white;
    	border-radius: 12px;

}

</style>
</head>
<body>
<h1><br>CREATE YOUR QUIZ  </h1><br><br><br><br>
<div  class="loginBox">
<form action="cat.php" method="post" >
				<p><strong>Select Category<strong></p>
				<input type="text" name="Category" placeholder="Type here" required>
				<p><strong>Id</strong></p>
				<input type="text" name="Id" required><br><br>
				<input type="submit" name="submit" value="Submit">
                
			</form>
</div>
<p ><a href="ques.php"> <input class = "addbut"  type="submit" name="submit" value="Add" align = "center"> </a> </p>
</body>
</html>