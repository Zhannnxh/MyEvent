<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller {

public function __construct()
{
	parent::__construct();
	$this->load->model('MUser');
	$this->load->model('MGallery');
}

public function index()
{
	$user = $this->MUser->getAll();

	echo json_encode($user);
}
}
