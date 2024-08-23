<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/sidebar'); ?>
<!-- <div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Villas</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Villas</li>
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
                            <h3 class="card-title">Villa List</h3>
                            <a href="<?= base_url('villas/create') ?>" class="btn btn-primary float-right">Add Villa</a>
                        </div>
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
                                        <td><?= $villa['id'] ?></td>
                                        <td><?= $villa['Project name'] ?></td>
                                        <td><?= $villa['plot_number'] ?></td>
                                        <td><?= $villa['plot_size'] ?></td>
                                        <td><?= $villa['area'] ?></td>
                                        <td><?= ucfirst($villa['facing']) ?></td>
                                        <td><?= ucfirst($villa['status']) ?></td>
                                        <td><?= $villa['east_position'] ?></td>
                                        <td><?= $villa['west_position'] ?></td>
                                        <td><?= $villa['north_position'] ?></td>
                                        <td><?= $villa['south_position'] ?></td>
                                        <td>
                                            <a href="<?= base_url('villas/view/'.$villa['id']) ?>"
                                                class="fa fas fa-eye"></a>

                                            <a href="<?= base_url('villas/edit/'.$villa['id']) ?>"
                                                class="fa fas fa-pen"></a>
                                            <a href="<?= base_url('villas/delete/'.$villa['id']) ?>"
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
</div> -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Villas</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Villas</li>
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
                            <h3 class="card-title">Villa List</h3>
                            <a href="<?= base_url('villas/create') ?>" class="btn btn-primary float-right">Add Villa</a>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Project Name</th>
                                        <th>Plot Number</th>
                                        <th>Plot Type</th>
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
                                        <td><?= $villa['id'] ?></td>
                                        <td><?= $villa['project_name'] ?></td> <!-- Display project name -->
                                        <td><?= $villa['plot_number'] ?></td>
                                        <td><?= $villa['plot_type'] ?></td>
                                        <td><?= $villa['plot_size'] ?></td>
                                        <td><?= $villa['area'] ?></td>
                                        <td><?= ucfirst($villa['facing']) ?></td>
                                        <td><?= ucfirst($villa['status']) ?></td>
                                        <td><?= $villa['east_position'] ?></td>
                                        <td><?= $villa['west_position'] ?></td>
                                        <td><?= $villa['north_position'] ?></td>
                                        <td><?= $villa['south_position'] ?></td>
                                        <td>
                                            <a href="<?= base_url('villas/view/'.$villa['id'].'/'.$villa['project_id']) ?>"
                                                class="fa fas fa-eye"></a>
                                            <a href="<?= base_url('villas/edit/'.$villa['id'].'/'.$villa['project_id']) ?>"
                                                class="fa fas fa-pen"></a>

                                            <a href="<?= base_url('villas/delete/'.$villa['id'].'/'.$villa['project_id']) ?>"
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
</div>

<?php $this->load->view('includes/footer'); ?>