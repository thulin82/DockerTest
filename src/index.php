<?php
$conn = new mysqli("db", "db_user", "my_pw", "my_db");
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id FROM my_table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		echo $row['id']."<br>";
	}
} else {
	echo "0 results";
}
$conn->close();