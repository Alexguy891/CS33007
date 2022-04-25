<?php
    require "../config.php";

    $stmt1 = $pdo->prepare("SELECT * FROM Restaurants WHERE rest_id = ?");
    $stmt1->execute([urldecode($_GET["restid"])]);

    $stmt2 = $pdo->prepare("SELECT * FROM Food WHERE rest_id = ?");
    $stmt2->execute([urldecode($_GET["restid"])]);

    $stmt3 = $pdo->prepare("SELECT * FROM Review WHERE rest_id = ?");
    $stmt3->execute([urldecode($_GET["restid"])]);

    $rest = $stmt1->fetch();
    echo "<a href='../main/main.php'>Home</a><br>";

    echo "<a href='../edit/rest_edit.php?restid=" . $_GET["restid"] . "'>Click to edit restaurant details</a>";
    echo "<h1 class='rest_name'>" . $rest["rest_name"] . "</h3>";
    echo "<p class='rest_details'><a href='" . $rest["website_url"] . "'>". $rest["website_url"]
         . "</a></p>";
    echo "<p class='rest_details'>" . $rest["phone_number"] . "</p>";
    echo "<p class='rest_details'>" . $rest["type"] . " " . $rest["service"] . "</p>";
    echo "<p class='rest_details'>" . $rest["rest_street"] . ", " . $rest["rest_city"]
         . ", " . $rest["rest_state"] . " " . $rest["rest_zip"];

    echo "<br><h2 class='section_title'>Menu</h2>";
    $restid = $_GET["restid"];
    echo "<a href='../add/add_food.php?restid=" . urlencode($restid) . "'>Click here to add food</a><br>";

    while($row = $stmt2->fetch()) {
        echo "<h3 class='food_name'><a href='food_details.php?foodid=" 
            . urlencode($row["food_ID"]) . "'>" . $row["food_name"] . "</a></h3>";
        echo "<p class='food_details'>" . $row["food_category"] . "</p>";
        echo "<p class='food_details'>$" . $row["price"] . "</p>";
        echo "<p class='food_desc'>" . $row["description"] . "</p>";
    }

    echo "<br><h2 class='section_title'>Reviews</h2>";
    echo "<a href='../add/add_review.php?restid=" . $rest["rest_id"] . "'>Click to add a review</a>";
    
    while($row = $stmt3->fetch()) {
        echo "<h3 class='review_title'>" . $row["review_title"] . "</h3>";
        echo "<p class='review_cust'>by <a href='customer_details.php?custuser=" 
            . urlencode($row["user_id"]) . "'>@" . $row["user_id"] . "</a></p>";
        echo "<p class='review_details'>" . $row["month"] . "/" . $row["day"] . "/"
            . $row["year"] . "</p>";
        echo "<p class='review_details'>Price: " . $row["price_rating"] . "/5</p>";
        echo "<p class='review_details'>Food: " . $row["food_rating"] . "/5</p>";
        echo "<p class='review_details'>Service: " . $row["service_rating"] . "/5</p>";
        echo "<p class='review_desc'>" . $row["review_description"] . "</p><br>";
    }
?>
<html>
    <head>
        <link rel="stylesheet" href="../styles.css">
    </head>
</html>