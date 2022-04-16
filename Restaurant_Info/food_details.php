<?php
    require "config.php";

    $stmt1 = $pdo->prepare("SELECT Food_name, Size, Amounts, Fats, Sodium, Calories, Protein, Sugar, Carbs FROM menu WHERE Food_ID = ?");
    $stmt1->execute([urldecode($_GET["foodid"])]);

    $food = $stmt1->fetch();

    echo "<h1 class='food_name'>" . $food["Food_name"] . "</h1>";
    echo "<p class='food_details'>Calories: " . $food["Calories"] . " cals</p>";
    echo "<p class='food_details'>Serving Size: " . $food["Size"] . "</p>";
    echo "<p class='food_details'>Servings per item: " . $food["Amounts"] . " servings</p>";
    echo "<p class='food_details'>Fats: " . $food["Fats"] . "g</p>";
    echo "<p class='food_details'>Sodium: " . $food["Sodium"] . "mg</p>";
    echo "<p class='food_details'>Protein: " . $food["Protein"] . "g</p>";
    echo "<p class='food_details'>Sugar: " . $food["Sugar"] . "g</p>";
    echo "<p class='food_details'>Carbs: " . $food["Carbs"] . "g</p>";
?>