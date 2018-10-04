<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$this->home();
	}
	public function chat()

	{
		$this->load->view('globals/header');

		$this->load->view('chat');
		$this->load->view('globals/footer');
	}
	public function login(){
		$this->load->view('globals/header');
		$this->load->view('login');
		$this->load->view('globals/footer');

	}
	public function sign_up(){
		$this->load->view('globals/header');

		$this->load->view('sign_up');
		$this->load->view('globals/footer');
	}
	public function map(){

		$this->load->view('globals/header');
		$this->load->view('map');
		$this->load->view('globals/footer');
	}
	
	public function home()
	{
		
		$this->load->view('globals/header');

		$this->load->view('head_home');
		$this->load->view('body_home');
		$this->load->view('footer');

		$this->load->view('globals/footer');
		
	}

}
