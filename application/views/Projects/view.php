<!-- application/views/project/edit.php -->

<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/sidebar'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>View Project</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('project') ?>">Projects</a></li>
                        <li class="breadcrumb-item active">View</li>
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
                        <!-- <div class="card-header">
                            <h3 class="card-title">Edit Project Details</h3>
                        </div> -->
                        <!-- /.card-header -->
                        <!-- form start -->

                        <div class="card-body">

                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="project_name">Project Name</label>
                                    <input type="text" class="form-control" id="project_name" name="project_name"
                                        value="<?= $project['project_name'] ?>" readonly>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="project_type">Project Type</label>
                                    <select class="form-control" id="project_type" name="project_type" readonly>
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
                                        <option value="Commercial"
                                            <?= ($project['project_type'] == 'Commercial') ? 'selected' : '' ?>>
                                            Commercial
                                        </option>
                                        <option value="Commercial"
                                            <?= ($project['project_type'] == 'Others') ? 'selected' : '' ?>>Others
                                        </option>
                                    </select>
                                </div>
                                <!-- <div class="form-group col-md-4">
                                        <label for="property_location">Property location</label>
                                        <input type="text" class="form-control" id="property_location"
                                            name="property_location" value="<?= $project['property_location'] ?>"
                                            readonly>
                                    </div> -->
                                <div class="form-group col-md-4">
                                    <label for="latitude">Latitude</label>
                                    <input type="text" class="form-control" id="latitude" name="latitude"
                                        value="<?= $project['latitude'] ?>" readonly>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="longitude">Longitude</label>
                                    <input type="text" class="form-control" id="longitude" name="longitude"
                                        value="<?= $project['longitude'] ?>" readonly>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="property_address">Property Address</label>
                                    <textarea class="form-control" id="property_address" name="property_address"
                                        rows="3" readonly><?= $project['property_address'] ?></textarea>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="city">City</label>
                                    <input type="text" class="form-control" id="city" name="city"
                                        value="<?= $project['city'] ?>" readonly>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="state">State</label>
                                    <input type="text" class="form-control" id="state" name="state"
                                        value="<?= $project['state'] ?>" readonly>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="total_units">Total Units</label>
                                    <input type="number" class="form-control" id="total_units" name="total_units"
                                        value="<?= $project['total_units'] ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <!-- <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update Project</button>
                            </div> -->

                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- <div class="card-header">
                            <h3 class="card-title">Villa List</h3>
                            <a href="<?= base_url('villas/create') ?>" class="btn btn-primary float-right">Add Villa</a>
                        </div> -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Project Name</th>
                                        <th>Plot Number</th>
                                        <th>Plot Size</th>
                                        <th>Area(sft)</th>
                                        <th>Facing</th>
                                        <th>Status</th>
                                        <th>East Side</th>
                                        <th>West Side</th>
                                        <th>North Side</th>
                                        <th>South Side</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($villas as $villa): ?>
                                    <tr>
                                        <td><?= $villa->id ?></td>
                                        <td><?= $villa->project_name ?></td> <!-- Display project name -->
                                        <td><?= $villa->plot_number ?></td>
                                        <td><?= $villa->plot_size ?></td>
                                        <td><?= $villa->area ?></td>
                                        <td><?= ucfirst($villa->facing) ?></td>
                                        <td><?= ucfirst($villa->status) ?></td>
                                        <td><?= $villa->east_position ?></td>
                                        <td><?= $villa->west_position ?></td>
                                        <td><?= $villa->north_position ?></td>
                                        <td><?= $villa->south_position ?></td>
                                        <td>
                                            <a href="<?= base_url('villas/view/'.$villa->id) ?>"
                                                class="fa fas fa-eye"></a>
                                            <a href="<?= base_url('villas/edit/'.$villa->id) ?>"
                                                class="fa fas fa-pen"></a>
                                            <a href="<?= base_url('villas/delete/'.$villa->id) ?>"
                                                class="fa fas fa-trash"
                                                onclick="return confirm('Are you sure you want to delete this villa?');"></a>
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
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php $this->load->view('includes/footer'); ?>