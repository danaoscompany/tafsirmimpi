<?php

class Main extends CI_Controller {

	public function index() {
		if ($this->session->logged_in == 1) {
			header('Location: http://0fcf2098e08f.ngrok.io/tafsirmimpi/admin');
		} else {
			header('Location: http://0fcf2098e08f.ngrok.io/tafsirmimpi/login');
		}
	}
}
