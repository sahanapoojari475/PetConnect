<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve customer details from the form
    $petId = $_POST['petId'];
    $customerName = $_POST['customerName'];
    $phoneNumber = $_POST['phoneNumber'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $orderType = $_POST['orderType'];
    $quantity = $_POST['quantity'];

    // Insert customer details into the 'customer' table
    //$orderdb = "INSERT INTO orderdb ('name', phone_number, email, address) VALUES ('$customerName', '$phoneNumber', '$email', '$address')";
    //$orderdbResult = mysqli_query($conn, $customerSql);

    // Insert order details into the 'orders' table
    $orderdbSql = "INSERT INTO orders (pet_id, customer_id, order_type, quantity) VALUES ('$petId', LAST_INSERT_ID(), '$orderType', '$quantity')";
    $orderResult = mysqli_query($conn, $orderSql);

    if ( $orderdbResult) {
        echo "Order placed successfully!";
        // Add any additional logic or notifications here
    } else {
        echo "Failed to place order.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Buy Now</title>
<style>
/* Styles for modal */
.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.4);
}

.modal-content {
    background-color: #fefefe;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* Close button style */
.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}
</style>
</head>
<body>

<!-- Button to trigger modal -->
<button onclick="openModal()">Buy Now</button>

<!-- Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close" onclick="closeModal()">&times;</span>
    <h2>Enter Your Details</h2>
    <form id="orderForm">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" required><br><br>
        <button type="submit">Submit Order</button>
        <alert>"Your order is placed"</alert>
    </form>
  </div>

</div>

<script>
// Function to open modal

    function addToCart(petDetails) {
        // Open the modal
        openModal();

        // Fill the modal form with pet details
        document.getElementById('petIdInput').value = petDetails;
        // Add other fields as needed
    }

    function openModal() {
        document.getElementById("myModal").style.display = "block";
    }

    function closeModal() {
        document.getElementById("myModal").style.display = "none";
    }

    // Function to handle form submission
    document.getElementById("orderForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent form submission
        var formData = new FormData(document.getElementById("orderForm"));
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == XMLHttpRequest.DONE) {
                if(xhr.status == 200) {
                    alert(xhr.responseText);
                    closeModal(); // Close the modal after order placement
                } else {
                    alert("Error: " + xhr.statusText);
                }
            }
        };
        xhr.open("POST", "process_order.php", true);
        xhr.send(formData);
    });
</script>



</body>
</html>