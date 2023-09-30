<?php

require 'Suhu.php';

/* Buatlah object dataKonversiSuhu:
- buatlah minimal masing2 konveri suhu minimal 2 buah dari masing-masing konveri suhu
- panggil fungsi cetak untuk seluruh object yang diciptakan */

$dataKonversiSuhu = [
    new KonversiSuhu("Celsius", 25, "Fahrenheit"),
    new KonversiSuhu("Fahrenheit", 77, "Celsius"),
    new KonversiSuhu("Celsius", 20, "Rheamur"),
    new KonversiSuhu("Rheamur", 16, "Celsius")
];

echo "<table border='1'>
        <tr>
            <th>Satuan Suhu Awal</th>
            <th>Besaran Suhu</th>
            <th>Satuan Suhu Tujuan</th>
            <th>Hasil Konversi Suhu</th>
        </tr>";

foreach ($dataKonversiSuhu as $data) {
    $data->cetakHasilKonversi();
}

echo "</table>";

?>