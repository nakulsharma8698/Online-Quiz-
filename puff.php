<?php
if(isset($_GET['Email'])) {
	$Email = $_GET['Email'];
	$Password = $_GET['Password'];
	$con = mysqli_connect("localhost", "root", "") or die("Could not connect to the server");
	mysqli_select_db($con, "userss") or die("Database could not found!");
	$userquery = mysqli_query($con, "SELECT * FROM quiz WHERE Email = '$Email' AND Password = '$Password'") or die("The query could not be implemented");
	
	if(mysqli_num_rows($userquery) != 1) {
	die("Username does not exists");
	}
	while($row = mysqli_fetch_array($userquery, MYSQLI_ASSOC)){
		$Name = $row['Name'];
		$Email = $row['Email'];
		$Phone = $row['Phone'];
		$City = $row['City'];
		$dbemail = $row['Email'];
		$Password = $row['Password'];
	}
	if($Email != $dbemail){
	    die("There has been an error");
	}

?>

<html>
<head>
	<title>User Profile</title>
<style>
ul {
  list-style-type: none;
  height: 50px;
  width: 100%;
  margin: 0;
  padding: 0;
  background-color: #333;
}

li {
  display: inline;
  float: left;
  border-right:1px solid #bbb;
}
li:last-child {
  border-left: 1px solid #bbb;
  border-right:none;
}
li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
.active {
  background-color: #ff3377;
}
div{
	text-color: white;
}
#grad1 {
  height: 250px;
  background-color: #33ffc7;
  font-family: cursive; 
  background-image: linear-gradient(90deg, #1AD1ED, #ED1A75);
}
.container {
  position: relative;
  text-align: center;
  color: white;
}
.top-left {
  font-family: cursive;
  position: absolute;
  top: 8px;
  left: 16px;
  font-size: 50px;
}


.loginBox
{
	position: absolute;
	height: 200px;
	width: 99%;
	padding: 20px 20px;
	box-sizing: border-box;
	background: rgb(220, 220,220);
}



.quizzard{
	text-align: center;
	color:white;
	background: #19A227;
	font-size: 80px;
	height:80px;
	padding: 50px 20px;
      	font-family: Montserrat, sans-serif;
	
	margin:auto;

}
.centered {
  position: absolute;
  top: 50%;
  font-family: cursive;
  left: 50%;
  font-size: 30px;
  transform: translate(-50%, -50%);
}
</style>
</head>
<body>

<h1 class ="quizzard"> QUIZZARD</h1>


<ul>
  <li><a class="active" href="#home">HOME</a></li>
 

<select>
 <option><a href="#news">CATEGORIES</a> </option>
 <?php


	$conn = mysqli_connect("localhost", "root", "") or die("Could not connect to the server");
	mysqli_select_db($conn, "userss") or die("Database could not found!");

	$query = "SELECT Category FROM category";
	$res =  mysqli_query($con2, $query);
	if($res)
	{
		while($row = mysqli_fetch_array($query,  MYSQLI_ASSOC))
		{
			$cat = $row["Category"];
			echo "<option>$cat<br></option>";
		}
	}

 ?>
</select></li>


  <li><a href="#contact">CONTACT</a></li>
  <li><a href="#about">ABOUT</a></li>
  <li><a href="#competetion">DEVELOPERS</a></li>
  <li style="float:right" ><a href="#setting"> LOGOUT </a></li>
</ul>

<div id="grad1" style="text-align:center; margin:auto; color:white; font-size:40px; font-weight:bold"> SUCCESS IS A LOUSY TEACHER. IT SEDUCES SMART PEOPLE <br>
INTO THINKING THEY CAN'T LOSE.!!!!!!<br> <br> -BILL GATES</div>


<div class = "loginBox">
<h1 align="center"> WELCOME <?php echo $Name ?></h1>
<table align="center">
<h2> <tr><td><strong> Name:</td><td> <?php echo $Name; ?></td></tr>
<tr><td><strong> Email:</td><td> <?php echo $Email; ?></td></tr>
<tr><td><strong> Phone:</td><td> <?php echo $Phone; ?></td></tr>
<tr><td> <strong>City:</td><td> <?php echo $City; ?></td></tr> </h2>
</table><br><br>
<?php
}  else die("You need to specify the username!");
?>
</div>





<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<div class="container">
  <img src="about.jpg" alt="Snow" style="width:100%;height:300px;">
  <div class="top-left">About</div><br>
  <div class="centered">Quizzard is just designed for the users who wants to create 
                        a quiz of any type as <br>per the user choise. And also for the 
			users who want to play the quiz according to their interest
			and improve their General Knowledge.</div>
</div>

</body>
</html>	