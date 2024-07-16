<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate and sanitize input (you may need more validation depending on your requirements)
    
    $Name = mysqli_real_escape_string($conn, $_POST['name']);
    $Email = mysqli_real_escape_string($conn, $_POST['email']);
    $Address = mysqli_real_escape_string($conn, $_POST['address']);
    $OrderType = mysqli_real_escape_string($conn, $_POST['order_type']); // Corrected the variable name
    $Quantity = mysqli_real_escape_string($conn, $_POST['quantity']);
    
    // Perform database insertion using prepared statement
    $stmt = mysqli_prepare($conn, "INSERT INTO orderdb (name, email, address, order_type, quantity) VALUES (?, ?, ?, ?, ?)");

    if ($stmt) {
        // Bind parameters
        mysqli_stmt_bind_param($stmt, "ssssi", $Name, $Email, $Address, $OrderType, $Quantity);

        // Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            echo "Order placed successfully!";
            // Add any additional logic or notifications here
        } else {
            echo "Failed to place order. Error: " . mysqli_error($conn);
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Failed to prepare statement. Error: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request method.";
}
?>
