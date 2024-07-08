<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/sidebar'); ?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Leads</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Leads</li>
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
                        <!-- <div class="card-header">
                            <h3 class="card-title">List of Leads</h3>
                            <a href="<?= base_url('lead/add'); ?>" class="btn btn-primary float-right">Add New Lead</a>
                        </div> -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Lead ID</th>
                                        <th>Project ID</th>
                                        <th>Lead Name</th>
                                        <th>Lead Number</th>
                                        <th>Lead Email</th>
                                        <th>Lead Interest</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($leads as $lead): ?>
                                    <tr>
                                        <td><?= $lead['lead_id'] ?></td>
                                        <td><?= $lead['project_id'] ?></td>
                                        <td><?= $lead['lead_name'] ?></td>
                                        <td><?= $lead['lead_number'] ?></td>
                                        <td><?= $lead['lead_email'] ?></td>
                                        <td><?= $lead['lead_interest'] ?></td>
                                        <td><?= $lead['status'] ?></td>
                                        <td>
                                            <a href="<?= base_url('lead/view/'.$lead['lead_id']) ?>"
                                                class="btn btn-info btn-sm">View</a>
                                            <a href="<?= base_url('lead/edit/'.$lead['lead_id']) ?>"
                                                class="btn btn-warning btn-sm">Edit</a>
                                            <a href="<?= base_url('lead/delete/'.$lead['lead_id']) ?>"
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure you want to delete this lead?')">Delete</a>
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