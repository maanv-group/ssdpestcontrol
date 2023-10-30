<?php 
class DashboardController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("DataModel");
	}

	public function index(){
		$data['enquiries'] = json_decode($this->DataModel->get(), true, 6);
		$this->load->view('dashboard/home', $data);
	}
}

