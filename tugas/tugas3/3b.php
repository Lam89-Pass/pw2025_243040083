<?php
function urutanAngka($angka) {
    $angkaberurutan = 1;
    for ($i = 1; $i <= $angka; $i++) {
        for ($Abaris = 1; $Abaris <= $i; $Abaris++) {
            echo $angkaberurutan . " ";
            $angkaberurutan++;
        }
        echo "<br>";
    }
}
urutanAngka(5);
?>
