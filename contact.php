<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = 'shamithaachar770@gmail.com'; // Enter your email address here
    $subject = 'New message from your website';
    $body = "Name: $name \nEmail: $email \nMessage:\n$message";
    
    if (mail($to, $subject, $body)) {
        echo '<script>alert("Message sent successfully!");</script>';
    } else {
        echo '<script>alert("Sorry, an error occurred. Please try again later.");</script>';
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  
</head>
<body>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
  }
  
  header, footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px 0;
  }
  
  main {
    padding: 20px;
  }
  
  .contact-form {
    max-width: 600px;
    margin: 0 auto;
  }
  
  .contact-form h2 {
    margin-bottom: 20px;
  }
  
  .contact-form form {
    display: flex;
    flex-direction: column;
  }
  
  .contact-form label {
    margin-bottom: 5px;
  }
  
  .contact-form input[type="text"],
  .contact-form input[type="email"],
  .contact-form textarea {
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }
  
  .contact-form textarea {
    resize: vertical;
  }
  
  .contact-form button {
    padding: 10px 20px;
    background-color: #333;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
  
  .contact-form button:hover {
    background-color: #444;
  }
    </style>

  <header>
    <h1>Contact Us</h1>
  </header>

  <main>
    <section class="contact-form">
      <h2>Send us a Message</h2>
      <form action="#" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="5" required></textarea>

        <button type="submit">Send Message</button>
        
      </form>
    </section>
  </main>

  <footer>
    <p>Contact us for any inquiries or assistance.</p>
    <p>Email: shamithaachar770@gmail.com</p>
    <p>Phone:9686545647</p>
  </footer>

</body>
</html>