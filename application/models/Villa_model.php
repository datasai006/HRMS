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

       public function get_all_villass() {
        $this->db->select('v.*, p.project_name');    
        $this->db->from('villas v');    
    $this->db->join('projects p', 'v.project_id = p.project_id', 'left');   
    $this->db->where('p.project_type', 'Villas');   
    $query = $this->db->get();    
    return $query->result_array();
}

   public function get_villas_by_project($project_id) {
    
    $this->db->select('villas.*, projects.project_name');    
    $this->db->from('villas');    
    $this->db->join('projects', 'villas.project_id = projects.project_id');    
    $this->db->where('villas.project_id', $project_id);    
    $query = $this->db->get();   
    return $query->result();
}
        public function is_duplicate_plot($plot_number, $project_id) {
    $this->db->where('plot_number', $plot_number);
    $this->db->where('project_id', $project_id);
    $query = $this->db->get('villas');
    
    if ($query->num_rows() > 0) {
        return true; 
    } else {
        return false; 
        }





}
}
?>