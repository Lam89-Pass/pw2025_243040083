<?php
function hitungLuasLingkaran($r) {
    $luas = pi() * pow($r, 2);
    echo "<h4>Menghitung Luas Lingkaran</h4>";
    echo "Jari-jari = $r cm.<br>";
    echo "Luas lingkaran = " . round($luas, 2) . " cm";
    echo "<hr>";
}
function hitungKelilingLingkaran($r) {
    $keliling = 2 * pi() * $r;
    echo "<h4>Menghitung Keliling Lingkaran</h4>";
    echo "Jari-jari = $r cm.<br>";
    echo "Keliling lingkaran = " . round($keliling, 2) . " cm";
    echo "<hr>";
}

    hitungLuasLingkaran(20);
    hitungKelilingLingkaran(30);
?>
