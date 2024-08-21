<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PoItems extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Po_item_model');
        $this->load->model('PurchaseOrders_model'); // Load the Purchase Order model
    }

    public function index() {
        $data['po_items'] = $this->Po_item_model->get_all();
        $this->load->view('po_items/index', $data);
    }

    public function create() {
        if($this->input->post()) {
            $data = array(
                'po_id' => $this->input->post('po_id'),
                'item_name' => $this->input->post('item_name'),
                'item_type' => $this->input->post('item_type'),
                'item_description' => $this->input->post('item_description'),
                'quantity' => $this->input->post('quantity'),
                'unit_price' => $this->input->post('unit_price'),
                'total_price' => $this->input->post('total_price')
            );
            $this->Po_item_model->insert($data);
            redirect('PoItems');
        } else {
            $data['purchase_orders'] = $this->PurchaseOrders_model->get_all_purchase_orders(); // Fetch all purchase orders
            $this->load->view('po_items/add', $data);
        }
    }

    public function edit($id) {
        if($this->input->post()) {
            $data = array(
                'po_id' => $this->input->post('po_id'),
                'item_name' => $this->input->post('item_name'),
                'item_type' => $this->input->post('item_type'),
                'item_description' => $this->input->post('item_description'),
                'quantity' => $this->input->post('quantity'),
                'unit_price' => $this->input->post('unit_price'),
                'total_price' => $this->input->post('total_price')
            );
            $this->Po_item_model->update($id, $data);
            redirect('PoItems');
        } else {
            $data['po_item'] = $this->Po_item_model->get_by_id($id);
            $data['purchase_orders'] = $this->PurchaseOrders_model->get_all_purchase_orders();
            $this->load->view('po_items/edit', $data);
        }
    }

    public function delete($id) {
        $this->Po_item_model->delete($id);
        redirect('PoItems');
    }
}
?>