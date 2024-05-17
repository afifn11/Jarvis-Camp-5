<?php
// Function untuk menampilkan angka genap antara dua parameter
function tampilkanAngkaGenap($awal, $akhir) {
    for ($i = $awal; $i <= $akhir; $i++) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
    }
    echo "\n";
}

// Menampilkan angka genap dari 1 hingga 10
echo "Angka genap dari 1 hingga 10: <br />";
tampilkanAngkaGenap(1, 10);
?>
