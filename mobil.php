<?php
/**
* Program sederhana pendefinisian class dan pemanggilan class.
**/

class Mobil
{
	private $warna;
	private $merk;
	private $harga;

	public function __construct()
	{
		$this->warna = "Biru";
		$this->merk = "BMW";
		$this->harga = "10000000";
	}
public function gantiWarna ($warnaBaru)
	{
$this->warna = $warnaBaru;
	}
public function tampilWarna ()
	{
	echo "Warna mobilnya : " . $this->warna;
	}
}
// membuat objek mobil
$a = new Mobil();
$b = new Mobil();

// memanggil objek
echo "<b>Mobil pertama</b><br>";
$a->tampilWarna();