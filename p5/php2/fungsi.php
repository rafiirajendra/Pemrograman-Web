<?php
function perkenalan($nama, $salam="Assalamualaikum") {
    echo $salam. ", ";
    echo "Perkenalkan, nama saya " . $nama . "<br>";
    echo "Senang berkenalan dengan Anda <br>";
}

perkenalan("Rafi", "Pagi");

echo "<br>";

$saya = "Budi";
$ucapSalam = "Selamat Siang";
perkenalan($saya);
?>