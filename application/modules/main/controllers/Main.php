<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

/**
 * Description of signin
 *
 * @author https://www.roytuts.com
 */
class Main extends MY_Controller {

	function __construct() {
		parent::__construct();
		// $this->load->library('form_validation');
	}

	function index() {
		
		$this->load->view('main_template/main_header_first');
		$this->load->view('main_template/main_header_second');
		$this->load->view('custom_header');
		$this->load->view('v_index');
		$this->load->view('custom_footer');
		$this->load->view('main_template/main_footer');
	}


}

