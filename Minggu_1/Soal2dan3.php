<?php
class kendaraan {
	public $jeniskendaraan;
	public $jumlahroda;
	public $jenismerk;
	public $bahanbakar;
	public $harga;
	public $tahunpembuatan;

	public function dapatSubsidi(){
	if($this -> tahunpembuatan < 2005 && $this -> bahanbakar == "Pertamax")
		$status = 'Ya';
		else $status = 'Tidak';
		return $status;
	}

	public function hargaSecond() {
		if ($this -> tahunpembuatan >= 2010) {
			$hargaBaru= $this -> harga;
			$hargaBekas= ($hargaBaru*20)/100;
		} else if ($this -> tahunpembuatan < 2010 && $this -> tahunpembuatan >= 2005) {
			$hargaBaru= $this -> harga;
			$hargaBekas= ($hargaBaru*30)/100;
		} else if ($this -> tahunpembuatan < 2005) {
			$hargaBaru= $this -> harga;
			$hargaBekas= ($hargaAwal*40)/100;
		}
		return $hargaBekas;
	}

}


$mercedes = new kendaraan ();
echo $mercedes -> jenismerk="Mercedes";
echo "<br>";
echo $mercedes -> tahunpembuatan=2007;
echo "<br>";
echo $mercedes -> bahanbakar="Premium";
echo "<br>";
echo $mercedes -> harga="4000"; echo " $";
echo "<br>";
echo $mercedes -> hargaSecond(); echo " $";
echo "<br>";


echo "Mendapat Subsidi ?";
echo $mercedes -> dapatSubsidi();


?>