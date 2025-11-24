<?php
// 1. Get form values
$name = $_POST['name'];
$phone = $_POST['phone'];
$item = $_POST['item'];
$email = $_POST['email'];
$address = $_POST['address'];

// 2. Save data in a file
$file = fopen("donations.txt", "a");
fwrite($file, "Name: $name | Phone: $phone | Item: $item | Email: $email | Address: $address\n");
fclose($file);

// 3. Show message to the user
echo "Donation submitted successfully! <br><br>";
echo "<a href='view.php'>Click here to view all donors</a>";
?>