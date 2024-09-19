<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A <br>";
} else if ($nilaiNumerik >= 80 && $nilaiNumerik <= 89) {
    echo "Nilai huruf: B <br>";
} else if ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C <br>";
} else if ($nilaiNumerik >= 60 && $nilaiNumerik < 70) {
    echo "Nilai huruf: D <br>";
}

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet terebut memerlukan $hari hari untuk mencapai jarak 500 kilometer. <br>";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) { 
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah <br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor <br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}

// Soal no 4.6
echo "Tugas soal no 4.6 <br>";
$nilaiMatematika = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
sort($nilaiMatematika);
$nilaiHilang = array_slice($nilaiMatematika, 2, 6);
$totalNilai = array_sum($nilaiHilang);
$rataRata = $totalNilai / count($nilaiHilang);

echo "Nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: <br>";
foreach ($nilaiHilang as $nilai) {
    echo "$nilai<br>";
}

echo "Total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: $totalNilai <br>";
echo "Rata-rata nilai: $rataRata <br>";

//Soal no 4.7
echo "Tugas soal no 4.7 <br>";
$hargaAwal = 120000;
$diskon = 0.2;
if ($hargaAwal >= 100000) {
    $hargaDiskon = $hargaAwal * $diskon;
    $hargaAkhir = $hargaAwal - $hargaDiskon;
    echo "Harga setelah diskon: $hargaAkhir";
} else {
    echo "Total harga = $hargaAwal";
}

//Soal no 4.8
echo "Tugas soal no 4.8 <br>";
$poin = 550;
$hadiah = ($poin > 500) ? "YA" : "TIDAK";
echo "Total skor pemain adalah: $poin <br>";
echo "Apakah pemain mendapatkan hadiah tambahan? $hadiah <br>";
?>