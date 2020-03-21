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
$Id=$_POST['Id'];
$Question=$_POST['Question'];
$OptionA = $_POST['Optiona'];
$OptionB = $_POST['Optionb'];
$OptionC = $_POST['Optionc'];
$OptionD = $_POST['Optiond'];
$Answer = $_POST['Answer'];
$register_query = "INSERT INTO `ques`(`Id`, `Question`, `Option A`, `Option B`,`Option C`,`Option D`, `Answer`) VALUES ('$Id','$Question','$OptionA','$OptionB','$OptionC','$OptionD', '$Answer')";
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
	width: 600px;
	height: 530px;
	padding:  10px;
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
</style>
</head>
<body>
<h1><br>CREATE YOUR QUIZ  </h1>
<div  class="loginBox">
<form action="" method="post" >
    <table align = "center">
                <tr>
                <td><strong> Id:</strong></td>
                </tr>
                <tr>
                        <td> <input type="text" name="Id" > </td>
                </tr>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <td> <strong>Enter Question:</strong></td>
                </tr>
                <tr>
                <td><textarea name="Question" rows="5" cols="30"></textarea> </td></td>
                </tr>
                <tr>
                <td><strong>Option A</strong></td>
                </tr>
                <tr>
                <td>  <input type="text" name="Optiona" > </td>
                </tr>

                <tr>
                        <td><strong>Option B</strong></td>
                        </tr>
                        <tr>
                        <td>  <input type="text" name="Optionb"> </td>
                        </tr>

                        <tr>
                                <td><strong>Optionc</strong></td>
                                </tr>
                                <tr>
                                <td>  <input type="text" name="Optionc"> </td>
                                </tr>

                                <tr>
                                        <td><strong>Option D</strong></td>
                                        </tr>
                                        <tr>
                                        <td>  <input type="text" name="Optiond" > </td>
                                        </tr>
                <td><strong>Answer:</strong></td>
		
                <tr>
                        <td><input type="text" name="Answer" placeholder="Answer"></td>
		</tr>
		<tr><td></td></tr>
 		<tr>
                        <td><input class = "button" type="submit" name="submit" value="Submit"></td>
		</tr>
            </table>
                </tr>
            </table>
   
    
</form>

				
              
</div>
</body>
</html>