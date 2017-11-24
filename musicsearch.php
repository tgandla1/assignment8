<html>
<head>
<title>MyMusic-Search</title>
<link rel="stylesheet" type="text/css" href="./style.css" title="style" />
</head>
<body>

<img src="./add.jpg" height="150" width="400" alt=""/>
<h2>Search Music </h2>

	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<br><br><br><br><br><br><br>
		<table align="center">
			<tr>
				<td>Enter Artist:</td>
				<td><input type="text" name="uid"></td>
			</tr>
			<tr>
				<td> </td>
				<td><input type="submit" value="submit"></td>
			</tr>
			<tr>
				<td> </td>
				<td><a href="./home.html">Home</a></td>
			</tr>
		</table>	
		
	</form>
<?php

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

		
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$uid= test_input($_POST["uid"]);


$servername = "localhost";
$username = "tgandla1";
$password = "tgandla1";
$dbname = "tgandla1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
   echo "<script type='text/javascript'>alert('Cannot connect to server')</script>"; 
} 

$sql = "SELECT * FROM MyMusic";
$result = $conn->query($sql);
$c=0;
if ($result->num_rows > 0) 
{
$c=1;
	echo "<br><table><tr><th colspan=\"2\">MyMusic </th></tr><tr><th>Artist</th><th>Album</th></tr>";

    while($row = $result->fetch_assoc()) 
	{
		if($row["artist"] == $uid)
		{
			echo "<tr><td>".$row["artist"]."<td><td>".$row["album"]."<td></tr>";
		}
	}
echo "</table>";
	if($c==0)
		echo "<script type='text/javascript'>alert('No Artists Found.')</script>";
} else 
{
    echo "<script type='text/javascript'>alert('No related information found in database.')</script>";
}

$conn->close();
}

?>
</body>
</html>