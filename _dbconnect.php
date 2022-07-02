<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$db = 'signup';

// create connection
$conn = new mysqli($servername, $username, $password, $db);

// check connection
if (!$conn) {
    die("connection Failed" . mysqli_error()); 
}
?>