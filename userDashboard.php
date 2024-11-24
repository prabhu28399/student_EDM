<?php
session_start(); // Start the session

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // If not, redirect to login page
    header("Location: userLogin.php");
    exit();
}

echo "<h1>Welcome, " . $_SESSION['username'] . "!</h1>";
echo "<p>You are now logged in.</p>";

// Add your dashboard content here

?>
