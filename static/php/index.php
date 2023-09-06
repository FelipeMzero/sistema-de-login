<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Replace this with your actual authentication logic
    if ($username === "your_username" && $password === "your_password") {
        // Access granted
        $message = "Acesso Autorizado";
    } else {
        // Access denied
        $message = "Acesso Negado";
    }

    // Redirect back to the login page with the result
    header("Location: index.html?message=" . urlencode($message));
    exit;
} else {
    // If the form was not submitted via POST, redirect to the login page
    header("Location: index.html");
    exit;
}
?>
