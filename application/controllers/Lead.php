<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lead extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Lead_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }

    // List all leads
    public function index() {
        $data['leads'] = $this->Lead_model->get_all_leads();
        $this->load->view('leads/index', $data);
    }

    // View a single lead
    public function view($lead_id) {
        $data['lead'] = $this->Lead_model->get_lead($lead_id);
        $this->load->view('leads/view', $data);
    }

    // Add a new lead
    public function add() {
        $this->form_validation->set_rules('lead_name', 'Lead Name', 'trim|required');
        $this->form_validation->set_rules('lead_number', 'Lead Number', 'trim|required');
        $this->form_validation->set_rules('lead_email', 'Lead Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('lead_interest', 'Lead Interest', 'trim|required');
        
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('leads/add');
        } else {
            $data = array(
                'project_id' => $this->input->post('project_id'),
                'lead_name' => $this->input->post('lead_name'),
                'lead_number' => $this->input->post('lead_number'),
                'lead_source' => $this->input->post('lead_source'),
                'lead_email' => $this->input->post('lead_email'),
                'lead_interest' => $this->input->post('lead_interest'),
                'lead_message' => $this->input->post('lead_message'),
                'status' => 'pending' // default status
            );
            $this->Lead_model->add_lead($data);
            redirect('lead');
        }
    }

    // Edit a lead
    public function edit($lead_id) {
        $data['lead'] = $this->Lead_model->get_lead($lead_id);

        $this->form_validation->set_rules('lead_name', 'Lead Name', 'trim|required');
        $this->form_validation->set_rules('lead_number', 'Lead Number', 'trim|required');
        $this->form_validation->set_rules('lead_email', 'Lead Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('lead_interest', 'Lead Interest', 'trim|required');
        
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('leads/edit', $data);
        } else {
            $update_data = array(
                'project_id' => $this->input->post('project_id'),
                'lead_name' => $this->input->post('lead_name'),
                'lead_number' => $this->input->post('lead_number'),
                'lead_source' => $this->input->post('lead_source'),
                'lead_email' => $this->input->post('lead_email'),
                'lead_interest' => $this->input->post('lead_interest'),
                'lead_message' => $this->input->post('lead_message'),
                'status' => $this->input->post('status')
            );
            $this->Lead_model->update_lead($lead_id, $update_data);
            redirect('lead');
        }
    }

    // Delete a lead
    public function delete($lead_id) {
        $this->Lead_model->delete_lead($lead_id);
        redirect('lead');
    }
}
?>