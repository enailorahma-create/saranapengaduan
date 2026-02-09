<?php
include 'koneksi.php';

$id       = $_POST['id'];
$status   = $_POST['status'];
$feedback = $_POST['feedback'];

// Update status & feedback
$stmt = $koneksi->prepare(
    "UPDATE aspirasi SET status = ?, feedback = ? WHERE id_aspirasi = ?"
);
$stmt->execute([$status, $feedback, $id]);

header("Location: admin.php");
exit;
