<?php 

class Xiaomi extends Smartphone implements Screenshot {
	protected $version,
				$merk,
				$volume;
	public function __construct($merk = 'merk', $tipe = 'tipe',$volume = 0) {
		parent::__construct($tipe);
		$this->merk = $merk;
		$this->volume = $volume;

		
	}

	

	public function UI() {
		return __CLASS__. " MIUI";
	}

	public function capture() {
		return "Di Hp Xiaomi Tekan Tombol Power - volume down";
	}

	public function setUIVersion($version) {
		return  $this->merk . " " . " MIUI" . " " . $this->version = $version;
	}
}

 ?>