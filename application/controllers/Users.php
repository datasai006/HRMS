<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model'); // Load model with correct case
    }

    public function index() {
        $data['users'] = $this->User_model->get_users();
        $this->load->view('index', $data);
    }

    public function create() {
        $this->load->view('create');
    }

    public function store() {
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'mobile' => $this->input->post('mobile'),
            'address' => $this->input->post('address'),
            'city' => $this->input->post('city'),
            'state' => $this->input->post('state'),
            'status' => 'active'
        );
        $this->User_model->insert_user($data);
        redirect('users');
    }

    public function edit($id) {
        $data['user'] = $this->User_model->get_user_by_id($id);
        $this->load->view('edit', $data);
    }

    public function update($id) {
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'mobile' => $this->input->post('mobile'),
            'address' => $this->input->post('address'),
            'city' => $this->input->post('city'),
            'state' => $this->input->post('state')
        );
        $this->User_model->update_user($id, $data);
        redirect('users');
    }

     public function delete($id) {
       
        $data = array('status' => 'inactive');
        $this->User_model->update_user($id, $data);
        redirect('users');
    }
}