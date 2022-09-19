<?php 

class Samsung extends Smartphone implements Screenshot {
	protected $version,
				$merk,
				$volume;
	public function __construct($merk = 'merk', $tipe = 'tipe', $volume = 0) {
		parent::__construct($tipe);
		$this->merk = $merk;
		$this->volume = $volume;

		
	}


	public function UI() {
		return __CLASS__. " oneUI";
	}

	public function capture() {
		return "Di Hp Samsung Tekan Tombol Power + volume up";
	}

	public function setUIVersion($version) {
		return  $this->merk . " " . " MIUI" . " " . $this->version = $version;
	}
}

 ?>