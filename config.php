<?php
session_start();

$host = 'localhost';
$db = 'blog';
$user = 'root'; // Change if using another MySQL user
$pass = '';     // Set password if applicable

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>