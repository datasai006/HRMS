<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice_model extends CI_Model {

    private $table = 'tbl_invoices';

    public function get_all() {
        $query = $this->db->get($this->table);
        return $query->result_array();
    }

    public function get_by_id($id) {
        $this->db->where('invoice_id', $id);
        $query = $this->db->get($this->table);
        return $query->row_array();
    }

    public function insert($data) {
        $this->db->insert($this->table, $data);
    }

    public function update($id, $data) {
        $this->db->where('invoice_id', $id);
        $this->db->update($this->table, $data);
    }

    public function delete($id) {
        $this->db->where('invoice_id', $id);
         $update_data = array(
            'status' => 'inactive' 
        );
        return $this->db->update($this->table, $update_data);
      
    }
}
?>