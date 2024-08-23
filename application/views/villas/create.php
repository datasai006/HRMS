<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/sidebar'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add <?= $selected_project->project_type ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item"><a
                                href="<?= base_url('villas') ?>"><?= $selected_project->project_type ?></a></li>
                        <li class="breadcrumb-item active">Add <?= $selected_project->project_type ?></li>
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
                        <!-- form start -->
                        <form action="<?= base_url('villas/create') ?>" method="post">
                            <div class="card-body">
                                <div class="row">
                                    <?php if ($selected_project): ?>
                                    <div class="form-group col-md-4">
                                        <label for="project_name">Project Name</label>
                                        <input type="text" class="form-control" id="project_name" name="project_name"
                                            value="<?= $selected_project->project_name ?>" readonly>
                                        <input type="hidden" id="project_id" name="project_id"
                                            value="<?= $selected_project->project_id ?>">
                                        <input type="hidden" id="project_type" name="project_type"
                                            value="<?= $selected_project->project_type ?>">
                                    </div>
                                    <?php else: ?>
                                    <div class="form-group col-md-4">
                                        <label for="project_id">Project Name</label>
                                        <select class="form-control" id="project_id" name="project_id" required>
                                            <option value="">Select Project</option>
                                            <?php foreach($projects as $project): ?>
                                            <option value="<?= $project->project_id ?>"
                                                data-type="<?= $project->project_type ?>">
                                                <?= $project->project_name ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <?php endif; ?>

                                    <div class="form-group col-md-4">
                                        <label for="plot_type">Plot Type</label>
                                        <select class="form-control" id="plot_type" name="plot_type" required>
                                            <option value="">Select Plot Type</option>
                                        </select>
                                    </div>


                                    <div class="form-group col-md-4">
                                        <label for="plot_number">Plot Number</label>
                                        <input type="text" class="form-control" id="plot_number" name="plot_number"
                                            required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="plot_size">Plot Size</label>
                                        <input type="text" class="form-control" id="plot_size" name="plot_size"
                                            required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="area">Area (sft)</label>
                                        <input type="text" class="form-control" id="area" name="area" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="facing">Facing</label>
                                        <select class="form-control" id="facing" name="facing" required>
                                            <option value="">Select Facing</option>
                                            <option value="east">East</option>
                                            <option value="west">West</option>
                                            <option value="north">North</option>
                                            <option value="south">South</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="east_position">East Side</label>
                                        <input type="text" class="form-control" id="east_position" name="east_position"
                                            required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="west_position">West Side</label>
                                        <input type="text" class="form-control" id="west_position" name="west_position"
                                            required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="north_position">North Side</label>
                                        <input type="text" class="form-control" id="north_position"
                                            name="north_position" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="south_position">South Side</label>
                                        <input type="text" class="form-control" id="south_position"
                                            name="south_position" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="status">Status</label>
                                        <select class="form-control" id="status" name="status" required>
                                            <option value="">--Select One--</option>
                                            <option value="available">Available</option>
                                            <option value="booked">Booked</option>
                                            <option value="sold">Sold</option>
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
<!-- Ensure this script is at the bottom of your HTML or use DOMContentLoaded -->
<!-- <script>
document.addEventListener("DOMContentLoaded", function() {
    var projectIdSelect = document.getElementById('project_id');
    var villasContainer = document.getElementById('villas_container');

    if (projectIdSelect) {
        var projectId = projectIdSelect.value;
        projectIdSelect.addEventListener('change', function() {
            var projectId = this.value;

            // Fetch villas based on the selected project ID
            if (projectId) {
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '<?= base_url('Villas/get_villas_by_project') ?>', true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.onload = function() {
                    if (xhr.status === 200) {
                        console.log('200');
                        var villas = JSON.parse(xhr.responseText);
                        villasContainer.innerHTML = ''; // Clear previous villas

                        if (villas.length > 0) {
                            var table =
                                '<table class="table table-bordered"><thead><tr><th>Plot Number</th><th>Plot Size</th><th>Status</th></tr></thead><tbody>';
                            villas.forEach(function(villa) {
                                table += '<tr><td>' + villa.plot_number + '</td><td>' +
                                    villa.plot_size + '</td><td>' + villa.status +
                                    '</td></tr>';
                            });
                            table += '</tbody></table>';
                            villasContainer.innerHTML = table;
                        } else {
                            villasContainer.innerHTML = '<p>No villas found for this project.</p>';
                        }
                    }
                };
                xhr.send('project_id=' + encodeURIComponent(projectId));
            } else {
                villasContainer.innerHTML = '<p>Select a project to see villas.</p>';
            }
        });
    }
});
</script> -->

