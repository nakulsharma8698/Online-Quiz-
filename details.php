<!DOCTYPE html>
<html>
<head> 
<title> Details </title>
<style type = "text/css">
table{
	border-collapse: collapse;
	width: 30%;
	color: #1DC038;
	font-family: monospace;
	align: center;
	text-align: center;
	font-size:25px;
}
th{
	background-color: #1DC038;
	color: white;
}
	
tr:nth-child(even) { background-color: #f2f2f2}
</style>

</head>


<body>

<table>
<tr>
<th>Select Category</th>
</tr>

<?php
	$conn = mysqli_connect("localhost", "root", "", "userss");
	if($conn-> connect_error) {
	  die("Connection failed: " .$conn-> connect_error);
	}

	$sql = "SELECT Question,Option A, Option B, Option C, Option D from category";
	$result = $conn-> query($sql);
	if($result-> num_rows > 0) {
	  	
		while($row = $result-> fetch_assoc()) {
			echo  "<tr><td> ".$row["Question"]." </td></tr>";
			
		}
	} 
	$conn-> close(); 
?>
</table>
</body>
</html>