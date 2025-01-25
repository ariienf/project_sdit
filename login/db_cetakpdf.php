<?php
require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;

session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.html");
    exit;
}

// Konfigurasi koneksi database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project_sdit";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil email pengguna yang login
$email = $_SESSION['email'];

// Query untuk mengambil data pembayaran berdasarkan email pengguna
$sql = "SELECT * FROM pembayaran WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Data pembayaran ditemukan
    $row = $result->fetch_assoc();

    // Buat HTML untuk PDF
    $html = '
    <html>
    <head>
        <style>
            body { font-family: helvetica, sans-serif; }
            .header { text-align: center; }
            .title { font-size: 24px; font-weight: bold; }
            .sub-title { font-size: 18px; margin-bottom: 20px; }
            .table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
            .table th, .table td { border: 1px solid #000; padding: 10px; text-align: center; }
            .footer { text-align: center; margin-top: 20px; }
            .image { text-align: center; }
        </style>
    </head>
    <body>
        <div class="header">
            <div class="title">BUKTI PEMBAYARAN</div>
            <div class="sub-title">SDIT Mutiara Islam</div>
        </div>
        <div class="header">
            <div class="sub-title">SILAHKAN CETAK BUKTI PEMBAYARAN INI</div>
            <div class="sub-title">UNTUK DISERAHKAN KE ADMIN SEKOLAH</div>
        </div>
        <br>
        <table class="table">
            <tr>
                <th>Nama Lengkap</th>
                <th>Nomor Rekening</th>
                <th>Metode Pembayaran</th>
            </tr>
            <tr>
                <td>' . $row['nama_lengkap'] . '</td>
                <td>' . $row['nomor_rekening'] . '</td>
                <td>' . $row['metode_pembayaran'] . '</td>
            </tr>
        </table>
        <br>
        <div class="footer">
            <p>&copy; ' . date('Y') . ' SDIT Mutiara Islam. All Rights Reserved.</p>
        </div>
    </body>
    </html>';

    // Buat objek Dompdf
    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);

    // (Opsional) Atur ukuran dan orientasi kertas
    $dompdf->setPaper('A4', 'portrait');

    // Render HTML menjadi PDF
    $dompdf->render();

    // Output PDF
    $dompdf->stream('konfirmasi_pembayaran.pdf', array("Attachment" => 0));
} else {
    echo "Data pembayaran tidak ditemukan.";
}

// Tutup koneksi database
$conn->close();
?>
