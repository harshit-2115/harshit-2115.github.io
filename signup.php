<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "users";
$name = $_POST["name"];
$Email = $_POST["email"];
$Password = $_POST["password"];
$Phone = $_POST["contact"];

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{

				// Write Sql commands
				$sql = "INSERT INTO userinfo (Name, Email, Password,Phone) VALUES ( '$name' , '$Email' , '$Password', '$Phone' )";
				if (mysqli_query($conn, $sql)) {
				    echo "<h1>User Registered Successfully<h1>";
				} else {
				    echo "Error in connecting to DB " . mysqli_error($conn);
				}
	}
				mysqli_close($conn);
?>
</body>
</html>