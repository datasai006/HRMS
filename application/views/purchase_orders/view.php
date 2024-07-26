<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/sidebar'); ?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>View Purchase Order</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('purchase_orders') ?>">Purchase Orders</a>
                        </li>
                        <li class="breadcrumb-item active">View Purchase Order</li>
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
                        <div class="card-body">
                            <p><strong>Vendor ID:</strong> <?= $purchase_order['vendor_id'] ?></p>
                            <p><strong>PO Number:</strong> <?= $purchase_order['po_number'] ?></p>
                            <p><strong>PO Date:</strong> <?= $purchase_order['po_date'] ?></p>
                            <p><strong>Expected Delivery Date:</strong> <?= $purchase_order['expected_delivery_date'] ?>
                            </p>
                            <p><strong>Total Amount:</strong> <?= $purchase_order['total_amount'] ?></p>
                            <p><strong>Status:</strong> <?= $purchase_order['status'] ?></p>
                            <a href="<?= base_url('PurchaseOrders') ?>" class="btn btn-secondary">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php $this->load->view('includes/footer'); ?>