<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasboard extends CI_Controller {


    public function __construct(){

        parent::__construct();

        if(!$this->session->userdata('username')){

            $this->session->set_flashdata('pessan','Maaf anda belum login');
            redirect('login');
        }

    }

	public function index()
	{

        $this->load->view('admin/dasboard');

    }
}


