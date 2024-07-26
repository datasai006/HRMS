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
                        <li class="breadcrumb-item"><a href="<?= base_url('vendor') ?>">Vendors</a></li>
                        <li class="breadcrumb-item active">Add Vendor</li>
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
                        <form action="<?= base_url('vendor/add') ?>" method="post">
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="vendor_name">Vendor Name</label>
                                        <input type="text" class="form-control" placeholder="name of vendor"
                                            id="vendor_name" name="vendor_name" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="contact_person">Contact Person</label>
                                        <input type="text" class="form-control" placeholder="name of contact person"
                                            id="contact_person" name="contact_person">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="contact_number">Contact Number</label>
                                        <input type="text" class="form-control" placeholder="contact number"
                                            id="contact_number" name="contact_number">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" placeholder="Example@gmail.com"
                                            id="email" name="email">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" placeholder="Address" id="address"
                                            name="address">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="city">City</label>
                                        <input type="text" class="form-control" placeholder="city" id="city"
                                            name="city">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="state">State</label>
                                        <input type="text" class="form-control" placeholder="state" id="state"
                                            name="state">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="zip_code">Zip Code</label>
                                        <input type="text" class="form-control" placeholder="zip code" id="zip_code"
                                            name="zip_code">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="country">Country</label>
                                        <input type="text" class="form-control" placeholder="country" id="country"
                                            name="country">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="gst_number">GST Number</label>
                                        <input type="text" class="form-control" placeholder="GST Number" id="gst_number"
                                            name="gst_number">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="contract_start_date">Contract Start Date</label>
                                        <input type="date" class="form-control" placeholder="date"
                                            id="contract_start_date" name="contract_start_date">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="contract_end_date">Contract End Date</label>
                                        <input type="date" class="form-control" placeholder="date"
                                            id="contract_end_date" name="contract_end_date">
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