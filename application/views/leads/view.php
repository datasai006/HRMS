<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/sidebar'); ?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>View Lead</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item active">View Lead</li>
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
                        <div class="card-body">
                            <dl class="row">
                                <dt class="col-sm-3">Lead ID</dt>
                                <dd class="col-sm-9"><?= $lead['lead_id'] ?></dd>

                                <dt class="col-sm-3">Project ID</dt>
                                <dd class="col-sm-9"><?= $lead['project_id'] ?></dd>

                                <dt class="col-sm-3">Lead Name</dt>
                                <dd class="col-sm-9"><?= $lead['lead_name'] ?></dd>

                                <dt class="col-sm-3">Lead Number</dt>
                                <dd class="col-sm-9"><?= $lead['lead_number'] ?></dd>

                                <dt class="col-sm-3">Lead Source</dt>
                                <dd class="col-sm-9"><?= $lead['lead_source'] ?></dd>

                                <dt class="col-sm-3">Lead Email</dt>
                                <dd class="col-sm-9"><?= $lead['lead_email'] ?></dd>

                                <dt class="col-sm-3">Lead Interest</dt>
                                <dd class="col-sm-9"><?= $lead['lead_interest'] ?></dd>

                                <dt class="col-sm-3">Lead Message</dt>
                                <dd class="col-sm-9"><?= $lead['lead_message'] ?></dd>

                                <dt class="col-sm-3">Status</dt>
                                <dd class="col-sm-9"><?= $lead['status'] ?></dd>

                                <dt class="col-sm-3">Created At</dt>
                                <dd class="col-sm-9"><?= $lead['created_at'] ?></dd>
                            </dl>
                            <a href="<?= base_url('lead') ?>" class="btn btn-secondary">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php $this->load->view('includes/footer'); ?>