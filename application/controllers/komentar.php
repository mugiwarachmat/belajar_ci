<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komentar extends CI_Controller {

    public function index()
    {

        $this->load->view('komentar');
   //  echo"Hello........!!!";
  // $this->load->view('welcome_message');
    }
}
