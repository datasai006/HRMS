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
    public function get_all_projects()
    {
        
        $query = $this->db->get('Projects');
        return $query->result(); 
    }
    public function get_all_projectss()
{
    // Add a WHERE clause to filter by 'project_type' = 'Villas'
    $this->db->where('project_type', 'Villas');
    
    // Get the projects from the 'Projects' table
    $query = $this->db->get('Projects');
    
    // Return the result as an array of objects
    return $query->result(); 
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
       
 

    // Method to get a project by ID
    public function get_project_by_id($project_id) {
        $query = $this->db->get_where('Projects', array('project_id' => $project_id)); // Replace 'tbl_projects' with your actual table name
        return $query->row(); // Fetch a single row
    }

}
?>