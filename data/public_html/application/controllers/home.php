<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_data');
		$this->load->library('timeago');
	} 
	public function index()
	{

		$data['co']=$this->model_data->comment("index");
		$data['body']="client/chatroom";
		$this->load->view('client/template', $data);
	}

}

/* End of file home 5.php */
/* Location: .//C/Users/CHECKER/AppData/Local/Temp/fz3temp-1/home 5.php */