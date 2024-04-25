<?php
// action_page.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST["email"];
    $password = $_POST["psw"];

    // Validate input (you can add more validation logic here)

    // Process the form data (e.g., save to a database, send emails, etc.)
    // For demonstration purposes, let's just echo the submitted email
    echo "Submitted email: " . $email;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Action Page</title>
    <!-- Add your CSS styles here -->
</head>
<body>
    <!-- Your HTML content (if needed) -->
</body>
</html>
