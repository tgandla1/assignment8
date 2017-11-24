<html>
<head>
<title>MyMusic-View</title>
<link rel="stylesheet" type="text/css" href="./style.css" title="style" />
</head>
<body>

<?php

function show_music()
{
 $servername = "localhost";
$username = "tgandla1";
$password = "tgandla1";
$dbname = "tgandla1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
	if ($conn->connect_error) 
	{
	
			echo "<script type='text/javascript'>alert('Connection failed')</script>"; 
	}
	
	$sql9 = "SELECT * FROM MyMusic";
	$result = $conn->query($sql9);
	echo "<br><table><tr><th colspan=\"2\">MyMusic </th></tr><tr><td>Artist</td><br/><br/><td>Album</td></tr>";
	if ($result->num_rows > 0) 
	{
    // output data of each row
    while($row = $result->fetch_assoc()) 
	{
        echo "<tr><td>".$row["artist"]."<td>
		<td>".$row["album"]."<td></tr>";
    }
	} 
	else 
	{
    echo "0 results";
	}
	echo "</table>";
	
	
	$conn->close();
		
}
?>

<h1><i>My Music</i></h1><br>

	<h2> Music Gallery </h2>
	<?php show_music() ?>
<a href="./home.html"> Menu </a>
</body>
</html>