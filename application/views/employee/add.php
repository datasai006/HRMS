<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/sidebar'); ?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add New Employee</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('employee') ?>">Employees</a></li>
                        <li class="breadcrumb-item active">Add New Employee</li>
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
                            <?php echo form_open('employee/add'); ?>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="first_name">First Name</label>
                                    <input type="text" name="first_name" class="form-control" id="first_name" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" name="last_name" class="form-control" id="last_name" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" id="password" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="gender">Gender</label>
                                    <select name="gender" class="form-control" id="gender" required>
                                        <option value="">--select--</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="country">Country</label>
                                    <input type="text" name="country" class="form-control" id="country" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="state">State</label>
                                    <input type="text" name="state" class="form-control" id="state" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="mobile_no">Mobile Number</label>
                                    <input type="text" name="mobile_no" class="form-control" id="mobile_no" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="doj">Date of Joining</label>
                                    <input type="date" name="doj" class="form-control" id="doj" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="qualification">Qualification</label>
                                    <input type="text" name="qualification" class="form-control" id="qualification"
                                        required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="role_id">Role</label>
                                    <input type="text" name="role_id" class="form-control" id="role_id" required>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Add Employee</button>
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