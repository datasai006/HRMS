<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/sidebar'); ?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>PO Items</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item active">PO Items</li>
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
                            <a href="<?= base_url('PoItems/create') ?>" class="btn btn-primary">Add PO Item</a>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>PO Item ID</th>
                                        <th>PO ID</th>
                                        <th>Item Name</th>
                                        <th>Item Type</th>
                                        <th>Item Description</th>
                                        <th>Quantity</th>
                                        <th>Unit Price</th>
                                        <th>Total Price</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($po_items as $item): ?>
                                    <tr>
                                        <td><?= $item['po_item_id'] ?></td>
                                        <td><?= $item['po_id'] ?></td>
                                        <td><?= $item['item_name'] ?></td>
                                        <td><?= $item['item_type'] ?></td>
                                        <td><?= $item['item_description'] ?></td>
                                        <td><?= $item['quantity'] ?></td>
                                        <td><?= $item['unit_price'] ?></td>
                                        <td><?= $item['total_price'] ?></td>
                                        <td>

                                            <a href="<?= base_url('PoItems/edit/'.$item['po_item_id']) ?>"
                                                class="fa fas fa-pen"></a>
                                            <a href="<?= base_url('PoItems/delete/'.$item['po_item_id']) ?>"
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