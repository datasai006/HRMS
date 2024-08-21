<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice_payment_model extends CI_Model {

    private $table = 'tbl_invoice_payments';

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_all() {
        $this->db->select('tbl_invoice_payments.*, tbl_invoices.invoice_number');
        $this->db->from($this->table);
        $this->db->join('tbl_invoices', 'tbl_invoice_payments.invoice_id = tbl_invoices.invoice_id');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_by_id($id) {
        $this->db->where('payment_id', $id);
        $query = $this->db->get($this->table);
        return $query->row_array();
    }

    public function insert($data) {
        return $this->db->insert($this->table, $data);
    }

    public function update($id, $data) {
        $this->db->where('payment_id', $id);
        return $this->db->update($this->table, $data);
    }

    public function delete($id) {
        $this->db->where('payment_id', $id);
         $update_data = array(
            'status' => 'inactive' 
        );
        return $this->db->update($this->table,$update_data);
    }

    public function get_all_invoices() {
        $this->db->select('invoice_id, invoice_number');
        $this->db->from('tbl_invoices');
        $query = $this->db->get();
        return $query->result_array();
    }
}
?>