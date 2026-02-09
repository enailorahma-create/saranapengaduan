php
include 'koneksi.php';
<?
$nama     = $_POST['nama'];
$kategori = $_POST['kategori'];
$lokasi   = $_POST['lokasi'];
$ket      = $_POST['ket'];

$status   = "menunggu";
$feedback = "Terima kasih atas masukannya. Kami akan segera memproses sarana dan prasarana yang bermasalah.";

$sql = "INSERT INTO aspirasi 
        (id_kategori, nama, lokasi, keterangan, status, feedback) 
        VALUES 
        ('$kategori', '$nama', '$lokasi', '$ket', '$status', '$feedback')";

$s = mysqli_query($koneksi, $sql);

if ($s) {
    header("Location: index.php?success=1");
    exit;
} else {
    echo "Error: " . mysqli_error($koneksi);
}
