<?php
class Employee extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Employee_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('form_validation', 'session'));
    }

    public function index() {
        $data['employees'] = $this->Employee_model->get_all_employees();
        $this->load->view('employee/index', $data);
    }

    public function add() {
        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        // Add other validation rules as needed

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('employee/add');
        } else {
            $data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                'gender' => $this->input->post('gender'),
                'country' => $this->input->post('country'),
                'state' => $this->input->post('state'),
                'mobile_no' => $this->input->post('mobile_no'),
                'doj' => $this->input->post('doj'),
                'qualification' => $this->input->post('qualification'),
                'role_id' => $this->input->post('role_id'),
                'attendance' => '',
                'payroll' => '',
                'performance_reviews' => '',
                'status' => 'active'
            );
            $this->Employee_model->add_employee($data);
            redirect('employee');
        }
    }

    public function edit($id) {
        $data['employee'] = $this->Employee_model->get_employee_by_id($id);

        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        // Add other validation rules as needed

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('employee/edit', $data);
        } else {
            $data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                'gender' => $this->input->post('gender'),
                'country' => $this->input->post('country'),
                'state' => $this->input->post('state'),
                'mobile_no' => $this->input->post('mobile_no'),
                'doj' => $this->input->post('doj'),
                'qualification' => $this->input->post('qualification'),
                'role_id' => $this->input->post('role_id'),
                'attendance' => $this->input->post('attendance'),
                'payroll' => $this->input->post('payroll'),
                'performance_reviews' => $this->input->post('performance_reviews'),
                'status' => $this->input->post('status')
            );
            $this->Employee_model->update_employee($id, $data);
            redirect('employee');
        }
    }

    public function view($id) {
        $data['employee'] = $this->Employee_model->get_employee_by_id($id);
        $this->load->view('employee/view', $data);
    }

    public function delete($id) {
        $this->Employee_model->delete_employee($id);
        redirect('employee');
    }
}
?>