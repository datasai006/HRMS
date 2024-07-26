<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/sidebar'); ?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Purchase Order</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('PurchaseOrders') ?>">Purchase Orders</a>
                        </li>
                        <li class="breadcrumb-item active">Edit Purchase Order</li>
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
                            <form action="<?= base_url('PurchaseOrders/update/'.$purchase_order['po_id']) ?>"
                                method="post">
                                <div class="form-group">
                                    <label for="vendor_id">Vendor ID</label>
                                    <input type="number" class="form-control" id="vendor_id" name="vendor_id"
                                        value="<?= $purchase_order['vendor_id'] ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="po_number">PO Number</label>
                                    <input type="text" class="form-control" id="po_number" name="po_number"
                                        value="<?= $purchase_order['po_number'] ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="po_date">PO Date</label>
                                    <input type="date" class="form-control" id="po_date" name="po_date"
                                        value="<?= $purchase_order['po_date'] ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="expected_delivery_date">Expected Delivery Date</label>
                                    <input type="date" class="form-control" id="expected_delivery_date"
                                        name="expected_delivery_date"
                                        value="<?= $purchase_order['expected_delivery_date'] ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="total_amount">Total Amount</label>
                                    <input type="number" step="0.01" class="form-control" id="total_amount"
                                        name="total_amount" value="<?= $purchase_order['total_amount'] ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <input type="text" class="form-control" id="status" name="status"
                                        value="<?= $purchase_order['status'] ?>" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="<?= base_url('PurchaseOrders') ?>" class="btn btn-secondary">Back</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php $this->load->view('includes/footer'); ?>