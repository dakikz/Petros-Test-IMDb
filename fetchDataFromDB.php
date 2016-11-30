<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "PetrosTest";

$conn = new mysqli($localhost, $root, $root, $PetrosTest);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, title, date_published, rating FROM movies";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo . $row["id"]. "." . $row["title"]. " (" . $row["date_published"]. ") " . $row["rating"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>