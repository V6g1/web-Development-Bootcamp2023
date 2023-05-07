<?php
  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: YourWebsite'; 
    $to = 'youremail@example.com'; 
    $subject = 'Hello';
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
 
    if (mail ($to, $subject, $body, $from)) { 
        echo '<p>Your message has been sent!</p>';
    } else { 
        echo '<p>Something went wrong, go back and try again!</p>'; 
    }
  }
?>

<form method="post" action="emailform.php">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name">

    <label for="email">Email address:</label>
    <input type="email" id="email" name="email">

    <label for="message">Message:</label>
    <textarea id="message" name="message"></textarea>

    <input type="submit" value="Submit" name="submit">
</form>
