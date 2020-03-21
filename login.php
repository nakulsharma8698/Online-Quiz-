<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<style>
body
{
	background: url(8972.jpg);
	background-size: cover;
	font-family: sans-serif;
}


.quizzard{
	text-align: center;
	color:white;
	background: #19A227;
	font-size: 80px;
	height:80px;
	padding: 50px 20px;
      	font-family: Montserrat, sans-serif;
	 

}



.create
{
	width = 100px;
	height = 20px;
	color = #19A227;
	text-color = white;
} 



.loginBox
{
	position: absolute;
    	right:-150px;
    	bottom:-180px;
	transform: translate(-50%,-50%);
	width: 350px;
	height: 400px;
	padding: 40px 40px;
	box-sizing: border-box;
	background: rgba(116, 70, 70, 0.5);
}
.user
{
	width: 100px;
	height: 100px;
	border-radius: 50%;
	overflow: hidden;
	position: absolute;
	top: calc(-100px/2);
	left: calc(50% - 50px);
}
h2
{
	margin: 0;
	padding: 0 0 20px;
	color: #efed40;
	text-align: center;
}
.loginBox p
{
	margin: 0;
	padding: 0;
	font-weight: bold;
	color: #fff;
}
.loginBox input
{
	width: 100%;
	margin-bottom: 20px;
}
.loginBox input[type="text"],
.loginBox input[type="password"]
{
	border: none;
	border-bottom: 1px solid #fff;
	background: transparent;
	outline: none;
	height: 40px;
	color: #fff;
	font-size: 20px;
}
::placeholder
{
	color: rgba(236, 17, 17, 0.5);
}


.add{
	color:white;

}
.addbut{
	color:white;
	 width: 200px;
    height: 50px;
    background-color: #2274EF;
    text-color: white;
    border-radius: 12px;

}


.loginBox input[type="submit"]
{
	border: none;
	outline: none;
	height: 40px;
	color: #fff;
	font-size: 16px;
	background: #19A227;     
	cursor: pointer;
	border-radius: 20px;
}
.loginBox input[type="submit"]:hover
{
	background: #1B530A;
	color: #262626;
}
.loginBox a
{
	color: #fff;
	font-size: 14px;
	font-weight: bold;
	text-decoration: none;
}
.linktxt{
    text-align: right;
    color:white;
}
.right{
    float: right;
    
}
</style>
	</head>
	<body>
		<div class ="quizzard">QUIZZARD</div><br><br>
		<p> <a href="cat.php"> <input class = "addbut"  type="submit" name="submit" value="Add Quiz"> </a> </p><br><br><br>
		<p class = "add"> <strong> Add Questions to previous Quiz </strong></p>
		<p ><a href="ques.php"> <input class = "addbut"  type="submit" name="submit" value="Add"> </a> </p>
		<div class="loginBox" class="right">
			<h2>Log In Here</h2>
			<form action="profile1.php" method = "GET">
				<p>Email</p>
				<input type="text" name="Email" placeholder="Enter Email" required>
				<p>Password</p>
				<input type="password" name="Password" placeholder="********" required>
				<input type="submit" name="submit" value="Sign In">
                <a href="#">Forget Password</a><br>
                <a href="register.php">Sign Up</a>
			</form>
	
		</div>
	</body>
</html>
