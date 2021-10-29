<?php

$host = "localhost";
$username = "root";
$password = 'root';
$database = 'honeyhunters';
$conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);

function getMessage($conn) {
    $sql = "SELECT * FROM message";
    $result = [];

    $query = $conn->prepare($sql);
    echo "<pre>";
    print_r($query);
    echo "</pre>";

}