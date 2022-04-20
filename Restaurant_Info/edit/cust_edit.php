<?php
    require "../config.php";

    $stmt1 = $pdo->prepare("SELECT * FROM Users WHERE user_id = ?");
    $stmt1->execute([urldecode($_GET["custuser"])]);
    $rest = $stmt1->fetch();
    
    echo "<h1>Editing @" . $rest["user_id"] . "</h1>";
    echo "<form action='../submit/cust_submit.php' method='post'>";
    echo "<label>Username: </label><br>";
    echo "<input type='text' name='user_id' value='" . $rest["user_id"] . "' readonly><br>";
    echo "<label>First name: </label><br>";
    echo "<input type='text' name='first_name' value='" . $rest["first_name"] . "'>Max 20 Characters<br>";
    echo "<label>Last name: </label><br>";
    echo "<input type='text' name='last_name' value='" . $rest["last_name"] . "'>Max 20 Characters<br>";
    echo "<label>Phone number (XXX-XXX-XXXX): </label><br>";
    echo "<input type='text' name='phone_number' value='" . $rest["phone_number"] . "'>Max 50 Characters<br>";
    echo "<label>Email: </label><br>";
    echo "<input type='text' name='email' value='" . $rest["email"] . "'>Max 50 Characters<br>";
    echo "<label>Blog/Website URL: </label><br>";
    echo "<input type='text' name='blog_site' value='" . $rest["blog_site"] . "'>Max 50 Characters<br>";
    echo "<label>Bio: </label><br>";
    echo "<textarea name='bio_description'>" . $rest["bio_description"] . "</textarea>Max 300 Characters<br>";
    echo "<input type='submit'>";
    echo "</form></body></html>";
?>