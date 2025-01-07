<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prakash";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM register";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  echo "<table border='1'>
          <tr>
            <th>Username</th>
            <th>Password</th>
            <th>Email</th>
            <th>Phone Number</th>
          </tr>";

  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>" . $row["Username"] . "</td>
            <td>" . $row["Password"] . "</td>
            <td>" . $row["Email"] . "</td>
            <td>" . $row["Phone_Number"] . "</td>
          </tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
