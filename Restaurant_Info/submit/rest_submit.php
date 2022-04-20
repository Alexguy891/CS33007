<?php
    require "../config.php";

    $stmt = $pdo->prepare("UPDATE Restaurants SET rest_name = ?, rest_desc = ?, website_url = ?, phone_number = ?, type = ?, service = ?, rest_street = ?, rest_city = ?, rest_state = ?, rest_zip = ? WHERE rest_id = ?");
    $stmt->bindParam(1, $_POST["rest_name"], PDO::PARAM_STR);
    $stmt->bindParam(2, $_POST["rest_desc"], PDO::PARAM_STR);
    $stmt->bindParam(3, $_POST["website_url"], PDO::PARAM_STR);
    $stmt->bindParam(4, $_POST["phone_number"], PDO::PARAM_STR);
    $stmt->bindParam(5, $_POST["type"], PDO::PARAM_STR);
    $stmt->bindParam(6, $_POST["service"], PDO::PARAM_STR);
    $stmt->bindParam(7, $_POST["rest_street"], PDO::PARAM_STR);
    $stmt->bindParam(8, $_POST["rest_city"], PDO::PARAM_STR);
    $stmt->bindParam(9, $_POST["rest_state"], PDO::PARAM_STR);
    $stmt->bindParam(10, $_POST["rest_zip"], PDO::PARAM_INT);
    $stmt->bindParam(11, $_POST["rest_id"], PDO::PARAM_INT);
    $stmt->execute();

    echo "<h2>Edits submitted!</h2>";
    echo "<a href='../main/rest_details.php?restid=" . $_POST["rest_id"] . "'>Click here to return to the restaurant's details page.</a>";
?>