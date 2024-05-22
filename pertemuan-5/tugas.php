<?php
// Define class Kendaraan
class Kendaraan {
    // Properties
    public $merk;
    public $tahun;

    // Constructor
    public function __construct($merk, $tahun) {
        $this->merk = $merk;
        $this->tahun = $tahun;
    }

    // Method
    public function getInfo() {
        return "Kendaraan Merk: $this->merk, Tahun: $this->tahun";
    }
}

// Define class Mobil that inherits from Kendaraan
class Mobil extends Kendaraan {
    // Additional properties
    public $jenis;
    public $warna;
    public $harga;

    // Constructor
    public function __construct($merk, $tahun, $jenis, $warna, $harga) {
        // Call parent constructor
        parent::__construct($merk, $tahun);
        $this->jenis = $jenis;
        $this->warna = $warna;
        $this->harga = $harga;
    }

    // Additional method 1
    public function getJenis() {
        return "Jenis Mobil: $this->jenis";
    }

    // Additional method 2
    public function getWarna() {
        return "Warna Mobil: $this->warna";
    }

    // Additional method 3
    public function getHarga() {
        return "Harga Mobil: $this->harga";
    }

    // Overriding method
    public function getInfo() {
        return parent::getInfo() . ", Jenis: $this->jenis, Warna: $this->warna, Harga: $this->harga";
    }
}

// Create an object based on the new class
$mobilBaru = new Mobil("Toyota", 2022, "SUV", "Hitam", 300000000);

// Print object details
echo $mobilBaru->getInfo(); // Output: Kendaraan Merk: Toyota, Tahun: 2022, Jenis: SUV, Warna: Hitam, Harga: 300000000
echo "\n";
echo $mobilBaru->getJenis(); // Output: Jenis Mobil: SUV
echo "\n";
echo $mobilBaru->getWarna(); // Output: Warna Mobil: Hitam
echo "\n";
echo $mobilBaru->getHarga(); // Output: Harga Mobil: 300000000
?>
