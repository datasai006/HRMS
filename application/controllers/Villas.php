<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Villas extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Villa_model');
        $this->load->model('Project_model');
    }

    public function index() {
        $data['villas'] = $this->Villa_model->get_all_villass();
        $this->load->view('villas/index', $data);
    }

   public function create($project_id = null) {
    if ($this->input->server('REQUEST_METHOD') === 'POST') {
        // Retrieve form data
        $data = array(
            'plot_number' => $this->input->post('plot_number'),
            'plot_size' => $this->input->post('plot_size'),
            'area' => $this->input->post('area'),
            'facing' => $this->input->post('facing'),
            'status' => $this->input->post('status'),
            'east_position' => $this->input->post('east_position'),
            'west_position' => $this->input->post('west_position'),
            'north_position' => $this->input->post('north_position'),
            'south_position' => $this->input->post('south_position'),
            'project_id' => $this->input->post('project_id'),
            'plot_type' => $this->input->post('plot_type')
        );

        // Insert villa data
        $this->Villa_model->insert_villa($data);
        
        // Redirect to villas list
        redirect('Project');
    } else {
        // Handle GET request: load the form with project data
        $data['projects'] = $this->Project_model->get_all_projects(); // Get all projects for dropdown
        $data['selected_project'] = null; // Default to null
        
        if ($project_id) {
            // Get the selected project details
            $data['selected_project'] = $this->Project_model->get_project_by_id($project_id);
            $data['villas'] = $this->Villa_model->get_villas_by_project($project_id);
        }

        $this->load->view('villas/create', $data);
    }
}



//    public function edit($id, $project_id) {
//     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//         $data = array(
//             'plot_number' => $this->input->post('plot_number'),
//             'plot_size' => $this->input->post('plot_size'),
//             'area' => $this->input->post('area'),
//             'facing' => $this->input->post('facing'),
//             'status' => $this->input->post('status'),
//             'east_position' => $this->input->post('east_position'),
//             'west_position' => $this->input->post('west_position'),
//             'north_position' => $this->input->post('north_position'),
//             'south_position' => $this->input->post('south_position'),
//             'project_id' => $this->input->post('project_id') ,
//             'plot_type' => $this->input->post('plot_type') 
//         );
//        $projectid = $data['project_id'];

//         $this->Villa_model->update_villa($id, $data);
//         redirect('villas');
//     } else {
//           if ($project_id) {
//             // Get the selected project details
//             $data['selected_project'] = $this->Project_model->get_project_by_id($project_id);
//            $data['villa'] = $this->Villa_model->get_villa_by_id($id);
//         }
//          $data['selected_project'] = $this->Project_model->get_project_by_id($project_id);
//         //  $data['projects'] = $this->Project_model->get_all_projects();
//         $this->load->view('villas/edit', $data);
//     }
// }
public function edit($id, $project_id=null) {
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
            'south_position' => $this->input->post('south_position'),
            'project_id' => $this->input->post('project_id'),
            'plot_type' => $this->input->post('plot_type')
        );

        // Update villa details in the database
        $this->Villa_model->update_villa($id, $data);

        // Redirect to the villas list
        redirect('Project');
    } else {
        // Fetch the villa and project details for the form
        $data['projects'] = $this->Project_model->get_all_projects();
        $data['villa'] = $this->Villa_model->get_villa_by_id($id);
        $data['selected_project'] = $this->Project_model->get_project_by_id($project_id);

        // Load the edit view
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
public function get_villas_by_project() {
    $project_id = $this->input->post('project_id');

    if ($project_id) {
        $this->load->model('Villa_model');
        $villas = $this->Villa_model->get_villas_by_project($project_id);

        echo json_encode($villas);
    } else {
        echo json_encode([]);
    }
}
public function get_plot_typess() {
    $project_type = $this->input->post('project_type');

    // Sample data for plot types
    $plot_types = [];
    if ($project_type == 'Villas') {
        $plot_types = ['Single', 'Duplex', 'Triplex'];
    } elseif ($project_type == 'Apartments') {
        $plot_types = ['1BHK', '2BHK', '3BHK', '4BHK'];
    } elseif ($project_type == 'Commercial') {
        $plot_types = ['Shop', 'Office', 'Showroom'];
    }

    echo json_encode($plot_types);
}




}
?>