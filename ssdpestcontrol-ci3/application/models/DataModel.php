<?php

class DataModel extends CI_Model
{
	public $data = [];
	public function __construct()
	{
		parent::__construct();
	}

	public function insert($form_data){
		$this->data = [
			'name'=>$form_data['name_enq'],
			'phone'=>$form_data['contact_enq'],
			'email'=>$form_data['email_enq'],
			'city'=>$form_data['city'] ??= "" ,
			'service_type'=>$form_data['service-type'] ??= "",
			'service'=>$form_data['service'] ??= "",
			'ip_address'=>$form_data['ip_address'],
			'user_agent'=>$form_data['user_agent'],
			'source_url'=>$form_data['source_url']
		];
		$this->db->insert('wp_enquiries', $this->data);
	}

	public function get(){
		return json_encode($this->db->get('wp_enquiries')->result_array());
	}
}

