<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lson";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$successMessage = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $membership = $_POST['membership'];
    $handicap = $_POST['handicap'];
    $golf_club = $_POST['golf_club'];
    $tshirt_size = $_POST['tshirt_size'];
    $message = $_POST['message'];

    $sql = "INSERT INTO golf_registration (firstname, lastname, age, gender, email, phone, membership, handicap, golf_club, tshirt_size, message)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssississsss", $firstname, $lastname, $age, $gender, $email, $phone, $membership, $handicap, $golf_club, $tshirt_size, $message);

    if ($stmt->execute()) {
        $successMessage = "Registration successful!";
        header('Location:../All sports/golf.php');
    } else {
        $successMessage = "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
