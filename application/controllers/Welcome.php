<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function Login()
	{
		$this->load->view('VLogin');
	}
	
	public function SignUp()
	{
		$this->load->view('VSignUp');
	}

	public function Folder()
	{
		$this->load->view('VFolder');
	}

	public function Tags()
	{
		$this->load->view('VTags');
	}

	public function Task()
	{
		$this->load->view('VTask');
	}

	public function Calendar()
	{
		$this->load->view('VCalendar');
	}

	public function Statistic()
	{
		$this->load->view('VStatistic');
	}

}
