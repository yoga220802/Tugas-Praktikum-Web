<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PHP</title>
</head>
<body>
    <form method="POST" action="">
        <input type="number" name="angka1" placeholder="angka1" id="angka1" required>
        <input type="number" name="angka2" placeholder="angka2" id="angka2" required>
        <button type="submit">Hitung Modulus</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil nilai dari input formulir
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];

        // Periksa apakah angka2 bukan 0 (untuk menghindari pembagian oleh nol)
        if ($angka2 == 0) {
            echo "<p>Pembagi tidak boleh 0.</p>";
        } else {
            // Hitung modulus
            $hasil = $angka1 % $angka2;

            // Tampilkan hasil
            echo "<p>Hasil modulus: $hasil</p>";
        }
    }
    ?>
</body>
</html>
