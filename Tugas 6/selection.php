<?php
// echo"Statement If <BR>";
echo"Statement If\n";

// $a = -10;
$a = readline("Masukan angka: ");
if ($a < -0) {
    $a *= -1;
}
echo $a;


// echo"<BR><BR>Statement If-else<BR>";
echo"\n\nStatement If-else\n";

// $nilai = 40;
$nilai = readline("Masukan nilai anda: ");
if ($nilai >= 60) {
    echo"Nilai anda $nilai. Selamat, Anda telah lulus!!";
} else {
    echo"Nilai anda $nilai. Sorrry, Anda tidak lulus!!";

}


// echo "<BR><BR>Statement If-else if<BR>";
echo "\n\nStatement If-else if\n";

// $nilai = 50;
$nilai = readline("Masukan nilai akhir anda: ");
if (($nilai >= 0) && ($nilai < 50)) {
    $index = "E";
}
elseif (($nilai >= 50) && ($nilai < 60)) {
    $index = "D";
}
elseif (($nilai >= 60) && ($nilai < 75)) {
    $index = "C";
}
elseif (($nilai >= 75) && ($nilai < 85)) {
    $index = "B";
}
elseif (($nilai >= 85) && ($nilai <= 100)) {
    $index = "A";
} else {
    $index = "Nilai diluar jangkauan";
}

echo "Nilai anda: $nilai, dikonversi menjadi $index";


// Switch
// echo"<BR><BR>Statement Switch<BR>";
echo"\n\nStatement Switch\n";
// $angka = 6;
$angka = readline("Masukan angka 0-9: ");
switch ($angka) {
    case 0: $terbilang = "NOL"; break;
    case 1: $terbilang = "SATU"; break;
    case 2: $terbilang = "DUA"; break;
    case 3: $terbilang = "TIGA"; break;
    case 4: $terbilang = "EMPAT"; break;
    case 5: $terbilang = "LIMA"; break;
    case 6: $terbilang = "ENAM"; break;
    case 7: $terbilang = "TUJUH"; break;
    case 8: $terbilang = "DELAPAN"; break;
    case 9: $terbilang = "SEMBILAN"; break;
}

echo "Bentuk terbilang dari angka $angka adalah $terbilang";