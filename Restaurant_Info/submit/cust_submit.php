<?php
    require "../config.php";

    $stmt = $pdo->prepare("UPDATE Users SET phone_number = ?, email = ?, blog_site = ?, first_name = ?, last_name = ?, bio_description = ? WHERE user_id = ?");
    $stmt->bindParam(1, $_POST["phone_number"], PDO::PARAM_STR);
    $stmt->bindParam(2, $_POST["email"], PDO::PARAM_STR);
    $stmt->bindParam(3, $_POST["blog_site"], PDO::PARAM_STR);
    $stmt->bindParam(4, $_POST["first_name"], PDO::PARAM_STR);
    $stmt->bindParam(5, $_POST["last_name"], PDO::PARAM_STR);
    $stmt->bindParam(6, $_POST["bio_description"], PDO::PARAM_STR);
    $stmt->bindParam(7, $_POST["user_id"], PDO::PARAM_STR);


    $stmt->execute();

    echo "<h2>Edits submitted!</h2>";
    echo "<a href='../main/customer_details.php?custuser=" . $_POST["user_id"] . "'>Click here to return to the customer details page.</a>";
?>