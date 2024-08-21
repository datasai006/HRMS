<?php
class Employee_model extends CI_Model {
    
       public function get_all_employees() {
        $this->db->where('status', 'active');
        $query = $this->db->get('tbl_employee');
        return $query->result_array();
    }

    public function get_employee_by_id($id) {
        $query = $this->db->get_where('tbl_employee', array('id' => $id));
        return $query->row_array();
    }

    public function add_employee($data) {
        return $this->db->insert('tbl_employee', $data);
    }

    public function update_employee($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('tbl_employee', $data);
    }

    public function delete_employee($id) {
        $this->db->set('status', 'inactive');
        $this->db->where('id', $id);
        return $this->db->update('tbl_employee');
    }
}
?>