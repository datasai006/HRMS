<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/sidebar'); ?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit PO Item</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('PoItems') ?>">PO Items</a></li>
                        <li class="breadcrumb-item active">Edit PO Item</li>
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
                        <form action="<?= base_url('PoItems/edit/'.$po_item['po_item_id']) ?>" method="post">
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="po_id">Purchase Order</label>
                                        <select class="form-control" id="po_id" name="po_id" required>
                                            <option value="">Select Purchase Order</option>
                                            <?php foreach ($purchase_orders as $order): ?>
                                            <option value="<?= $order['po_id'] ?>"
                                                <?= $order['po_id'] == $po_item['po_id'] ? 'selected' : '' ?>>
                                                <?= $order['po_number'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="item_name">Item Name</label>
                                        <input type="text" class="form-control" id="item_name" name="item_name"
                                            value="<?= $po_item['item_name'] ?>" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="item_type">Item Type</label>
                                        <input type="text" class="form-control" id="item_type" name="item_type"
                                            value="<?= $po_item['item_type'] ?>" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="item_description">Item Description</label>
                                        <input type="text" class="form-control" id="item_description"
                                            name="item_description" value="<?= $po_item['item_description'] ?>"
                                            required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="quantity">Quantity</label>
                                        <input type="number" class="form-control" id="quantity" name="quantity"
                                            value="<?= $po_item['quantity'] ?>" required oninput="calculateTotal()">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="unit_price">Unit Price</label>
                                        <input type="number" step="0.01" class="form-control" id="unit_price"
                                            name="unit_price" value="<?= $po_item['unit_price'] ?>" required
                                            oninput="calculateTotal()">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="total_price">Total Price</label>
                                        <input type="number" step="0.01" class="form-control" id="total_price"
                                            name="total_price" value="<?= $po_item['total_price'] ?>" required readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="<?= base_url('PoItems') ?>" class="btn btn-secondary">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
function calculateTotal() {
    var quantity = parseFloat(document.getElementById('quantity').value) || 0;
    var unitPrice = parseFloat(document.getElementById('unit_price').value) || 0;
    var totalPrice = quantity * unitPrice;
    document.getElementById('total_price').value = totalPrice.toFixed(2);
}

// Call calculateTotal() on page load to ensure total_price is updated correctly
window.onload = calculateTotal;
</script>

<?php $this->load->view('includes/footer'); ?>