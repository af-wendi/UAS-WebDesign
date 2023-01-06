<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Datatables_model', 'datatable');
	}

	public function index() {
		$this->load->view('home_view');
	}

	public function send() {
		$data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'message' => $this->input->post('message')
		);

		$result = $this->datatable->insert_message($data);

		echo json_encode(
			($result ? array('status' => true, 'msg' => 'success send message') : array('status' => false, 'msg' => 'failed to send message'))
		);
	}
}
