<?php 

abstract class Smartphone {
	protected 
			$tipe;

			public function __construct($tipe) {
				$this->tipe = $tipe;
			}
		public function getMerk() {
			return $this->merk;
		}
		public function getTipe() {
			return $this->tipe;
		}

		public function setVolume($volume) {
			$this->volume = $volume;
		}

		public function getInfoHp() {
			return "{$this->getMerk()} {$this->getTipe()}";
		}


		public function nyalakan() {
			return "Menyalakan {$this->merk} {$this->tipe}";
		}


		public function matikan() {
			return "Mematikan {$this->merk} {$this->tipe}";
		}


		public function volumeUp() {
				$volume = ($this->volume) + 1;
				if ($volume <= 5) {
					 echo "Berhasil Menambahkan Volume " . "" . $this->getInfoHp();
					 $this->volume = $volume;
			} else {

				echo "Maksimal Volume 5!";
			}

		}



		public function volumeDown() {
				$volume = ($this->volume) - 1;
				if ($volume >= 0) {
					echo "Volume anda telah Turun ke : " . $volume;
					$this->volume = $volume;
			} else {
				return "Minimal Volume 1";
			}
		}

		public function getVolume() {
				return "Volume Saat ini : " . $this->volume;
		}

		abstract public function UI();

		// public function getter() {
		// 	return "{$this->merk}, {$this->tipe}, {$this->volume}";
		// }
}

 ?>