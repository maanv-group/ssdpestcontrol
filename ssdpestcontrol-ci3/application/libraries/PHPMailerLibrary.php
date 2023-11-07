<?php
use PHPMailer\PHPMailer\PHPmailer;
use PHPMailer\PHPMailer\Exception;

class PHPMailerLibrary {
	public function __construct()
	{
		log_message('Debug', 'PHPMailer Class is Loaded');
	}

	public function load(){
		require_once(APPPATH . "third_party/phpmailer/src/PHPMailer.php");
		require_once(APPPATH . "third_party/phpmailer/src/Exception.php");
		require_once(APPPATH . "third_party/phpmailer/src/SMTP.php");
		
		$email = new PHPMailer(true);
		return $email;
	}
}	

