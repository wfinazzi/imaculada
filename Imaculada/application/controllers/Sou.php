<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sou extends CI_Controller {

	function __construct() {
        parent::__construct();        
        
        $this->load->library('form_validation');
		$cadastrados_model = $this->load->model("cadastrados_model");
    }

	public function index(){
		redirect("Sou/login");
	}

	
	public function login()
	{		
		if($this->input->post()){
			$email = $this->input->post('email');
			$senha = $this->input->post('senha');

			if($this->admin_model->efetuar_login($email,$senha)){

			}else{
				redirect("Sou/login");
			}

		}else{
			$this->load->view('admin/login');
		}		
	}

	public function admin()
	{
		$dados['cadastrados'] = $this->cadastrados_model->get_cadastrados();
		$this->load->view('admin/cadastrados',$dados);
	}
}
