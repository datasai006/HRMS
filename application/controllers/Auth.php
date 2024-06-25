<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('session');
        $this->load->helper('url');
    }

    public function register() {
        $this->load->view('register');
    }

    public function register_user() {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('mobile', 'Mobile', 'required|is_unique[tbl_users.mobile]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('register');
        } else {
            $data = array(
                'name' => $this->input->post('name'),
                'mobile' => $this->input->post('mobile'),
                'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                'status' => 'active'
            );
            $this->User_model->register($data);
            $this->session->set_flashdata('success', 'Registration successful. You can now login.');
            redirect('auth/login');
        }
    }

    public function login() {
        $this->load->view('login');
    }

    public function login_user() {
        $this->form_validation->set_rules('mobile', 'Mobile', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login');
        } else {
            $mobile = $this->input->post('mobile');
            $password = $this->input->post('password');
            $user = $this->User_model->login($mobile, $password);
            
            if ($user) {
                $userdata = array(
                    'id' => $user->id,
                    'name' => $user->name,
                    'mobile' => $user->mobile,
                    'logged_in' => TRUE
                );
                 $this->session->set_userdata($userdata);
                redirect('dashboard'); // Change this to your desired dashboard route
            } else {
                $this->session->set_flashdata('error', 'Invalid mobile or password');
                redirect('auth/login');
            }
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}