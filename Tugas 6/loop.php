<?php
// ascending
echo "<H1>ASCENDING</H1> <BR><BR>";
echo "<H2>While Loop</H2> <BR>";

$i = 1;
while ($i <= 7) {
    echo "<FONT SIZE=$i>Perulangan ke-$i</FONT><BR>";
    $i++;
}

echo "<BR><BR>";

echo "<H2>Do-While Loop</H2> <BR>";
$i = 1;
do {
    echo "<FONT SIZE=$i>Perulangan ke-$i</FONT><BR>";
    $i++;
} while ($i <= 7);


echo "<BR><BR>";

echo "<H2>Do-While Loop </H2><BR>";

for ($i = 1; $i <= 7; $i++) {
    echo "<FONT SIZE=$i>Perulangan ke-$i</FONT><BR>";

    // descending
}
echo "<br>";
echo "<hr>";
echo "<H1>ASCENDING</H1> <BR><BR>";
echo "<H2>While Loop</H2> <BR>";

$i = 7;
while ($i >= 1) {
    echo "<FONT SIZE=$i>Perulangan ke-$i</FONT><BR>";
    $i--;
}

echo "<BR><BR>";

echo "<H2>Do-While Loop</H2> <BR>";
$i = 7;
do {
    echo "<FONT SIZE=$i>Perulangan ke-$i</FONT><BR>";
    $i--;
} while ($i >= 1);


echo "<BR><BR>";

echo "<H2>Do-While Loop </H2><BR>";

for ($i = 7; $i >= 7; $i--) {
    echo "<FONT SIZE=$i>Perulangan ke-$i</FONT><BR>";
}
