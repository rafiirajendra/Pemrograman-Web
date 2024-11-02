<?php
include "config.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Siapkan pernyataan SQL untuk menghapus record
    $stmt = $koneksi->prepare("DELETE FROM mahasiswa WHERE id = :id");
    $stmt->bindParam(':id', $id);

    // Jalankan pernyataan tersebut
    if ($stmt->execute()) {
        // Kembali ke index.php setelah penghapusan berhasil
        header("Location: index.php");
        exit();
    }
}
?>
