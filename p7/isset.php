<?php
$data = array("nama" => "John", "usia" => 25);
if (isset($data["nama"])) {
    echo "Nama : " . $data["nama"] . "<br>";
} else {
    echo "Variabel 'nama' tidak ditemukan dalam array. <br>";
}

?>