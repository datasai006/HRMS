<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/sidebar'); ?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Invoices</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Invoices</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="<?= base_url('Invoices/add') ?>" class="btn btn-primary">Add Invoice</a>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Invoice Number</th>
                                        <th>Purchase Order</th>
                                        <th>Invoice Date</th>
                                        <th>Total Amount</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($invoices as $invoice): ?>
                                    <tr>
                                        <td><?= $invoice['invoice_number'] ?></td>
                                        <td><?= $invoice['po_id'] ?></td>
                                        <td><?= $invoice['invoice_date'] ?></td>
                                        <td><?= $invoice['total_amount'] ?></td>
                                        <td><?= $invoice['status'] ?></td>
                                        <td>
                                            <a href="<?= base_url('Invoices/edit/'.$invoice['invoice_id']) ?>"
                                                class="fa fas fa-pen"></a>
                                            <a href="<?= base_url('Invoices/delete/'.$invoice['invoice_id']) ?>"
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