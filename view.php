<?php
echo "<h2>List of Donors</h2>";
echo "<pre>";

if(file_exists("donations.txt")){
    echo file_get_contents("donations.txt");
} else {
    echo "No donors found yet.";
}

echo "</pre>";
?>