<?php

class Number extends CI_Controller {

	public function number2a() {
		if ($this->session->logged_in == 1) {
			$adminID = $this->session->user_id;
			$this->load->view('number/number2a/number', array(
				'adminID' => $adminID
			));
		} else {
			header('Location: http://danaos.xyz/tafsirmimpi/login');
		}
	}

	public function number2a_image() {
		if ($this->session->logged_in == 1) {
			$adminID = $this->session->user_id;
			$this->load->view('number/number2a/image', array(
				'adminID' => $adminID
			));
		} else {
			header('Location: http://danaos.xyz/tafsirmimpi/login');
		}
	}

	public function number3a() {
		if ($this->session->logged_in == 1) {
			$adminID = $this->session->user_id;
			$this->load->view('number/number3a/number', array(
				'adminID' => $adminID
			));
		} else {
			header('Location: http://danaos.xyz/tafsirmimpi/login');
		}
	}

	public function number3a_image() {
		if ($this->session->logged_in == 1) {
			$adminID = $this->session->user_id;
			$this->load->view('number/number3a/image', array(
				'adminID' => $adminID
			));
		} else {
			header('Location: http://danaos.xyz/tafsirmimpi/login');
		}
	}

	public function number4a() {
		if ($this->session->logged_in == 1) {
			$adminID = $this->session->user_id;
			$this->load->view('number/number4a/number', array(
				'adminID' => $adminID
			));
		} else {
			header('Location: http://danaos.xyz/tafsirmimpi/login');
		}
	}

	public function number4a_image() {
		if ($this->session->logged_in == 1) {
			$adminID = $this->session->user_id;
			$this->load->view('number/number4a/image', array(
				'adminID' => $adminID
			));
		} else {
			header('Location: http://danaos.xyz/tafsirmimpi/login');
		}
	}
}
