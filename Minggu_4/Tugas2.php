<?php 
	
	class Item
	{
		private $item;

		public function Ukuran($item)
		{
			$ukuran = $this -> item = $item;
			return "Ukuran : ".$ukuran."<br>";
		}

		public function Warna($item)
		{
			$warna = $this -> item = $item;
			return "Warna : ".$warna."<br>";
		}

		public function Nama($item)
		{
			$Nama = $this -> item = $item;
			return "Nama : ".$Nama."<br>";
		}
	}

	class Topi extends item
	{
		private $model='Koboy';

		public function modelTopi()
		{
			$model= $this -> model;
			return "Model : ".$model."<br>";
		}
	}

	class Celana extends item
	{
		private $tipe='Panjang';
		private $model='Jeans';

		public function tipeCelana()
		{
			$tipe= $this -> tipe;
			return "Model : ".$tipe."<br>";
		}

		public function modelCelana()
		{
			$model= $this -> model;
			return "Model : ".$model."<br>";
		}
	}

	class Baju extends item
	{
		private $tipe="Kaos";

		public function Tipebaju()
		{
			$tipe= $this -> tipe;
			return "Model : ".$tipe."<br>";
		}
	}

	$Topi = new Topi();
	$Celana = new Celana();
	$Baju = new Baju();

	$celana = $Celana-> modelCelana();
	$nama = $Celana-> Nama('Zara');
	$warna = $Celana-> Warna('Putih');
	$ukuran = $Celana-> Ukuran('S');

	echo "<h3>Produk Celana</h3>";
	echo $celana;
	echo $nama;
	echo $warna;
	echo $ukuran;
 ?>