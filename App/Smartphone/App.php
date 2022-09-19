<?php 


class App {
	public $daftar = array();

	public function tambahHp( Smartphone $smartphone) {

	$this->daftarhp[] = $smartphone;
}

public function cetak() {
	$c = "DAFTAR HP : <br>";

	foreach ($this->daftarhp as $d) {
		$c .= "- {$d->getInfoHp()} <br>";
	}

	return $c;
}
}
