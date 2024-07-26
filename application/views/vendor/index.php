<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/sidebar'); ?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Vendors</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Vendors</li>
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
                        <div class="card-header">
                            <h3 class="card-title">Vendor List</h3>
                            <a href="<?= base_url('vendor/add') ?>" class="btn btn-primary float-right">Add Vendor</a>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Vendor Name</th>
                                        <th>Contact Person</th>
                                        <th>Contact Number</th>
                                        <th>Email</th>
                                        <th>City</th>
                                        <th>State</th>
                                        <th>Country</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($vendors as $vendor): ?>
                                    <tr>
                                        <td><?= $vendor['id'] ?></td>
                                        <td><?= $vendor['vendor_name'] ?></td>
                                        <td><?= $vendor['contact_person'] ?></td>
                                        <td><?= $vendor['contact_number'] ?></td>
                                        <td><?= $vendor['email'] ?></td>
                                        <td><?= $vendor['city'] ?></td>
                                        <td><?= $vendor['state'] ?></td>
                                        <td><?= $vendor['country'] ?></td>
                                        <td>
                                            <a href="<?= base_url('vendor/view/'.$vendor['id']) ?>"
                                                class="fa fas fa-eye"></a>
                                            <a href="<?= base_url('vendor/edit/'.$vendor['id']) ?>"
                                                class="fa fas fa-pen"></a>
                                            <a href="<?= base_url('vendor/delete/'.$vendor['id']) ?>"
                                                class="fa fas fa-trash"
                                                onclick="return confirm('Are you sure you want to delete this vendor?');"></a>
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