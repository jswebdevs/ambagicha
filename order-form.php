<?php

$servername = "premium209.web-hosting.com";
$username = "nonakept_amadmin";
$password = "AmBagicha!717";
$dbname = "nonakept_ambagicha";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $product = $_POST['product'];
    $quantity = $_POST['quantity'];
    $address = $_POST['address'];

    $to = 'order@ambagica.com';
    $subject = 'New Order';
    $message = "Name: $name\nEmail: $email\nPhone: $phone\nProduct: $product\nQuantity: $quantity\nAddress: $address";

    $sql = "INSERT INTO your_table_name (name, email, phone, product_name, product_quantity, address) 
    VALUES ('$name', '$email', '$phone', '$product', '$quantity', '$address')";

    if(mail($to, $subject, $message) && $conn->query($sql) === TRUE) {
        echo 'Thank you for your order!';
    } else {
        echo 'There was a problem submitting your order. Please try again later.';
    }

}
?>
