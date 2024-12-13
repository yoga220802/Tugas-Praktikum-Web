<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Basic Calculator</title>
    <link rel="stylesheet" href="{{ asset('storage/css/calculator/styles.css') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const angka1Input = document.querySelector("input[name='angka1']");
            const angka2Input = document.querySelector("input[name='angka2']");
            const operasiSelect = document.querySelector("select[name='operasi']");
            const hasilDiv = document.getElementById("field-hasil");

            function hitung() {
                const angka1 = parseFloat(angka1Input.value) || 0;
                const angka2 = parseFloat(angka2Input.value) || 0;
                const operasi = operasiSelect.value;
                let hasil;

                switch (operasi) {
                    case "modulus":
                        hasil = angka1 % angka2;
                        break;
                    case "tambah":
                        hasil = angka1 + angka2;
                        break;
                    case "kurang":
                        hasil = angka1 - angka2;
                        break;
                    case "kali":
                        hasil = angka1 * angka2;
                        break;
                    case "bagi":
                        hasil = angka2 === 0 ? "Error: Pembagi tidak boleh nol." : angka1 / angka2;
                        break;
                    case "pangkat":
                        hasil = angka1 ** angka2;
                        break;
                    default:
                        hasil = "Operasi tidak dikenali.";
                }

                hasilDiv.textContent = `Hasil: ${hasil}`;
            }

            document.querySelector("form").addEventListener("submit", (e) => {
                e.preventDefault(); // Mencegah pengiriman form
                hitung();
            });

            document.querySelector(".reset-btn").addEventListener("click", () => {
                angka1Input.value = "";
                angka2Input.value = "";
                hasilDiv.textContent = "";
                angka1Input.classList.remove("has-content");
                angka2Input.classList.remove("has-content");
            });

            document.querySelectorAll(".input-group input, .input-group select").forEach((input) => {
                input.addEventListener("focus", () => input.classList.add("has-content"));
                input.addEventListener("blur", () => {
                    if (!input.value) input.classList.remove("has-content");
                });
            });
        });
    </script>
</head>

<body>
     <!-- Tombol Back -->
     <div style="position: fixed; top: 20px; left: 20px;">
        <button onclick="history.back()" style="
            padding: 10px 20px;
            background-color: #ffd700;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        ">
            &#8592; Back
        </button>
    </div>
    <div class="container">
        <div class="container-box">
            <h1 class="title">Kalkulator Sederhana</h1>
            <h3 class="sub-title">Yoga Agustiansyah</h3>
            <h4 class="sub-title" style="font-size: 15px; margin-top:-50px">2206050</h4>
            <form>
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
            <div id="field-hasil" class="field-hasil">Belum melakukan perhitungan</div>
        </div>
    </div>
</body>

</html>
