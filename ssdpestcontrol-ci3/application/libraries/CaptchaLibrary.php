<?php

class CaptchaLibrary
{
	public function create(){
		$vals = array(
			// 'word'          => random_string('alnum', 5),
			'img_path'      => './captcha/',
			'img_url'       => base_url('captcha/'),
			'font_path'     => './assets/fonts/typewriter.ttf',
			'img_width'     => '200',
			'img_height'    => 60,
			'expiration'    => 7200,
			'word_length'   => 8,
			'font_size'     => 20,
			'pool'          => '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ',

			// White background and border, black text and red grid
			'colors'        => array(
				'background' => array(255, 255, 255),
				'border' => array(255, 255, 255),
				'text' => array(0, 0, 0),
				'grid' => array(255, 40, 40)
			)
		);
		delete_files('./captcha/');
		$captcha = create_captcha($vals);
		return $captcha;
	}
}
