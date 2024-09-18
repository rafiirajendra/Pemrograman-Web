<?php
$angka1 = 10;
$angka2 = 5;
$hasil = $angka1 + $angka2;
echo "Hasil penjumlahan $angka1 dan $angka2 adalah $hasil.<br>";
$benar = true;
$salah = false;
echo "Variabel benar: $benar, Variabel salah : $salah.<br>";

//Mendifinisikan konstanta untuk nilai tetap
define("NAMA_SITUS", "Websitku.com");
define("TAHUN_PENDIRIAN", 2024);

echo "Selamat datang di " . NAMA_SITUS . ", situs yang didirikan pada tahun " . TAHUN_PENDIRIAN . ".<br>";
?>
