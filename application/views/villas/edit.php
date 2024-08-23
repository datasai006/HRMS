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
                                    <!-- <?php if ($selected_project): ?>
                                    <div class="form-group col-md-4">
                                        <label for="project_name">Project Name</label>
                                        <input type="text" class="form-control" id="project_name" name="project_name"
                                            value="<?= htmlspecialchars($selected_project->project_name) ?>" readonly>
                                        <input type="hidden" id="project_id" name="project_id"
                                            value="<?= htmlspecialchars($selected_project->project_id) ?>">
                                        <input type="hidden" id="project_type" name="project_type"
                                            value="<?= htmlspecialchars($selected_project->project_type) ?>">
                                    </div>
                                    <?php else: ?> -->
                                    <div class="form-group col-md-4">
                                        <label for="project_id">Project Name</label>
                                        <select class="form-control" id="project_id" name="project_id" required>
                                            <option value="">Select Project</option>
                                            <?php foreach ($projects as $project): ?>
                                            <option value="<?= htmlspecialchars($project->project_id) ?>"
                                                data-type="<?= htmlspecialchars($project->project_type) ?>"
                                                <?= $villa['project_id'] == $project->project_id ? 'selected' : '' ?>>
                                                <?= htmlspecialchars($project->project_name) ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="plot_type">Plot Type</label>
                                        <select class="form-control" id="plot_type" name="plot_type" required>
                                            <option value="">Select Plot Type</option>
                                            <!-- Plot type options will be dynamically loaded here -->
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="plot_number">Plot Number</label>
                                        <input type="text" class="form-control" id="plot_number" name="plot_number"
                                            value="<?= htmlspecialchars($villa['plot_number']) ?>" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="plot_size">Area Size</label>
                                        <input type="text" class="form-control" id="plot_size" name="plot_size"
                                            value="<?= htmlspecialchars($villa['plot_size']) ?>" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="area">Area (sft)</label>
                                        <input type="text" class="form-control" id="area" name="area"
                                            value="<?= htmlspecialchars($villa['area']) ?>" required>
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
                                            value="<?= htmlspecialchars($villa['east_position']) ?>" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="west_position">West Side</label>
                                        <input type="text" class="form-control" id="west_position" name="west_position"
                                            value="<?= htmlspecialchars($villa['west_position']) ?>" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="north_position">North Side</label>
                                        <input type="text" class="form-control" id="north_position"
                                            name="north_position"
                                            value="<?= htmlspecialchars($villa['north_position']) ?>" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="south_position">South Side</label>
                                        <input type="text" class="form-control" id="south_position"
                                            name="south_position"
                                            value="<?= htmlspecialchars($villa['south_position']) ?>" required>
                                    </div>
                                    <?php endif; ?>
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

<script>
// document.addEventListener("DOMContentLoaded", function() {
//     var projectIdInput = document.getElementById('project_id');
//     var plotTypeSelect = document.getElementById('plot_type');

//     if (projectIdInput) {
//         var projectId = projectIdInput.value;
//         console.log('id:', projectId);
//         var projectType = document.getElementById('project_type') ? document.getElementById('project_type')
//             .value : '';
//         console.log('projectType:', projectType);
//         if (projectType) {
//             var xhr = new XMLHttpRequest();
//             xhr.open('POST', '<?= base_url('project/get_plot_typess') ?>', true);
//             xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
//             xhr.onload = function() {
//                 if (xhr.status === 200) {
//                     var plotTypes = JSON.parse(xhr.responseText);
//                     plotTypeSelect.innerHTML = '<option value="">Select Plot Type</option>';
//                     plotTypes.forEach(function(type) {
//                         var option = document.createElement('option');
//                         option.value = type.toLowerCase().replace(' ', '_');
//                         option.textContent = type;
//                         plotTypeSelect.appendChild(option);
//                     });
//                 }
//             };
//             xhr.send('project_id=' + encodeURIComponent(projectId) + '&project_type=' + encodeURIComponent(
//                 projectType));
//         }
//     }
// });

