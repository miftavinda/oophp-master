<?php 

// define('NAMA', 'Miftavinda Farah Diba'); //menggunakan define tidak bisa disimpan di dalam class
// echo NAMA;

// echo "<br>";

// const UMUR = 23; //bisa dimasukkan di dalam class
// echo UMUR;

// class Coba {
// const NAMA = 'Miftavinda';

// }

// echo Coba::NAMA;

// echo __LINE__; //menampilkan baris dimana constant ini ditulis

// function coba() {
// return __FUNCTION__;
// }

// echo coba();

class Coba {
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;



?>