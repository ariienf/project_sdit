<?php
require 'database.php';

$email = $_POST["email"];
$password = $_POST["password"];

$query_sql = "SELECT * FROM user WHERE email = ?";

$stmt = $conn->prepare($query_sql);
$stmt->bind_param("s", $email);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {
        session_start();
        $_SESSION['email'] = $user['email']; // Set session variable
        header("Location: beranda.php");
    } else {
        echo "<center><h1>Email atau Password Anda Salah. Silahkan Coba Login Kembali. </h1>
                <button><strong><a href='login.html'>Login</a></strong></button></center>";
    }
} else {
    echo "<center><h1>Email atau Password Anda Salah. Silahkan Coba Login Kembali. </h1>
            <button><strong><a href='login.html'>Login</a></strong></button></center>";
}

$stmt->close();
$conn->close();
?>
