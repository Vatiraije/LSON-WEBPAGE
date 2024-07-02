<?php
header('Content-Type: application/json');
include 'db/config.php';

$query = $db->query("SELECT name FROM Sports");
$sports = $query->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($sports);
?>
