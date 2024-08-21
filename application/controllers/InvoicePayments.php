<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InvoicePayments extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Invoice_payment_model');
        $this->load->model('Invoice_model'); // Load the Invoices model
    }

    public function index() {
        $data['invoice_payments'] = $this->Invoice_payment_model->get_all();
        $data['payment_methods'] = array('Cash', 'Credit Card', 'Bank Transfer', 'PayPal', 'Others'); // Define payment methods
        $this->load->view('invoice_payments/index', $data);
    }

    public function create() {
        if ($this->input->post()) {
            $data = array(
                'invoice_id' => $this->input->post('invoice_id'),
                'payment_date' => $this->input->post('payment_date'),
                'payment_amount' => $this->input->post('payment_amount'),
                'payment_method' => $this->input->post('payment_method'),
                'remaining_balance' => $this->input->post('remaining_balance')
            );
            $this->Invoice_payment_model->insert($data);
            redirect('InvoicePayments');
        } else {
            $data['invoices'] = $this->Invoice_payment_model->get_all_invoices();
             $data['payment_methods'] = array('Cash', 'Credit Card', 'Bank Transfer', 'PayPal', 'Others');
            $this->load->view('invoice_payments/add', $data);
        }
    }

    public function edit($id) {
        if ($this->input->post()) {
            $data = array(
                'invoice_id' => $this->input->post('invoice_id'),
                'payment_date' => $this->input->post('payment_date'),
                'payment_amount' => $this->input->post('payment_amount'),
                'payment_method' => $this->input->post('payment_method'),
                'remaining_balance' => $this->input->post('remaining_balance')
            );
            $this->Invoice_payment_model->update($id, $data);
            redirect('InvoicePayments');
        } else {
            $data['invoice_payment'] = $this->Invoice_payment_model->get_by_id($id);
            $data['invoices'] = $this->Invoice_payment_model->get_all_invoices();
             $data['payment_methods'] = array('Cash', 'Credit Card', 'Bank Transfer', 'PayPal', 'Others'); // Define payment methods
            $this->load->view('invoice_payments/edit', $data);
        }
    }

    public function delete($id) {
        $this->Invoice_payment_model->delete($id);
        redirect('InvoicePayments');
    }
}
?>