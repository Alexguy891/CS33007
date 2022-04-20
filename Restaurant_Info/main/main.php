<?php
    require "../config.php";

    $stmt = $pdo->query("SELECT rest_id, rest_name, type, 
        service, website_url, rest_desc FROM Restaurants");

    echo "<a href='../add/add_rest.php'>Click here to add a new restaurant</a>";

    while($row = $stmt->fetch()) {
        echo "<h2 class='rest_name'><a href='rest_details.php?restid="
            . urlencode($row["rest_id"]) . "'>" . $row["rest_name"] . "</a></h2>";
        echo "<p class = 'rest_details'>" . $row["rest_desc"] . "</p>";
        echo "<p class = 'rest_details'>" . $row["type"] . "</p>";
        echo "<p class = 'rest_details'>" . $row["service"] . "</p><br><br>";
    }
?>

<html>
    <head>
        <link rel="stylesheet" href="../styles.css">
    </head>
</html>