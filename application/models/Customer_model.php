<?php
class Customer_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    // Create new customer
    public function create_customer($data) {
        return $this->db->insert('tbl_customer', $data);
    }

    // Get all customers
    public function get_all_customers() {
        $query = $this->db->get_where('tbl_customer', array('status' => 'active'));
        return $query->result_array();
    }

    // Get customer by ID
    public function get_customer_by_id($id) {
        $query = $this->db->get_where('tbl_customer', array('id' => $id));
        return $query->row_array();
    }

    // Update customer
    public function update_customer($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('tbl_customer', $data);
    }

    // Soft delete customer (set status to inactive)
    public function delete_customer($id) {
        $this->db->where('id', $id);
        return $this->db->update('tbl_customer', array('status' => 'inactive'));
    }
}
?>