<?php
// Function untuk menampilkan angka ganjil antara dua parameter
function tampilkanAngkaGanjil($awal, $akhir) {
    for ($i = $awal; $i <= $akhir; $i++) {
        if ($i % 2 != 0) {
            echo $i . " ";
        }
    }
    echo "\n";
}


// Contoh Penggunaan Function

// Menampilkan angka ganjil dari 1 hingga 10
echo "Angka ganjil dari 1 hingga 10: ";
echo "<br />";
tampilkanAngkaGanjil(1, 10);

?>
