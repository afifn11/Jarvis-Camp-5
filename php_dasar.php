<?php 
    function salam ($nama, $suasana) {
        return "Selamat pagi $nama ! Hari ini saya $suasana <br> ";
    }

    echo salam('Afif', 'Bahagia');


    echo "hello world";
    echo "<br />";

    $nama = "Muhammad Afif Naufal";
    $usia = 19;
    echo $nama . " " . $usia . " tahun";
    echo "<br />";

    function jumlah($angka1, $angka2)
    {
        $result = $angka1 + $angka2;
        return $result;
    }

    echo jumlah(12, 5);
        
?>