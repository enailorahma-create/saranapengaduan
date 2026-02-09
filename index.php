<?php if (isset($_GET['error']) && $_GET['error'] == 'nama_tidak_ditemukan'): ?>
    <div class="alert error">
        ❌Nama tidak ditemukan. Silakan periksa kembali!
    </div>
<?php endif; ?>

<?php if (isset($_GET['success'])): ?>
    <div class="alert success">
        Aspirasi Anda berhasil dikirim.
    </div>
<?php endif; ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pengaduan Sekolah</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
	<?php
include 'navbar.php';
?>
    <!-- FORM ASPIRASI -->
    <div class="container">
        <h1>📩</h1>
        <h1>Ruang Suara</h1>
        <h5>Silahkan memberikan aspirasi terbaik kalian</h5>
        <br>

        <form method="post" action="proses.php">
            <label>Nama</label>
            <input type="text" name="nama" required placeholder="Masukan Nama... ">

            <label>Kategori</label>
            <select name="kategori" required>
                <option value="" disabled selected>Pilih Kategori</option>
                <option value="1">Sarana</option>
                <option value="2">Prasarana</option>
            </select>

            <label>Lokasi</label>
            <input type="text" name="lokasi" required placeholder="Lokasi pengaduan...">

            <label>Keterangan</label>
            <textarea name="ket" required placeholder="Masukan keluh kesan yang menginspirasi..."></textarea>

            <button type="submit">Go🚀</button>
        </form>
    </div>

</body>
</html>
