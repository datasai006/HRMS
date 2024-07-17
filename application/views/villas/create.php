<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/sidebar'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Villa</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('villas') ?>">Villas</a></li>
                        <li class="breadcrumb-item active">Add Villa</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <!-- <div class="card-header">
                            <h3 class="card-title">Add Villa</h3>
                        </div> -->
                        <!-- form start -->
                        <form action="<?= base_url('villas/create') ?>" method="post">
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="plot_number">Plot Number</label>
                                        <input type="text" class="form-control" id="plot_number" name="plot_number"
                                            required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="area_size">Area Size</label>
                                        <input type="text" class="form-control" id="area_size" name="area_size"
                                            required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="facing">Facing</label>
                                        <select class="form-control" id="facing" name="facing" required>
                                            <option value="">Select Facing</option>
                                            <option value="east">East</option>
                                            <option value="west">West</option>
                                            <option value="north">North</option>
                                            <option value="south">South</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="east_position">East Position</label>
                                        <input type="text" class="form-control" id="east_position" name="east_position"
                                            required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="west_position">West Position</label>
                                        <input type="text" class="form-control" id="west_position" name="west_position"
                                            required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="north_position">North Position</label>
                                        <input type="text" class="form-control" id="north_position"
                                            name="north_position" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="south_position">South Position</label>
                                        <input type="text" class="form-control" id="south_position"
                                            name="south_position" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="status">Status</label>
                                        <select class="form-control" id="status" name="status" required>
                                            <option value="active" selected>Active</option>
                                            <option value="inactive">Inactive</option>
                                        </select>
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