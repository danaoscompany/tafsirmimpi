<?php

class Image extends CI_Controller {

	public function view() {
		if ($this->session->logged_in == 1) {
			$imgURL = $this->input->post('img_url');
			$this->load->view('image/view', array(
				'imgURL' => $imgURL
			));
		} else {
			header('Location: http://0fcf2098e08f.ngrok.io/tafsirmimpi/login');
		}
	}
}
