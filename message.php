<?php

$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];

 // подключение и запись данных к БД

    try {
        $conn = new PDO("mysql:host=localhost;dbname=honeyhunters", 'root', 'root');

        $query = "INSERT INTO message (name, email, comment) VALUES ('$name', '$email', '$comment')";

        $conn->exec($query);
        echo "record created";

    } catch (PDOException $e) {
        echo $query . $e->getMessage();
    }

$conn = null;

?>
