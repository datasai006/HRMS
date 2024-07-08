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
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- <div class="card-header">
                            <h3 class="card-title">DataTable with default features</h3>
                        </div> -->
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
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
                                            <a href="<?= site_url('customers/delete/'.$customer['id']); ?>"
                                                class="btn btn-danger"
                                                onclick="return confirm('Are you sure you want to delete this customer?');">Delete</a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->


                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
</div>
<?php $this->load->view('includes/footer') ?>