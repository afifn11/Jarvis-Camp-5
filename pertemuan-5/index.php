<?php

class Buah {
    public $nama;
    public $warna;
    public $rasa;
    

    public function jatuh() {
        echo "$this -> nama jatuh /n";
    }
}

class mobil {
    public $warna;
    public $merk;

    public function berjalan(){
        echo "mobil $this->merk berjalan /n";
    }
    public function mengerem(){
        echo "mobil $this->merk mengerem /n";
    }

}

$jeruk = new Buah();
$jeruk->nama = "jeruk";
$jeruk->warna = "orange";
$jeruk->rasa = "manis dan asam";

$apel = new Buah ();
$apel->nama = "Apel";
$apel->warna = "Merah";
$apel->rasa = "manis";
$apel->jatuh();

$toyota = new mobil();
$toyota->merk = "Toyota";
$toyota->warna = "Silver";
$toyota->berjalan();
$toyota->mengerem();
echo "mobil $toyota->merk berwarna $toyota->warna";

echo "/n";

?>