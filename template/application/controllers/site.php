<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends MY_Controller {
	public function index() {
		$this->load->view('index');
	}
	public function page1() {
		$this->load->view('page1');
	}
	public function page2() {
		$this->load->view('page2');
	}
}