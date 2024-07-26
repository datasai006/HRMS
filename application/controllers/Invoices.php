<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoices extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Invoice_model');
        $this->load->model('PurchaseOrders_model'); // Load the Purchase Order model
    }

    public function index() {
        $data['invoices'] = $this->Invoice_model->get_all();
        $this->load->view('invoices/index', $data);
    }

    public function create() {
        if($this->input->post()) {
            $data = array(
                'po_id' => $this->input->post('po_id'),
                'invoice_number' => $this->input->post('invoice_number'),
                'invoice_date' => $this->input->post('invoice_date'),
                'total_amount' => $this->input->post('total_amount'),
                'status' => $this->input->post('status')
            );
            $this->Invoice_model->insert($data);
            redirect('Invoices');
        } else {
            $data['purchase_orders'] = $this->PurchaseOrders_model->get_all_purchase_orders(); // Fetch all purchase orders
            $this->load->view('invoices/add', $data);
        }
    }

    public function edit($id) {
        if($this->input->post()) {
            $data = array(
                'po_id' => $this->input->post('po_id'),
                'invoice_number' => $this->input->post('invoice_number'),
                'invoice_date' => $this->input->post('invoice_date'),
                'total_amount' => $this->input->post('total_amount'),
                'status' => $this->input->post('status')
            );
            $this->Invoice_model->update($id, $data);
            redirect('Invoices');
        } else {
            $data['invoice'] = $this->Invoice_model->get_by_id($id);
            $data['purchase_orders'] = $this->PurchaseOrders_model->get_all_purchase_orders();
            $this->load->view('invoices/edit', $data);
        }
    }

    public function delete($id) {
        $this->Invoice_model->delete($id);
        redirect('Invoices');
    }
}
?>