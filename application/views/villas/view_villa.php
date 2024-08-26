<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/sidebar'); ?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>View Plot</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('villas') ?>">Plot</a></li>
                        <li class="breadcrumb-item active">View Plot</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <!-- <div class="card-header">
                            <h3 class="card-title">Villa Details</h3>
                        </div> -->
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="plot_number">Plot Number</label>
                                    <input type="text" class="form-control" id="plot_number"
                                        value="<?= $villa['plot_number'] ?>" disabled>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="plot_size">Plot Size</label>
                                    <input type="text" class="form-control" id="plot_size"
                                        value="<?= $villa['plot_size'] ?>" disabled>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="area">Area(sft)</label>
                                    <input type="text" class="form-control" id="area" value="<?= $villa['area'] ?>"
                                        disabled>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="facing">Facing</label>
                                    <input type="text" class="form-control" id="facing"
                                        value="<?= ucfirst($villa['facing']) ?>" disabled>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="status">Status</label>
                                    <input type="text" class="form-control" id="status"
                                        value="<?= ucfirst($villa['status']) ?>" disabled>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="east_position">East Side</label>
                                    <input type="text" class="form-control" id="east_position"
                                        value="<?= $villa['east_position'] ?>" disabled>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="west_position">West Side</label>
                                    <input type="text" class="form-control" id="west_position"
                                        value="<?= $villa['west_position'] ?>" disabled>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="north_position">North Side</label>
                                    <input type="text" class="form-control" id="north_position"
                                        value="<?= $villa['north_position'] ?>" disabled>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="south_position">South Side</label>
                                    <input type="text" class="form-control" id="south_position"
                                        value="<?= $villa['south_position'] ?>" disabled>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="south_position">South Side</label>
                                    <input type="text" class="form-control" id="south_position"
                                        value="<?= $villa['south_position'] ?>" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="<?= base_url('Project') ?>" class="btn btn-primary">Back to List</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php $this->load->view('includes/footer'); ?>