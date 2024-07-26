<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PurchaseOrders extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('PurchaseOrders_model');
        $this->load->model('Vendor_model'); 
    }

    public function index() {
        $data['purchase_orders'] = $this->PurchaseOrders_model->get_all_purchase_orders();
        $this->load->view('purchase_orders/index', $data);
    }

    public function view($id) {
        $data['purchase_order'] = $this->PurchaseOrders_model->get_purchase_order($id);
        $this->load->view('purchase_orders/view', $data);
    }

    public function add() {
          $data['vendors'] = $this->Vendor_model->get_all_vendors();
        $this->load->view('purchase_orders/add', $data);
    }

    public function create() {
        $data = array(
            'vendor_id' => $this->input->post('vendor_id'),
            'po_number' => $this->input->post('po_number'),
            'po_date' => $this->input->post('po_date'),
            'expected_delivery_date' => $this->input->post('expected_delivery_date'),
            'total_amount' => $this->input->post('total_amount'),
            'status' => $this->input->post('status')
        );
        $this->PurchaseOrders_model->insert_purchase_order($data);
        redirect('PurchaseOrders');
    }

    public function edit($id) {
        $data['purchase_order'] = $this->PurchaseOrders_model->get_purchase_order($id);
        $this->load->view('purchase_orders/edit', $data);
    }

    public function update($id) {
        $data = array(
            'vendor_id' => $this->input->post('vendor_id'),
            'po_number' => $this->input->post('po_number'),
            'po_date' => $this->input->post('po_date'),
            'expected_delivery_date' => $this->input->post('expected_delivery_date'),
            'total_amount' => $this->input->post('total_amount'),
            'status' => $this->input->post('status')
        );
        $this->PurchaseOrders_model->update_purchase_order($id, $data);
        redirect('PurchaseOrders');
    }

    public function delete($id) {
        $this->PurchaseOrders_model->delete_purchase_order($id);
        redirect('PurchaseOrders');
    }
}
?>