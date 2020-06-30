<?php
echo 'Current PHP version: ' . phpversion() . '<br><br>';
$conn = new mysqli("mysql57", "db_user", "my_pw", "my_db");
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
$conn->set_charset("utf8");

$sql = "SELECT * FROM my_table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		echo $row['one']."<br>";
		echo $row['two']."<br>";
		echo $row['three']."<br>";
		echo $row['four']."<br>";
		echo "<br>";
	}
} else {
	echo "0 results";
}
$conn->close();