<?php

    require "../config.php";

    $stmt = $pdo->prepare("SELECT rest_id, rest_name FROM Restaurants WHERE rest_id = ?");
    $stmt->execute([urldecode($_GET["restid"])]);
    $rest = $stmt->fetch();

    echo "<h1>Add food for " . $rest["rest_name"] . "!</h1>";
    echo "<form action='../submit/food_add_submit.php' method='post'>";
    echo "<label>Restaurant ID: </label>";
    echo "<input type='text' name='rest_id' value='" . $rest["rest_id"] . "' readonly><br>";
    echo "<label>Food ID: </label><br>";
    echo "<input type='text' name='food_id'>Max 10 Characters<br>";
    echo "<label>Name: </label><br>";
    echo "<input type='text' name='food_name'>Max 20 Characters<br>";
    echo "<label>Description: </label><br>";
    echo "<textarea name='description'></textarea>Max 300 Characters<br>";
    echo "<label>Category: </label><br>";
    echo "<input type='text' name='food_category'>Max 50 Characters<br>";
    echo "<label>Price: </label><br>";
    echo "<input type='text' name='price'>Max 20 Characters<br>";
    echo "<label>Serving Size: </label><br>";
    echo "<input type='text' name='serving_size'>Max 20 Characters<br>";
    echo "<label>Servings per item: </label><br>";
    echo "<input type='text' name='serving_amount'>Max 20 Characters<br>";
    echo "<label>Calories: </label><br>";
    echo "<input type='text' name='calories'>Max 20 Characters<br>";
    echo "<label>Sodium (mg): </label><br>";
    echo "<input type='text' name='sodium'>Max 20 Characters<br>";
    echo "<label>Sugar (g): </label><br>";
    echo "<input type='text' name='sugar'>Max 20 Characters<br>";
    echo "<label>Fat (g): </label><br>";
    echo "<input type='text' name='fat'>Max 20 Characters<br>";
    echo "<label>Protein (g): </label><br>";
    echo "<input type='text' name='protein'>Max 20 Characters<br>";
    echo "<label>Carbs (g): </label><br>";
    echo "<input type='text' name='carbs'>Max 20 Characters<br>";
    echo "<input type='submit'>";
    echo "</form></body></html>";
?>