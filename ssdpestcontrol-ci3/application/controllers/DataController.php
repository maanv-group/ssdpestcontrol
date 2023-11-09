<?php

class DataController extends CI_Controller
{
	public $data = [];
	public $user_config = [];
	public $email_data = [];
	public function __construct()
	{
		parent::__construct();
		$this->load->library('user_agent');
		$this->load->model("DataModel");
	}

	public function index()
	{
	}

	public function validate_captcha(): bool
	{
		if ($this->input->post('captcha_enq') == $this->session->captcha_text) {
			return true;
		} else {
			return true;
			// return false;
		}
	}

	public function insert()
	{
		$form_data = $this->input->post();
		$form_data['ip_address'] = $this->input->ip_address();
		$form_data['user_agent'] = $this->agent->browser() . " " . $this->agent->version();
		$form_data['source_url'] = $this->agent->referrer();
		if ($this->validate_captcha()) {
			if (!in_array("", $form_data)) {
				// Array ( [name_enq] => Hemant Karekar [contact_enq] => +918689862375 [email_enq] => hemant.karekar15@gmail.com [city] => Mumbai suburban [service-type] => Home [service] => Rodents Control )

				$this->DataModel->insert($form_data);
			}
			// print_r($form_data);
			if ($this->send_mail($form_data)) {
				redirect($this->agent->referrer());
			}
		}
	}
	public function short_insert()
	{
		$form_data = $this->input->post();
		$form_data['ip_address'] = $this->input->ip_address();
		$form_data['user_agent'] = $this->agent->browser() . " " . $this->agent->version();
		$form_data['source_url'] = $this->agent->referrer();
		if ($this->validate_captcha()) {
			// $this->DataModel->insert($form_data);
			$this->send_mail($form_data);
			// if ($this->send_mail($form_data)) {
			// 	// redirect($this->agent->referrer());
			// 	print_r($this->send_mail($form_data));
			// 	echo "Mail Sent";
			// } else {
			// 	print_r($this->send_mail($form_data));
			// 	echo "Invalid";
			// }
		} else {
			// redirect($this->agent->referrer());
		}
	}

	public function send_mail($data)
	{
		$this->user_config['email'] = [
			'protocol' => 'smtp',
			'smtp_host' => "smtp.hostinger.com",
			'smtp_port' => 465,
			'smtp_user' => "info@ssdpestcontrol.com",
			'smtp_pass' => "SSD@info123",
			'charset' => 'iso-8859-1',
			'_smtp_auth' => TRUE,
			'smtp_crypto' => 'ssl',
			'mailtype' => 'html',
			'charset' => 'utf-8',
			'send_multipart' => FALSE,
			'wordwrap' => TRUE
		];

		$this->email->initialize($this->user_config['email']);

		$email_data['email'] = [
			'name_enq' => $data['name_enq'],
			'email_enq' => $data['email_enq'],
			'contact_enq' => $data['contact_enq'],
			'city_enq' => $data['city_enq'] ??= "NA",
			'service-type' => $data['service-type'] ??= "NA",
			'message' => $data['message'] ??= "NA"
		];

		$message = $this->load->view('templates/email/enquiry', $email_data, TRUE);

		$this->email->from('info@ssdpestcontrol.com', "SSD Enquiries");
		$this->email->to('hemantkarekar.0.0.0.0@gmail.com');
		// $this->email->to('ssdpestcontrol@gmail.com');
		$this->email->subject('SSD Pest Control | New Enquiry!');
		$this->email->message($message);

		print_r($message);
		// $this->email->send();
		// print_r($this->email->print_debugger());
	}
}
