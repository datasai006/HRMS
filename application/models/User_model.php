<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function register($data) {
        return $this->db->insert('tbl_users', $data);
    }

    public function login($mobile, $password) {
        $this->db->where('mobile', $mobile);
        $query = $this->db->get('tbl_users');
        
        if ($query->num_rows() == 1) {
            $user = $query->row();
            if (password_verify($password, $user->password)) {
                return $user;
            }
        }
        return false;
    }
}