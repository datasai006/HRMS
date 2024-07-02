<?php $this->load->view('includes/header') ?>
<?php $this->load->view('includes/sidebar') ?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>View Employee</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item active">View Employee</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="card">
            <h5 class="p-3">Employee</h5>
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
                        <th>Mobile</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($employees as $employee): ?>
                    <tr>
                        <td><?= $employee['id'] ?></td>
                        <td><?= $employee['first_name'] ?></td>
                        <td><?= $employee['last_name'] ?></td>
                        <td><?= $employee['email'] ?></td>
                        <td><?= $employee['mobile_no'] ?></td>
                        <td><?= $employee['role_id'] ?></td>
                        <td>
                            <!-- <a href="<?= base_url('employee/view/'.$employee['id']) ?>"
                                class="btn btn-info btn-sm">View</a> -->
                            <a href="<?= base_url('employee/edit/'.$employee['id']) ?>"
                                class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?= base_url('employee/delete/'.$employee['id']) ?>" class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure you want to delete this employee?');">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>
</div>
<?php $this->load->view('includes/footer') ?>