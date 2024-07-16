<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $petId = $_POST['petId'];
    // Retrieve other user details from $_POST

    // Perform database update
    $sql = "INSERT INTO cart (pet_id, user_name, user_address, user_contact) VALUES ('$petId', '$userName', '$userAddress', '$userContact')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Item added to cart successfully!";
        // Send a notification to the admin about the new order
        // You can use a mail function or any other notification method here
    } else {
        echo "Failed to add item to cart.";
    }
}
?>
