<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/sidebar'); ?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Employee</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('employee') ?>">Employees</a></li>
                        <li class="breadcrumb-item active">Edit Employee</li>
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
                            <h3 class="card-title">Employee Form</h3>
                        </div>
                        <div class="card-body">
                            <?php echo form_open('employee/edit/'.$employee['id']); ?>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="first_name">First Name</label>
                                    <input type="text" name="first_name" class="form-control" id="first_name"
                                        value="<?= $employee['first_name'] ?>" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" name="last_name" class="form-control" id="last_name"
                                        value="<?= $employee['last_name'] ?>" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" id="email"
                                        value="<?= $employee['email'] ?>" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" id="password"
                                        value="<?= $employee['password'] ?>" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="gender">Gender</label>
                                    <select name="gender" class="form-control" id="gender" required>
                                        <option value="">--select--</option>
                                        <option value="male" <?= $employee['gender'] == 'male' ? 'selected' : '' ?>>Male
                                        </option>
                                        <option value="female" <?= $employee['gender'] == 'female' ? 'selected' : '' ?>>
                                            Female</option>
                                        <option value="other" <?= $employee['gender'] == 'other' ? 'selected' : '' ?>>
                                            Other</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="country">Country</label>
                                    <input type="text" name="country" class="form-control" id="country"
                                        value="<?= $employee['country'] ?>" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="state">State</label>
                                    <input type="text" name="state" class="form-control" id="state"
                                        value="<?= $employee['state'] ?>" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="mobile_no">Mobile Number</label>
                                    <input type="text" name="mobile_no" class="form-control" id="mobile_no"
                                        value="<?= $employee['mobile_no'] ?>" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="doj">Date of Joining</label>
                                    <input type="date" name="doj" class="form-control" id="doj"
                                        value="<?= $employee['doj'] ?>" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="qualification">Qualification</label>
                                    <input type="text" name="qualification" class="form-control" id="qualification"
                                        value="<?= $employee['qualification'] ?>" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="role_id">Role</label>
                                    <input type="text" name="role_id" class="form-control" id="role_id"
                                        value="<?= $employee['role_id'] ?>" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="attendance">Attendance</label>
                                    <textarea name="attendance" class="form-control"
                                        id="attendance"><?= $employee['attendance'] ?></textarea>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="payroll">Payroll</label>
                                    <textarea name="payroll" class="form-control"
                                        id="payroll"><?= $employee['payroll'] ?></textarea>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="performance_reviews">Performance Reviews</label>
                                    <textarea name="performance_reviews" class="form-control"
                                        id="performance_reviews"><?= $employee['performance_reviews'] ?></textarea>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="status">Status</label>
                                    <select name="status" class="form-control" id="status" required>
                                        <option value="active" <?= $employee['status'] == 'active' ? 'selected' : '' ?>>
                                            Active</option>
                                        <option value="inactive"
                                            <?= $employee['status'] == 'inactive' ? 'selected' : '' ?>>Inactive</option>
                                    </select>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update Employee</button>
                            </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php $this->load->view('includes/footer'); ?>