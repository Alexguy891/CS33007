<?php
    require "config.php";

    $stmt1 = $pdo->prepare("SELECT * FROM Users WHERE user_id = ?");
    $stmt1->execute([urldecode($_GET["custuser"])]);

    $cust = $stmt1->fetch();

    echo "<h1 class='cust_user'>@" . $cust["user_id"] . "</h1>";
    echo "<p class='cust_details'>Name: " . $cust["first_name"] . " "
        . $cust["last_name"] . "</p>";
    echo "<h3 class='sub_cust'>Contact Info</h3>";
    echo "<p class='cust_details'>Email: " . $cust["email"] . "</p>";
    echo "<p class='cust_details'>Phone: " . $cust["phone_number"] . " servings</p>";
    echo "<p class='cust_details'>Link: <a href='". $cust["blog_site"]
         . "'>" . $cust["blog_site"] . "</a></p>";
    echo "<h3 class='sub_cust'>Bio</h3>";
    echo "<p class='cust_desc'>" . $cust["bio_description"] . "</p>";
?>