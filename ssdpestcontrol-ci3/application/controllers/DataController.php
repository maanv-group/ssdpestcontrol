<?php 

class DataController extends CI_Controller
{
	public $data = [];
	public $user_config = [];
	public function __construct()
	{
		parent::__construct();
		$this->load->library('user_agent');
		$this->load->model("DataModel");
		
		$this->user_config['email'] = [
			'protocol' => 'smtp',
			'smtp_host' => "ssl://smtp.googlemail.com",
			'smtp_port' => 465,
			'smtp_user' => "info@ssdpestcontrol.com",
			'smtp_pass' => "SSD@info123",
			'charset' => 'iso-8859-1',
		];

		$this->email->initialize($this->user_config['email']);
		$this->email->from('info@ssdpestcontrol.com', "SSD Enquiries");
	}

	public function index(){

	}

	public function insert(){
		$form_data = $this->input->post();
		$form_data['ip_address'] = $this->input->ip_address();
		$form_data['user_agent'] = $this->agent->browser() . " " . $this->agent->version(); 
		$form_data['source_url'] = $this->agent->referrer();
		if(!in_array("", $form_data)){
			// Array ( [name_enq] => Hemant Karekar [contact_enq] => +918689862375 [email_enq] => hemant.karekar15@gmail.com [city] => Mumbai suburban [service-type] => Home [service] => Rodents Control )

			$this->DataModel->insert($form_data);
		}
		// print_r($form_data);
		if($this->send_mail()){
			redirect($this->agent->referrer());
		}
	}
	public function short_insert(){
		$form_data = $this->input->post();
		$form_data['ip_address'] = $this->input->ip_address();
		$form_data['user_agent'] = $this->agent->browser() . " " . $this->agent->version(); 
		$form_data['source_url'] = $this->agent->referrer();
		$this->DataModel->insert($form_data);

		if($this->send_mail()){
			redirect($this->agent->referrer());
		} else{
			print_r($this->send_mail());
		}
	}

	public function send_mail() {
		$this->email->to('hemantkarekar.0.0.0.0@gmail.com');
		$this->email->subject('New Enquiry!');
		$this->email->message('New Enquiry');
		if($this->email->send()){
			return $this->email->send();
		} else {
			return $this->email->print_debugger();
		}
	}
}
