<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/sidebar'); ?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>View Vendor</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('vendor') ?>">Vendors</a></li>
                        <li class="breadcrumb-item active">View Vendor</li>
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
                            <p><strong>Vendor Name:</strong> <?= $vendor['vendor_name'] ?></p>
                            <p><strong>Contact Person:</strong> <?= $vendor['contact_person'] ?></p>
                            <p><strong>Contact Number:</strong> <?= $vendor['contact_number'] ?></p>
                            <p><strong>Email:</strong> <?= $vendor['email'] ?></p>
                            <p><strong>Address:</strong> <?= $vendor['address'] ?></p>
                            <p><strong>City:</strong> <?= $vendor['city'] ?></p>
                            <p><strong>State:</strong> <?= $vendor['state'] ?></p>
                            <p><strong>Zip Code:</strong> <?= $vendor['zip_code'] ?></p>
                            <p><strong>Country:</strong> <?= $vendor['country'] ?></p>
                            <p><strong>GST Number:</strong> <?= $vendor['gst_number'] ?></p>
                            <p><strong>Contract Start Date:</strong> <?= $vendor['contract_start_date'] ?></p>
                            <p><strong>Contract End Date:</strong> <?= $vendor['contract_end_date'] ?></p>
                            <p><strong>Status:</strong> <?= $vendor['status'] ?></p>
                        </div>
                        <div class="card-footer">
                            <a href="<?= base_url('vendor') ?>" class="btn btn-secondary">Back to List</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php $this->load->view('includes/footer'); ?>