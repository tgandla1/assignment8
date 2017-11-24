<?php
$servername = "localhost";
$username = "tgandla1";
$password = "tgandla1";
$dbname = "tgandla1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE MyMusic (
artist VARCHAR(30),
album VARCHAR(30) 
)";

$sql1 = "CREATE TABLE login_id (
uname VARCHAR(30),
pwd VARCHAR(30) 
)";

if ($conn->query($sql) === TRUE) {
    echo "MyMusic Table is created Successfully \n";
} else {
    echo "Error creating table: " . $conn->error;
}

if ($conn->query($sql1) === TRUE) {
    echo "login_id Table is created successfully";
} else {
    echo "Table Creation Error " . $conn->error;
}

$conn->close();
?>