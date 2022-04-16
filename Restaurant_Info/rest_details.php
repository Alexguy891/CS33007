<?php
    require "config.php";

    $stmt1 = $pdo->prepare("SELECT * FROM restaurants WHERE Restaurant_ID = ?");
    $stmt1->execute([urldecode($_GET["restid"])]);

    $stmt2 = $pdo->prepare("SELECT * FROM menu WHERE Restaurant_ID = ?");
    $stmt2->execute([urldecode($_GET["restid"])]);

    $stmt3 = $pdo->prepare("SELECT * FROM reviews WHERE Restaurant_ID = ?");
    $stmt3->execute([urldecode($_GET["restid"])]);

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

    while($row = $stmt3->fetch()) {
        echo "<h3 class='review_title'>" . $rows["Title"] . "</h3>";
        echo "<p class='review_cust'><a href='customer_details.php?custuser=" 
            . urlencode($row["Customer_user"]) . "'>by @" . $row["Customer_name"] . "</a></p>";
        echo "<p class='review_details'>" . $row["Month"] . "/" . $row["Day"] . "/"
            . $row["Year"] . "</p>";
        echo "<p class='review_details'>Price: " . $row["Price_rating"] . "/5</p>";
        echo "<p class='review_details'>Food: " . $row["Food_rating"] . "/5</p>";
        echo "<p class='review_details'>Service: " . $row["Service_rating"] . "/5</p>";
        echo "<p class='review_desc'>" . $row["Description"] . "</p>";
    }
?>
<html>
    <head>
        <link rel="stylesheet" href="styles.css">
    </head>
</html>