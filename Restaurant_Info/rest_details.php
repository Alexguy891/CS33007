<?php
    require "config.php";

    $stmt1 = $pdo->prepare("SELECT * FROM restaurants WHERE Restaurant_ID = ?");
    $stmt1->execute([urldecode($_GET["restid"])]);
    $stmt2 = $pdo->prepare("SELECT * FROM menu WHERE Restaurant_ID = ?");
    $stmt2->execute([urldecode($_GET["restid"])]);

    $rest = $stmt1->fetch();

    echo "<h1 class='rest_name'>" . $rest["Restaurant_Name"] . "</h3>";
    echo "<p class='rest_details'>" . $rest["Website"] . "</p>";
    echo "<p class='rest_details'>" . $rest["Type"] . " " . $rest["Service"] . "</p>";
    echo "<p class='rest_details'>" . $rest["Restaurant_street"] . ", " . $rest["Restaurant_city"]
         . ", " . $rest["Restaurant_state"] . " " . $rest["Restaurant_zip"];

    while($row = $stmt2->fetch()) {
        echo "<h3 class='food_name'><a href='food_details.php?foodid=" 
            . urlencode($row["Food_ID"]) . "'>" . $row["Food_name"] . "</a></h3>";
        echo "<p class='food_details'>" . $row["Food_name"] . "</p>";
        echo "<p class='food_details'>" . $row["Category"] . "</p>";
        echo "<p class='food_details'>$" . $row["Price"] . "</p>";
        echo "<p class='food_desc'>" . $row["Description"] . "</p>";
    }
?>
<html>
    <head>
        <link rel="stylesheet" href="styles.css">
    </head>
</html>