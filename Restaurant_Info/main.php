<?php
    require "config.php";

    $stmt = $pdo->query("SELECT Restaurant_ID, Restaurant_Name, Type, 
        Service, Website FROM restaurants");

    while($row = $stmt->fetch()) {
        echo "<h3 class='rest_name'><a href='rest_details.php?restid="
            . urlencode($row["Restaurant_ID"]) . "'>" . $row["Restaurant_Name"] . "</a></h3>";
        echo "<p class = 'rest_details'>" . $row["Description"] . "</p>";
        echo "<p class = 'rest_details'>" . $row["Type"] . "</p>";
        echo "<p class = 'rest_details'>" . $row["Service"] . "</p>";
    }
?>
<html>
    <head>
        <link rel="stylesheet" href="styles.css">
    </head>
</html>