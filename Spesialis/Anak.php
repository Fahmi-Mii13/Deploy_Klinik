<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spesialis Anak - Klinik Gaspol</title>
    <link rel="stylesheet" href="../css/dokter.css">
    <?php
    require_once '../koneksi.php';
    session_start();
    $username = $_SESSION['username'];
    $query = "SELECT * FROM pasien WHERE username = '$username'";
    $result = mysqli_query($koneksi, $query);

    if (!$result) {
        die("Query gagal: " . mysqli_error($koneksi));
    }

    $userData = mysqli_fetch_assoc($result);
    ?>
</head>

<body>
    <header>
        <div class="container">
        <div class="logo-container">
        <img src="../image/logonav/logo.png" alt= "logo" class="logo" >
            <h1>Klinik Gaspol</h1>
        </div>
    </header>
    
    <main class="container">
        <a class="lihatsemua" style="margin-bottom: 30px;" href="../Beranda.php">KEMBALI</a>
        <div class="spesialis-anak">Spesialis Anak</div>
        <section class="flex-container">
            <div>
                <div>
                    <img src="../image/FSpeDok/PUN5.png" width="100px">
                    <p>Desi</p>
                    <p>081521774424</p>
                    <p><b>SENIN</b> | Jadwal 07:30 - 11:30</p>
                    <div>
                        <button class="bookingButton">BOOKING</button>
                    </div>
                    <div class="popup-overlay" style="display: none;">
                        <div class="popup">
                            <span class="close">&times;</span>
                            <div class="popup-content">
                                <h2>Booking Berhasil!</h2>
                                <p>Selamat <?php echo ($userData['nama_pasien']); ?>, Anda telah berhasil booking dokter.</p>
                                <p>Tim kami akan segera menghubungi Anda untuk konfirmasi lebih lanjut.</p>
                                <button class="closePopupButton">Tutup</button>
                            </div>
                            <script src="script.js"></script>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <img src="../image/FSpeDok/LI6.png" width="100px">
                    <p>Hendri</p>
                    <p>08231124124</p>
                    <p><b>SELASA</b> | Jadwal 07:30 - 11:00</p>
                    <div>
                        <button class="bookingButton">BOOKING</button>
                    </div>
                    <div class="popup-overlay" style="display: none;">
                        <div class="popup">
                            <span class="close">&times;</span>
                            <div class="popup-content">
                                <h2>Booking Berhasil!</h2>
                                <p>Selamat <?php echo ($userData['nama_pasien']); ?>, Anda telah berhasil booking dokter.</p>
                                <p>Tim kami akan segera menghubungi Anda untuk konfirmasi lebih lanjut.</p>
                                <button class="closePopupButton">Tutup</button>
                            </div>
                            <script src="script.js"></script>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <img src="../image/FSpeDok/LI7.png" width="100px">
                    <p>Johny</p>
                    <p>084321224567</p>
                    <p><b>RABU</b> | Jadwal 08:00 - 14:00</p>
                    <div>
                        <button class="bookingButton">BOOKING</button>
                    </div>
                    <div class="popup-overlay" style="display: none;">
                        <div class="popup">
                            <span class="close">&times;</span>
                            <div class="popup-content">
                                <h2>Booking Berhasil!</h2>
                                <p>Selamat <?php echo ($userData['nama_pasien']); ?>, Anda telah berhasil booking dokter.</p>
                                <p>Tim kami akan segera menghubungi Anda untuk konfirmasi lebih lanjut.</p>
                                <button class="closePopupButton">Tutup</button>
                            </div>
                            <script src="script.js"></script>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <img src="../image/FSpeDok/LI8.png" width="100px">
                    <p>Rusdi</p>
                    <p>085432335255</p>
                    <p><b>KAMIS</b> | Jadwal 09:00 - 13:00</p>
                    <div>
                        <button class="bookingButton">BOOKING</button>
                    </div>
                    <div class="popup-overlay" style="display: none;">
                        <div class="popup">
                            <span class="close">&times;</span>
                            <div class="popup-content">
                                <h2>Booking Berhasil!</h2>
                                <p>Selamat <?php echo ($userData['nama_pasien']); ?>, Anda telah berhasil booking dokter.</p>
                                <p>Tim kami akan segera menghubungi Anda untuk konfirmasi lebih lanjut.</p>
                                <button class="closePopupButton">Tutup</button>
                            </div>
                            <script src="script.js"></script>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <img src="../image/FSpeDok/PUN6.png" width="100px">
                    <p>Jumaidah</p>
                    <p>085232666478</p>
                    <p><b>JUMAT</b> | Jadwal 07:00 - 15:00</p>
                    <div>
                        <button class="bookingButton">BOOKING</button>
                    </div>
                    <div class="popup-overlay" style="display: none;">
                        <div class="popup">
                            <span class="close">&times;</span>
                            <div class="popup-content">
                                <h2>Booking Berhasil!</h2>
                                <p>Selamat <?php echo ($userData['nama_pasien']); ?>, Anda telah berhasil booking dokter.</p>
                                <p>Tim kami akan segera menghubungi Anda untuk konfirmasi lebih lanjut.</p>
                                <button class="closePopupButton">Tutup</button>
                            </div>
                            <script src="script.js"></script>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 Klinik Gaspol. Semua hak dilindungi.</p>
        <p>Alamat: Jl. Kesehatan No. 123, Kota Sehat</p>
        <p>Telepon: (021) 123-4567</p>
    </footer>
    <script src="script.js"></script>
</body>

</html>