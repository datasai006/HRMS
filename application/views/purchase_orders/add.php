<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/sidebar'); ?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Vendor</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('PurchaseOrders') ?>">Purchase Orders</a>
                        </li>
                        <li class="breadcrumb-item active">Add Purchase Order</li>
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
                        <form action="<?= base_url('PurchaseOrders/create') ?>" method="post">
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="vendor_id">Vendor</label>
                                        <select class="form-control" id="vendor_id" name="vendor_id" required>
                                            <option value="">Select Vendor</option>
                                            <?php foreach ($vendors as $vendor): ?>
                                            <option value="<?= $vendor['id'] ?>"><?= $vendor['vendor_name'] ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="po_number">PO Number</label>
                                        <input type="text" class="form-control" id="po_number" name="po_number"
                                            required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="po_date">PO Date</label>
                                        <input type="date" class="form-control" id="po_date" name="po_date" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="expected_delivery_date">Expected Delivery Date</label>
                                        <input type="date" class="form-control" id="expected_delivery_date"
                                            name="expected_delivery_date" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="total_amount">Total Amount</label>
                                        <input type="number" step="0.01" class="form-control" id="total_amount"
                                            name="total_amount" required>
                                    </div>
                                    <!-- <button type="submit" class="btn btn-primary">Save</button>
                                    <a href="<?= base_url('PurchaseOrders') ?>" class="btn btn-secondary">Back</a> -->
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="<?= base_url('PurchaseOrders') ?>" class="btn btn-secondary">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php $this->load->view('includes/footer'); ?>