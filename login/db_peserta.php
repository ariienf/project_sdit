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
    echo "<script>window.alert('Anda sudah terdaftar.')
    window.location='prosesdaftar.php'</script>";
    exit;
}

// Get form data
$NIK = $_POST["NIK"];
$nama = $_POST["nama"];
$panggilan = $_POST["panggilan"];
$jenis_kelamin = $_POST["jenis_kelamin"];
$tmpt_lahir = $_POST["tmpt_lahir"];
$tgl_lahir = $_POST["tgl_lahir"];
$golongan = $_POST["golongan"];
$penyakit = $_POST["penyakit"];
$alamat = $_POST["alamat"];
$nomor = $_POST["nomor"];
$sekolah_asal = $_POST["sekolah_asal"];
$upload_foto = $_POST["upload_foto"];

// Insert data into database
$insertQuery = "INSERT INTO pendaftaran (email, NIK, nama, panggilan, jenis_kelamin, tmpt_lahir, tgl_lahir, golongan, penyakit, alamat, nomor, sekolah_asal, upload_foto) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($insertQuery);
$stmt->bind_param("sssssssssssss", $email, $NIK, $nama, $panggilan, $jenis_kelamin, $tmpt_lahir, $tgl_lahir, $golongan, $penyakit, $alamat, $nomor, $sekolah_asal, $upload_foto);

if ($stmt->execute()) {
    echo "<script>window.alert('Data Siswa Berhasil disimpan')
    window.location='prosesdaftar.php'</script>";
    exit;
} else {
    echo "Data Ada Yang Salah: " . $stmt->error;
    exit;
}

$stmt->close();
$conn->close();
?>
