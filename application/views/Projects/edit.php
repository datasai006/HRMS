<!-- application/views/project/edit.php -->

<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/sidebar'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Project</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('project') ?>">Projects</a></li>
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
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Project Details</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" method="post"
                            action="<?= base_url('project/edit/'.$project['project_id']) ?>">
                            <div class="card-body">

                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="project_name">Project Name</label>
                                        <input type="text" class="form-control" id="project_name" name="project_name"
                                            value="<?= $project['project_name'] ?>" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="project_type">Project Type</label>
                                        <select class="form-control" id="project_type" name="project_type" required>
                                            <option value="Open Plots"
                                                <?= ($project['project_type'] == 'Open Plots') ? 'selected' : '' ?>>Open
                                                Plots</option>
                                            <option value="Individual"
                                                <?= ($project['project_type'] == 'Individual') ? 'selected' : '' ?>>
                                                Individual</option>
                                            <option value="Villas"
                                                <?= ($project['project_type'] == 'Villas') ? 'selected' : '' ?>>Villas
                                            </option>
                                            <option value="Apartments"
                                                <?= ($project['project_type'] == 'Apartments') ? 'selected' : '' ?>>
                                                Apartments</option>
                                            <option value="Farmlands"
                                                <?= ($project['project_type'] == 'Farmlands') ? 'selected' : '' ?>>
                                                Farmlands
                                            </option>
                                            <option value="Others"
                                                <?= ($project['project_type'] == 'Others') ? 'selected' : '' ?>>Others
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="property_location">Property location</label>
                                        <input type="text" class="form-control" id="property_location"
                                            name="property_location" value="<?= $project['property_location'] ?>"
                                            required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="property_address">Property Address</label>
                                        <textarea class="form-control" id="property_address" name="property_address"
                                            rows="3" required><?= $project['property_address'] ?></textarea>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="city">City</label>
                                        <input type="text" class="form-control" id="city" name="city"
                                            value="<?= $project['city'] ?>" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="state">State</label>
                                        <input type="text" class="form-control" id="state" name="state"
                                            value="<?= $project['state'] ?>" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="total_units">Total Units</label>
                                        <input type="number" class="form-control" id="total_units" name="total_units"
                                            value="<?= $project['total_units'] ?>" required>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update Project</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php $this->load->view('includes/footer'); ?>