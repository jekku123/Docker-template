<?php
$host = 'projectDB';
$user = 'lionUser';
$pass = 'lionPass';

$conn = new mysqli($host, $user, $pass);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected to MySQL server successfully!";
}
