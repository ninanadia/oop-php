<?php
class Mobil {

    public $nama = "nama";
    public $merk = "merk";
    public $warna = "warna";
    public $tipeMesin = "tipeMesin";
    public $kecepatanMaksimal = 0;

    public function tambahKecepatan() {
        
    }

    public function kurangiKecepatan() {
        
    }

    public function belokKiri() {
        
    }

    public function belokKanan() {
        
    }

    public function sayHello(){
        return "Hello World";
    }

    public function getLabel(){
        return "$this->nama, $this->merk";
    }
}

$mobil_beby = new Mobil();
$mobil_beby->nama = "Lamborghini Aventador";
$mobil_beby->merk = "Lamborghini";
$mobil_beby->warna = "Kuning";
$mobil_beby->kecepatanMaksimal = 200;
var_dump($mobil_beby);
//echo "Mobil beby : $mobil_beby->nama, $mobil_beby->merk";

//jika hanya seperti ini dia tidak akan keluar karena baru dipanggil bukan dicetak
//$mobil_beby->sayHello();
echo "Mobil : " . $mobil_beby->sayHello();
echo "<br>";
echo "Mobil : " . $mobil_beby->getLabel();

$mobil_amel = new Mobil();
$mobil_firasya = new Mobil();



?>