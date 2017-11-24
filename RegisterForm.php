<html>
<head>
<title>MyMusic-Register</title>
<link rel="stylesheet" type="text/css" href="./style.css" title="style" />
</head>
<body>

<?php

function test_input($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

		
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

$uid= test_input($_POST["uid"]);
$pwd= test_input($_POST["pwd"]);

$servername = "localhost";
$username = "tgandla1";
$password = "tgandla1";
$dbname = "tgandla1";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) 
{
   echo "<script type='text/javascript'>alert('Server Connection is failed')</script>"; 
} 

$sql = "INSERT INTO login_id (uname, pwd)
VALUES ('".$uid."', '".$pwd."')";

if ($conn->query($sql) === TRUE) 
{
    echo "<script type='text/javascript'>alert('Registration Syccessfull!')</script>"; 
}
else 
{
    echo "<script type='text/javascript'>alert('Connection Failed: '". $conn->error.")</script>"; ;
}

$conn->close();
}
?>
<img src="./add.jpg" height="150" width="400" alt=""/>
<h2>User Registration Form</h2>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<br><br><br><br><br><br><br>
		<table align="center">
			<tr>
				<td>User ID:</td>
				<td><input type="text" name="uid"></td>
			</tr>
			<br>
			<tr>
				
				<td>Password:</td>
				<td><input type="text" name="pwd"></td>
			</tr>
			<tr>
				<td> </td>
				<td><input type="submit" value="register"></td>
			</tr>
			<tr>
				<td> </td>
				<td><a href="./LoginForm.php">Login</a></td>
			</tr>
			
		
	</form>

</body>
</html>