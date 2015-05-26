<?php if(!defined('BASEPATH'))exit('No direct script access allowed');

class Model_karyawan extends CI_Model {

    public function tambah_karyawan($data){
        $this->db->insert('karyawan',$data);
    }


    public function select_karyawan(){
        $hasil=$this->db->get('karyawan');
        if($hasil->num_rows()>0){
            return $hasil->result();

        }else{

            return false;
        }
    }

    public function delete_karyawan($id){
        $this->db->where('id',$id)->delete('karyawan');
    }

    public function get_karyawan_by_id($id){
       $hasil = $this->db->where('id',$id)->limit(1)->get('karyawan');

        if($hasil->num_rows()>0){

            return $hasil->row();

        }else{
            return false;
        }

    }

    public function update_karyawan($id,$data){
        $this->db->where('id',$id)->update('karyawan',$data);
    }


 //--------------------paging------------------------------------
    public function get_all_karyawan3($per_page,$page){

        $hasil=$this->db->get('karyawan',$per_page,$page);
        if($hasil->num_rows()>0){
            return $hasil->result();

        }else{

            return false;
        }

    }
    
    function search($keyword) {
        $sql="SELECT * FROM karyawan WHERE nama_lengkap LIKE '%$keyword%'";
        $result= $this->db->query($sql);
        if ($result->num_rows()>0) {
            return $result->result_array();
        }else{
            return array();
        }
    }



}
//---------------------------------------------
//End of file model_karyawan.php
//Location:..application/model/model_karyawan.php
