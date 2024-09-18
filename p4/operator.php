<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Penjumlahan: $hasilTambah <br>";
echo "Hasil Pengurangan: $hasilKurang <br>";
echo "Hasil Perkalian: $hasilKali <br>";
echo "Hasil Pembagian: $hasilBagi <br>";
echo "Hasil Sisa: $sisaBagi <br>";
echo "Hasil Pangkat: $pangkat <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Hasil Sama: $hasilSama <br>";
echo "Hasil Tidak Sama: $hasilTidakSama <br>";
echo "Hasil Lebih Kecil: $hasilLebihKecil <br>";
echo "Hasil Lebih Besar: $hasilLebihBesar <br>";
echo "Hasil Lebih Kecil Sama: $hasilLebihKecilSama <br>";
echo "Hasil Lebih Besar Sama: $hasilLebihBesarSama <br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil And: $hasilAnd <br>";
echo "Hasil Or: $hasilOr <br>";
echo "Hasil Not A: $hasilNotA <br>";
echo "Hasil Not B: $hasilNotB <br>";

echo "Hasil tambah a dan b: " . ($a += $b) . "<br>";
echo "Hasil kurang a dan b: " . ($a -= $b) . "<br>";
echo "Hasil kali a dan b: " . ($a *= $b) . "<br>";
echo "Hasil bagi a dan b: " . ($a /= $b) . "<br>";
echo "Hasil sisa a dan b: " . ($a %= $b) . "<br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Hasil Identik: $hasilIdentik <br>";
echo "Hasil Tidak Identik: $hasilTidakIdentik <br>";

//Soal no 3.6
echo "Soal Latihan 3.6 <br>";
echo "Sebuah restoran memiliki 45 kursi di dalamnya. Pada suatu malam, 28 kursi telah ditempati oleh pelanggan. Berapa persen kursi yang masih kosong di restoran tersebut? <br>";
$totalKursi = 45;
$kursiDiTempati = 28;

$kursiKosong = $totalKursi - $kursiDiTempati;

$persentaseKosong = ($kursiKosong / $totalKursi) * 100;

echo "Jumlah kursi yang kosong: $kursiKosong <br>";
echo "Persentase kursi yang kosong: $persentaseKosong % <br>";
?>