<?php 

// define('NAMA', "Wahyu Sahrani");
// echo NAMA;

// echo "<br>";

// const UMUR = 24;
// echo UMUR;

// class Coba {
// 	const NAMA = "Wahyu Sahrani";

// }

// echo Coba::NAMA;


// function coba(){
// 	return __FUNCTION__;
// }
// echo coba();

class Coba {
	public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;