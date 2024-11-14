<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilangan Habis Dibagi 6 dan 9</title>
    <link rel="stylesheet" href="./styleSoal2.css">
</head>

<body>

    <div class="container">
        <h1>Bilangan yang Habis Dibagi 6 dan 9</h1>
        <?php
        for ($i = 0; $i < 100; $i++) {
            if ($i % 6 == 0 && $i % 9 == 0) {
                echo "<span class='number'>$i</span>";
            }
        }
        ?>
    </div>

</body>

</html>