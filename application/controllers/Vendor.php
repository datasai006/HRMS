<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Vendor_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }

    public function index() {
        $data['vendors'] = $this->Vendor_model->get_all_vendors();
        $this->load->view('vendor/index', $data);
    }

    public function view($id) {
        $data['vendor'] = $this->Vendor_model->get_vendor($id);
        $this->load->view('vendor/view', $data);
    }

    public function add() {
          $this->form_validation->set_rules('vendor_name', 'Vendor Name', 'trim|required');
        $this->form_validation->set_rules('contact_person', 'Contact Person', 'trim|required');
        $this->form_validation->set_rules('contact_number', 'Contact Number', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('address', 'Address', 'trim|required');
        $this->form_validation->set_rules('city', 'City', 'trim|required');
        $this->form_validation->set_rules('state', 'State', 'trim|required');
        $this->form_validation->set_rules('zip_code', 'Zip Code', 'trim|required');
        $this->form_validation->set_rules('country', 'Country', 'trim|required');
        $this->form_validation->set_rules('gst_number', 'GST Number', 'trim|required');
        $this->form_validation->set_rules('contract_start_date', 'Contract Start Date', 'trim|required');
        $this->form_validation->set_rules('contract_end_date', 'Contract End Date', 'trim|required');


        if ($this->form_validation->run() === FALSE) {
            $this->load->view('vendor/add');
        } else {
            $data = array(
                 'vendor_name' => $this->input->post('vendor_name'),
                'contact_person' => $this->input->post('contact_person'),
                'contact_number' => $this->input->post('contact_number'),
                'email' => $this->input->post('email'),
                'address' => $this->input->post('address'),
                'city' => $this->input->post('city'),
                'state' => $this->input->post('state'),
                'zip_code' => $this->input->post('zip_code'),
                'country' => $this->input->post('country'),
                'gst_number' => $this->input->post('gst_number'),
                'contract_start_date' => $this->input->post('contract_start_date'),
                'contract_end_date' => $this->input->post('contract_end_date'),
            );
            $this->Vendor_model->add_vendor($data);
            redirect('vendor');
        }
    }

    public function edit($id) {
        $data['vendor'] = $this->Vendor_model->get_vendor($id);

         $this->form_validation->set_rules('vendor_name', 'Vendor Name', 'trim|required');
        $this->form_validation->set_rules('contact_person', 'Contact Person', 'trim|required');
        $this->form_validation->set_rules('contact_number', 'Contact Number', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('address', 'Address', 'trim|required');
        $this->form_validation->set_rules('city', 'City', 'trim|required');
        $this->form_validation->set_rules('state', 'State', 'trim|required');
        $this->form_validation->set_rules('zip_code', 'Zip Code', 'trim|required');
        $this->form_validation->set_rules('country', 'Country', 'trim|required');
        $this->form_validation->set_rules('gst_number', 'GST Number', 'trim|required');
        $this->form_validation->set_rules('contract_start_date', 'Contract Start Date', 'trim|required');
        $this->form_validation->set_rules('contract_end_date', 'Contract End Date', 'trim|required');


        if ($this->form_validation->run() === FALSE) {
            $this->load->view('vendor/edit', $data);
        } else {
            $update_data = array(
                 'vendor_name' => $this->input->post('vendor_name'),
                'contact_person' => $this->input->post('contact_person'),
                'contact_number' => $this->input->post('contact_number'),
                'email' => $this->input->post('email'),
                'address' => $this->input->post('address'),
                'city' => $this->input->post('city'),
                'state' => $this->input->post('state'),
                'zip_code' => $this->input->post('zip_code'),
                'country' => $this->input->post('country'),
                'gst_number' => $this->input->post('gst_number'),
                'contract_start_date' => $this->input->post('contract_start_date'),
                'contract_end_date' => $this->input->post('contract_end_date'),
            );
            $this->Vendor_model->update_vendor($id, $update_data);
            redirect('vendor');
        }
    }
     public function update($id) {
         $this->form_validation->set_rules('vendor_name', 'Vendor Name', 'trim|required');
        $this->form_validation->set_rules('contact_person', 'Contact Person', 'trim|required');
        $this->form_validation->set_rules('contact_number', 'Contact Number', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('address', 'Address', 'trim|required');
        $this->form_validation->set_rules('city', 'City', 'trim|required');
        $this->form_validation->set_rules('state', 'State', 'trim|required');
        $this->form_validation->set_rules('zip_code', 'Zip Code', 'trim|required');
        $this->form_validation->set_rules('country', 'Country', 'trim|required');
        $this->form_validation->set_rules('gst_number', 'GST Number', 'trim|required');
        $this->form_validation->set_rules('contract_start_date', 'Contract Start Date', 'trim|required');
        $this->form_validation->set_rules('contract_end_date', 'Contract End Date', 'trim|required');
       

        if ($this->form_validation->run() === FALSE) {
            $data['vendor'] = $this->Vendor_model->get_vendor($id);
            $this->load->view('vendor/edit', $data);
        } else {
            $update_data = array(
                 'vendor_name' => $this->input->post('vendor_name'),
                'contact_person' => $this->input->post('contact_person'),
                'contact_number' => $this->input->post('contact_number'),
                'email' => $this->input->post('email'),
                'address' => $this->input->post('address'),
                'city' => $this->input->post('city'),
                'state' => $this->input->post('state'),
                'zip_code' => $this->input->post('zip_code'),
                'country' => $this->input->post('country'),
                'gst_number' => $this->input->post('gst_number'),
                'contract_start_date' => $this->input->post('contract_start_date'),
                'contract_end_date' => $this->input->post('contract_end_date'),
            );
            $this->Vendor_model->update_vendor($id, $update_data);
            redirect('vendor');
        }
    }

    public function delete($id) {
        $this->Vendor_model->delete_vendor($id);
        redirect('vendor');
    }
}