<?php
$servername = "localhost";
$username = "library_user";
$password = "password";
$dbname = "library_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, title, author, published_year FROM books";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Title: " . $row["title"]. " - Author: " . $row["author"]. " - Year: " . $row["published_year"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
