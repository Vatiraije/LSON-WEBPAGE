<?php
// search.php

$searchTerm = $_GET['query']; // Get the search query from the URL

// Connect to the database (adjust parameters as necessary)
$host = 'localhost';
$dbname = 'lson';
$user = 'root';
$password = 'Shagina03!!';
$dsn = "mysql:host=$host;dbname=$dbname";

try {
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare SQL statement to search in the database
    $stmt = $pdo->prepare("SELECT * FROM history WHERE content LIKE :query");
    $stmt->execute(['query' => "%$searchTerm%"]);

    // Fetch results
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // If needed, you can also fetch online data here
    // For example, using cURL or file_get_contents()

    // Output results as JSON
    echo json_encode($results);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
