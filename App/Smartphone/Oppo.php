<?php 

class Oppo extends Smartphone implements Screenshot {
protected $version,
				$merk,
				$volume;
	public function __construct($merk = 'merk', $tipe = 'tipe', $volume = 0) {
		parent::__construct($tipe);
		$this->merk = $merk;
		$this->volume = $volume;

		
	}


	public function UI() {
		return __CLASS__. "ColorOs";
	}

	public function capture() {
		return "Di Hp Xiaomi Tekan Tombol power + volume down + volume up";
	}

	public function setUIVersion($version) {
		return  $this->merk . " " . " MIUI" . " " . $this->version = $version;
	}
}

 ?>