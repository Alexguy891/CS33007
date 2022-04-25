<?php
    require "../config.php";
    $stmt1 = $pdo->prepare("SELECT food_id FROM Food");
    $stmt1->execute();
    $flag = false;

    while($row = $stmt1->fetch()) {
        if($row["food_id"] == $_POST["food_id"]) {
            $flag = true;
            break;
        }
    }

    if($flag == false) {
        $stmt2 = $pdo->prepare("INSERT INTO Food (food_id, food_name, food_category, description, price, serving_size, serving_amount, calories, sodium, sugar, fat, protein, carbs, rest_id) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt2->bindParam(1, $_POST["food_id"], PDO::PARAM_STR);
        $stmt2->bindParam(2, $_POST["food_name"], PDO::PARAM_STR);
        $stmt2->bindParam(3, $_POST["food_category"], PDO::PARAM_STR);
        $stmt2->bindParam(4, $_POST["description"], PDO::PARAM_STR);
        $stmt2->bindParam(5, $_POST["price"], PDO::PARAM_STR);
        $stmt2->bindParam(6, $_POST["serving_size"], PDO::PARAM_STR);
        $stmt2->bindParam(7, $_POST["serving_amount"], PDO::PARAM_INT);
        $stmt2->bindParam(8, $_POST["calories"], PDO::PARAM_INT);
        $stmt2->bindParam(9, $_POST["sodium"], PDO::PARAM_INT);
        $stmt2->bindParam(10, $_POST["sugar"], PDO::PARAM_INT);
        $stmt2->bindParam(11, $_POST["fat"], PDO::PARAM_INT);
        $stmt2->bindParam(12, $_POST["protein"], PDO::PARAM_INT);
        $stmt2->bindParam(13, $_POST["carbs"], PDO::PARAM_INT);
        $stmt2->bindParam(14, $_POST["rest_id"], PDO::PARAM_INT);
        $stmt2->execute();

        $restid = $_POST["rest_id"];

        echo "<h2>Food added!</h2>";
    } else {
        echo "<h2>Food ID is not unique!</h2>";
    }

    $restid = $_POST[ "rest_id"];
    echo "<a href='../add/add_food.php?restid=" . urlencode($restid) . "'>Click here to add more food.</a><br>";
    echo "<a href='../main/main.php'>Click here to return to the main page.</a><br>";
    echo "<a href='../main/rest_details.php?foodid=" . $_POST["rest_id"] . "'>Click here to return to the restaurant details page.</a>";
?>