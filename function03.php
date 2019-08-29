<?php
function luas_lingkaran ($jari) {
    return 3.14 * $jari * $jari;
}
// Pemanggilan Fungsi
$r = 10;
echo "Luas Lingkaran Dengan Jari-jari $r = ";
echo luas_lingkaran($r);
?>