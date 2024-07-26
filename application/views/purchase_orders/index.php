<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/sidebar'); ?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Purchase Orders</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Purchase Orders</li>
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
                            <a href="<?= base_url('PurchaseOrders/add') ?>" class="btn btn-primary mb-3">Add Purchase
                                Order</a>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>PO ID</th>
                                        <th>Vendor ID</th>
                                        <th>PO Number</th>
                                        <th>PO Date</th>
                                        <th>Expected Delivery Date</th>
                                        <th>Total Amount</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($purchase_orders as $order): ?>
                                    <tr>
                                        <td><?= $order['po_id'] ?></td>
                                        <td><?= $order['vendor_id'] ?></td>
                                        <td><?= $order['po_number'] ?></td>
                                        <td><?= $order['po_date'] ?></td>
                                        <td><?= $order['expected_delivery_date'] ?></td>
                                        <td><?= $order['total_amount'] ?></td>
                                        <td><?= $order['status'] ?></td>
                                        <td>
                                            <a href="<?= base_url('PurchaseOrders/view/'.$order['po_id']) ?>"
                                                class="fa fas fa-eye"></a>
                                            <a href="<?= base_url('PurchaseOrders/edit/'.$order['po_id']) ?>"
                                                class="fa fas fa-pen"></a>
                                            <a href="<?= base_url('PurchaseOrders/delete/'.$order['po_id']) ?>"
                                                class="fa fas fa-trash"
                                                onclick="return confirm('Are you sure you want to delete this purchase order?');">
                                            </a>
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