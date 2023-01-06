<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Datatables_model', 'datatable');
	}

	public function index()
	{
		if(!$this->session->userdata('login_dashboard')){
			redirect('dashboard/login');
		}
		$this->load->view('dashboard_view');
	}

    public function login() {
		$this->load->view('login_view');
    }

	public function request_login() {
		$where = array(
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password'))
		);

		$result = $this->datatable->check_login($where);

		if($result) {
			$this->session->set_userdata('login_dashboard', 'yes');
			$this->session->set_userdata($where);

			echo json_encode(array('status' => true, 'msg' => 'success login'));
		}else{
			echo json_encode(array('status' => false, 'msg' => 'failed to login'));
		}
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect('dashboard/login');
	}

	
	public function getData(){
		$this->datatable->addTable('customer');
		$this->datatable->addColumn(array('','name','email','message'));
		$this->datatable->addOrder(array('id' => 'desc'));
	
		$list = $this->datatable->get_datatables();
		$data = array();

		foreach ($list as $l) {
		  $row = array();

		  $row[] = $l->name;
		  $row[] = $l->email;
		  $row[] = $l->date_create;
		  $row[] = $l->message;
		  $row[] = "<button class='btn btn-danger' onclick='deleteData(".$l->id.")'>Delete</button>";
		  $data[] = $row;
		}
		$output = array(
				"draw" => $_POST['draw'],
				"recordsTotal" => $this->datatable->count_all(),
				"recordsFiltered" => $this->datatable->count_filtered(),
				"data" => $data,
			);
		//output to json format
		echo json_encode($output);
	}

	public function deleteData($id) {
		$res = $this->datatable->delete_data($id);
		if($res) {
			echo json_encode(array('status' => true, 'msg' => 'success deleted data'));
		}else{
			echo json_encode(array('status' => false, 'msg' => 'failed to deleted data'));
		}
	}
}
