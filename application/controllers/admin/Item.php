<?php   

defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Item_model');
        $this->load->model('Kategori_model');
        $this->load->library('form_validation');
        
    }
    

    public function index()
    {
        $data['item'] = $this->Item_model->getAllItem();
        $data['title'] = 'Item - Page';
        $data['judul'] = 'Item';
        $data['content'] = 'admin/item';
        $this->load->view('admin/templates/index',$data);
        
    }
    
    public function addItem()
    {
        $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
        $this->form_validation->set_rules('stok', 'Stok', 'required|numeric');
        $this->form_validation->set_rules('berat', 'Berat', 'required|numeric');
        $this->form_validation->set_rules('id_kategori', 'Id_Kategori', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_rules('foto', 'Foto', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            $data['category'] = $this->Kategori_model->getAllCategory();
            $data['title'] = 'Item - Page';
            $data['judul'] = 'Item';
            $data['content'] = 'admin/additem';
            $this->load->view('admin/templates/index',$data);
        } else {
            $this->Item_model->addItem();
            redirect('admin/item');
        }
        
    }

}

/* End of file Item.php */

?>

