<?php

class Login extends CI_Controller {

	public function index() {
		if ($this->session->logged_in == 1) {
			header('Location: http://apps.n29itech.xyz/tafsir_mimpi/user');
		} else {
			$this->load->view('login');
		}
	}
}
