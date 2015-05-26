<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index()
	{
        $this->form_validation->set_rules('username', 'Username', 'required|alpha_numeric|min_length[4]|max_length[16]');
        $this->form_validation->set_rules('password', 'Password', 'required|alpha_numeric|min_length[4]|max_length[16]');

        if($this->form_validation->run()==FALSE){

            $this->load->view('form_login');

        }else{

            $username = set_value('username');
            $password = set_value('password');

            $this->load->model('model_login');
            $is_valid = $this->model_login->cek_username_password($username,$password);

            if($is_valid!= FALSE){
                $this->session->set_userdata('username',$username);

                redirect('dasboard');


            }else{

                $this->session->set_flashdata('pesan,','gagal login');
                $this->load->view('form_login');

            }

        }

    }

    public function logout(){

        $this->session->sess_destroy();
        $data['pesan']="Anda sudah Logout";
        $this->load->view('form_login',$data);

    }
}
