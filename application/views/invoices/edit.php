<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/sidebar'); ?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Invoice</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('Invoices') ?>">Invoices</a></li>
                        <li class="breadcrumb-item active">Edit Invoice</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <form action="<?= base_url('Invoices/edit/'.$invoice['invoice_id']) ?>" method="post">
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="po_id">Purchase Order</label>
                                        <select class="form-control" id="po_id" name="po_id" required>
                                            <?php foreach ($purchase_orders as $order): ?>
                                            <option value="<?= $order['po_id'] ?>"
                                                <?= $order['po_id'] == $invoice['po_id'] ? 'selected' : '' ?>>
                                                <?= $order['po_number'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="invoice_number">Invoice Number</label>
                                        <input type="text" class="form-control" id="invoice_number"
                                            name="invoice_number" value="<?= $invoice['invoice_number'] ?>" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="invoice_date">Invoice Date</label>
                                        <input type="date" class="form-control" id="invoice_date" name="invoice_date"
                                            value="<?= $invoice['invoice_date'] ?>" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="total_amount">Total Amount</label>
                                        <input type="number" step="0.01" class="form-control" id="total_amount"
                                            name="total_amount" value="<?= $invoice['total_amount'] ?>" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="status">Status</label>
                                        <input type="text" class="form-control" id="status" name="status"
                                            value="<?= $invoice['status'] ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="<?= base_url('Invoices') ?>" class="btn btn-secondary">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php $this->load->view('includes/footer'); ?>