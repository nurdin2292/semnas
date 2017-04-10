<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class user extends CI_Controller {

		public function index()
		{
			$this->load->view('index');
		}

		public function v_content($pages = 'index')
		{

			if ($pages != 'index') {
				$this->load->view('content/'.$pages);
			} else {
				$this->load->view($pages);
			}

		}

	}
?>
