<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	public function __construct() {
		parent::__construct();

		$this->template = new Template('templates/', 'dashboard/');
	}
	
	public function index()
	{
		$this->template->load(false, ['dashboard']);
	}

}
