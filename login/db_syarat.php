<?php
include "database.php";
session_start();

// Check if user is logged in
if (!isset($_SESSION['email'])) {
    header("Location: login.html");
    exit;
}

$email = $_SESSION['email'];

// Check if the user has already registered
$checkQuery = "SELECT * FROM pendaftaran WHERE email = ?";
$stmt = $conn->prepare($checkQuery);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $id_peserta = $row['id_peserta'];

    // Check if the user has already submitted requirements
    $checkRequirementsQuery = "SELECT * FROM persyaratan WHERE id_peserta = ?";
    $stmt = $conn->prepare($checkRequirementsQuery);
    $stmt->bind_param("i", $id_peserta);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<script>window.alert('Anda sudah mengirimkan persyaratan.')
        window.location='prosessyarat.php'</script>";
        exit;
    } else {
        $upload_kk = $_POST["upload_kk"];
        $upload_akte = $_POST["upload_akte"];
        $upload_ktp = $_POST["upload_ktp"];

        // Insert requirements data into database
        $insertRequirementsQuery = "INSERT INTO persyaratan (id_peserta, email, upload_kk, upload_akte, upload_ktp) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($insertRequirementsQuery);
        $stmt->bind_param("issss", $id_peserta, $email, $upload_kk, $upload_akte, $upload_ktp);
        $stmt->execute();

        echo "<script>window.alert('Data Persyaratan Berhasil disimpan')
        window.location='prosessyarat.php'</script>";
        exit;
    }
} else {
    echo "Tidak dapat menemukan data pengguna.";
    exit;
}
?>