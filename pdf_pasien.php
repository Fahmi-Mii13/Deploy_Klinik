<?php
require 'vendor/autoload.php';
use Dompdf\Dompdf;

$dompdf = new Dompdf();

$server = "localhost";
$user = "root";
$pass = "";
$database = "klinik";
 
$koneksi = mysqli_connect($server, $user, $pass, $database);
$queryPasien = mysqli_query($koneksi, "SELECT * FROM pasien");
if (!$queryPasien) {
    die('Error: ' . mysqli_error($koneksi)); 
}
$content = '
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Data Pasien</title>
    <style>
        body {
            font-family: "Arial", sans-serif;
            margin: 0;
            padding: 20px;
            line-height: 1.6;
        }
        .header {
            text-align: center;
            border-bottom: 2px solid #000;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .header h2 {
            margin: 0;
            font-size: 24px;
        }
        .header p {
            margin: 5px 0 0;
            font-size: 14px;
            color: #555;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
            color: #555;
            border-top: 2px solid #000;
            padding-top: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 14px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f8f9fa;
            font-weight: bold;
            text-align: center;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .title {
            text-align: center;
            font-size: 18px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>Klinik Gaspol</h2>
        <p>Jl. Contoh No.123, Kota, Provinsi, 12345</p>
    </div>
    <h2 class="title">Data Pasien</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pasien</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>No Telp</th>
            </tr>
        </thead>
        <tbody>';

$nomor = 1;
while ($row = mysqli_fetch_assoc($queryPasien)) {
    $content .= '
            <tr>
                <td style="text-align: center;">' . $nomor++ . '</td>
                <td>' . htmlspecialchars($row['nama_pasien']) . '</td>
                <td>' . htmlspecialchars($row['jk']) . '</td>
                <td>' . htmlspecialchars($row['alamat']) . '</td>
                <td>' . htmlspecialchars($row['no_telp']) . '</td>
            </tr>';
}

$content .= '
        </tbody>
    </table>
    <div class="footer">
        <p>Dicetak pada: ' . date("d/m/Y H:i:s") . '</p>
        <p>© 2024 Klinik Gaspol. Semua Hak Dilindungi.</p>
    </div>
</body>
</html>';


$dompdf->loadHtml($content);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream("data_pasien.pdf", ["Attachment" => 1]);
?>
