<?php 

abstract class Smartphone {
	protected 
			$tipe;

			public function __construct($tipe = "tipe") {
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

		public function getVolume() {
			return $this->volume;
		}


		public function nyalakan() {
			return "Menyalakan {$this->merk} {$this->tipe}";
		}


		public function matikan() {
			return "Mematikan {$this->merk} {$this->tipe}";
		}

		public function volumeUp($volume) {
				$v = $this->volume + $volume;
				if ($v <= 5) {
					return "Volume anda telah naik menjadi : " . $v;
			} else {
				return "Maksimal Volume 5!";
			}
		}



		public function volumeDown($volume) {
				$v = $this->volume - $volume;
				if ($v >= 0) {
					return "Volume anda telah Turun ke : " . $v;
			} else {
				return "Minimal Volume 1";
			}
		}

		public function getInfoHp() {
			return "{$this->getMerk()} {$this->getTipe()}";
		}

		abstract public function UI();

		// public function getter() {
		// 	return "{$this->merk}, {$this->tipe}, {$this->volume}";
		// }
}

 ?>