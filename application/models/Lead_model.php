<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lead_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Get all leads
    public function get_all_leads() {
        $query = $this->db->get('leads');
        return $query->result_array();
    }

    // Get a single lead by ID
    public function get_lead($lead_id) {
        $query = $this->db->get_where('leads', array('lead_id' => $lead_id));
        return $query->row_array();
    }

    // Add a new lead
    public function add_lead($data) {
        return $this->db->insert('leads', $data);
    }

    // Update a lead
    public function update_lead($lead_id, $data) {
        $this->db->where('lead_id', $lead_id);
        return $this->db->update('leads', $data);
    }

    // Delete a lead (soft delete by setting status to inactive)
    public function delete_lead($lead_id) {
        $this->db->where('lead_id', $lead_id);
        return $this->db->update('leads', array('status' => 'inactive'));
    }
}
?>