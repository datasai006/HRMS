<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Project_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }

    public function index() {
        $data['projects'] = $this->Project_model->get_active_projects();
        $this->load->view('Projects/index', $data);
    }

    public function view($project_id) {
        $data['project'] = $this->Project_model->get_project($project_id);
        $this->load->view('Projects/view', $data);
    }

    public function add() {
        $this->form_validation->set_rules('project_name', 'Project Name', 'trim|required');
        $this->form_validation->set_rules('project_type', 'Project Type', 'trim|required');
        // $this->form_validation->set_rules('property_location', 'Property Location', 'trim|required');
        $this->form_validation->set_rules('property_address', 'Property Address', 'trim|required');
        $this->form_validation->set_rules('city', 'City', 'trim|required');
        $this->form_validation->set_rules('state', 'State', 'trim|required');
        $this->form_validation->set_rules('total_units', 'Total Units', 'trim|required|numeric');
        $this->form_validation->set_rules('latitude', 'Latitude', 'trim|required|decimal');
        $this->form_validation->set_rules('longitude', 'Longitude', 'trim|required|decimal');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('Projects/add');
        } else {
            $data = array(
                'project_name' => $this->input->post('project_name'),
                'project_type' => $this->input->post('project_type'),
                // 'property_location' => $this->input->post('property_location'),
                'property_address' => $this->input->post('property_address'),
                'city' => $this->input->post('city'),
                'state' => $this->input->post('state'),
                'total_units' => $this->input->post('total_units'),
                'latitude' => $this->input->post('latitude'),
                'longitude' => $this->input->post('longitude'),
                // 'status' => 'active' // default status
            );
              echo '<pre>';
            print_r($data);
            echo '</pre>';
            $this->Project_model->add_project($data);
            redirect('project');
        }
    }

    public function edit($project_id) {
        $data['project'] = $this->Project_model->get_project($project_id);

        $this->form_validation->set_rules('project_name', 'Project Name', 'trim|required');
        $this->form_validation->set_rules('project_type', 'Project Type', 'trim|required');
        // $this->form_validation->set_rules('property_location', 'Property Location', 'trim|required');
        $this->form_validation->set_rules('property_address', 'Property Address', 'trim|required');
        $this->form_validation->set_rules('city', 'City', 'trim|required');
        $this->form_validation->set_rules('state', 'State', 'trim|required');
        $this->form_validation->set_rules('total_units', 'Total Units', 'trim|required|numeric');
        $this->form_validation->set_rules('latitude', 'Latitude', 'trim|required|decimal');
        $this->form_validation->set_rules('longitude', 'Longitude', 'trim|required|decimal');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('Projects/edit', $data);
        } else {
            $update_data = array(
                'project_name' => $this->input->post('project_name'),
                'project_type' => $this->input->post('project_type'),
                // 'property_location' => $this->input->post('property_location'),
                'property_address' => $this->input->post('property_address'),
                'city' => $this->input->post('city'),
                'state' => $this->input->post('state'),
                'total_units' => $this->input->post('total_units'),
                'latitude' => $this->input->post('latitude'),
                'longitude' => $this->input->post('longitude')
            );
            $this->Project_model->update_project($project_id, $update_data);
            redirect('project');
        }
    }

    public function delete($project_id) {
        $this->Project_model->delete_project($project_id);
        redirect('project');
    }
}
?>