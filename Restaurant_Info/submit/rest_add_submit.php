<?php
    require "../config.php";
    $stmt1 = $pdo->prepare("SELECT rest_id FROM Restaurants");
    $stmt1->execute();
    $flag = false;

    while($row = $stmt1->fetch()) {
        if($row["rest_id"] == $_POST["rest_id"]) {
            $flag = true;
            break;
        }
    }

    if($flag == false) {
        $stmt2 = $pdo->prepare("INSERT INTO Restaurants (rest_id, rest_name, rest_desc, website_url, phone_number, type, service, rest_street, rest_city, rest_state, rest_zip) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt2->bindParam(1, $_POST["rest_id"], PDO::PARAM_INT);
        $stmt2->bindParam(2, $_POST["rest_name"], PDO::PARAM_STR);
        $stmt2->bindParam(3, $_POST["rest_desc"], PDO::PARAM_STR);
        $stmt2->bindParam(4, $_POST["website_url"], PDO::PARAM_STR);
        $stmt2->bindParam(5, $_POST["phone_number"], PDO::PARAM_STR);
        $stmt2->bindParam(6, $_POST["type"], PDO::PARAM_STR);
        $stmt2->bindParam(7, $_POST["service"], PDO::PARAM_STR);
        $stmt2->bindParam(8, $_POST["rest_street"], PDO::PARAM_STR);
        $stmt2->bindParam(9, $_POST["rest_city"], PDO::PARAM_STR);
        $stmt2->bindParam(10, $_POST["rest_state"], PDO::PARAM_STR);
        $stmt2->bindParam(11, $_POST["rest_zip"], PDO::PARAM_INT);
        $stmt2->execute();

        $restid = $_POST["rest_id"];

        echo "<h2>Restaurant added!</h2>";
        echo "<a href='../add/add_food.php?restid=" . urlencode($restid) . "'>Click here to add the food</a><br>";
    } else {
        echo "<h2>ID is not unique!</h2>";
    }

    echo "<a href='../add/add_rest.php'>Click here to add another restaurant.</a><br>";
    echo "<a href='../main/main.php'>Click here to return to the main page.</a>";
?>