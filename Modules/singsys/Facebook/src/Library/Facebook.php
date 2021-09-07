<?php
namespace singsys\Facebook\Library;
class Facebook {
	private $fbid;
	private $fbsecret;
	private $fburl;

	public function __construct($fb) {
		$this->fbid = $fb['fbid'];
		$this->fbsecret = $fb['fbsecret'];
		$this->fburl = $fb['fburl'];
	}
	public function getCreds() {
		return [
			"fbid" => $this->fbid,
			"fbsecret" => $this->fbsecret,
			"fburl" => $this->fburl,
		];
	}
}