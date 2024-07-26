<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/sidebar'); ?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Invoice Payments</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Invoice Payments</li>
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
                        <div class="card-header">
                            <h3 class="card-title">Invoice Payments List</h3>
                            <a href="<?= base_url('InvoicePayments/create') ?>" class="btn btn-primary float-right">Add
                                Payment</a>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Payment ID</th>
                                        <th>Invoice Number</th>
                                        <th>Payment Date</th>
                                        <th>Payment Amount</th>
                                        <th>Payment Method</th>
                                        <th>Remaining Balance</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($invoice_payments as $payment): ?>
                                    <tr>
                                        <td><?= $payment['payment_id'] ?></td>
                                        <td><?= $payment['invoice_number'] ?></td>
                                        <td><?= $payment['payment_date'] ?></td>
                                        <td><?= $payment['payment_amount'] ?></td>
                                        <td><?= $payment['payment_method'] ?></td>
                                        <td><?= $payment['remaining_balance'] ?></td>
                                        <td>
                                            <a href="<?= base_url('InvoicePayments/edit/'.$payment['payment_id']) ?>"
                                                class="fa fas fa-pen"></a>
                                            <a href="<?= base_url('InvoicePayments/delete/'.$payment['payment_id']) ?>"
                                                class="fa fas fa-trash" onclick="return confirm('Are you sure?')"></a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php $this->load->view('includes/footer'); ?>