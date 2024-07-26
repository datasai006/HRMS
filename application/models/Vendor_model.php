<?php
class Vendor_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

      public function get_all_vendors() {
        $this->db->where('status', 'active'); 
        $query = $this->db->get(' tbl_vendors');
        return $query->result_array();
    }

    public function get_vendor($id) {
        $query = $this->db->get_where(' tbl_vendors', array('id' => $id));
        return $query->row_array();
    }

    public function add_vendor($data) {
        return $this->db->insert(' tbl_vendors', $data);
    }

    public function update_vendor($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update(' tbl_vendors', $data);
    }

    public function delete_vendor($id) {
        $this->db->where('id', $id);
        $update_data = array(
            'status' => 'inactive' 
        );
        return $this->db->update(' tbl_vendors', $update_data);
    }
}