<!-- application/views/project/add.php -->

<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/sidebar'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Project</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('project') ?>">Projects</a></li>
                        <li class="breadcrumb-item active">Add Project</li>
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
                            <h3 class="card-title">Add Project</h3>
                        </div>
                        <!-- form start -->
                        <form action="<?= base_url('project/add') ?>" method="post">
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="project_name">Project Name</label>
                                        <input type="text" class="form-control" id="project_name" name="project_name"
                                            required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="project_type">Project Type</label>
                                        <select class="form-control" id="project_type" name="project_type" required>
                                            <option value="">Select Project Type</option>
                                            <option value="Open Plots">Open Plots</option>
                                            <option value="Individual">Individual</option>
                                            <option value="Villas">Villas</option>
                                            <option value="Apartments">Apartments</option>
                                            <option value="Farmlands">Farmlands</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="property_location">Property Location</label>
                                        <input type="text" class="form-control" id="property_location"
                                            name="property_location" required>
                                    </div>
                                    <!-- <div class="form-group col-md-4">
                                        <label for="property_location">Property Location</label>
                                        <input type="text" class="form-control" id="property_location"
                                            name="property_location" required readonly>
                                        <input type="hidden" id="property_lat" name="property_lat">
                                        <input type="hidden" id="property_lng" name="property_lng">
                                    </div> -->
                                    <!-- <div class="col-md-12">
                                        <div id="map" style="height: 400px; width: 100%;"></div>
                                    </div> -->
                                    <div class="form-group col-md-4">
                                        <label for="property_address">Property Address</label>
                                        <textarea class="form-control" id="property_address" name="property_address"
                                            rows="3" required></textarea>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="city">City</label>
                                        <input type="text" class="form-control" id="city" name="city" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="state">State</label>
                                        <input type="text" class="form-control" id="state" name="state" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="total_units">Total Units</label>
                                        <input type="number" class="form-control" id="total_units" name="total_units"
                                            required>
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
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
<script>
function initMap() {
    var defaultLocation = {
        lat: -34.397,
        lng: 150.644
    };
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 8,
        center: defaultLocation
    });

    var marker = new google.maps.Marker({
        position: defaultLocation,
        map: map,
        draggable: true
    });

    google.maps.event.addListener(marker, 'dragend', function(event) {
        document.getElementById('property_lat').value = event.latLng.lat();
        document.getElementById('property_lng').value = event.latLng.lng();
        document.getElementById('property_location').value = event.latLng.lat() + ', ' + event.latLng.lng();
    });

    map.addListener('click', function(event) {
        marker.setPosition(event.latLng);
        document.getElementById('property_lat').value = event.latLng.lat();
        document.getElementById('property_lng').value = event.latLng.lng();
        document.getElementById('property_location').value = event.latLng.lat() + ', ' + event.latLng.lng();
    });
}
</script> -->