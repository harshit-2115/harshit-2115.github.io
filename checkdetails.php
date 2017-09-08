<?php
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "users";
$Email = $_POST["user_email"];
$Password = $_POST["user_password"];
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{

				// Write Sql commands
				$sql = "SELECT Password From userinfo WHERE Email = '$Email'";
				$result = mysqli_query($conn, $sql);
				$rs = mysqli_fetch_array($result);
				$clientid = $rs['Password'];
				if (mysqli_query($conn, $sql) ){
					if ($clientid === $Password) {
						setcookie("useremail", $Email, time() + (86400 * 30), "/"); // 86400 = 1 day
						header('Location: dashboard.php');
					}
					else
					{
						echo "<h1>Invalid Details<h1>";
					}
				    
				} else {
				    echo "Error in connecting to DB " . mysqli_error($conn);
				}
	}
				mysqli_close($conn);
?>
