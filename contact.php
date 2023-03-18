<?php

include('header.php');
// check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // retrieve the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // do something with the form data (e.g. send an email)
    // ...

    // redirect to a thank-you page
    header('Location: thank-you.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
</head>
<body>
<h1>Contact Us</h1>

<form method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="message">Message:</label>
    <textarea id="message" name="message" required></textarea>

    <button type="submit">Submit</button>
</form>
</body>
</html>