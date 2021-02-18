<?php
$servername = "172.20.0.3";
$username = "root";
$password = "untukuas";
$dbname = "trudatabase";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: ".$conn->connect_error);
}

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "id: " .$row["id"]. "<br> Name: ".$row["nama"]. "<br> kantor: ".$row["kantor"]. "<br><br>";
  }
} else {
  echo "nothing here";
}
$conn->close();
?>
