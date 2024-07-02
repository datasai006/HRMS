<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/sidebar'); ?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Employee Details</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('employee') ?>">Employees</a></li>
                        <li class="breadcrumb-item active">Employee Details</li>
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
                            <h3 class="card-title">Employee Information</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tr>
                                    <th>First Name</th>
                                    <td><?= $employee['first_name'] ?></td>
                                </tr>
                                <tr>
                                    <th>Last Name</th>
                                    <td><?= $employee['last_name'] ?></td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td><?= $employee['email'] ?></td>
                                </tr>
                                <tr>
                                    <th>Gender</th>
                                    <td><?= $employee['gender'] ?></td>
                                </tr>
                                <tr>
                                    <th>Country</th>
                                    <td><?= $employee['country'] ?></td>
                                </tr>
                                <tr>
                                    <th>State</th>
                                    <td><?= $employee['state'] ?></td>
                                </tr>
                                <tr>
                                    <th>Mobile Number</th>
                                    <td><?= $employee['mobile_no'] ?></td>
                                </tr>
                                <tr>
                                    <th>Date of Joining</th>
                                    <td><?= $employee['doj'] ?></td>
                                </tr>
                                <tr>
                                    <th>Qualification</th>
                                    <td><?= $employee['qualification'] ?></td>
                                </tr>
                                <tr>
                                    <th>Role</th>
                                    <td><?= $employee['role_id'] ?></td>
                                </tr>
                                <tr>
                                    <th>Attendance</th>
                                    <td><?= $employee['attendance'] ?></td>
                                </tr>
                                <tr>
                                    <th>Payroll</th>
                                    <td><?= $employee['payroll'] ?></td>
                                </tr>
                                <tr>
                                    <th>Performance Reviews</th>
                                    <td><?= $employee['performance_reviews'] ?></td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td><?= $employee['status'] ?></td>
                                </tr>
                            </table>
                            <div class="card-footer">
                                <a href="<?= base_url('employee/edit/'.$employee['id']) ?>"
                                    class="btn btn-warning">Edit</a>
                                <a href="<?= base_url('employee/delete/'.$employee['id']) ?>" class="btn btn-danger"
                                    onclick="return confirm('Are you sure you want to delete this employee?');">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php $this->load->view