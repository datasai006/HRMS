<?php $this->load->view('includes/header') ?>
<?php $this->load->view('includes/sidebar') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Customer</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Customer</a></li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">Edit <small>Customer</small></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <?php echo form_open('customers/edit/'.$customer['id'], array('id' => 'quickForm', 'name' => 'myForm')); ?>
                        <div class="card-body row">
                            <div class="form-group col-md-4">
                                <label for="first_name">First Name</label>
                                <input type="text" name="first_name" value="<?php echo $customer['first_name']; ?>"
                                    class="form-control" id="first_name" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="last_name">Last Name</label>
                                <input type="text" name="last_name" value="<?php echo $customer['last_name']; ?>"
                                    class="form-control" id="last_name" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="email">Email</label>
                                <input type="email" name="email" value="<?php echo $customer['email']; ?>"
                                    class="form-control" id="email" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="phone_number">Phone Number</label>
                                <input type="text" name="phone_number" value="<?php echo $customer['phone_number']; ?>"
                                    class="form-control" id="phone_number" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="address">Address</label>
                                <input type="text" name="address" value="<?php echo $customer['address']; ?>"
                                    class="form-control" id="address" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="city">City</label>
                                <input type="text" name="city" value="<?php echo $customer['city']; ?>"
                                    class="form-control" id="city" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="state">State</label>
                                <input type="text" name="state" value="<?php echo $customer['state']; ?>"
                                    class="form-control" id="state" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="zip_code">Zip Code</label>
                                <input type="text" name="zip_code" value="<?php echo $customer['zip_code']; ?>"
                                    class="form-control" id="zip_code" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="country">Country</label>
                                <input type="text" name="country" value="<?php echo $customer['country']; ?>"
                                    class="form-control" id="country" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="preferred_contact_method">Preferred Contact Method</label>
                                <select name="preferred_contact_method" class="form-control"
                                    id="preferred_contact_method">
                                    <option value="phone"
                                        <?php echo $customer['preferred_contact_method'] == 'phone' ? 'selected' : ''; ?>>
                                        Phone</option>
                                    <option value="email"
                                        <?php echo $customer['preferred_contact_method'] == 'email' ? 'selected' : ''; ?>>
                                        Email</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="contact_time">Contact Time</label>
                                <input type="text" name="contact_time" value="<?php echo $customer['contact_time']; ?>"
                                    class="form-control" id="contact_time" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="interested_property_type">Interested Property Type</label>
                                <select name="interested_property_type" class="form-control"
                                    id="interested_property_type">
                                    <option value="apartment"
                                        <?php echo $customer['interested_property_type'] == 'apartment' ? 'selected' : ''; ?>>
                                        Apartment</option>
                                    <option value="house"
                                        <?php echo $customer['interested_property_type'] == 'house' ? 'selected' : ''; ?>>
                                        House</option>
                                    <option value="commercial"
                                        <?php echo $customer['interested_property_type'] == 'commercial' ? 'selected' : ''; ?>>
                                        Commercial</option>
                                </select>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>
    </section>
</div>
<?php $this->load->view('includes/footer') ?>