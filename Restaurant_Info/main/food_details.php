<?php
    require "../config.php";

    $stmt1 = $pdo->prepare("SELECT * FROM Food WHERE food_ID = ?");
    $stmt1->execute([urldecode($_GET["foodid"])]);

    $food = $stmt1->fetch();
    echo "<a href='../main/main.php'>Home</a><br>";

    echo "<a href='../edit/food_edit.php?foodid=" . $_GET["foodid"] . "'>Click to edit food details</a>";
    echo "<h1 class='food_name'>" . $food["food_name"] . "</h1>";
    echo "<p class='food_details'>Calories: " . $food["calories"] . " cals</p>";
    echo "<p class='food_details'>Serving Size: " . $food["serving_size"] . "</p>";
    echo "<p class='food_details'>Servings per item: " . $food["serving_amount"] . " servings</p>";
    echo "<p class='food_details'>Fats: " . $food["fat"] . "g</p>";
    echo "<p class='food_details'>Sodium: " . $food["sodium"] . "mg</p>";
    echo "<p class='food_details'>Protein: " . $food["protein"] . "g</p>";
    echo "<p class='food_details'>Sugar: " . $food["sugar"] . "g</p>";
    echo "<p class='food_details'>Carbs: " . $food["carbs"] . "g</p>";
?>

<html>
    <head>
        <link rel="stylesheet" href="../styles.css">
    </head>
</html>