<!-- application/views/project/view.php -->

<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/sidebar'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Project Details</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('project') ?>">Projects</a></li>
                        <li class="breadcrumb-item active">Details</li>
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
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Project Details</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <p><strong>Project ID:</strong> <?= $project['project_id'] ?></p>
                            <p><strong>Project Name:</strong> <?= $project['project_name'] ?></p>
                            <p><strong>Project Type:</strong> <?= $project['project_type'] ?></p>
                            <p><strong>Project Location:</strong> <?= $project['property_location'] ?></p>
                            <p><strong>latitude:</strong> <?= $project['latitude'] ?>, <?= $project['longitude'] ?></p>
                            <p><strong>longitude:</strong> <?= $project['longitude'] ?></p>
                            <p><strong>Property Address:</strong> <?= $project['property_address'] ?></p>
                            <p><strong>City:</strong> <?= $project['city'] ?></p>
                            <p><strong>State:</strong> <?= $project['state'] ?></p>
                            <p><strong>Total Units:</strong> <?= $project['total_units'] ?></p>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <a href="<?= base_url('project/edit/'.$project['project_id']) ?>"
                                class="btn btn-primary">Edit</a>
                            <a href="<?= base_url('project') ?>" class="btn btn-secondary">Back</a>
                        </div>
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