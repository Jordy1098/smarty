<?php

$username = "root";
$password = "root";

try {
    $conn = new PDO("mysql:host=localhost;dbname=blog", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOException $error){
    echo "Connection failed: " . $error->getMessage();
}
?>