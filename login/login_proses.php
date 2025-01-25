<?php
// Start the session
session_start();

// Include the database connection file
require 'database.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve and sanitize form inputs
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Query the database to check the credentials
    $query_sql = "SELECT * FROM user WHERE email = '$email'";
    $result = mysqli_query($conn, $query_sql);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        // Verify the password
        if (password_verify($password, $user['password'])) {
            // Password is correct, start a new session and save user info
            $_SESSION['email'] = $user['email'];
            $_SESSION['nama'] = $user['nama'];
            $_SESSION['loggedin'] = true;

            // Redirect to the dashboard
            header("Location: beranda.php");
            exit;
        } else {
            // Invalid password
            echo "<script>alert('Password salah!'); window.location.href='login.html';</script>";
        }
    } else {
        // No user found with that email
        echo "<script>alert('Email tidak ditemukan!'); window.location.href='login.html';</script>";
    }
} else {
    // If the form is not submitted, redirect to the login page
    header("Location: login.html");
    exit;
}
?>
