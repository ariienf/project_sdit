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
$sql = "SELECT * FROM pendaftaran";
$stmt = $pdo->query($sql);
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Membuat objek Dompdf
$dompdf = new Dompdf();

// Membuat konten HTML
$html = '<h1>Data Pendaftaran</h1>';
$html .= '<table border="1" width="100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>NIK Anak</th>
                    <th>Nama Anak</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Nomor Orang Tua</th>
                    <th>Sekolah Asal</th>
                </tr>
            </thead>
            <tbody>';

foreach ($data as $row) {
    $html .= '<tr>
                <td>' . $row['id_peserta'] . '</td>
                <td>' . $row['email'] . '</td>
                <td>' . $row['NIK'] . '</td>
                <td>' . $row['nama'] . '</td>
                <td>' . $row['jenis_kelamin'] . '</td>
                <td>' . $row['tmpt_lahir'] . '</td>
                <td>' . $row['tgl_lahir'] . '</td>
                <td>' . $row['alamat'] . '</td>
                <td>' . $row['nomor'] . '</td>
                <td>' . $row['sekolah_asal'] . '</td>
              </tr>';
}

$html .= '  </tbody>
          </table>';

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
