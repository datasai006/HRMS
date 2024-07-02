<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/sidebar'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Vendor</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('vendor') ?>">Vendors</a></li>
                        <li class="breadcrumb-item active">Add Vendor</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add Vendor</h3>
                        </div>
                        <!-- form start -->
                        <form action="<?= base_url('vendor/add') ?>" method="post">
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="vendor_name">Vendor Name</label>
                                        <input type="text" class="form-control" id="vendor_name" name="vendor_name"
                                            required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="commodity_type">Commodity Type</label>
                                        <select class="form-control" id="commodity_type" name="commodity_type" required>
                                            <option value="">Select Commodity Type</option>
                                            <option value="Iron">Iron</option>
                                            <option value="Steel">Steel</option>
                                            <option value="Sand">Sand</option>
                                            <option value="Wood">Wood</option>
                                            <option value="Bricks">Bricks</option>
                                            <option value="Electrical Equipment">Electrical Equipment</option>
                                            <!-- Add more options as needed -->
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="units">Units</label>
                                        <select name="units" id="units" class="form-control" required>
                                            <option value="">Select Unit</option>
                                            <option value="kg">Kilogram (kg)</option>
                                            <option value="tons">Tons</option>
                                            <option value="unit">Units</option>
                                            <!-- Add more options as needed -->
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="contact_person">Contact Person</label>
                                        <input type="text" class="form-control" id="contact_person"
                                            name="contact_person" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="phone_number">Phone Number</label>
                                        <input type="text" class="form-control" id="phone_number" name="phone_number"
                                            required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="address">Address</label>
                                        <textarea class="form-control" id="address" name="address" rows="3"
                                            required></textarea>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="city">City</label>
                                        <input type="text" class="form-control" id="city" name="city" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="state">State</label>
                                        <input type="text" class="form-control" id="state" name="state" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="zip_code">Zip Code</label>
                                        <input type="text" class="form-control" id="zip_code" name="zip_code" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="country">Country</label>
                                        <input type="text" class="form-control" id="country" name="country" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="status">Status</label>
                                        <select class="form-control" id="status" name="status" required>
                                            <option value="active" selected>Active</option>
                                            <option value="inactive">Inactive</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="contract_start_date">Contract Start Date</label>
                                        <input type="date" class="form-control" id="contract_start_date"
                                            name="contract_start_date" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="contract_end_date">Contract End Date</label>
                                        <input type="date" class="form-control" id="contract_end_date"
                                            name="contract_end_date" required>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php $this->load->view('includes/footer'); ?>