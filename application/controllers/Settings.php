<?php

class Settings extends CI_Controller {

	public function index() {
		if ($this->session->logged_in == 1) {
			$adminID = $this->session->user_id;
			$this->load->view('settings', array(
				'adminID' => $adminID
			));
		} else {
			header('Location: http://0fcf2098e08f.ngrok.io/tafsirmimpi/login');
		}
	}
}
