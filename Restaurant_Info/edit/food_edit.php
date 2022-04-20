<?php
    require "../config.php";

    $stmt1 = $pdo->prepare("SELECT * FROM Food WHERE food_ID = ?");
    $stmt1->execute([urldecode($_GET["foodid"])]);
    $rest = $stmt1->fetch();
    
    echo "<h1>Editing " . $rest["food_name"] . "</h1>";
    echo "<form action='../submit/food_submit.php' method='post'>";
    echo "<label>Restaurant ID: </label><br>";
    echo "<input type='text' name='rest_id' value='" . $rest["rest_id"] . "' readonly><br>";
    echo "<label>Food ID: </label><br>";
    echo "<input type='text' name='food_id' value='" . $rest["food_ID"] . "' readonly><br>";
    echo "<label>Name: </label><br>";
    echo "<input type='text' name='food_name' value='" . $rest["food_name"] . "'>Max 20 Characters<br>";
    echo "<label>Description: </label><br>";
    echo "<textarea name='description'>" . $rest["description"] . "</textarea>Max 300 Characters<br>";
    echo "<label>Category: </label><br>";
    echo "<input type='text' name='food_category' value='" . $rest["food_category"] . "'>Max 50 Characters<br>";
    echo "<label>Price: </label><br>";
    echo "<input type='text' name='price' value='" . $rest["price"] . "'>Max 20 Characters<br>";
    echo "<label>Serving Size: </label><br>";
    echo "<input type='text' name='serving_size' value='" . $rest["serving_size"] . "'>Max 20 Characters<br>";
    echo "<label>Servings per item: </label><br>";
    echo "<input type='text' name='serving_amount' value='" . $rest["serving_amount"] . "'>Max 20 Characters<br>";
    echo "<label>Calories: </label><br>";
    echo "<input type='text' name='calories' value='" . $rest["calories"] . "'>Max 20 Characters<br>";
    echo "<label>Sodium (mg): </label><br>";
    echo "<input type='text' name='sodium' value='" . $rest["sodium"] . "'>Max 20 Characters<br>";
    echo "<label>Sugar (g): </label><br>";
    echo "<input type='text' name='sugar' value='" . $rest["sugar"] . "'>Max 20 Characters<br>";
    echo "<label>Fat (g): </label><br>";
    echo "<input type='text' name='fat' value='" . $rest["fat"] . "'>Max 20 Characters<br>";
    echo "<label>Protein (g): </label><br>";
    echo "<input type='text' name='protein' value='" . $rest["protein"] . "'>Max 20 Characters<br>";
    echo "<label>Carbs (g): </label><br>";
    echo "<input type='text' name='carbs' value='" . $rest["carbs"] . "'>Max 20 Characters<br>";
    echo "<input type='submit'>";
    echo "</form></body></html>";
?>