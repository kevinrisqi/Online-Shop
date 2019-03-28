<?php   


defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model {

    public function getAllCategory()
    {
        return $this->db->get('kategori_produk')->result_array();
        
    }

}

/* End of file Kategori_model.php */

?>