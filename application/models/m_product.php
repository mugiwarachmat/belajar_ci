<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_product extends CI_Model {

    /*function get_all() {
        $sql = "SELECT * FROM products";
        $hasil = $this->db->query($sql); // mysql_query
        return $hasil->result_array();

    }*/
    public function get_all(){
        $hasil=$this->db->get('products');
        if($hasil->num_rows() > 0){
            return $hasil->result(); // data lebih dr 1
        }
        else{
            return false;
        }
    }

    function get_by_id($id) {
        $sql = "SELECT * FROM `products` WHERE id = '$id'";
        $hasil = $this->db->query($sql);
        return $hasil->row_array();
    }


}





/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

