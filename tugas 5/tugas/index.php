<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Basic Calculator</title>
    <link rel="stylesheet" href="styles.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />
    <script src="./script.js"></script>

</head>

<body>
    <div class="container">
        <div class="container-box">
            <h1 class="title">Kalkulator Sederhana</h1>
            <h3 class="sub-title">Yoga Agustiansyah</h3>
            <h4 class="sub-title" style="font-size: 15px; margin-top:-50px">2206050</h4>
            <form method="POST" action="">
                <div class="form-container">
                    <div class="horizontal-container">
                        <div class="input-group">
                            <input type="number" name="angka1" required />
                            <label for="angka1">Angka Pertama</label>
                        </div>
                        <div class="input-group">
                            <select name="operasi" class="has-content" style="width: 110px;" required>
                                <option value="modulus">%</option>
                                <option value="tambah">+</option>
                                <option value="kurang">-</option>
                                <option value="kali">*</option>
                                <option value="bagi">/</option>
                                <option value="pangkat">**</option>
                            </select>
                            <label for="operasi">Operasi</label>
                        </div>
                        <div class="input-group">
                            <input type="number" name="angka2" required />
                            <label for="angka2">Angka Kedua</label>
                        </div>
                    </div>
                    <button type="submit" class="calculate-btn">Hitung</button>
                    <button type="reset" class="reset-btn">Reset</button>
                </div>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $angka1 = (float) $_POST["angka1"];
                $angka2 = (float) $_POST["angka2"];
                $operasi = $_POST["operasi"];
                $hasil = "";

                switch ($operasi) {
                    case "modulus":
                        $hasil = $angka1 % $angka2;
                        break;
                    case "tambah":
                        $hasil = $angka1 + $angka2;
                        break;
                    case "kurang":
                        $hasil = $angka1 - $angka2;
                        break;
                    case "kali":
                        $hasil = $angka1 * $angka2;
                        break;
                    case "bagi":
                        $hasil = $angka2 == 0 ? "Error: Pembagi tidak boleh nol." : $angka1 / $angka2;
                        break;
                    case "pangkat":
                        $hasil = $angka1 ** $angka2;
                        break;
                    default:
                        $hasil = "Operasi tidak dikenali.";
                }

                echo "<div id='field-hasil' class='field-hasil'>Hasil: $hasil</div>";
            } else {
                echo "<div id='field-hasil' class='field-hasil'>Belum melakukan perhitungan</div>";
            }
            ?>
        </div>
    </div>
</body>

</html>