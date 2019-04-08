<?php   


defined('BASEPATH') OR exit('No direct script access allowed');

class Item_model extends CI_Model {

    public function getAllItem()
    {
        $query = $this->db->query('SELECT * FROM produk JOIN kategori_produk ON produk.id_kategori = kategori_produk.id_kategori');
            
        return $query->result_array();
    }

    public function uploadImage()
    {
        
        
        
    }

    public function addItem()
    {
        $config['upload_path'] = './assets/img/product';
        $config['allowed_types'] = 'jpg|png';
        $config['overwrite'] =  true;
        $config['max_size'] = 2000;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('foto')) {
            echo "gagal upload";
        }
        else{
            $img = $this->upload->data();
            $foto = $img['file_name'];
            $data = [
                        "nama_produk" => $this->input->post('nama_produk',true),
                        "harga" => $this->input->post('harga',true),
                        "status" => $this->input->post('status',true),
                        "stok" => $this->input->post('stok',true),
                        "berat" => $this->input->post('berat',true),
                        "foto" => $foto,
                        "deskripsi" => $this->input->post('deskripsi',true),
                        "id_kategori" => $this->input->post('id_kategori',true)
                    ];
        
            $this->db->insert('produk', $data);
            }
    }

    public function deleteItem($id)
    {
        $this->db->where('id_produk', $id);
        $this->db->delete('produk');
    }
        
    

}

/* End of file Item_model.php */


?>