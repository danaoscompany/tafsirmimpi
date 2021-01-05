<?php

class Main extends CI_Controller {

	public function index() {
		if ($this->session->logged_in == 1) {
			header('Location: http://apps.n29itech.xyz/tafsir_mimpi/admin');
		} else {
			header('Location: http://apps.n29itech.xyz/tafsir_mimpi/login');
		}
	}
}
