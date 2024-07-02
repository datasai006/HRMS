<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_active_projects() {
        $this->db->where('status', 'active');
        $query = $this->db->get('Projects');
        return $query->result_array();
    }

    public function get_project($project_id) {
        $query = $this->db->get_where('Projects', array('project_id' => $project_id));
        return $query->row_array();
    }

    public function add_project($data) {
        
        return $this->db->insert('Projects', $data);
    }

    public function update_project($project_id, $data) {
        $this->db->where('project_id', $project_id);
        return $this->db->update('Projects', $data);
    }

    public function delete_project($project_id) {
        
        $this->db->where('project_id', $project_id);
        return $this->db->update('Projects', array('status' => 'inactive'));
    }

}
?>