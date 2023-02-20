<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "webprogmi212";
$password = "webprogmi212";
$dbname = "webprogmi212";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Looks like something went wrong with the connection! : " . $conn->connect_error);
}

$sql = "SELECT * FROM Outlanders";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<hr> id: ". $row["id"]. "<hr> - Name: ". $row["name"]. "<hr>- Email: ". $row["email"]. "<hr>- Website: ". $row["website"]. "<hr>- Comment: ". $row["comment"]. "<hr>- Gender: ". $row["gender"] . "<hr>- registration date: ". $row["regDate"];
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>