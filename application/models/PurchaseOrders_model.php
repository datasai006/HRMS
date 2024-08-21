<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PurchaseOrders_model extends CI_Model {
    
    public function get_all_purchase_orders() {
        $query = $this->db->get('tbl_purchase_orders');
        return $query->result_array();
    }

    public function get_purchase_order($id) {
        $query = $this->db->get_where('tbl_purchase_orders', array('po_id' => $id));
        return $query->row_array();
    }

    public function insert_purchase_order($data) {
        return $this->db->insert('tbl_purchase_orders', $data);
    }

    public function update_purchase_order($id, $data) {
        $this->db->where('po_id', $id);
        return $this->db->update('tbl_purchase_orders', $data);
    }

    public function delete_purchase_order($id) {
        $this->db->where('po_id', $id);
          
        $update_data = array(
            'status' => 'inactive' 
        );
         return $this->db->update(' tbl_purchase_orders', $update_data);
    }
}
?>