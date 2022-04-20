<?php
    require "../config.php";

    $stmt = $pdo->prepare("UPDATE Food SET food_name = ?, description = ?, food_category = ?, price = ?, serving_size = ?, serving_amount = ?, calories = ?, sodium = ?, sugar = ?, fat = ?, protein = ?, carbs = ? WHERE food_ID = ?");
    $stmt->bindParam(1, $_POST["food_name"], PDO::PARAM_STR);
    $stmt->bindParam(2, $_POST["description"], PDO::PARAM_STR);
    $stmt->bindParam(3, $_POST["food_category"], PDO::PARAM_STR);
    $stmt->bindParam(4, $_POST["price"], PDO::PARAM_STR);
    $stmt->bindParam(5, $_POST["serving_size"], PDO::PARAM_STR);
    $stmt->bindParam(6, $_POST["serving_amount"], PDO::PARAM_INT);
    $stmt->bindParam(7, $_POST["calories"], PDO::PARAM_INT);
    $stmt->bindParam(8, $_POST["sodium"], PDO::PARAM_INT);
    $stmt->bindParam(9, $_POST["sugar"], PDO::PARAM_INT);
    $stmt->bindParam(10, $_POST["fat"], PDO::PARAM_INT);
    $stmt->bindParam(11, $_POST["protein"], PDO::PARAM_INT);
    $stmt->bindParam(12, $_POST["carbs"], PDO::PARAM_INT);
    $stmt->bindParam(13, $_POST["food_id"], PDO::PARAM_INT);

    $stmt->execute();

    echo "<h2>Edits submitted!</h2>";
    echo "<a href='../main/food_details.php?foodid=" . $_POST["food_id"] . "'>Click here to return to the food details page.</a>";
?>