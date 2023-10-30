<?php

defined('BASEPATH') or exit('No direct script access allowed');

class PagesController extends CI_Controller
{
	public $user_data = [];
	public $captcha;
	public function __construct()
	{
		parent::__construct();
		$this->load->library('captchalibrary');
	}

	public function index()
	{
		$this->load->view('pages/index');
	}

	public function static($url)
	{
		// if($this->uri->segment(2))
		switch ($url) {
			case 'sitemap.xml':
				redirect('sitemap.xml');
				break;
			case 'about.html':
				redirect('about-us');
				break;
			case 'Pest-Control-mumbai.html':
			case 'Pest-Control-miraroad.html':
			case 'Pest-Control-dahisar.html':
			case 'Pest-Control-borivali.html':
			case 'Pest-Control-kandivali.html':
				redirect('pest-control-services-mumbai');
				break;

			default:
				$captcha = $this->captchalibrary->create();
				$this->session->set_flashdata('captcha_text', $captcha['text']);
				$this->user_data['form_captcha'] = $captcha;
				if (is_file(APPPATH . 'views/static/' . $url . ".php")) {
					$this->load->view('static/' . $url, $this->user_data);
				} else {
					redirect('');
				}
				break;
		}
	}

	public function error_404()
	{
		// $this->load->view("errors/html/error_404");
		echo "ERROR";
	}
}
