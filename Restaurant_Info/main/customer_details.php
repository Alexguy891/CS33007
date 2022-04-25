<?php
    require "../config.php";

    $stmt1 = $pdo->prepare("SELECT * FROM Users WHERE user_id = ?");
    $stmt1->execute([urldecode($_GET["custuser"])]);

    $cust = $stmt1->fetch();
    echo "<a href='../main/main.php'>Home</a><br>";

    echo "<a href='../edit/cust_edit.php?custuser=" . $_GET["custuser"] . "'>Click to edit customer details</a>";
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

<html>
    <head>
        <link rel="stylesheet" href="../styles.css">
    </head>
</html>