<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/sidebar'); ?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Invoice Payment</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('InvoicePayments') ?>">Invoice Payments</a>
                        </li>
                        <li class="breadcrumb-item active">Edit Invoice Payment</li>
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
                        <form action="<?= base_url('InvoicePayments/edit/'.$invoice_payment['payment_id']) ?>"
                            method="post">
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="invoice_id">Invoice</label>
                                        <select class="form-control" id="invoice_id" name="invoice_id" required>
                                            <option value="">Select Invoice</option>
                                            <?php foreach ($invoices as $invoice): ?>
                                            <option value="<?= $invoice['invoice_id'] ?>"
                                                <?= $invoice['invoice_id'] == $invoice_payment['invoice_id'] ? 'selected' : '' ?>>
                                                <?= $invoice['invoice_number'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="payment_date">Payment Date</label>
                                        <input type="date" class="form-control" id="payment_date" name="payment_date"
                                            value="<?= $invoice_payment['payment_date'] ?>" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="payment_amount">Payment Amount</label>
                                        <input type="number" step="0.01" class="form-control" id="payment_amount"
                                            name="payment_amount" value="<?= $invoice_payment['payment_amount'] ?>"
                                            required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="payment_method">Payment Method</label>
                                        <select class="form-control" id="payment_method" name="payment_method" required>
                                            <option value="">Select Payment Method</option>
                                            <?php foreach ($payment_methods as $method): ?>
                                            <option value="<?= $method ?>"
                                                <?= $method == $invoice_payment['payment_method'] ? 'selected' : '' ?>>
                                                <?= $method ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="remaining_balance">Remaining Balance</label>
                                        <input type="number" step="0.01" class="form-control" id="remaining_balance"
                                            name="remaining_balance"
                                            value="<?= $invoice_payment['remaining_balance'] ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="<?= base_url('InvoicePayments') ?>" class="btn btn-secondary">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php $this->load->view('includes/footer'); ?>