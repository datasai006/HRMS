<!-- application/views/project/index.php -->

<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/sidebar'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Projects</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Projects</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">List of Projects</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="projectsTable" class="table table-bordered table-striped">
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
                        <!-- /.card-body -->
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