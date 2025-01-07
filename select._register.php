<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prakash";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM register";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    echo "Username: " . $row["Username"]. " - Password: " . $row["Password"]. "-Email" . $row["Email"]. " -Phone_Number" . $row["Phone_Number"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>