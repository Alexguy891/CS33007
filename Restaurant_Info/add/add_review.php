<?php

    require "../config.php";

    $stmt = $pdo->prepare("SELECT rest_id, rest_name FROM Restaurants WHERE rest_id = ?");
    $stmt->execute([$_GET["restid"]]);
    $rest = $stmt->fetch();

    echo "<h1>Add review for " . $rest["rest_name"] . "!</h1>";
    echo "<form action='../submit/review_add_submit.php' method='post'>";
    echo "<label>Restaurant ID: </label>";
    echo "<input type='text' name='rest_id' value='" . $rest["rest_id"] . "' readonly><br>";
    echo "<label>Review ID: </label><br>";
    echo "<input type='text' name='review_id'>Max 10 Characters<br>";
    echo "<h3>Contact Info:</h3>";
    echo "<label>Username: </label><br>";
    echo "<input type='text' name='user_id'>Max 15 Characters<br>";
    echo "<label>First name: </label><br>";
    echo "<input type='text' name='first_name'>Max 20 Characters<br>";
    echo "<label>Last name: </label><br>";
    echo "<input type='text' name='last_name'>Max 20 Characters<br>";
    echo "<label>Phone number (XXX-XXX-XXXX): </label><br>";
    echo "<input type='text' name='phone_number'>Max 11 Characters<br>";
    echo "<label>Email: </label><br>";
    echo "<input type='text' name='email'>Max 50 Characters<br>";
    echo "<label>Blog/Website URL: </label><br>";
    echo "<input type='text' name='blog_site'>Max 20 Characters<br>";
    echo "<label>Bio: </label><br>";
    echo "<textarea name='bio_description'></textarea>Max 300 Characters<br>";
    echo "<h3>Review Info:</h3>";
    echo "<label>Title: </label><br>";
    echo "<input type='text' name='review_title'>Max 20 Characters<br>";
    echo "<label>Month: </label><br>";
    echo "<input type='text' name='month'>(1-12)<br>";
    echo "<label>Day: </label><br>";
    echo "<input type='text' name='day'>(1-31)<br>";
    echo "<label>Year (XXXX): </label><br>";
    echo "<input type='text' name='year'>Max 4 Characters<br>";
    echo "<label>Food Rating: </label><br>";
    echo "<input type='text' name='food_rating'>Max 5 Characters<br>";
    echo "<label>Price Rating: </label><br>";
    echo "<input type='text' name='price_rating'>Max 5 Characters<br>";
    echo "<label>Service Rating: </label><br>";
    echo "<input type='text' name='service_rating'>Max 5 Characters<br>";
    echo "<label>Review details: </label><br>";
    echo "<textarea name='review_description'></textarea>Max 200 Characters<br>";
    echo "<input type='submit'>";
    echo "</form></body></html>";
?>