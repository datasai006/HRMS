<!-- application/views/lead/edit.php -->

<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/sidebar'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Lead</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('lead') ?>">Leads</a></li>
                        <li class="breadcrumb-item active">Edit Lead</li>
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
                        <div class="card-header">
                            <h3 class="card-title">Edit Lead</h3>
                        </div>
                        <!-- form start -->
                        <form action="<?= base_url('lead/edit/'.$lead['lead_id']) ?>" method="post">
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="lead_name">Lead Name</label>
                                        <input type="text" class="form-control" id="lead_name" name="lead_name"
                                            value="<?= $lead['lead_name'] ?>" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="lead_number">Lead Number</label>
                                        <input type="text" class="form-control" id="lead_number" name="lead_number"
                                            value="<?= $lead['lead_number'] ?>" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="lead_source">Lead Source</label>
                                        <input type="text" class="form-control" id="lead_source" name="lead_source"
                                            value="<?= $lead['lead_source'] ?>" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="lead_email">Lead Email</label>
                                        <input type="email" class="form-control" id="lead_email" name="lead_email"
                                            value="<?= $lead['lead_email'] ?>" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="lead_interest">Lead Interest</label>
                                        <input type="text" class="form-control" id="lead_interest" name="lead_interest"
                                            value="<?= $lead['lead_interest'] ?>" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="lead_message">Lead Message</label>
                                        <textarea class="form-control" id="lead_message" name="lead_message" rows="3"
                                            required><?= $lead['lead_message'] ?></textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="status">Status</label>
                                        <select class="form-control" id="status" name="status" required>
                                            <option value="pending"
                                                <?= ($lead['status'] == 'pending') ? 'selected' : '' ?>>Pending</option>
                                            <option value="active"
                                                <?= ($lead['status'] == 'active') ? 'selected' : '' ?>>Active</option>
                                            <option value="inactive"
                                                <?= ($lead['status'] == 'inactive') ? 'selected' : '' ?>>Inactive
                                            </option>
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