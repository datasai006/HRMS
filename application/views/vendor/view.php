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
                        <div class="card-header">
                            <h3 class="card-title">Vendor Details</h3>
                        </div>
                        <div class="card-body">
                            <p><strong>Vendor Name:</strong> <?= $vendor['vendor_name'] ?></p>
                            <!-- Add other fields similarly -->
                            <p><strong>Commodity Type:</strong> <?= $vendor['commodity_type'] ?></p>
                            <p><strong>Contact Person:</strong> <?= $vendor['contact_person'] ?></p>
                            <p><strong>Phone Number:</strong> <?= $vendor['phone_number'] ?></p>
                            <p><strong>Email:</strong> <?= $vendor['email'] ?></p>
                            <p><strong>Zip code:</strong> <?= $vendor['zip_code'] ?></p>
                            <!-- Add remaining fields as per your table structure -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php $this->load->view('includes/footer'); ?>