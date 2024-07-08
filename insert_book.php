<?php
$servername = "localhost";
$username = "library_user";
$password = "password";
$dbname = "library_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$title = $_POST['title'];
$author = $_POST['author'];
$year = $_POST['year'];

$sql = $conn->prepare("INSERT INTO books (title, author, published_year) VALUES (?, ?, ?)");
$sql->bind_param("ssi", $title, $author, $year);

if ($sql->execute() === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql->error;
}

$conn->close();
?>
