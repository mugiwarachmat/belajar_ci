<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman extends CI_Controller {

    public function index()
    {
        $this->load->helpers('form');

        $this->load->view('form_tambah_user');
   //  echo"Hello........!!!";
  // $this->load->view('welcome_message');
    }
    public function tambah_user(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username','Username','required|alpha_numeric|min_length[4]|max_length[16]');
        $this->form_validation->set_rules('password','Password','required|alpha_numeric|min_length[4]|max_length[16]|matches[pass2]|sha1');
        $this->form_validation->set_rules('pass2','Password','required|alpha_numeric|min_length[4]|max_length[16]');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('form_tambah_user');
        }

    }
}

//End of file halaman.php
//Location:..application/controller/halaman.php
