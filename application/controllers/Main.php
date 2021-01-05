<?php

class Main extends CI_Controller {

	public function index() {
		if ($this->session->logged_in == 1) {
			header('Location: http://danaos.xyz/tafsirmimpi/admin');
		} else {
			header('Location: http://danaos.xyz/tafsirmimpi/login');
		}
	}
}
