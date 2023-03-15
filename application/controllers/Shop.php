<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Shop extends CI_Controller {
        public function __construct()
        {

            parent::__construct();
            $this->load->library('form_validation');
            $this->load->model('Model_Shop');
            if(!$this->session->userdata('username')) {
                redirect('auth');
            }
        }

        public function index()
        {
            $data['title'] = 'Shop';

            $data['Shop'] = $this->Model_Shop->getAllShop();
            if( $this->input->post('keyword') ) {
                $data['Shop'] = $this->Model_Shop->CariShop();
            }
            $this->load->view('templates/header.php', $data);
            $this->load->view('Shop/index.php', $data);
            $this->load->view('templates/footer.php');
        }
        public function tambah()
        {
            $this->form_validation->set_rules('Shop', 'Shop', 'trim|required');

            if($this->form_validation->run() == false )
            {
            $data['title'] = 'Tambah Shop';

            $this->load->view('templates/header.php', $data);
            $this->load->view('Shop/tambah.php', $data);
            $this->load->view('templates/footer.php');
        } else {
            $this->Model_Shop->TambahShop();
            $this->session->set_flashdata('flash', 'Ditambahkan');
                redirect('Shop');
            }
        }
        public function ubah($id)
        {
                $this->form_validation->set_rules('Shop', 'Shop', 'trim|required');
                $data['Shop'] = $this->Model_Shop->getShopById($id);

                if($this->form_validation->run() == false ) {
                    $data['title'] = 'Ubah Shop';

                    $this->load->view('templates/header.php', $data);
                    $this->load->view('Shop/ubah.php', $data);
                    $this->load->view('templates/footer.php');
                
            
            } else {
                $this->Model_jurusan->UbahShop();
                $this->session->set_flashdata('flash', 'Diubah');
                    redirect('Shop');
            }
        }
        public function hapus($id)
        {
            $this->Model_jurusan->hapusShop($id);
            $this->session->set_flashdata('flash', 'DiHapus');
                redirect('Shop');
        }
    }