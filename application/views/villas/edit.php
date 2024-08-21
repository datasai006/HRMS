<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/sidebar'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Villa</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('villas') ?>">Villas</a></li>
                        <li class="breadcrumb-item active">Edit Villa</li>
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
                            <h3 class="card-title">Edit Villa</h3>
                        </div> -->
                        <!-- form start -->
                        <form action="<?= base_url('villas/edit/'.$villa['id']) ?>" method="post">
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="project_id">Project Name</label>
                                        <select class="form-control" id="project_id" name="project_id" required>
                                            <option value="">Select Project</option>
                                            <?php foreach ($projects as $project): ?>
                                            <option value="<?= $project->project_id ?>"
                                                <?= $villa['project_id'] == $project->project_id ? 'selected' : '' ?>>
                                                <?= $project->project_name ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="plot_type">Plot Type</label>
                                        <select class="form-control" id="plot_type" name="plot_type" required>
                                            <option value="">Select Plot Type</option>
                                            <option value="residential"
                                                <?= ($villa['plot_type'] == 'residential') ? 'selected' : '' ?>>
                                                Residential</option>
                                            <option value="commercial"
                                                <?= ($villa['plot_type'] == 'commercial') ? 'selected' : '' ?>>
                                                Commercial</option>
                                            <option value="mixed_use"
                                                <?= ($villa['plot_type'] == 'mixed_use') ? 'selected' : '' ?>>Mixed
                                                Use</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="plot_number">Plot Number</label>
                                        <input type="text" class="form-control" id="plot_number" name="plot_number"
                                            value="<?= $villa['plot_number'] ?>" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="plot_size">Area Size</label>
                                        <input type="text" class="form-control" id="plot_size" name="plot_size"
                                            value="<?= $villa['plot_size'] ?>" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="area">Area (sft)</label>
                                        <input type="text" class="form-control" id="area" name="area"
                                            value="<?= $villa['area'] ?>" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="facing">Facing</label>
                                        <select class="form-control" id="facing" name="facing" required>
                                            <option value="east" <?= $villa['facing'] == 'east' ? 'selected' : '' ?>>
                                                East</option>
                                            <option value="west" <?= $villa['facing'] == 'west' ? 'selected' : '' ?>>
                                                West</option>
                                            <option value="north" <?= $villa['facing'] == 'north' ? 'selected' : '' ?>>
                                                North</option>
                                            <option value="south" <?= $villa['facing'] == 'south' ? 'selected' : '' ?>>
                                                South</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="status">Status</label>
                                        <select class="form-control" id="status" name="status" required>
                                            <option value="Available"
                                                <?= $villa['status'] == 'Available' ? 'selected' : '' ?>>Available
                                            </option>
                                            <option value="Booked"
                                                <?= $villa['status'] == 'Booked' ? 'selected' : '' ?>>Booked
                                            </option>
                                            <option value="Sold" <?= $villa['status'] == 'Sold' ? 'selected' : '' ?>>
                                                Sold
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="east_position">East Side</label>
                                        <input type="text" class="form-control" id="east_position" name="east_position"
                                            value="<?= $villa['east_position'] ?>" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="west_position">West Side</label>
                                        <input type="text" class="form-control" id="west_position" name="west_position"
                                            value="<?= $villa['west_position'] ?>" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="north_position">North Side</label>
                                        <input type="text" class="form-control" id="north_position"
                                            name="north_position" value="<?= $villa['north_position'] ?>" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="south_position">South Side</label>
                                        <input type="text" class="form-control" id="south_position"
                                            name="south_position" value="<?= $villa['south_position'] ?>" required>
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