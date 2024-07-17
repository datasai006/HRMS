<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Villas extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Villa_model');
    }

    public function index() {
        $data['villas'] = $this->Villa_model->get_all_villas();
        $this->load->view('villas/index', $data);
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = array(
                'plot_number' => $this->input->post('plot_number'),
                'plot_size' => $this->input->post('plot_size'),
                'area' => $this->input->post('area'),
                'facing' => $this->input->post('facing'),
                'status' => $this->input->post('status'),
                'east_position' => $this->input->post('east_position'),
                'west_position' => $this->input->post('west_position'),
                'north_position' => $this->input->post('north_position'),
                'south_position' => $this->input->post('south_position')
            );

            $this->Villa_model->insert_villa($data);
            redirect('villas');
        } else {
            $this->load->view('villas/create');
        }
    }

   public function edit($id) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $data = array(
            'plot_number' => $this->input->post('plot_number'),
            'plot_size' => $this->input->post('plot_size'),
            'area' => $this->input->post('area'),
            'facing' => $this->input->post('facing'),
            'status' => $this->input->post('status'),
            'east_position' => $this->input->post('east_position'),
            'west_position' => $this->input->post('west_position'),
            'north_position' => $this->input->post('north_position'),
            'south_position' => $this->input->post('south_position')
        );

        $this->Villa_model->update_villa($id, $data);
        redirect('villas');
    } else {
        $data['villa'] = $this->Villa_model->get_villa_by_id($id);
        $this->load->view('villas/edit', $data);
    }
}


    public function delete($id) {
        $this->Villa_model->delete_villa($id);
        redirect('villas');
    }
    public function view($id) {
    
    $this->load->model('Villa_model');
    
    
    $data['villa'] = $this->Villa_model->get_villa_by_id($id);
    
    
    if (empty($data['villa'])) {
        show_404();
    }
    
   
    $this->load->view('villas/view_villa', $data);
}

}
?>