<?php $this->load->view('includes/header') ?>
<?php $this->load->view('includes/sidebar') ?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>View Customers</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item active">View Customers</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="card">
            <h5 class="p-3">Customers</h5>
            <hr />
            <div class="d-flex">
                <div class="col-sm-12 col-md-6 p-3">
                    <div class="dt-buttons btn-group flex-wrap">
                        <button class="btn btn-secondary buttons-copy buttons-html5"
                            type="button"><span>Copy</span></button>
                        <button class="btn btn-secondary buttons-csv buttons-html5"
                            type="button"><span>CSV</span></button>
                        <button class="btn btn-secondary buttons-excel buttons-html5"
                            type="button"><span>Excel</span></button>
                        <button class="btn btn-secondary buttons-pdf buttons-html5"
                            type="button"><span>PDF</span></button>
                        <button class="btn btn-secondary buttons-print" type="button"><span>Print</span></button>
                        <div class="btn-group">
                            <button class="btn btn-secondary buttons-collection dropdown-toggle buttons-colvis"
                                type="button" aria-haspopup="true" aria-expanded="false"><span>Column
                                    visibility</span></button>
                        </div>
                    </div>
                </div>
                <label class="pl-5">Search:
                    <div class="form-inline">
                        <input class="form-control form-control-sm" type="search" placeholder
                            aria-controls="example1" />
                    </div>
                </label>
            </div>
        </div>
        <div class="overflow"></div>
        <div class="p-3">
            <!-- <a href="<?php echo base_url('customers/create'); ?>" class="btn btn-primary">Add New Customer</a> -->
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <!-- <th>Address</th> -->
                        <th>City</th>
                        <th>State</th>
                        <!-- <th>Zip Code</th> -->
                        <!-- <th>Country</th> -->
                        <th>Preferred Contact Method</th>
                        <th>Contact Time</th>
                        <th>Interested Property Type</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($customers as $customer) { ?>
                    <tr>
                        <td><?= $customer['id']; ?></td>
                        <td><?= $customer['first_name']; ?></td>
                        <td><?= $customer['last_name']; ?></td>
                        <td><?= $customer['email']; ?></td>
                        <td><?= $customer['phone_number']; ?></td>
                        <!-- <td><?= $customer['address']; ?></td> -->
                        <td><?= $customer['city']; ?></td>
                        <td><?= $customer['state']; ?></td>
                        <!-- <td><?= $customer['zip_code']; ?></td> -->
                        <!-- <td><?= $customer['country']; ?></td> -->
                        <td><?= $customer['preferred_contact_method']; ?></td>
                        <td><?= $customer['contact_time']; ?></td>
                        <td><?= $customer['interested_property_type']; ?></td>
                        <td>
                            <a href="<?= site_url('customers/edit/'.$customer['id']); ?>"
                                class="btn btn-warning">Edit</a>
                            <a href="<?= site_url('customers/delete/'.$customer['id']); ?>" class="btn btn-danger"
                                onclick="return confirm('Are you sure you want to delete this customer?');">Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </section>
</div>
<?php $this->load->view('includes/footer') ?>