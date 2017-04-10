<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class admin extends CI_Controller {

		public function index()
		{
			$this->load->view('index');
		}

		public function v_content($pages = 'index')
		{
			if ($pages != 'index') {
				// echo $pages;
				$this->load->view('content/'.$pages);
			} else {
				// echo $pages;
				$this->load->view($pages);
			}
		}

	}
?>