<script>
document.addEventListener("DOMContentLoaded", function() {
    var projectIdInput = document.getElementById('project_id');
    var plotTypeSelect = document.getElementById('plot_type');

    if (projectIdInput) {
        var projectId = projectIdInput.value;
        console.log(projectIdInput);
        var projectType = document.getElementById('project_type') ? document.getElementById('project_type')
            .value : '';

        if (projectType) {
            var xhr = new XMLHttpRequest();
            xhr.open('POST', '<?= base_url('project/get_plot_typess') ?>', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                if (xhr.status === 200) {
                    var plotTypes = JSON.parse(xhr.responseText);
                    plotTypeSelect.innerHTML = '<option value="">Select Plot Type</option>';
                    plotTypes.forEach(function(type) {
                        var option = document.createElement('option');
                        option.value = type.toLowerCase().replace(' ', '_');
                        option.textContent = type;
                        plotTypeSelect.appendChild(option);
                    });
                }
            };
            xhr.send('project_type=' + encodeURIComponent(projectType));
        } else {
            plotTypeSelect.innerHTML = '<option value="">Select Plot Type</option>';
        }
    } else {
        console.error('Element with id "project_id" not found.');
    }
});
</script>

<script>
document.addEventListener("DOMContentLoaded", function() {
    var projectIdSelect = document.getElementById('project_id');
    var plotTypeSelect = document.getElementById('plot_type');
    console.log(projectIdSelect);
    projectIdSelect.addEventListener('change', function() {
        var projectType = this.options[this.selectedIndex].dataset.type;

        if (projectType) {
            // Make an AJAX request to get plot types based on the selected project type
            var xhr = new XMLHttpRequest();
            xhr.open('POST', '<?= base_url('project/get_plot_types') ?>', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                if (xhr.status === 200) {
                    var plotTypes = JSON.parse(xhr.responseText);
                    plotTypeSelect.innerHTML = '<option value="">Select Plot Type</option>';
                    plotTypes.forEach(function(type) {
                        var option = document.createElement('option');
                        option.value = type.toLowerCase().replace(' ', '_');
                        option.textContent = type;
                        plotTypeSelect.appendChild(option);
                    });
                }
            };
            xhr.send('project_type=' + encodeURIComponent(projectType));
        } else {
            plotTypeSelect.innerHTML = '<option value="">Select Plot Type</option>';
        }
    });
});
</script>


<!-- < !-- < script>
    document.addEventListener("DOMContentLoaded", function() {
    var projectIdSelect = document.getElementById('project_id');
    var plotTypeSelect = document.getElementById('plot_type');
    var projectIdHidden = document.getElementById('project_id_hidden');

    // Initialize projectId with hidden input value if available
    var projectId = projectIdHidden ? projectIdHidden.value : '';

    if (projectId) {
    fetchPlotTypes(projectId);
    }

    projectIdSelect.addEventListener('change', function() {
    projectId = this.value;
    if (projectId) {
    fetchPlotTypes(projectId);
    } else {
    plotTypeSelect.innerHTML = '<option value="">Select Plot Type</option>';
    }
    });

    function fetchPlotTypes(projectId) {
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '<?= base_url('projects/get_plot_types') ?>', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
    if (xhr.status === 200) {
    try {
    var plotTypes = JSON.parse(xhr.responseText);
    plotTypeSelect.innerHTML = '<option value="">Select Plot Type</option>';
    plotTypes.forEach(function(type) {
    var option = document.createElement('option');
    option.value = type.id;
    option.textContent = type.name;
    plotTypeSelect.appendChild(option);
    });
    } catch (e) {
    console.error('Error parsing JSON response:', e);
    }
    } else {
    console.error('Failed to fetch plot types. Status:', xhr.status);
    }
    };
    xhr.send('project_id=' + encodeURIComponent(projectId));
    }
    });
    </script> -->