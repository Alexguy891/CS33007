<?php
    require "../config.php";

    $stmt1 = $pdo->prepare("SELECT * FROM Restaurants WHERE rest_id = ?");
    $stmt1->execute([urldecode($_GET["restid"])]);
    $rest = $stmt1->fetch();

    echo "<h1>Edit " . $rest["rest_name"] . "</h1>";
    echo "<html><body><form action='../submit/rest_submit.php' method='post'>";
    echo "<label>ID: </label><br>";
    echo "<input type='text' name='rest_id' value='" . $rest["rest_id"] . "'readonly>(Read only)<br>";
    echo "<label>Name: </label><br>";
    echo "<input type='text' name='rest_name' value='" . $rest["rest_name"] . "'>Max 20 Characters<br>";
    echo "<label>Description: </label><br>";
    echo "<textarea name='rest_desc'>" . $rest["rest_desc"] . "</textarea>Max 300 Characters<br>";
    echo "<label>Website Url: </label><br>";
    echo "<input type='text' name='website_url' value='" . $rest["website_url"] . "'>Max 50 Characters<br>";
    echo "<label>Phone Number (XXX-XXX-XXXX): </label><br>";
    echo "<input type='text' name='phone_number' value='" . $rest["phone_number"] . "'>Max 11 Characters<br>";
    echo "<label>Type: </label><br>";
    echo "<input type='text' name='type' value='" . $rest["type"] . "'>Max 20 Characters<br>";
    echo "<label>Service: </label><br>";
    echo "<input type='text' name='service' value='" . $rest["service"] . "'>Max 20 Characters<br>";
    echo "<label>Street: </label><br>";
    echo "<input type='text' name='rest_street' value='" . $rest["rest_street"] . "'>Max 20 Characters<br>";
    echo "<label>City: </label><br>";
    echo "<input type='text' name='rest_city' value='" . $rest["rest_city"] . "'>Max 20 Characters<br>";
    echo "<label>State: </label><br>";
    echo "<input type='text' name='rest_state' value='" . $rest["rest_state"] . "'>Max 20 Characters<br>";
    echo "<label>Zip: </label><br>";
    echo "<input type='text' name='rest_zip' value='" . $rest["rest_zip"] . "'>Max 5 Characters<br>";
    echo "<input type='submit'>";
    echo "</form></body></html>";
?>