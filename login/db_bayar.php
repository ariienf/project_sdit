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
    $checkRequirementsQuery = "SELECT * FROM pembayaran WHERE id_peserta = ?";
    $stmt = $conn->prepare($checkRequirementsQuery);
    $stmt->bind_param("i", $id_peserta);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<script>window.alert('Anda sudah melakukan pembayaran. ')
        window.location='prosesbayar.php'</script>";
        exit;
    } else {
        $nama_lengkap = $_POST["nama_lengkap"];
        $nomor_rekening = $_POST["nomor_rekening"];
        $metode_pembayaran = $_POST["metode_pembayaran"];
        $upload_bukti = $_POST["upload_bukti"];

        // Insert requirements data into database
        $insertRequirementsQuery = "INSERT INTO pembayaran (id_peserta,email,nama_lengkap,nomor_rekening,metode_pembayaran,upload_bukti) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($insertRequirementsQuery);
        $stmt->bind_param("isssss", $id_peserta, $email, $nama_lengkap, $nomor_rekening, $metode_pembayaran, $upload_bukti,);
        $stmt->execute();

        echo "<script>window.alert('Data Pembayaran Berhasil disimpan')
        window.location='prosesbayar.php'</script>";
        exit;
    }
} else {
    echo "Tidak dapat menemukan data pengguna.";
    exit;
}
?>