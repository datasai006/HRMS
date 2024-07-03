<?php $this->load->view('includes/header') ?>
<?php $this->load->view('includes/sidebar') ?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>View Projects</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item active">View Projects</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="card">
            <h5 class="p-3">Projects</h5>
            <hr />
            <div class="d-flex">
                <div class="col-sm-12 col-md-6 p-3">
                    <div class="dt-buttons btn-group flex-wrap">
                        <button class="btn btn-secondary buttons-copy buttons-html5"
                            type="button"><span>Copy</span></button>
                        <button class="btn btn-secondary buttons-csv buttons-html5"
                            type="button"><span>CSV</span></button>
                        <button class="btn btn-secondary buttons-excel buttons-html5"
                            type="button"><span>Excel</span></button>
                        <button class="btn btn-secondary buttons-pdf buttons-html5"
                            type="button"><span>PDF</span></button>
                        <button class="btn btn-secondary buttons-print" type="button"><span>Print</span></button>
                        <div class="btn-group">
                            <button class="btn btn-secondary buttons-collection dropdown-toggle buttons-colvis"
                                type="button" aria-haspopup="true" aria-expanded="false"><span>Column
                                    visibility</span></button>
                        </div>
                    </div>
                </div>
                <label class="pl-5">Search:
                    <div class="form-inline">
                        <input class="form-control form-control-sm" type="search" placeholder
                            aria-controls="example1" />
                    </div>
                </label>
            </div>
        </div>
        <div class="overflow"></div>
        <div class="p-3">
            <!-- <a href="<?php echo base_url('customers/create'); ?>" class="btn btn-primary">Add New Customer</a> -->
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>Project ID</th>
                        <th>Project Name</th>
                        <th>Project Type</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Total Units</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($projects as $project): ?>
                    <tr>
                        <td><?= $project['project_id'] ?></td>
                        <td><?= $project['project_name'] ?></td>
                        <td><?= $project['project_type'] ?></td>
                        <td><?= $project['city'] ?></td>
                        <td><?= $project['state'] ?></td>
                        <td><?= $project['total_units'] ?></td>
                        <td>
                            <a href="<?= base_url('project/view/'.$project['project_id']) ?>"
                                class="btn btn-info btn-sm">View</a>
                            <a href="<?= base_url('project/edit/'.$project['project_id']) ?>"
                                class="btn btn-primary btn-sm">Edit</a>
                            <a href="<?= base_url('project/delete/'.$project['project_id']) ?>"
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure you want to delete this project?')">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>
</div>
<?php $this->load->view('includes/footer') ?>