<?php

function perkenalan($nama, $salam = "Assalamualaikum") {
    echo $salam . ", ";
    echo "Perkenalkan, nama saya " . $nama .  "<br>";
    echo "Senang berkenalan dengan anda <br>";
}

perkenalan("Rafi", "Assalamualaikum");

echo "<hr>";

$saya = "Budiono";
$ucapanSalam = "Selamat pagi";

perkenalan($saya);
?>