// document.addEventListener("DOMContentLoaded", function() {
//     var projectIdInput = document.getElementById('project_id');
//     var plotTypeSelect = document.getElementById('plot_type');
//     var projectTypeElement = document.getElementById('project_type');

//     console.log('Project ID Input:', projectIdInput);
//     console.log('Plot Type Select:', plotTypeSelect);
//     console.log('Project Type Element:', projectTypeElement);

//     if (projectIdInput) {
//         var projectId = projectIdInput.value;
//         console.log('ID:', projectId);
//         var projectType = projectTypeElement ? projectTypeElement.value : '';
//         console.log('Project Type:', projectType);

//         if (projectType) {
//             var xhr = new XMLHttpRequest();
//             xhr.open('POST', '<?= base_url('project/get_plot_typess') ?>', true);
//             xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
//             xhr.onload = function() {
//                 if (xhr.status === 200) {
//                     var plotTypes = JSON.parse(xhr.responseText);
//                     plotTypeSelect.innerHTML = '<option value="">Select Plot Type</option>';
//                     plotTypes.forEach(function(type) {
//                         var option = document.createElement('option');
//                         option.value = type.toLowerCase().replace(' ', '_');
//                         option.textContent = type;
//                         plotTypeSelect.appendChild(option);
//                     });
//                 }
//             };
//             xhr.send('project_id=' + encodeURIComponent(projectId) + '&project_type=' + encodeURIComponent(
//                 projectType));
//         }
//     }
// });

// document.addEventListener("DOMContentLoaded", function() {
//     var projectIdInput = document.getElementById('project_id');
//     var plotTypeSelect = document.getElementById('plot_type');

//     // Ensure the elements are available
//     if (projectIdInput && plotTypeSelect) {
//         var projectId = projectIdInput.value;
//         var projectType = projectIdInput.getAttribute('data-type'); // Get the data-type attribute

//         console.log('ID:', projectId);
//         console.log('Project Type:', projectType);

//         if (projectType) {
//             var xhr = new XMLHttpRequest();
//             xhr.open('POST', '<?= base_url('project/get_plot_typess') ?>', true);
//             xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
//             xhr.onload = function() {
//                 if (xhr.status === 200) {
//                     var plotTypes = JSON.parse(xhr.responseText);
//                     plotTypeSelect.innerHTML = '<option value="">Select Plot Type</option>';
//                     plotTypes.forEach(function(type) {
//                         var option = document.createElement('option');
//                         option.value = type.toLowerCase().replace(' ', '_');
//                         option.textContent = type;
//                         plotTypeSelect.appendChild(option);
//                     });
//                 }
//             };
//             xhr.send('project_id=' + encodeURIComponent(projectId) + '&project_type=' + encodeURIComponent(
//                 projectType));
//         }
//     }
// });

document.addEventListener("DOMContentLoaded", function() {
    var projectIdInput = document.getElementById('project_id');
    var plotTypeSelect = document.getElementById('plot_type');

    if (projectIdInput && plotTypeSelect) {
        // Function to handle project selection change
        function handleProjectChange() {
            var selectedOption = projectIdInput.options[projectIdInput.selectedIndex];
            var projectType = selectedOption.getAttribute('data-type');
            var projectId = selectedOption.value;

            console.log('Selected Project ID:', projectId);
            console.log('Selected Project Type:', projectType);

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
                xhr.send('project_id=' + encodeURIComponent(projectId) + '&project_type=' + encodeURIComponent(
                    projectType));
            }
        }

        // Attach change event listener to the project_id select element
        projectIdInput.addEventListener('change', handleProjectChange);

        // Trigger the event handler if project_id has a value on page load
        if (projectIdInput.value) {
            handleProjectChange();
        }
    }
});
</script>