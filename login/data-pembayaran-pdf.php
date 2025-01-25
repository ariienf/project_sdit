<?php
require 'dompdf/autoload.inc.php';

use Dompdf\Dompdf;

// Debugging: Tampilkan error
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Konfigurasi database
$host = 'localhost';
$dbname = 'project_sdit';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}

// Query untuk mengambil data
$sql = "SELECT * FROM pembayaran";
$stmt = $pdo->query($sql);
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Membuat objek Dompdf
$dompdf = new Dompdf();

// Membuat konten HTML
$html = '<h1>Data Pembayaran</h1>';
$html .= '<table border="1" width="100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Lengkap</th>
                    <th>Email</th>
                    <th>Nomor Rekening</th>
                    <th>Metode Pembayaran</th>
                </tr>
            </thead>
            <tbody>';

foreach ($data as $row) {
    $html .= '<tr>
                <td>' . $row['id'] . '</td>
                <td>' . $row['nama_lengkap'] . '</td>
                <td>' . $row['email'] . '</td>
                <td>' . $row['nomor_rekening'] . '</td>
                <td>' . $row['metode_pembayaran'] . '</td>
              </tr>';
}

$html .= '  </tbody>
          </table>';

// Debugging: Periksa HTML
// echo $html;
// exit;

// Memuat konten HTML ke Dompdf
$dompdf->loadHtml($html);

// (Opsional) Mengatur ukuran kertas dan orientasi
$dompdf->setPaper('A4', 'landscape');

// Merender HTML ke PDF
$dompdf->render();

// Menghapus output buffer (jika ada)
ob_clean();

// Mengirimkan file PDF ke browser untuk diunduh
$dompdf->stream("data_pembayaran.pdf", array("Attachment" => 0));
?>
