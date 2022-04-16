<?php
$host = "localhost";
$user = "user";
$pass = "pass";
$db = "restaurant_info";
$pdo = new PDO("mysql:host=$host;dbname=$db",$user,$pass);

try {
}

catch(PDOException $error) {
    echo "Connection failed";
}

?>