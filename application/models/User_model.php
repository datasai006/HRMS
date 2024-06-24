<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

 public function get_users() {
    $this->db->where('status', 'active');
    $query = $this->db->get('tbl_customer');
    return $query->result_array();
}


    public function insert_user($data) {
        return $this->db->insert('tbl_customer', $data);
    }

    public function get_user_by_id($id) {
        $query = $this->db->get_where('tbl_customer', array('id' => $id));
        return $query->row_array();
    }

    public function update_user($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('tbl_customer', $data);
    }

    public function delete_user($id) {
        $this->db->where('id', $id);
        return $this->db->delete('tbl_customer');
    }
}