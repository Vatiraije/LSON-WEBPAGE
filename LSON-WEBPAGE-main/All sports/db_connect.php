<?php
$servername = "localhost";
$username = "root";
$password = "Shagina03!!";
$dbname = "lson";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
