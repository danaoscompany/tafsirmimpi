<?php

class User extends CI_Controller {
	
	public function get_manual_ad() {
	}
	
	public function get_about() {
		echo $this->db->query("SELECT * FROM `settings` LIMIT 1")->row_array()['about'];
	}
	
	public function get_share_text() {
		echo $this->db->query("SELECT * FROM `settings` LIMIT 1")->row_array()['share_text'];
	}
	
	public function get_number_images() {
		$number = intval($this->input->post('number'));
		echo json_encode($this->db->query("SELECT * FROM `numbers` WHERE `number`=" . $number)->result_array());
	}
	
	public function get_word_images() {
		$word = intval($this->input->post('word'));
		$type = intval($this->input->post('type'));
		echo json_encode($this->db->query("SELECT * FROM `words` WHERE `word`='" . $word . "' AND `type`='" . $type . "'")->result_array());
	}
	
	public function get_numbers_2a() {
		$keyword = $this->input->post('keyword');
		$type = $this->input->post('type'); // kata, angka
		$numbers = [];
		if ($type == 'kata') {
			$number = $this->db->query("SELECT * FROM `numbers_2a` WHERE LOWER(`keyword_1`) LIKE '%" . $keyword . "%'")->row_array();
			array_push($numbers, array(
				'image' => $this->db->query("SELECT * FROM `number_2a_images` WHERE `number`='" . $number['number_1']. "'")->row_array()['image']
			));
			array_push($numbers, array(
				'image' => $this->db->query("SELECT * FROM `number_2a_images` WHERE `number`='" . $number['number_2']. "'")->row_array()['image']
			));
			array_push($numbers, array(
				'image' => $this->db->query("SELECT * FROM `number_2a_images` WHERE `number`='" . $number['number_3']. "'")->row_array()['image']
			));
			array_push($numbers, array(
				'image' => $this->db->query("SELECT * FROM `number_2a_images` WHERE `number`='" . $number['number_4']. "'")->row_array()['image']
			));
			array_push($numbers, array(
				'image' => $this->db->query("SELECT * FROM `number_2a_images` WHERE `number`='" . $number['number_5']. "'")->row_array()['image']
			));
		} else if ($type == 'angka') {
			$image = $this->db->query("SELECT * FROM `number_2a_images` WHERE `number`='" . $keyword . "'")->row_array()['image'];
			$numbersLength = $this->db->query("SELECT * FROM `numbers_2a` WHERE `number_1`='" . trim($keyword) . "'")->num_rows();
			for ($i=0; $i<$numbersLength; $i++) {
				array_push($numbers, array(
					'image' => $image
				));
			}
			$numbersLength = $this->db->query("SELECT * FROM `numbers_2a` WHERE `number_2`='" . trim($keyword) . "'")->num_rows();
			for ($i=0; $i<$numbersLength; $i++) {
				array_push($numbers, array(
					'image' => $image
				));
			}
			$numbersLength = $this->db->query("SELECT * FROM `numbers_2a` WHERE `number_3`='" . trim($keyword) . "'")->num_rows();
			for ($i=0; $i<$numbersLength; $i++) {
				array_push($numbers, array(
					'image' => $image
				));
			}
			$numbersLength = $this->db->query("SELECT * FROM `numbers_2a` WHERE `number_4`='" . trim($keyword) . "'")->num_rows();
			for ($i=0; $i<$numbersLength; $i++) {
				array_push($numbers, array(
					'image' => $image
				));
			}
			$numbersLength = $this->db->query("SELECT * FROM `numbers_2a` WHERE `number_5`='" . trim($keyword) . "'")->num_rows();
			for ($i=0; $i<$numbersLength; $i++) {
				array_push($numbers, array(
					'image' => $image
				));
			}
		}
		echo json_encode($numbers);
	}
	
	public function get_all_numbers_2a() {
		$numbers = [];
		$tmpNumbers = $this->db->query("SELECT * FROM `numbers_2a`")->result_array();
		for ($i=0; $i<sizeof($tmpNumbers); $i++) {
			$number = $tmpNumbers[$i];
			$image = $this->db->query("SELECT * FROM `number_2a_images` WHERE `number`='" . $number['number_1'] . "'")->row_array();
			if ($image != NULL) {
				array_push($numbers, array(
					'number' => $number['number_1'],
					'image' => $image['image']
				));
			}
			$image = $this->db->query("SELECT * FROM `number_2a_images` WHERE `number`='" . $number['number_2'] . "'")->row_array();
			if ($image != NULL) {
				array_push($numbers, array(
					'number' => $number['number_2'],
					'image' => $image['image']
				));
			}
			$image = $this->db->query("SELECT * FROM `number_2a_images` WHERE `number`='" . $number['number_3'] . "'")->row_array();
			if ($image != NULL) {
				array_push($numbers, array(
					'number' => $number['number_3'],
					'image' => $image['image']
				));
			}
			$image = $this->db->query("SELECT * FROM `number_2a_images` WHERE `number`='" . $number['number_4'] . "'")->row_array();
			if ($image != NULL) {
				array_push($numbers, array(
					'number' => $number['number_4'],
					'image' => $image['image']
				));
			}
			$image = $this->db->query("SELECT * FROM `number_2a_images` WHERE `number`='" . $number['number_5'] . "'")->row_array();
			if ($image != NULL) {
				array_push($numbers, array(
					'number' => $number['number_5'],
					'image' => $image['image']
				));
			}
		}
		echo json_encode($numbers);
	}
	
