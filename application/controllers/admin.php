<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Staff extends MY_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('admin_model');
	}
}