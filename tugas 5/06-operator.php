<?php
// OPERATOR ARITMATIKA

$bil1 = 200;
$bil2 = 33;
$hasil = $bil1 + $bil2;
echo "$bil1 + $bil2 = $hasil<BR><BR>\n";
$hasil = $bil1 - $bil2;
echo "$bil1 - $bil2 = $hasil<BR><BR>\n";
$hasil = $bil1 * $bil2;
echo "$bil1 * $bil2 = $hasil<BR><BR>\n";
$hasil = $bil1 / $bil2;
echo "$bil1 / $bil2 = $hasil<BR><BR>\n";
$hasil = $bil1 % $bil2;
echo "$bil1 % $bil2 = $hasil<BR><BR>\n";
$hasil = $bil1++;
echo "$bil1++ = $hasil<BR><BR>\n";
$hasil = $bil2--;
echo "$bil2-- = $hasil<BR><BR>\n";

// OPERATOR PERBANDINGAN

$bil1 = 100;
$bil2 = 20;
$teks1 = "PHP";
$teks2 = "php";
printf("%d == %d adalah %d<BR><BR>\n", $bil1, $bil2, $bil1
    == $bil2);
printf("%d != %d adalah %d<BR><BR>\n", $bil1, $bil2, $bil1
    != $bil2);
printf("%d >= %d adalah %d<BR><BR>\n", $bil1, $bil2, $bil1
    >= $bil2);
printf(
    "%s == %s adalah %d<BR><BR>\n",
    $teks1,
    $teks2,
    $teks1 == $teks2
);
printf(
    "%s != %s adalah %d<BR><BR>\n",
    $teks1,
    $teks2,
    $teks1 != $teks2
);


// OPERATOR LOGIKA
$bil1 = 100;
$bil2 = 20;
$teks1 = "PHP";
$teks2 = "php";
$hasil = ($bil1 <> $bil2) or ($teks1 == $teks2);
printf(
    "($bil1 <>  $bil2) or ($teks1 == $teks2) adalah $hasil<BR><BR>\n",
);
$hasil = ! ($teks1 == $teks2);
printf(
    "! (%s == %s) adalah %d<BR><BR>\n",
    $teks1,
    $teks2,
    $hasil
);

// OPERATOR STRING
$teks1 = "Aku Sedang Belajar";
$teks2 = "Pemrograman WEB";
$teks3 = "PHP 4";
$hasil = $teks1 . $teks2 . $teks3;
printf("hasil : %s<BR><BR>\n", $hasil);
$hasil = $teks1 . " " . $teks2 . " " . $teks3;
printf("hasil : %s<BR><BR>\n", $hasil);