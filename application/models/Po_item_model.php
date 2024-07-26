<?php
class Po_item_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_all() {
        $query = $this->db->get('tbl_po_items');
        return $query->result_array();
    }

    public function get_by_id($id) {
        $query = $this->db->get_where('tbl_po_items', array('po_item_id' => $id));
        return $query->row_array();
    }

    public function insert($data) {
        return $this->db->insert('tbl_po_items', $data);
    }

    public function update($id, $data) {
        $this->db->where('po_item_id', $id);
        return $this->db->update('tbl_po_items', $data);
    }

    public function delete($id) {
        $this->db->where('po_item_id', $id);
         $update_data = array(
            'status' => 'inactive' 
        );
        return $this->db->update(' tbl_po_items', $update_data);
    }
}
?>