	public function get_numbers_3a() {
		$keyword = $this->input->post('keyword');
		$type = $this->input->post('type'); // kata, angka
		$numbers = [];
		if ($type == 'kata') {
			$number = $this->db->query("SELECT * FROM `numbers_3a` WHERE LOWER(`keyword_1`) LIKE '%" . $keyword . "%'")->row_array();
			array_push($numbers, array(
				'keyword' => $number['keyword_1'],
				'number' => $number['number_1']
			));
			array_push($numbers, array(
				'keyword' => $number['keyword_2'],
				'number' => $number['number_2']
			));
			array_push($numbers, array(
				'keyword' => $number['keyword_3'],
				'number' => $number['number_3']
			));
			array_push($numbers, array(
				'keyword' => $number['keyword_4'],
				'number' => $number['number_4']
			));
		} else if ($type == 'angka') {
			$tmpNumbers = $this->db->query("SELECT * FROM `numbers_3a` WHERE `number_1`='" . trim($keyword) . "'")->result_array();
			for ($i=0; $i<sizeof($tmpNumbers); $i++) {
				$number = $tmpNumbers[$i];
				array_push($numbers, array(
					'keyword' => $number['keyword_1'],
					'number' => $number['number_1']
				));
			}
			$tmpNumbers = $this->db->query("SELECT * FROM `numbers_3a` WHERE `number_2`='" . trim($keyword) . "'")->result_array();
			for ($i=0; $i<sizeof($tmpNumbers); $i++) {
				$number = $tmpNumbers[$i];
				array_push($numbers, array(
					'keyword' => $number['keyword_1'],
					'number' => $number['number_2']
				));
			}
			$tmpNumbers = $this->db->query("SELECT * FROM `numbers_3a` WHERE `number_3`='" . trim($keyword) . "'")->result_array();
			for ($i=0; $i<sizeof($tmpNumbers); $i++) {
				$number = $tmpNumbers[$i];
				array_push($numbers, array(
					'keyword' => $number['keyword_1'],
					'number' => $number['number_3']
				));
			}
			$tmpNumbers = $this->db->query("SELECT * FROM `numbers_3a` WHERE `number_4`='" . trim($keyword) . "'")->result_array();
			for ($i=0; $i<sizeof($tmpNumbers); $i++) {
				$number = $tmpNumbers[$i];
				array_push($numbers, array(
					'keyword' => $number['keyword_1'],
					'number' => $number['number_4']
				));
			}
		}
		echo json_encode($numbers);
	}
	
	public function get_all_numbers_3a() {
		$numbers = [];
		$tmpNumbers = $this->db->query("SELECT * FROM `numbers_3a`")->result_array();
		for ($i=0; $i<sizeof($tmpNumbers); $i++) {
			$number = $tmpNumbers[$i];
			array_push($numbers, array(
				'keyword' => $number['keyword_1'],
				'number' => $number['number_1']
			));
			array_push($numbers, array(
				'keyword' => $number['keyword_1'],
				'number' => $number['number_2']
			));
			array_push($numbers, array(
				'keyword' => $number['keyword_1'],
				'number' => $number['number_3']
			));
			array_push($numbers, array(
				'keyword' => $number['keyword_1'],
				'number' => $number['number_4']
			));
		}
		echo json_encode($numbers);
	}
	
	public function get_numbers_4a() {
		$keyword = $this->input->post('keyword');
		$type = $this->input->post('type'); // kata, angka
		$numbers = [];
		if ($type == 'kata') {
			$number = $this->db->query("SELECT * FROM `numbers_4a` WHERE LOWER(`keyword_1`) LIKE '%" . $keyword . "%'")->row_array();
			array_push($numbers, array(
				'keyword' => $number['keyword_1'],
				'number' => $number['number_1']
			));
			array_push($numbers, array(
				'keyword' => $number['keyword_1'],
				'number' => $number['number_3']
			));
		} else if ($type == 'angka') {
			$tmpNumbers = $this->db->query("SELECT * FROM `numbers_4a` WHERE `number_1`='" . trim($keyword) . "'")->result_array();
			for ($i=0; $i<sizeof($tmpNumbers); $i++) {
				$number = $tmpNumbers[$i];
				array_push($numbers, array(
					'keyword' => $number['keyword_1'],
					'number' => $number['number_1']
				));
			}
			$tmpNumbers = $this->db->query("SELECT * FROM `numbers_4a` WHERE `number_2`='" . trim($keyword) . "'")->result_array();
			for ($i=0; $i<sizeof($tmpNumbers); $i++) {
				$number = $tmpNumbers[$i];
				array_push($numbers, array(
					'keyword' => $number['keyword_1'],
					'number' => $number['number_2']
				));
			}
			$tmpNumbers = $this->db->query("SELECT * FROM `numbers_4a` WHERE `number_3`='" . trim($keyword) . "'")->result_array();
			for ($i=0; $i<sizeof($tmpNumbers); $i++) {
				$number = $tmpNumbers[$i];
				array_push($numbers, array(
					'keyword' => $number['keyword_1'],
					'number' => $number['number_3']
				));
			}
		}
		echo json_encode($numbers);
	}
	
	public function get_all_numbers_4a() {
		$numbers = [];
		$tmpNumbers = $this->db->query("SELECT * FROM `numbers_4a`")->result_array();
		for ($i=0; $i<sizeof($tmpNumbers); $i++) {
			$number = $tmpNumbers[$i];
			array_push($numbers, array(
				'keyword' => $number['keyword_1'],
				'number' => $number['number_1']
			));
			array_push($numbers, array(
				'keyword' => $number['keyword_1'],
				'number' => $number['number_3']
			));
		}
		echo json_encode($numbers);
	}
	
	public function get_settings() {
		echo json_encode($this->db->query("SELECT * FROM `settings` LIMIT 1")->row_array());
	}
}
