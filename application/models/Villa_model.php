<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Villa_model extends CI_Model {

    public function get_all_villas() {
        // $this->db->where('status', 'active'); // Only get active villas
        $query = $this->db->get('villas');
        return $query->result_array();
    }

    public function insert_villa($data) {
        $this->db->insert('villas', $data);
    }

    public function get_villa_by_id($id) {
        $query = $this->db->get_where('villas', array('id' => $id));
        return $query->row_array();
    }

    public function update_villa($id, $data) {
    $this->db->where('id', $id);
    $this->db->update('villas', $data);
    }


    public function delete_villa($id) {
        $this->db->where('id', $id);
        $this->db->delete('villas');
    }


}
?>