<?php
class Model_shop extends CI_Model
{
    public function getAllShop()
    {
        return $query = $this->db->get('shop')->result_array();
    }

    public function TambahShop()
    {
        $data = [
            "shop" => $this->input->post('shop', true)
        ];

        $this->db->insert('shop', $data);
    }

    public function Ubahshop()
    {      
        $data = [
            "shop" => $this->input->post('shop', true)
        ];

        $this->db->where('Id', $this->input->post('Id'));
        $this->db->update('shop', $data);
    }

    public function hapusShop($id)
    {      
        $this->db->where('Id', $id);
        $this->db->delete('shop');
    }
    
    public function getShopById($id)
    {
        return $this->db->get_where('shop', ['Id' => $id])->row_array();
    }

    public function Carishop()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('shop', $keyword);
        return $this->db->get('shop')->result_array();
    }
}

?>