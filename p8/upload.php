<?php
if (isset($_POST["submit"])) {
    $targetdir = "uploads/"; //Direktori tujuan untuk menyimpan file
    $targetfile = $targetdir . basename($_FILES["file"]["name"]);
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetfile)) {
        echo "File berhasil diunggah";
    } else {
        echo "Gagal mengunggah file";
    }
}
?>