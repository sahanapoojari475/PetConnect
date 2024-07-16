<?php
include('config.php');

$id = 0;
$sql = "SELECT * FROM availablepets ORDER BY pet_id DESC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Pet Store</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <!-- Include Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="col-md-12" style="background-color:#3498db ; border: solid #D9D9D9 1px; padding: 10px; padding-top: 5px; box-shadow: #9F9F9F 2px 3px 5px; margin-top: 10px; height:1800px;">
    <center><div class="panel panel-primary">
        <div class="panel-heading panel-title text-center wow fadeInDown">
            <span style="font-weight:bold; font-family:verdana; font-size:2em;"><i class="glyphicon glyphicon-list-alt"></i> Product List</span>
        </div><br>
       <center> <div class="panel-body" style="background-color:#ecf0f1 ;" >
            <table class="table table-responsive table-hover table-bordered table-condensed table-striped wow fadeInDown" width="100%">
                <thead>
                    <tr style="background-color:#2ecc71 ; color:#FFF;">
                    
                        <!-- <td style="text-align:center; width:auto;" class="wow fadeInDown">ID</td> -->
                        <td style="text-align:center; width:100px;" class="wow fadeInDown">BREED</td>
                        <td style="text-align:center; width:100%;" class="wow fadeInDown">DESCRIPTION</td>
                        <td style="text-align:center; width:50%;" class="wow fadeInDown">PRIZE</td>
                        <td style="text-align:center; width:100%;" class="wow fadeInDown">IMAGE</td>
                    </tr>
                </thead>
                <tbody>
               
                 <?php
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            // $id = $row['pet_id'];
                            $breed = $row['breed'];
                            $des = $row['description'];
                            $prize = $row['prize'];
                            $image = $row['image'];
                            ?>
                            <tr style="font-size:16px; cursor:pointer;">
                                <!-- <td class="wow fadeInDown"> <center><strong><?php echo $row['pet_id']; ?></strong></center></td> -->
                                <td class="wow fadeInDown"> <center><strong><?php echo $row['breed']; ?></strong></center></td>
                                <td class="wow fadeInDown" style="white-space: normal;"> <center><strong><?php echo $row['description']; ?></strong></center></td>
                                <td class="wow fadeInDown"> <center><strong><?php echo  $row['prize']; ?></strong></center></td>
                                <td class="wow fadeInDown">
                                    <center>
                                    <img src="<?php echo $row['image']; ?>" width="200px;" height="200px;" class="img-responsive img-rounded" 
                                    onclick="showFullImage('<?php echo $row['image']; ?>')" style="cursor: pointer;" />
                                        <button onclick='addToCart(<?php echo json_encode($row); ?>)'>Buy Now</button>
                                    </center>
                                </td>
                            </tr>
                        <?php }
                    }
                    ?>
              
                </tbody>
            </table>
        </div>
       </center>
    </div>
    </center>

    <!-- Bootstrap modal for customer details -->
    <div class="modal fade" id="addToCartModal" tabindex="-1" role="dialog" aria-labelledby="addToCartModalLabel">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addToCartModalLabel">Enter Your Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Include your customer details form here -->
                    <form id="orderForm" onsubmit="submitForm(event)">
                        <!-- <input type="hidden" id="petIdInput" name="petId" value=""> -->
                        <label for="Name">Name:</label>
                        <input type="text" id="name" name="name" required><br><br>
                        <!-- <label for="phoneNumber">Phone:</label> -->
                        <!-- <input type="tel" id="phoneNumber" name="phoneNumber" required><br><br> -->
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required><br><br>
                        <label for="address">Address:</label>
                        <input type="text" id="address" name="address" required><br><br>
                        
                        <label for="orderType">Order Type:</label>
<select id="orderType" name="order_type">
    <option value="pick-up">Pick-Up</option>
    <option value="deliver">Deliver</option>
</select><br><br>

                        
                        
                        <label for="quantity">Quantity:</label>
                        <input type="number" id="quantity" name="quantity" required><br><br>
                        <button type="submit">Submit Order</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap modal for customer details -->
<style>
    /* Add your custom styles for form fields here */
    #addToCartModal {
        text-align: center;
    }

    .modal-dialog {
        display: inline-block;
        text-align: left;
        vertical-align: middle;
    }

    .modal-content {
        display: inline-block;
        text-align: left;
        vertical-align: middle;
        background-color: bisque;
    }

    #orderForm {
        width: 400px;
        margin: auto;
        
    }

    label {
        display: block;
        margin-bottom: 8px;
        color:black;
    }

    input {
        width: 100%;
        padding: 8px;
        margin-bottom: 12px;
        box-sizing: border-box;
       
    }

    button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    button:hover {
        background-color: #45a049;
    }
</style>

</style>

<script>
    function showFullImage(imageUrl) {
        // Set the image source for the modal
        document.getElementById('fullImage').src = imageUrl;
        // Open the modal
        $('#fullImageModal').modal('show');
    }

    function addToCart(petDetails) {
        // Fill the modal form with pet details
        $('#petIdInput').val(petDetails.pet_id);
        // Open the modal
        $('#addToCartModal').modal('show');
    }

    function submitForm(event) {
        event.preventDefault(); // Prevent form submission

        // Handle form submission logic here
        var formData = new FormData(document.getElementById('orderForm'));

        // You can use XMLHttpRequest or fetch API for AJAX submission
        // Example using fetch API:
        fetch('process_order.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            alert(data);
            $('#addToCartModal').modal('hide'); // Close the modal after order placement
        })
        .catch(error => {
            alert('Error: ' + error);
        });
    }
</script>
</body>
</html>