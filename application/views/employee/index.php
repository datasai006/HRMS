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

        <div class="overflow"></div>
        <div class="p-3">
            <!-- <a href="<?php echo base_url('customers/create'); ?>" class="btn btn-primary">Add New Customer</a> -->
            <table id="example1" class="table table-bordered table-striped">
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
                            <a href="<?= base_url('employee/edit/'.$employee['id']) ?>" class="fa fas fa-pen"></a>
                            <a href="<?= base_url('employee/delete/'.$employee['id']) ?>" class="fa fas fa-trash"
                                onclick="return confirm('Are you sure you want to delete this employee?');"></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>
</div>
<?php $this->load->view('includes/footer') ?>