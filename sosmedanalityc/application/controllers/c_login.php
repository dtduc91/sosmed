<?php

class c_login extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->user_authentication->logged_in('c_home', 'member');
	}

	function index()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

		$this->form_validation->set_rules('user_name', 'Username', 'required');
		$this->form_validation->set_rules('user_password', 'Password', 'required');
		
		$data['form_action'] = "c_login";

		if ($this->form_validation->run() == false){
			$this->load->view('v_login', $data);
		}else{
			$this->do_login();
		}
	}

	function do_login(){
		$user_name = $_REQUEST['user_name'];
		$user_password = $_REQUEST['user_password'];
		$this->load->model('m_user');
		$user = $this->m_user->get_user($user_name,$user_password);
		if($user->num_rows()>0){
			$member = $user->row();
			$data['member'] = $member->user_id;
			$this->session->set_userdata($data);
			redirect('c_home');
		}else{
			show_error("error2");
		}
	}
}