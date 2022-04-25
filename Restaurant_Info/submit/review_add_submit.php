<?php
    require "../config.php";
    $stmt1 = $pdo->prepare("SELECT review_ID FROM Review");
    $stmt1->execute();

    $stmt3 = $pdo->prepare("SELECT user_id FROM Users");
    $stmt3->execute();

    $flag = false;
    $flag2 = false;

    while($row = $stmt1->fetch()) {
        if($row["review_ID"] == $_POST["review_id"]) {
            $flag = true;
            break;
        }
    }

    while($row = $stmt3->fetch()) {
        if($row["user_id"] ==  $_POST["user_id"]) {
            $flag2 = true;
            break;
        }
    }

    if($flag == false && $flag2 == false) {
        $stmt4 = $pdo->prepare("INSERT INTO Users (user_id, phone_number, email, blog_site, first_name, last_name, bio_description) VALUES(?, ?, ?, ?, ?, ?, ?)");
        $stmt4->bindParam(1, $_POST["user_id"], PDO::PARAM_STR);
        $stmt4->bindParam(2, $_POST["phone_number"], PDO::PARAM_STR);
        $stmt4->bindParam(3, $_POST["email"], PDO::PARAM_STR);
        $stmt4->bindParam(4, $_POST["blog_site"], PDO::PARAM_STR);
        $stmt4->bindParam(5, $_POST["first_name"], PDO::PARAM_STR);
        $stmt4->bindParam(6, $_POST["last_name"], PDO::PARAM_STR);
        $stmt4->bindParam(7, $_POST["bio_description"], PDO::PARAM_STR);
        $stmt4->execute();

        $stmt2 = $pdo->prepare("INSERT INTO Review (review_id, review_title, month, day, year, price_rating, food_rating, service_rating, review_description, user_id, rest_id) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt2->bindParam(1, $_POST["review_id"], PDO::PARAM_INT);
        $stmt2->bindParam(2, $_POST["review_title"], PDO::PARAM_STR);
        $stmt2->bindParam(3, $_POST["month"], PDO::PARAM_STR);
        $stmt2->bindParam(4, $_POST["day"], PDO::PARAM_STR);
        $stmt2->bindParam(5, $_POST["year"], PDO::PARAM_STR);
        $stmt2->bindParam(6, $_POST["food_rating"], PDO::PARAM_STR);
        $stmt2->bindParam(7, $_POST["price_rating"], PDO::PARAM_STR);
        $stmt2->bindParam(8, $_POST["service_rating"], PDO::PARAM_STR);
        $stmt2->bindParam(9, $_POST["review_description"], PDO::PARAM_STR);
        $stmt2->bindParam(10, $_POST["user_id"], PDO::PARAM_INT);
        $stmt2->bindParam(11, $_POST["rest_id"], PDO::PARAM_INT);
        $stmt2->execute();

        $restid = $_POST["rest_id"];

        echo "<h2>Review added!</h2>";
    } else {
        echo "<h2>Review ID is not unique!</h2>";
    }

    $restid = $_POST[ "rest_id"];
    echo "<a href='../add/add_review.php?restid=" . urlencode($restid) . "'>Click here to add another review.</a><br>";
    echo "<a href='../main/main.php'>Click here to return to the main page.</a>";
?>