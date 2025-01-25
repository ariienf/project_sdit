<?php
include "database.php";

// Get user input from POST request
$nama = $_POST["nama"];
$email = $_POST["email"];
$password = $_POST["password"];

// Hash the password before storing it in the database
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Prepare an SQL statement to prevent SQL injection
$query = "INSERT INTO user (nama, email, password) VALUES (?, ?, ?)";
$stmt = $conn->prepare($query);

// Bind parameters to the SQL query
$stmt->bind_param("sss", $nama, $email, $hashed_password);

// Execute the query and check if it was successful
if ($stmt->execute()) {
    echo "<script>
            window.alert('Pendaftaran Member Berhasil');
            window.location='login.html';
          </script>";
    exit;
} else {
    echo "Data Ada Yang Salah";
    exit;
}

// Close the statement and the database connection
$stmt->close();
$conn->close();
?>
