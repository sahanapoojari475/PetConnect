<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Petshop</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background-image: url("dash.png");
            background-size: cover;
        }

        

        .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 35px;
            font-weight: bold;
        }

        .topnav-right {
            float: right;
            text-align: center;
        }
        .button-container {
        display: flex;
        justify-content: flex-start; /* Align buttons to the left */
        align-items: center;
        width: 100%;
        margin-top: 10px; /* Adjust the margin as needed */
    }

    .button {
        background-color: rgba(76, 175, 80, 0.7);
        border: none;
        color: white;
        padding: 20px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 8px;
        border-radius: 50%;
        overflow: hidden;
        -webkit-transition-duration: 0.2s;
        transition-duration: 0.2s;
        cursor: pointer;
    }

    .button:hover {
        background-color: rgba(76, 175, 80, 1);
    }


        .screen {
            background-image: url('aaron.jpg');
            background-size: cover;
            width: 100%;
            height: 600px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .button1,
        .button2,
        .button3,
        .button4,
        .button5 {
            margin-right: 10px;
            top:10px;
        }

        .topnav {
            height: auto;
        }

        .topnav a {
            padding: 8px 16px;
        }

        .title {
            background-color: #3498db;
            color: #ffffff;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="topnav">
        <a class="active" href="dashboard.php"></a>
        <a href="dashboard.php">Dashboard</a>
       
    </div>

    <div class="screen">
        <form align="center">
            <button class="button button1" type="submit" formaction="animals.php">Animals</button>
            <button class="button button2" type="submit" formaction="birds.php">Birds</button>
            <button class="button button3" type="submit" formaction="petproducts.php">Products</button>
            <button class="button button4" type="submit" formaction="sales.php">Sales Details</button>
            <button class="button button5" type="submit" formaction="customer.php">Customer</button>
        </form>
    </div>

</body>

</html>
