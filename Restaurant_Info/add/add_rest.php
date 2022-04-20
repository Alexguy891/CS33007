<?php
    echo "<h1>Add a restaurant!</h1>";
    echo "<form action='../submit/rest_add_submit.php' method='post'>";
    echo "<label>ID: </label><br>";
    echo "<input type='text' name='rest_id'>Max 10 Characters<br>";
    echo "<label>Name: </label><br>";
    echo "<input type='text' name='rest_name'>Max 20 Characters<br>";
    echo "<label>Description: </label><br>";
    echo "<textarea name='rest_desc'></textarea>Max 300 Characters<br>";
    echo "<label>Website Url: </label><br>";
    echo "<input type='text' name='website_url'>Max 50 Characters<br>";
    echo "<label>Phone number (XXX-XXX-XXXX): </label><br>";
    echo "<input type='text' name='phone_number'>Max 11 Characters<br>";
    echo "<label>Type: </label><br>";
    echo "<input type='text' name='type'>Max 20 Characters<br>";
    echo "<label>Service: </label><br>";
    echo "<input type='text' name='service'>Max 20 Characters<br>";
    echo "<label>Street: </label><br>";
    echo "<input type='text' name='rest_street'>Max 20 Characters<br>";
    echo "<label>City: </label><br>";
    echo "<input type='text' name='rest_city'>Max 20 Characters<br>";
    echo "<label>State: </label><br>";
    echo "<input type='text' name='rest_state'>Max 20 Characters<br>";
    echo "<label>Zip: </label><br>";
    echo "<input type='text' name='rest_zip'>Max 5 Characters<br>";
    echo "<input type='submit'>";
    echo "</form></body></html>";
?>