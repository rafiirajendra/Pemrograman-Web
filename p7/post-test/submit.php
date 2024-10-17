<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_telpon = $_POST['no_telpon'];

    echo '<h2>Data yang Telah Dimasukkan</h2>';
    echo '<table border="1">';
    echo '<tr><th>Nama</th><th>Alamat</th><th>No. Telepon</th></tr>';

    for ($i = 0; $i < count($nama); $i++) {
        echo '<tr>';
        echo '<td>' . ($nama[$i]) . '</td>';
        echo '<td>' . ($alamat[$i]) . '</td>';
        echo '<td>' . ($no_telpon[$i]) . '</td>';
        echo '</tr>';
    }

    echo '</table>';
}
?>