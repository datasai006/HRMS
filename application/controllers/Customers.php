<?php
class Customers extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Customer_model');
        $this->load->helper('url_helper');
    }

    // Display all customers
    public function index() {
        $data['customers'] = $this->Customer_model->get_all_customers();
        $this->load->view('customer/index', $data);
    }

    // Create new customer
    public function create() {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[tbl_customer.email]');
        $this->form_validation->set_rules('phone_number', 'Phone Number', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');
        $this->form_validation->set_rules('state', 'State', 'required');
        $this->form_validation->set_rules('zip_code', 'Zip Code', 'required');
        $this->form_validation->set_rules('country', 'Country', 'required');
        $this->form_validation->set_rules('preferred_contact_method', 'Preferred Contact Method', 'required');
        $this->form_validation->set_rules('contact_time', 'Contact Time', 'required');
        $this->form_validation->set_rules('interested_property_type', 'Interested Property Type', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('customer/create');
        } else {
            $data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'email' => $this->input->post('email'),
                'phone_number' => $this->input->post('phone_number'),
                'address' => $this->input->post('address'),
                'city' => $this->input->post('city'),
                'state' => $this->input->post('state'),
                'zip_code' => $this->input->post('zip_code'),
                'country' => $this->input->post('country'),
                'preferred_contact_method' => $this->input->post('preferred_contact_method'),
                'contact_time' => $this->input->post('contact_time'),
                'interested_property_type' => $this->input->post('interested_property_type'),
                'status' => 'active'
            );

            $this->Customer_model->create_customer($data);
            redirect('customers');
        }
    }

    // Edit customer
    public function edit($id) {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['customer'] = $this->Customer_model->get_customer_by_id($id);

        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('phone_number', 'Phone Number', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');
        $this->form_validation->set_rules('state', 'State', 'required');
        $this->form_validation->set_rules('zip_code', 'Zip Code', 'required');
        $this->form_validation->set_rules('country', 'Country', 'required');
        $this->form_validation->set_rules('preferred_contact_method', 'Preferred Contact Method', 'required');
        $this->form_validation->set_rules('contact_time', 'Contact Time', 'required');
        $this->form_validation->set_rules('interested_property_type', 'Interested Property Type', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('customer/edit', $data);
        } else {
            $update_data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'email' => $this->input->post('email'),
                'phone_number' => $this->input->post('phone_number'),
                'address' => $this->input->post('address'),
                'city' => $this->input->post('city'),
                'state' => $this->input->post('state'),
                'zip_code' => $this->input->post('zip_code'),
                'country' => $this->input->post('country'),
                'preferred_contact_method' => $this->input->post('preferred_contact_method'),
                'contact_time' => $this->input->post('contact_time'),
                'interested_property_type' => $this->input->post('interested_property_type')
            );

            $this->Customer_model->update_customer($id, $update_data);
            redirect('customers');
        }
    }

    // Delete customer
    public function delete($id) {
        $this->Customer_model->delete_customer($id);
        redirect('customers');
    }
}
?>