<?php
    require "config.php";

    $stmt1 = $pdo->prepare("SELECT * FROM customers WHERE Customer_user = ?");
    $stmt1->execute([urldecode($_GET["custuser"])]);

    $cust = $stmt1->fetch();

    echo "<h1 class='cust_user'>@" . $cust["Customer_user"] . "</h1>";
    echo "<p class='cust_details'>Name: " . $cust["First_name"] . " "
        . $cust["Last_name"] . "</p>";
    echo "<h3 class='sub_cust'>Contact Info</h3>";
    echo "<p class='cust_details'>Email: " . $cust["Email"] . "</p>";
    echo "<p class='cust_details'>Phone: " . $cust["Phone"] . " servings</p>";
    echo "<p class='cust_details'>Link: <a href='". $cust["Website"]
         . "'>" . $cust["Website"] . "</a></p>";
    echo "<h3 class='sub_cust'>Bio</h3>";
    echo "<p class='cust_desc'>" . $cust["Description"] . "</p>";
?>