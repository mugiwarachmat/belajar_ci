<?php if(!defined('BASEPATH'))exit('No direct script access allowed');

class Karyawan extends CI_Controller
{


    public function __construct()
    {
        parent:: __construct();
        $this->load->model('model_karyawan');
    }


    public function index()
    {

        $this->load->view('form_tambah_karyawan');
//        $this->load->view('view_data_karyawan');
    }

    public function tambah_karyawan()
    {
//        $this->load->library->('form_validation');

        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required|min_length[4]|max_length[16]');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required|min_length[4]|max_length[16]');
        $this->form_validation->set_rules('no_tlp', 'No Telpon', 'required|min_length[4]|max_length[16]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|min_length[4]|max_length[200]');

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('form_tambah_karyawan');


        } else {


            $data_karyawan = array(
                'nama_lengkap' => set_value('nama_lengkap'),
                'jenis_kelamin' => set_value('jenis_kelamin'),
                'no_tlp' => set_value('no_tlp'),
                'email' => set_value('email'),
                'alamat' => set_value('alamat')

            );
            $this->model_karyawan->tambah_karyawan($data_karyawan);

            $this->session->flashdata('pesan', 'data berhasil ditambahkan');
            redirect('karyawan/data_karyawan');
        }

    }


    public function data_karyawan($page=0)
    {
        $config= array(
            'base_url'=>'http://localhost/belajar_ci/karyawan/data_karyawan',
            'total_rows'=>count($this->model_karyawan->select_karyawan()),
            'per_page'=>3


        );


        $per_page=$config['per_page'];
        $this->pagination->initialize($config);

        $data['karyawan'] = $this->model_karyawan->get_all_karyawan3($per_page,$page);
        $this->load->view('view_data_karyawan1', $data);
    }




/*/
    public function data_karyawan()
    {

        $data['karyawan'] = $this->model_karyawan->select_karyawan();
        $this->load->view('view_data_karyawan', $data);
    }
 /*/
    
    public function delete_karyawan($id)
    {

        $this->model_karyawan->delete_karyawan($id);
        $this->session->set_flashdata('pesan', 'data berhasil di hapus');

        redirect('karyawan/data_karyawan');
    }


    public function edit_karyawan($id)
    {

        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required|min_length[4]|max_length[16]');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required|min_length[4]|max_length[16]');
        $this->form_validation->set_rules('no_tlp', 'No Telpon', 'required|min_length[4]|max_length[16]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|min_length[4]|max_length[200]');

        if ($this->form_validation->run() == FALSE) {


            $ini['karyawan']=$this->model_karyawan->get_karyawan_by_id($id);
            $this->load->view('form_edit_karyawan',$ini);


        } else {

            $data_karyawan = array(
                'nama_lengkap' => set_value('nama_lengkap'),
                'jenis_kelamin' => set_value('jenis_kelamin'),
                'no_tlp' => set_value('no_tlp'),
                'email' => set_value('email'),
                'alamat' => set_value('alamat')

            );


            $this->model_karyawan->update_karyawan($id, $data_karyawan);
            $this->session->set_flashdata('pesan', 'data berhasil di update');

            redirect('karyawan/data_karyawan');
        }

    }



    public function live_search() {

        $data['karyawan']= $this->model_karyawan->select_karyawan();
        $this->load->view('view_data_karyawan1',$data);
    }


     public function do_search(){
        $keyword = $this->input->post('keyword');
        $data_karyawan= $this->model_karyawan->search($keyword);
        foreach ($data_karyawan as $row){
            
            echo '<tr>';
            echo '<td>' .$row['id']. '</td>';
            echo '<td>' .$row['nama_lengkap']. '</td>';
            echo '<td>' .$row['jenis_kelamin']. '</td>';
            echo '<td>' .$row['no_tlp']. '</td>';
            echo '<td>' .$row['email']. '</td>';
            echo '<td>' .$row['alamat']. '</td>';
            echo '<td>' .anchor('karyawan/edit_karyawan/'.$row['id'],'EDIT').'|';
            echo anchor('karyawan/delete_karyawan/'.$row['id'],'DELETE');
            echo  '</td></tr>';
        }
    }


}
