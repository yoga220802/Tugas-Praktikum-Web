<?php
$angka1 = (int) readline(prompt: "Masukkan angka pertama: ");

$angka2 = (int) readline(prompt: "Masukkan angka kedua: ");

if ($angka2 === 0) {
    echo "Error: Angka kedua tidak boleh 0.\n";
} else {
    $hasil = $angka1 % $angka2;

    echo "Hasil modulus antara $angka1 dan $angka2 adalah: $hasil\n";
}
